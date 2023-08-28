'use strict';
/**
 * Скролл наверх
 */
class ScrollTop {
    constructor() {

        this.dataName = {
            scrollTopBtn: 'scrolltop'
        };

        this.scrollTopBtn = document.querySelector(`[data-${this.dataName.scrollTopBtn}]`);
        this.footer = document.querySelector(`.footer`);

        this.events = ['DOMContentLoaded', 'scroll', 'resize']

        this.init();
    }

    //Method for run all class methods
    init(){
        this.bindEvents();
    }

    //Method for all events
    bindEvents(){
        if (!this.scrollTopBtn) return false;

        this.scrollTopBtn.addEventListener('click', $.nx.scrollTop.bind(this));

        this.events.forEach(evt => {
            window.addEventListener(evt, this.showScrollBtn.bind(this))
        })
    }
    showScrollBtn(e) {

        if (window.pageYOffset >= 600) {
            this.scrollTopBtn.classList.remove('hidden');

            if (window.pageYOffset + document.documentElement.clientHeight >= this.footer.getBoundingClientRect().top + window.scrollY) {
                this.scrollTopBtn.classList.add('absolute');
            } else {
                this.scrollTopBtn.classList.remove('absolute');
            }
        } else {
            this.scrollTopBtn.classList.add('hidden');
        }
    }
}
export default ScrollTop;