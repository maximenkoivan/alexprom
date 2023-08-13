'use strict';

class Order {
    constructor(element, options) {
        this.options = {
        };

        this.className = {
            hidden: 'hidden',
            error: 'error',
            send: 'send'
        };

        this.dataName = {
            order: 'order',
            orderCounter: 'order-counter',
            orderProgress: 'order-progress',
            orderForm: 'order-form',
            orderSelect: 'order-select',
            orderStep: 'order-step',
            orderNav: 'order-nav',
            nav: 'nav',
            formGroup: 'form-group ',
            sendBtn: 'send-request'
        };

        $.extend(true, this, this, options);

        this.$order = document.querySelector(`[data-${this.dataName.order}]`)

        if (!this.$order) return false;

        this.$orderCounter = this.$order.querySelector(`[data-${this.dataName.orderCounter}]`)
        this.$orderProgress = this.$order.querySelector(`[data-${this.dataName.orderProgress}]`)
        this.$orderStep = this.$order.querySelectorAll(`[data-${this.dataName.orderStep}]`)
        this.$orderNav = this.$order.querySelectorAll(`[data-${this.dataName.orderNav}]`)
        this.$orderPrev = this.$order.querySelector(`[data-${this.dataName.orderNav}="prev"]`)
        this.$orderNext = this.$order.querySelector(`[data-${this.dataName.orderNav}="next"]`)
        this.$sendBtn = this.$order.querySelector(`[data-${this.dataName.sendBtn}`)

        this.init();
    }

    init(){
        this.bindEvents();
    }

    bindEvents(){
        this.$orderNav.forEach(btn => {
            btn.addEventListener('click', this.validateField.bind(this));
        })
    }

    changeStep(step) {

        this.$orderStep.forEach(el => {
            el.classList.add(this.className.hidden)
        })

        this.$orderStep.forEach(el => {
            let num = el.getAttribute(`data-${this.dataName.orderStep}`)
            if(num === step) el.classList.remove(this.className.hidden)
        })

        this.updateProgress(step)
    }

    updateProgress(step) {
        let amt = this.$orderStep.length,
            currentStep = step,
            progress = (currentStep * 100) / amt

        this.$orderProgress.style.width = `${progress}%`
        this.$orderCounter.innerHTML = `${currentStep}/${amt}`

        if (currentStep < amt) this.$orderNext.setAttribute(`data-nav`, Number(step) + 1)
        if (currentStep > 1) this.$orderPrev.setAttribute(`data-nav`, Number(step) - 1)


        if (currentStep != amt) {
            this.$order.classList.remove(this.className.send)
            this.$orderNext.classList.remove(this.className.hidden)
            this.$sendBtn.classList.add(this.className.hidden)
        } else {
            this.$order.classList.add(this.className.send)
            this.$orderNext.classList.add(this.className.hidden)
            this.$sendBtn.classList.remove(this.className.hidden)
        }
    }

    validateField(e) {
        let $target = e.currentTarget,
            type = $target.getAttribute(`data-${this.dataName.orderNav}`),
            step = $target.getAttribute(`data-${this.dataName.nav}`),
            currentField

        switch (type) {
            case 'next':
                currentField = this.$order.querySelector(`[data-${this.dataName.orderStep}='${Number(step) - 1}']`)
                let formGroup = currentField.querySelector(`[data-${this.dataName.formGroup}]`),
                    inputs = formGroup.querySelectorAll('input'),
                    checked = 0

                inputs.forEach(input => {
                    if (input.checked) checked++
                })

                if (checked === 0) {
                    formGroup.classList.add(this.className.error)
                } else {
                    formGroup.classList.remove(this.className.error)
                    this.changeStep(step)
                }
                break

            case 'prev':
                currentField = this.$order.querySelector(`[data-${this.dataName.orderStep}='${Number(step) + 1}']`)
                this.changeStep(step)
                break
        }
    }
}
export default Order;
