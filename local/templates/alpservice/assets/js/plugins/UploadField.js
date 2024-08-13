'use strict';

//Загрузчик файлов

class UploadField {
    /**
     * File uploader
     * @param element - HtmlDivElement
     * @param options
     */
    constructor(element, options) {
        this.$el = element || document;

        this.className = {
            list: 'nx-files__list',
            item: 'nx-files__el',
            hidden: 'hidden',
        };

        this.dataName = {
            files: 'files',
            input: 'files-inp',
            list: 'files-list',
            item: 'files-item',
            icon: 'files-icon',
            del: 'file-del',
            name: 'name',
            accept: 'accept',
            multiple: 'multiple',
            fileSave: 'file-save',
            maxCount: 'max-count'
        };

        this.messages = {
            oldBrowser: 'Your browser is too old to support HTML5 File\'s API.',
            acceptFileTypes: 'Недопустимый формат',
            maxFileSize: 'Слишком большой файл',
            error: 'An error occurred while uploading the file, please try again',
        };

        if (element) {
            this.type = element.getAttribute(`data-${this.dataName.input}`) || 'image';
            this.inp = element;
            this.isMultiple = element.hasAttribute(`${this.dataName.multiple}`) || false;
            this.name = element.getAttribute(`data-${this.dataName.name}`) || 'files[]';
            this.acceptFileTypes = element.getAttribute(`data-${this.dataName.accept}`) || '';
            this.maxFileSize = 200; // Megabytes
            this.maxCount = element.getAttribute(`data-${this.dataName.maxCount}`) || 10;
        }

        $.extend(true, this, this, options);
        this.init(this.$el);
    }

    /**
     * Init file upload
     * @return {boolean}
     */
    init($container) {
        if (!$container) return false;

        let $inputs = $container.querySelectorAll(`[data-${this.dataName.input}]`);

        if (!$inputs) return false;

        const $delBtns = document.querySelectorAll(`[data-${this.dataName.del}]`);

        $delBtns.forEach($el => {
            this.deleteFileEvent($el);
        });

        this.events($inputs);
    }

    /**
     * Cheange event on input[type=file]
     * @param $inputs
     */
    events($inputs) {
        if (Boolean(window.File && window.FileReader && window.FileList && window.Blob)) {
            $inputs.forEach(($el) => {
                if ($el.getAttribute('listener')) return;

                $el.addEventListener('change', (e) => {
                    e.preventDefault();
                    let upload = new UploadField(e.currentTarget);
                    upload.upload();
                });

                $el.setAttribute('listener', true)
            });
        } else {
            alert(this.messages.oldBrowser);
        }
    }

    /**
     * Upload files
     */
    async upload() {
        const $filesBox = this.$el.closest(`[data-${this.dataName.files}]`);

        if ($filesBox) {
            let $filesList = $filesBox.querySelector(`[data-${this.dataName.list}]`);

            if (!$filesList) this.createElementsWrapHtml();
        }

        await this.readFiles();
    }

    async readFiles() {
        const $filesBox = this.$el.closest(`[data-${this.dataName.files}]`);
        return new Promise((resolve, reject) => {
            $(this.$el.files).each((index, file) => {
                if (this.errorHandler(file)) {
                    this.removeFile(index);
                    return;
                }

                let reader = new FileReader();
                reader.onload = async (readerEvent) => {
                    if ($filesBox.querySelectorAll('.nx-files__el').length >= this.maxCount) return;
                    resolve(readerEvent);
                    await this.showFile(readerEvent, file);
                };
                reader.readAsDataURL(file);
            });
        });
    }

    /**
     * Errors handler
     * @param file
     * @return {boolean}
     */
    errorHandler(file) {
        let regExp = new RegExp(`${this.acceptFileTypes}`, 'i'),
            size = file.size / Math.pow(1024, 2);

        if (!file.type.match(regExp)) {
            alert(`${this.messages.acceptFileTypes} ${file.name}`);
            return true;
        }

        if (this.maxFileSize < size.toFixed(2)) {
            alert(`${this.messages.maxFileSize} ${file.name}`);
            return true;
        }

        return false;
    }

    /**
     * Preview uploaded file
     * @param readerEvent
     * @param file
     */
    async showFile(readerEvent, file) {
        const $filesBox = this.$el.closest(`[data-${this.dataName.files}]`);

        if (!$filesBox) return false;

        let $filesList = $filesBox.querySelector(`[data-${this.dataName.list}]`),
            fileObject = {
                result: readerEvent.currentTarget.result,
                name: file.name,
                size: this.convertBytes(file.size),
                extension: this.getFileType(file.name),
            },
            $el = await this.createElementHtml(fileObject),
            $delBtn = $el.querySelector(`[data-${this.dataName.del}]`);

        if (this.isMultiple) {
            $filesList.insertAdjacentElement('beforeend', $el);
        } else {
            $filesList.innerHTML = '';
            $filesList.appendChild($el);
        }

        this.deleteFileEvent($delBtn);
        this.checkElemetsLength();
    }

    /**
     * Converts bytes to short file size
     * @param bytes
     * @param decimals
     * @return {string}
     */
    convertBytes(bytes, decimals = 2) {
        bytes = Number(bytes);

        let k = 1024,
            dm = decimals < 0 ? 0 : decimals,
            sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
            i = Math.floor(Math.log(bytes) / Math.log(k)),
            size = bytes / Math.pow(k, i);

        return `${size.toFixed(dm)} ${sizes[i]}`;
    }

    /**
     * Gets file extension
     * @param fileName
     * @return string
     */
    getFileType(fileName) {
        return fileName.slice((fileName.lastIndexOf('.') - 1 >>> 0) + 2);
    }

    /**
     * Files list visability
     */
    checkElemetsLength() {
        let $filesElement = this.$el.closest(`[data-${this.dataName.files}]`),
            $filesList = $filesElement.querySelector(`[data-${this.dataName.list}]`),
            $files = $filesList.querySelectorAll(`[data-${this.dataName.item}]`),
            $label = $filesElement.querySelector('.nx-files__label');

        if ($files.length) {
            $filesList.classList.remove(this.className.hidden);

            if ($files.length >= this.maxCount) {
                $label.classList.add('disabled');
            } else {
                $label.classList.remove('disabled');
            }

        } else {
            $filesList.classList.add(this.className.hidden);
        }
    }

    deleteFileEvent($el) {
        $el.addEventListener('click', async (e) => {
            e.preventDefault();
            e.stopPropagation();

            let item = e.currentTarget.closest(`[data-${this.dataName.item}]`),
                name = String(item.querySelector('input').dataset.fileName),
                indexToDelete = '';

            $(this.$el.files).each((index, file) => {
                if (String(file.name) === name) {
                    indexToDelete = index;
                    return false;
                }
            })

            this.removeFile(indexToDelete);

            item.remove();

            if (this.$el) this.checkElemetsLength();
        });
    }

    /**
     * Creates wrap for all file items HTMLDivElement
     * @return {HTMLDivElement}
     */
    createElementsWrapHtml() {
        let $wrap = document.createElement('div');

        $wrap.setAttribute(`data-${this.dataName.list}`, '');
        $wrap.className = this.className.list;

        this.$el.closest(`[data-${this.dataName.files}]`).appendChild($wrap);

        return $wrap;
    }

    /**
     * Creates file item HTMLDivElement
     * @param file
     * @return {HTMLDivElement}
     */
    async createElementHtml(file) {
        let fileHtml = '';

        let $el = document.createElement('div');
        $el.setAttribute(`data-${this.dataName.item}`, '');
        $el.className = this.className.item;

        let icon = this.$el.getAttribute(`data-${this.dataName.icon}`) || `icon-doc-dark`;

        if (!this.type) this.type = 'file';

        switch (this.type) {
            case 'file':
                fileHtml = `<div class="nx-files__link">
                                <input type="hidden" data-file-name="${file.name}" name="${this.name}" value="${file.name};${file.result}">
                                <a class="nx-files__del" data-file-del>
                                    <svg width="16" height="16">
                                        <use xlink:href="#icon-trash"></use>
                                    </svg>
                                </a> 
                                                               
                                <div class="nx-files__file-content">
                                    <span class="nx-files__title">${file.name}</span>                                    
                                </div>
                            </div>`;
                break;

            case 'image':
                fileHtml = `<div class="nx-files__link">
                                <input type="hidden" data-file-name="${file.name}" name="${this.name}" value="${file.name};${file.result}">                         
                                <div class="nx-files__image">
                                    <img src="${file.result}" alt="">
                                    </div>
                                
                                <a class="nx-files__del" data-file-del>
                                    <svg width="16" height="16">
                                        <use xlink:href="#icon-trash"></use>
                                    </svg>
                                </a>
                            </div>`;
                break;

            case 'avatar':
                fileHtml = `<div class="inner">
                                <input type="hidden" data-file-name="${file.name}" name="files[]" value="${file.name};${file.result}">
                                <img src="${file.result}">
                                
                                <a class="nx-files__del" data-file-del>
                                    <svg width="16" height="16">
                                        <use xlink:href="#icon-trash"></use>
                                    </svg>
                                </a>
                            </div>`;
                break;

            case 'file-save':
                let resp = null;

                $.nx.insertPreloader($el, false, 'content');

                try {
                    const data = {
                        fileName: file.name,
                        file: file.result,
                    };
                    resp = await this.saveFile(data);
                    resp = typeof resp === 'object' ? resp : JSON.parse(resp);
                } catch (e) {
                    resp = null;
                    console.log(e);
                    alert(this.messages.error);
                }

                $.nx.hidePreloader($el);

                if (!resp) return false;

                fileHtml = `<a href="${resp.filePath}" class="nx-files__link link" target="_blank" rel="noopener">
                                <svg class="nx-files__icon"><use xlink:href="#${icon}"></use></svg>
                                <div class="nx-files__content">
                                    <span class="nx-files__title">${file.name}</span>
                                    <div class="nx-files__type">${file.extension}, ${file.size}</div>
                                </div>
                                <div class="nx-files__del" data-file-del="${resp.id}">
                                    <i>&times;</i>
                                </div>
                            </a>`;
                break;
        }

        $el.innerHTML = fileHtml;

        return $el;
    }

    saveFile(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'POST',
                url: '/profile/file/add/',
                data: {...data},
                success: (response) => {
                    resolve(response);
                },
                error: (qXHR, textStatus, errorThrown) => {
                    console.log(textStatus);
                    reject(textStatus);
                },
            });
        });
    }

    removeFile(index) {
        const dt = new DataTransfer()
        const { files } = this.$el

        for (let i = 0; i < files.length; i++) {
            const file = files[i]
            if (index !== i)
                dt.items.add(file) // here you exclude the file. thus removing it.
        }

        this.$el.files = dt.files
    }
}

export default UploadField;