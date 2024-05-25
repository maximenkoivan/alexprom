<div id="modal-order"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <a href="#"
           class="modal__close"
           aria-label="Close modal"
           data-custom-close>
            <svg data-custom-close height="30" width="30" class="call__icon">
                <use xlink:href="#icon-x"></use>
            </svg>
        </a>

        <div class="modal__container modal__container--order" role="dialog" aria-modal="true">

            <div data-order class="order">

                <header class="order__header">
                    <div class="order__text--lg"><b>Получите расчет через 10 минут</b><br>
                        по СМС, Whatsapp или Telegram<br>
                        а также забронируйте за вашим номером телефона <span>«Бесплатное дизайнерское оформление вашего объекта»</span>
                    </div>
                    <div class="order__text">Ответьте на 7 вопросов получите расчет стоимости по СМС, Whatsapp или Telegram
                        а также ПОДАРОК, бесплатное «Дизайнерское решение».</div>
                    <div data-order-counter class="order__counter">1/7</div>
                </header>

                <div class="order__progressbar">
                    <div data-order-progress class="order__progressbar--active"></div>
                </div>

                <form data-order-form class="order__form" action="/request/test.php">

                    <div data-order-select class="order__select">
                        <div data-order-step="1" class="order__step">
                            <div class="order__heading">
                                <div class="order__title">Местоположение объекта?</div>
                                <div class="order__subtitle">Выберите подходящий вариант</div>
                            </div>
                            <div data-form-group class="form-group">
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="SPb"
                                           name="place">
                                    <span class="checkbox__text">Санкт-Петербург</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="LO"
                                           name="place">

                                    <span class="checkbox__text">Ленобласть</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="SPB&LO"
                                           name="place">

                                    <span class="checkbox__text">Санкт-Петербург и Ленобласти</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="2" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title">Тип здания?</div>
                                <div class="order__subtitle">От типа здания зависит при помощи каких инструментов мы будем выполнять оформление</div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="house"
                                           name="type">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/1.jpeg" alt="">
                                    </div>
                                    <span class="checkbox__text">Жилой дом</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="commercial"
                                           name="type">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/2.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Коммерческая недвижимость</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="street"
                                           name="type">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/3.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Улица, парк территория</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="other"
                                           name="type">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/4.jpeg" alt="">
                                    </div>
                                    <span class="checkbox__text">Другое</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="3" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title">Где выполнить оформление ?</div>
                                <div class="order__subtitle">Выберите несколько вариантов при необходимости</div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <label class="checkbox checkbox--image">
                                    <input type="checkbox"
                                           class="checkbox__input"
                                           value="inside"
                                           name="where">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/1.jpeg" alt="">
                                    </div>
                                    <span class="checkbox__text">Внутри здания</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="checkbox"
                                           class="checkbox__input"
                                           value="facade"
                                           name="where">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/2.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Фасад здания</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="checkbox"
                                           class="checkbox__input"
                                           value="outside"
                                           name="where">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/3.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Территория вокруг здания</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="4" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title">Стиль оформления?</div>
                                <div class="order__subtitle">Стиль оформления один из основных факторов влияющих на цену</div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="lite"
                                           name="style">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/1.jpeg" alt="">
                                    </div>
                                    <span class="checkbox__text">Лайт</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="medium"
                                           name="style">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/2.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Медиум</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="premium"
                                           name="style">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/3.jpg" alt="">
                                    </div>
                                    <span class="checkbox__text">Премиум</span>
                                </label>
                                <label class="checkbox checkbox--image">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="lux"
                                           name="style">
                                    <div class="inner">
                                        <img src="/local/templates/svet/assets/images/order/4.jpeg" alt="">
                                    </div>
                                    <span class="checkbox__text">Люкс</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="5" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title">Вы знаете размер объекта или необходим замер?</div>
                            </div>
                            <div data-form-group class="form-group">
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="size"
                                           name="size">
                                    <span class="checkbox__text">Знаю размер объекта</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="no-size"
                                           name="size">
                                    <span class="checkbox__text">Необходим замер</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="6" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title">Когда необходим монтаж новогоднего освещения?</div>
                            </div>
                            <div data-form-group class="form-group">
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="urgently"
                                           name="date">
                                    <span class="checkbox__text">срочно (готов доплатить за срочность)</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="5days"
                                           name="date">
                                    <span class="checkbox__text">до 5 дней</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="1weeks"
                                           name="date">
                                    <span class="checkbox__text">до 1 недели</span>
                                </label>
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="2weeks"
                                           name="date">
                                    <span class="checkbox__text">до 2 недель</span>
                                </label>
                            </div>
                            <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                        </div>
                        <div data-order-step="7" class="order__step hidden">
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
                        <a data-order-nav="prev" data-nav="1" class="btn btn--grey btn--lg btn--b-r-5">
                            <svg width="18" height="15">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                            <span>Назад</span>
                        </a>
                        <a data-order-nav="next" data-nav="2" class="btn btn--primary btn--lg btn--right btn--b-r-5">
                            <span>Следующий вопрос</span>
                            <svg width="18" height="15">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                        </a>
                        <a data-send-request="order" class="btn btn--primary btn--lg btn--right btn--b-r-5 hidden">Получить расчет стоимости</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>