'use strict';
import tingle from 'tingle.js'

/**
 * Подгрузка видео
 */
class Video {
    constructor(element, options) {
        this.options = {
        };

        this.className = {
        };

        this.dataName = {
            videoLoad: 'video-load',
        };

        this.$el = element || document.querySelectorAll(`[data-${this.dataName.videoLoad}]`);

        $.extend(true, this, this, options);

        this.init();
    }

    //Method for run all class methods
    init(){
        this.bindEvents();
    }

    //Method for all events
    bindEvents(){
        this.$el.forEach(($el) => {
            $el.addEventListener('click', this.loadVideo.bind(this));
        });
    }

    /**
     * Switches active class for form search
     * @param e - event
     */
    loadVideo(e) {
        e.preventDefault();
        let $self = e.currentTarget,
            isModal = $self.hasAttribute('data-video-modal'),
            $modal = null;

        console.log($self)
        console.log(isModal)

        if(isModal) {
            let $modalEmpty = $('#modal-empty'),
                $modalContent = $modalEmpty.find('[data-modal-content]'),
                videoID =$self.getAttribute(`data-${this.dataName.videoLoad}`);
            $modalContent.html(`<iframe class="modal__video" src="https://www.youtube.com/embed/${videoID}?autoplay=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);

            // $modalEmpty.modal('show');
            // $modalEmpty.on('hidden.bs.modal', function () {
            //     $modalContent.html('');
            // });

            $modal = new tingle.modal({
                footer: false,
                stickyFooter: false,
                closeMethods: ['overlay', 'button', 'escape'],
                closeLabel: ""
            });
            $modal.setContent(`<iframe class="modal__video" src="https://www.youtube.com/embed/${videoID}?autoplay=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);
        } else {
            let $parent = $self.parentElement,
                videoID = $self.getAttribute(`data-${this.dataName.videoLoad}`),
                iframeHtml = `<iframe src="https://www.youtube.com/embed/${videoID}?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            $parent.innerHTML = '';
            $parent.insertAdjacentHTML('beforeend',iframeHtml);

        }
    }

}

export default Video;
