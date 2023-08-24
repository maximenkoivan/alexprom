"use strict";

// Модалка
import MicroModal from 'micromodal';

/**
 * Плагин для модалок
 * https://github.com/Ghosh/micromodal
 * openTrigger - атрибут для открытия модалки
 * closeTrigger - атрибут для закрытия модалки
 * openClass - класс для открытой модалки
 */
class Modal {
    constructor() {
        this.$el = document.querySelectorAll('[data-custom-close]');

        this.init()
    }

    init(){
        if(!this.$el.length) return false;

        MicroModal.init({
            openTrigger: 'data-custom-open',
            closeTrigger: 'data-custom-close',
            openClass: 'is-open',
            disableScroll: true,
            disableFocus: false,
            onShow: (modal, btn) => addInputs(modal, btn), // [1]
            awaitOpenAnimation: false,
            awaitCloseAnimation: false,
            debugMode: true
        });

        function addInputs(modal, btn) {
            let form = modal.querySelector('form'),
                input = document.createElement('input'),
                type = btn.getAttribute('data-type')

            if (type) {
                input.setAttribute('name', 'type')
                input.setAttribute('hidden', 'true')
                input.setAttribute('value', `${type}`)
                form.append(input)
            }
        }
    }
}

export default Modal;

