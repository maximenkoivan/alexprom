'use strict';

class Calculator {
    constructor(element, options) {
        this.options = {
            total: 0
        };

        this.className = {
            hidden: 'hidden',
            error: 'error',
            send: 'send'
        };

        this.dataName = {
            calculator: 'calculator',
            calculatorTotal: 'calculator-total',
            calculatorValue: 'value'
        };

        this.$calculator = document.querySelector(`[data-${this.dataName.calculator}]`)

        if (!this.$calculator) return false;

        this.$calculatorValue = this.$calculator.querySelectorAll(`[data-${this.dataName.calculatorValue}]`)
        this.$calculatorTotal = this.$calculator.querySelectorAll(`[data-${this.dataName.calculatorTotal}]`)

        this.init();
    }

    init(){
        this.bindEvents();
    }

    bindEvents(){
        this.$calculatorValue.forEach(el => {
            el.addEventListener('input', this.calculatePrice.bind(this));
        })
    }

    calculatePrice() {
        let total = 0;

        this.$calculatorValue.forEach(el => {
            let value
            if (el.type === 'text') value = el.value * Number(el.getAttribute('data-value'))
            else if (el.type !== 'text' && el.checked) value = Number(el.getAttribute('data-value'))

            if(value) total = value + total
        })

        this.$calculatorTotal.forEach(el => {
            if(el.tagName === 'INPUT') el.value = total
            if(el.tagName === 'DIV') el.innerHTML = total
        })
    }
}
export default Calculator;
