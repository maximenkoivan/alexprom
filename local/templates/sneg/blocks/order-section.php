<section style="background-image: url('/local/templates/sneg/assets/images/sections/bg3.jpg');" class="order-section">
    <div class="container">
        <div data-order class="order-section__wrapper">
            <div class="order__counter">
                <div data-order-counter class="order__counter-top">
                    <span>01</span>
                    <span>/ 03</span>
                </div>
                <div class="order__counter-bottom">Шаг из</div>
            </div>
            <div class="order-section__heading">
                <h2  class="order-section__title">Рассчитайте стоимость очистки
                    <span>самостоятельно</span>
                </h2>
            </div>
            <form data-order-form action="/request/test.php" class="order-section__form order__form">
                <div class="order__title"></div>
                <div data-order-step="1" class="order__step">
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <div class="form-group__title">Тип кровли</div>
                            <select  class="nx-form-element" name="тип">
                                <option value="Скатная">Скатная</option>
                                <option value="Ровная">Ровная</option>
                            </select>
                        </div>
                        <div data-form-group class="form-group">
                            <div class="form-group__title">Объём работ</div>
                            <select  class="nx-form-element" name="объём">
                                <option value="Периметр (1,5м от края)">Периметр (1,5м от края)</option>
                                <option value="Полная очистка">Полная очистка</option>
                            </select>
                        </div>
                    </div>

                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <label class="checkbox checkbox--radio">
                                <input type="radio"
                                       class="checkbox__input"
                                       value="есть"
                                       name="ограждение"
                                        checked>
                                <span class="checkbox__text">Есть ограждение</span>
                            </label>
                        </div>
                        <div data-form-group class="form-group">
                            <label class="checkbox checkbox--radio">
                                <input type="radio"
                                       class="checkbox__input"
                                       value="нет"
                                       name="ограждение">
                                <span class="checkbox__text">Нет ограждения</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div data-order-step="2" class="order__step hidden">
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <div class="form-group__title">Тип обслуживания</div>
                            <select  class="nx-form-element" name="тип обслуживания">
                                <option value="Абонентское">Абонентское</option>
                                <option value="Разовая">Разовая очистка</option>
                            </select>
                        </div>
                        <div data-form-group class="form-group">
                            <div class="form-group__title">Объем кровли:</div>
                            <select  class="nx-form-element" name="объём">
                                <option value="Периметр (1,5м от края)">от 50 до 500 м2</option>
                                <option value="Полная очистка">от 500 до 1000 м2</option>
                                <option value="Полная очистка">от 1000 до 5000 м2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div data-order-step="3" class="order__step hidden">
                    <div class="order__step-title">Заполните форму и мы сообщим стоимость вашей очистки в ближайшее время</div>
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <label class="nx-dynamic-label" data-dynamic-label>
                                <input type="text"
                                       class="nx-dynamic-label__input nx-form-element"
                                       name="name"
                                       data-dynamic-inp>
                                <span class="nx-dynamic-label__text">Ваше имя</span>
                            </label>
                        </div>
                        <div data-form-group class="form-group">
                            <label class="nx-dynamic-label" data-dynamic-label>
                                <input type="text"
                                       class="nx-dynamic-label__input nx-form-element"
                                       name="phone"
                                       data-dynamic-inp
                                       data-phone-mask>
                                <span class="nx-dynamic-label__text">Ваш телефон</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="order__nav">
                    <a data-order-nav="next" data-nav="2" class="btn btn--primary btn--md">Следующий вопрос</a>
                    <a data-ok-title="Спасибо" data-ok-text="Мы с вами свяжемся"  data-send-request="order" class="btn btn--primary btn--md hidden">Получить расчет</a>
                </div>
                <div data-order-note class="modal__note modal__note--order hidden">Нажимая на данную кнопку, я даю согласие на обработку персональных данных и ознакомлен с <a href="#" target="_blank">Политикой конфиденциальности</a></div>
            </form>
        </div>
        <div class="order-section__text">
            В калькуляторе вы указываете тип и объем очистки, тип обслуживания и площадь вашей кровли, а взамен получаете смс с точной стоимостью квадратного метра. Через 15 минут с вами свяжется наш менеджер и ответит на вопросы. В нерабочее время мы не сможем перезвонить так быстро. Но вы всегда можете позвонить нам по телефону <a href="tel:88124248444">8 812 424 84 44</a> .
        </div>
    </div>
</section>