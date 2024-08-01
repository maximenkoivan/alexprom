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
            calculatorValue: 'value',
            valueB: 'value-b',
            valueC: 'value-c',
            mainValue: 'value-main'
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
        let total = 0,
            value = 0,
            valB = 0,
            valC = 0,
            mainValue = document.querySelector('[data-value-main]').value

        this.$calculatorValue.forEach(el => {

            if (el.type === 'text') value = el.value * Number(el.getAttribute('data-value'))

            else if (el.type === 'checkbox' && el.checked) valB = Number(el.getAttribute('data-value-b')) + valB

            else if (el.type === 'radio' && el.checked) valC = Number(el.getAttribute('data-value-c'))
        })

        if(mainValue > 0) total = (value * valB) + (value * valC)

        this.$calculatorTotal.forEach(el => {
            if(el.tagName === 'INPUT') el.value = total
            if(el.tagName === 'DIV') el.innerHTML = total
        })
    }
}
export default Calculator;
