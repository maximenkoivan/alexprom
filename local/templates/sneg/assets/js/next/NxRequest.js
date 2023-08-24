'use strict';
/**
 * Отправка формы
 */

import tingle from 'tingle.js'

class NxRequest{
    constructor(element, options) {
        this.options = {
            allowSend: true,
            timeoutModalOkShow: 450
        };

        this.className = {
            send: 'sending',
            error: 'error',
            formError: 'form-error',
            success: 'success',
            preloaderTheme: 'btn'
        };

        this.dataName = {
            btn: 'send-request',
            sendInput: 'send-input',
            agreeInp: 'agree-inp',
            numOnly: 'num-only',
            numMax: 'num-only-max',
            symbolsMax: 'symbols-max',
            symbolsLength: 'symbols-length',
            formGroup: 'form-group',
            formError: 'form-error',
        };

        this.$btn = element || document.querySelectorAll(`[data-${this.dataName.btn}]`);
        this.$sendInput = document.querySelectorAll(`[data-${this.dataName.sendInput}]`);
        this.$agreeInp = document.querySelectorAll(`[data-${this.dataName.agreeInp}]`);
        this.$disabledItems = document.querySelectorAll('.disabled, [disabled]');
        this.$numOnly = document.querySelectorAll(`[data-${this.dataName.numOnly}]`);
        this.$numMax = document.querySelectorAll(`[data-${this.dataName.numMax}]`);
        this.$symbolsMax = document.querySelectorAll(`[data-${this.dataName.symbolsMax}]`);
        this.events = ['keydown', 'keypress','keyup'];
        this.sybmolsEvents = ['keyup', 'change', 'input', 'paste'];

        this.filesList = '[data-file-list]';

        this.excludedFormItems = 'input[type="radio"], input[type="checkbox"], input[type="hidden"]';
        this.cleanedFormItems = 'input, textarea';

        this.erorrTemplate = '<div class="form-error"></div>';
        this.erorrElement = '.form-error';

        $.extend(true, this, this, options);

        this.init();
    }

    //Method for run all class methods
    init(){
        this.bindsEvent();
    }

    //Method for all events
    bindsEvent(){
        // Отправка на сервер данных из формы обратной связи и их проверка
        this.$btn.forEach((el) => {
           el.addEventListener('click', this.sendRequest.bind(this));
        });
        this.$sendInput.forEach((el) => {
            el.addEventListener('input', this.sendRequest.bind(this));
        });
        // изменение значения для сопутствующего инпута
        // check state of checkbox for send form
        this.$agreeInp.forEach((el) => {
           el.addEventListener('click', this.validateCheckbox.bind(this));
        });
        //Disabla button actions if it has disabled class or attr
        this.$disabledItems.forEach((el) => {
            el.addEventListener('click', this.disableAction.bind(this));
        });

        this.$numOnly.forEach(($el) => {
            $el.addEventListener('keydown', this.validateNumOnly.bind(this));
        });

        this.events.forEach((event) => {
            this.$numMax.forEach(($el) => {
                $el.addEventListener(event, this.validateNumMax.bind(this));
            });
        });

        this.sybmolsEvents.forEach((event) => {
            this.$symbolsMax.forEach(($el) => {
               $el.addEventListener(event, this.validateSymbolsMax.bind(this));
            });
        });
    }

    // Отправка на сервер данных из формы обратной связи и их проверка
    sendRequest(e) {
        e.preventDefault();
        let $btn = e.currentTarget,
            $form = $btn.closest('form'),
            url = $form.getAttribute('action') || '',
            altUrl = $btn.getAttribute('[data-url]'),
            type = $btn.getAttribute(`data-${this.dataName.btn}`) || $btn.getAttribute(`data-${this.dataName.sendInput}`),
            formData = new FormData($form);

        formData.append("ajax", type);

        let send = ($url) => {
            if (!this.options.allowSend) return false;
            this.preventingResend($btn, 'disallow');

            fetch($url, {
                method: 'POST',
                body: formData
            })
                .then(res => res.json())
                .then(res => {
                    this.validateForm($btn, res);
                    this.preventingResend($btn, 'allow');
                })
                .catch(err => {
                    this.preventingResend($btn, 'allow');
                    console.log(err);
                });
        }

        switch (type) {

            case 'password':
                if ($btn.value.length === 6) send(url);
                break;

            default:
                send(url);
        }
    }

    //check state of checkbox for send form
    validateCheckbox(e) {
        e.preventDefault();
        let $agreeInp = e.currentTarget,
            $agreeBox = $agreeInp.closest('form'),
            $agreeBtn = $agreeBox.querySelector('[data-agree-btn]'),
            hasHref = $.nx.matches($agreeBtn, '[href]'),
            isChecked = $agreeInp.checked,
            dataHref = $agreeBtn.getAttribute('data-save-href');

        if (!hasHref) {
            $agreeBtn.disabled = !isChecked;
        } else {
            if (isChecked ) {
                $agreeBtn.classList.remove('disabled');
                if (dataHref) $agreeBtn.setAttribute('href', dataHref);
            }else {
                $agreeBtn.classList.add('disabled');
                if (dataHref) $agreeBtn.setAttribute('href', '');
            }
        }
    }

    //Disable button actions if it has disabled class or attr
    disableAction(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    }

    //Ввод только цифр
    validateNumOnly(e){
        if(e.which !== 8 &&
            e.which !== 9 &&
            e.which !== 116 &&
            e.which !== 46 &&
            (e.which < 48 || e.which > 57) &&
            (e.which < 96 || e.which > 105) &&
            (e.which < 37 || e.which > 40)){
            e.preventDefault();
            return false;
        }
    }

    //Проверка на максимальное число
    validateNumMax(e){
        let $self = e.currentTarget,
            val = Number($self.value);
            var max = Number($self.getAttribute(`data-${this.dataName.numMax}`));

        if (val >= max) $self.value = max;
    }

    //Проверка на максимальное число
    validateSymbolsMax(e){
        let $self = e.currentTarget,
            val = $self.value,
            valLength = val.length,
            maxCount = $self.getAttribute(`data-${this.dataName.symbolsMax}`),
            $maxCountBox = $self.closest(`[data-${this.dataName.formGroup}]`).querySelector(`[data-${this.dataName.symbolsLength}]`);

        if(valLength > maxCount){
            $self.value = $self.value.substring(0, maxCount);
        } else {
            $maxCountBox.textContent = `${valLength}/${maxCount}`;
        }
    }

    // Предотвращение повторной отправки, до ответа от сервера
    preventingResend($btn, type){
        switch (type) {
            case 'disallow':
                if( $btn.classList.contains(this.className.send) ) return false;
                $btn.classList.add(this.className.send);
                $.nx.insertPreloader($btn, false, this.className.preloaderTheme);
                this.options.allowSend = false;
                break;
            case 'allow':
                $btn.classList.remove(this.className.send);
                $.nx.hidePreloader($btn);
                this.options.allowSend = true;
                break;
        }

        return this.options.allowSend;
    }

    // Получение от сервера ошибок валидации и их обработка
    validateForm($btn, response) {
        let type       = $btn.getAttribute(`data-${this.dataName.btn}`),
            $form      = $btn.closest('form'),
            $formGroup = $form.querySelectorAll(`[data-${this.dataName.formGroup}]`),
            $errorBox  = $form.querySelectorAll(this.erorrElement),
            $okTitle = $btn.getAttribute('data-ok-title'),
            $okText = $btn.getAttribute('data-ok-text'),
            $modalOk = null,
            $popupCall = null,
            $popupBtn = null,
            $modalCallback = null;

        if (typeof response !== 'object') response = $.parseJSON(response);
        $formGroup.forEach(($el) => {
           $el.classList.remove(this.className.error);
           $el.classList.add(this.className.success);
        });

        $errorBox.forEach(error => {
            error.remove();
        })

        if ( !$.nx.isEmpty(response)) {

            for (let inpName in response) {
                if (response.hasOwnProperty(inpName)) {
                    let $target = $form.querySelectorAll('input[name="' + inpName + '"], textarea[name="' + inpName + '"], select[name="' + inpName + '"]');

                    if (!$target.length) return false;

                    $target.forEach(el => {
                        let formGroup = el.closest(`[data-${this.dataName.formGroup}]`),
                            $error = document.createElement('div')
                        $error.classList.add(this.className.formError)
                        $error.innerHTML = response[inpName]
                        formGroup.classList.add(this.className.error)
                        formGroup.classList.remove(this.className.success)
                        formGroup.appendChild($error)
                    })
                }
            }
        } else {
            switch (type) {
                case 'callback':

                    $modalCallback = document.querySelector('#modal-callback')

                    $popupCall = $btn.closest('[data-popup]')

                    if ($btn.closest('.call')) $popupBtn = $btn.closest('.call').querySelector('[data-open-popup]')

                    $modalOk = new tingle.modal({
                        footer: true,
                        stickyFooter: false,
                        closeMethods: ['overlay', 'button', 'escape'],
                        closeLabel: ""
                    });
                    $modalOk.setContent(`<h3>${$okTitle}</h3><p>${$okText}</p>`);
                    $modalOk.addFooterBtn('Закрыть', 'tingle-btn', function() {
                        $modalOk.close();
                    });
                    break;

                case 'order':
                    $modalCallback = document.querySelector('#modal-order')


                    $modalOk = new tingle.modal({
                        footer: true,
                        stickyFooter: false,
                        closeMethods: ['overlay', 'button', 'escape'],
                        closeLabel: ""
                    });
                    $modalOk.setContent(`<h3>${$okTitle}</h3><p>${$okText}</p>`);
                    $modalOk.addFooterBtn('Закрыть', 'tingle-btn', function() {
                        $modalOk.close();
                    });
                    //$.order.clearForm()
                    break;

                default:
                    $modalOk = new tingle.modal({
                        closeMethods: ['overlay', 'button', 'escape'],
                        closeLabel: "",
                        cssClass: ['custom-class-1', 'custom-class-2']
                    });
                    $modalOk.setContent(`<h3>Благодарим за обращение в компанию Алекспром</h3><p>Ваша заявка взята в работу</p>`);
            }

            if ($modalOk){
                setTimeout(function() {
                    if ($modalCallback) {
                        MicroModal.close()
                        $modalCallback.classList.remove('is-open')
                    }
                    if ($popupCall) $popupCall.classList.remove('popup-open')
                    if ($popupBtn) $popupBtn.classList.remove('popup-open')
                    $modalOk.open();
                }, this.options.timeoutModalOkShow);
            }

            $form.querySelectorAll(this.filesList).forEach((el) => {
               el.innerHTML = '';
            });
            $($form).find(this.cleanedFormItems).not(this.excludedFormItems).val('');
        }
    }
}

export default NxRequest