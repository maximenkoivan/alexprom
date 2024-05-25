/*
* ShowPopup
* Класс открывает и скрывает всплывающие окна
*/

'use strict';

class ShowPopup {
    constructor(element, options) {
        this.options = {
        };

        this.className = {
            open: 'popup-open'
        };

        this.dataName = {
            openPopup: 'open-popup',
            popup: 'popup',
            closePopup: 'close-popup'
        };

        $.extend(true, this, this, options);

        this.$openPopup = document.querySelector(`[data-${this.dataName.openPopup}]`)
        this.$popup = document.querySelector(`[data-${this.dataName.popup}]`)

        this.init();
    }

    init(){
        if (!this.$openPopup || !this.$popup) return false;
        this.bindEvents();
    }

    bindEvents(){
        this.$openPopup.addEventListener('click', this.togglePopup.bind(this));
    }

    togglePopup(e) {
        let $target = e.currentTarget
        this.$popup.classList.toggle(this.className.open);
        $target.classList.toggle(this.className.open);
    }
}
export default ShowPopup;
