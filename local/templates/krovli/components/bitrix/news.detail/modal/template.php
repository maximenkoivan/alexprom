<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>


<div id="callback"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <header class="modal__header">
                <div class="title">
                    остались <span>вопросы?</span>
                </div>
            </header>
            <div class="form-index-block">
                <form action="/request/test.php" class="form-index col gx-5">
                    <div data-form-group class="form-group">
                        <input name="name" type="text" class="form-control" id="inputName" placeholder="Имя" required>
                    </div>
                    <div data-form-group class="form-group">
                        <input data-phone-mask name="phone" type="tel" class="form-control" id="inputPhone" placeholder="Телефон" required>
                    </div>
                    <button data-ok-title='Спасибо за обращение в компанию ООО "Алекспром".' data-ok-text="Мы свяжемся с вами в ближайшее время" class="btn btn-blue" data-send-request="callback" type="submit">
                        заказать услугу
                    </button>
                    <div class="form-group__text">
                        <p>
                            Нажимая на данную кнопку, вы даете согласие на обработку<br>
                            персональных данных подтверждаете ознакомление с<br>
                            политикой конфиденциальности
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                    <div class="order__text">Узнайте стоимость ремонта ответив на несколько вопросов</div>
                </header>

                <div class="order__container">
                    <div class="order__inner">

                        <div class="order__progress">
                            <p>Выполнено</p>
                            <div data-order-counter></div>
                        </div>

                        <div class="order__progressbar">
                            <div data-order-progress class="order__progressbar--active"></div>
                        </div>

                        <form data-order-form class="order__form" action="/request/test.php">

                            <div data-order-select class="order__select">
                                <div data-order-step="1" class="order__step">
                                    <div class="order__heading">Конструктив кровли*</div>
                                    <div data-required data-form-group class="form-group form-group--flex">
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Односкатная"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-1.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Односкатная</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Двухскатная"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-2.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Двухскатная</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Мансардная"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-3.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Мансардная</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Вальмовая"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-4.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Вальмовая</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Шатровая"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-5.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Шатровая</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Сложный конструктив"
                                                   name="constructive">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/constr-6.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Сложный конструктив</span>
                                        </label>
                                    </div>
                                    <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                                </div>
                                <div data-order-step="2" class="order__step hidden">
                                    <div class="order__heading">Тип кровли*</div>
                                    <div data-form-group data-required class="form-group form-group--flex">
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Металлочерепица"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-1.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Металлочерепица</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Гибкая черепица"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-2.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Гибкая черепица</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Профнастил"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-3.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Профнастил</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Фальцевая кровля"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-4.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Фальцевая кровля</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Наплавляемая кровля"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-5.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Наплавляемая кровля</span>
                                        </label>
                                        <label class="checkbox checkbox--image">
                                            <input type="radio"
                                                   class="checkbox__input"
                                                   value="Натуральная черепица"
                                                   name="type">
                                            <div class="inner">
                                                <img src="/local/templates/krovli/assets/images/order/type-6.png" alt="">
                                            </div>
                                            <span class="checkbox__text">Натуральная черепица</span>
                                        </label>
                                    </div>
                                    <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                                </div>
                                <div data-order-step="3" class="order__step hidden">
                                    <div class="form-group" data-form-group>
                                        <div class="flex-row mb-20">
                                            <div class="flex-col sm-12">
                                                <div class="order__heading">Что произошло?*</div>
                                                <div class="form-group">
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Протекает дымоход"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Протекает дымоход</span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Протекает ендова"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Протекает ендова</span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Протекает мансардное окно"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Протекает мансардное окно</span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Сломан водосток"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Сломан водосток</span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Сломан снегозадержатель"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Сломан снегозадержатель</span>
                                                    </label>
                                                    <label class="checkbox">
                                                        <input type="checkbox"
                                                               class="checkbox__input"
                                                               value="Другое"
                                                               name="Что произошло">
                                                        <span class="checkbox__text">Другое</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex-col sm-12">
                                                <div class="order__heading">Кровельный пирог*</div>
                                                <div class="form-group">
                                                    <label class="checkbox checkbox--radio">
                                                        <input type="radio"
                                                               class="checkbox__input"
                                                               value="холодная кровля (без утеплителя)"
                                                               name="Кровельный пирог">
                                                        <span class="checkbox__text">холодная кровля (без утеплителя)</span>
                                                    </label>
                                                    <label class="checkbox checkbox--radio">
                                                        <input type="radio"
                                                               class="checkbox__input"
                                                               value="теплая кровля (кровля утеплена)"
                                                               name="Кровельный пирог">
                                                        <span class="checkbox__text">теплая кровля (кровля утеплена)</span>
                                                    </label>
                                                </div>
                                                <div class="order__heading">Выход на кровлю*</div>
                                                <div class="form-group">
                                                    <label class="checkbox checkbox--radio">
                                                        <input type="radio"
                                                               class="checkbox__input"
                                                               value="есть лестница"
                                                               name="Выход на кровлю">
                                                        <span class="checkbox__text">есть лестница</span>
                                                    </label>
                                                    <label class="checkbox checkbox--radio">
                                                        <input type="radio"
                                                               class="checkbox__input"
                                                               value="привезти свою лестницу"
                                                               name="Выход на кровлю">
                                                        <span class="checkbox__text">привезти свою лестницу</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order__heading">Расстояние до объекта (от МКАД)</div>
                                        <div class="form-group d-flex g-20">
                                            <label class="checkbox checkbox--radio">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="до 10 км"
                                                       name="Расстояние до объекта (от МКАД)">
                                                <span class="checkbox__text">до 10 км</span>
                                            </label>
                                            <label class="checkbox checkbox--radio">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="до 20 км"
                                                       name="Расстояние до объекта (от МКАД)">
                                                <span class="checkbox__text">до 20 км</span>
                                            </label>
                                            <label class="checkbox checkbox--radio">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="до 30 км"
                                                       name="Расстояние до объекта (от МКАД)">
                                                <span class="checkbox__text">до 30 км</span>
                                            </label>
                                            <label class="checkbox checkbox--radio">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="более 30 км"
                                                       name="Расстояние до объекта (от МКАД)">
                                                <span class="checkbox__text">более 30 км</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                                </div>
                                <div data-order-step="4" class="order__step hidden">
                                    <div class="order__heading">Можете загрузить фото крыши дома</div>
                                    <div data-form-group class="form-group form-group--flex">
                                        <div class="nx-files nx-files_upload" data-files>
                                            <label class="nx-files__item">
                                                <svg class="nx-files__icon"><use xlink:href="#icon-upload"></use></svg>
                                                <span class="nx-files__content">
                                                    <span class="nx-files__title">Перетащите файлы сюда</span>
                                                </span>
                                                <input type="file"
                                                       class="hidden"
                                                       data-files-inp="file"
                                                       data-accept="jpg|png|gif|pdf|xlsx|doc|txt"
                                                       data-name="files[]">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order__error">Пожалуйста, заполните все обязательные поля</div>
                                </div>
                                <div data-order-step="5" class="order__step hidden">
                                    <div class="order__heading mb-30">
                                        <b>Спасибо за ответы!</b>
                                        Оставьте свои контактные данные и мы вышлем Вам результат.
                                    </div>
                                    <div data-form-group class="form-group">
                                        <div class="flex-row">
                                            <div class="flex-col md-12">
                                                <div data-form-group class="form-group">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Имя">
                                                </div>
                                            </div>
                                            <div class="flex-col md-12">
                                                <div data-form-group class="form-group">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="phone"
                                                           placeholder="Телефон"
                                                           data-phone-mask>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-form-group class="form-group">
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="Email"
                                                   name="email">
                                        </div>
                                        <div data-form-group class="form-group">
                                            <textarea type="text"
                                                      class="form-control"
                                                      placeholder="Можете написать нам сообщение"
                                                      name="text"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="order__nav g-20">
                                <a data-order-nav="prev" data-nav="1" class="btn btn-gray d-xl-block">
                                    <span>Назад</span>
                                </a>
                                <a data-order-nav="next" data-nav="2" class="btn btn-orange d-xl-block">
                                    <span>Следующий вопрос</span>
                                </a>
                                <a data-send-request="order" data-ok-title='Ваши данные успешно отправлены!' class="btn btn-orange d-xl-block hidden">Отправить</a>
                            </div>
                        </form>
                    </div>

                    <div class="order__gift">
                        <p>
                            Пройдите тест и получите расчет стоимости ремонта кровли на электронную почту.
                        </p>
                        <b>
                            После заполнения с вами свяжется наш специалист для консультации.
                        </b>
                        <div class="order__gift-img">
                            <img src="/local/templates/krovli/assets/images/prize.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="calculator"
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
                    <div class="order__text">Калькулятор по ремонту кровли</div>
                </header>

                <div class="order__container">
                    <div class="order__inner order__inner--calculator">
                        <div class="modal-body">
                            <div class="contact-block">
                                <div class="modal-form-wrap">
                                    <div class="callback__form">
                                        <form action="/request/test.php" data-calculator class="form-base">
                                            <div class="tab">
                                                <div class="tab__title">
                                                    Площадь кровли (м2)*
                                                </div>
                                                <div class="form-field mb-30">
                                                    <input data-num-only data-value="10" type="text" class="form-control " id="inputName" placeholder="Укажите площадь в м2">
                                                </div>
                                                <div class="calculate-block mb-30">
                                                    <div class="tab__title">
                                                        Операции монтажа*
                                                    </div>
                                                    <div class="flex-row">
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="20" data-calculator-check class="form-check-input" name="operation" value="Стропильная система" type="checkbox">
                                                                        Стропильная система
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="60" data-calculator-check class="form-check-input" name="operation" value="Пароизоляция" type="checkbox">
                                                                        Пароизоляция
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="40" data-calculator-check class="form-check-input" name="operation" value="Утепление" type="checkbox">
                                                                        Утепление
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="10" data-calculator-check class="form-check-input" name="operation" value="Гидроизоляция" type="checkbox">
                                                                        Гидроизоляция
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="20" data-calculator-check class="form-check-input" name="operation" value="Контробрешетка" type="checkbox">
                                                                        Контробрешетка
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="20" data-calculator-check class="form-check-input" name="operation" value="Шаговая обрешетка" type="checkbox">
                                                                        Шаговая обрешетка
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="20" data-calculator-check class="form-check-input" name="operation" value="Подшивка" type="checkbox">
                                                                        Подшивка
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="100" data-calculator-check class="form-check-input" name="operation" value="Водосточка" type="checkbox">
                                                                        Водосточка
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input data-value="20" data-calculator-check class="form-check-input" name="operation" value="Снегозадержатели" type="checkbox">
                                                                        Снегозадержатели
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="calculate-block mb-30">
                                                    <div class="tab__title">
                                                        Материал кровли*
                                                    </div>

                                                    <div class="flex-row">
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="20" data-calculator-radio class="form-radio-input" name="material" value="Ондулин" type="radio">
                                                                        Ондулин
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="200" data-calculator-radio class="form-radio-input" name="material" value="Профнастил" type="radio">
                                                                        Профнастил
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="60" data-calculator-radio class="form-radio-input" name="material" value="Наплавляемая" type="radio">
                                                                        Наплавляемая
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="50" data-calculator-radio class="form-radio-input" name="material" value="Металлочерепица" type="radio">
                                                                        Металлочерепица
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-col md-8">
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="100" data-calculator-radio class="form-radio-input" name="material" value="Битумная черепица" type="radio">
                                                                        Битумная черепица
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-field">
                                                                <div class="form-radio">
                                                                    <label class="form-radio-label">
                                                                        <input data-value="120" data-calculator-radio class="form-radio-input" name="material" value="Фальцевая" type="radio">
                                                                        Фальцевая
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-row mb-30">
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            Стоимость за работы:
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            Телефон*
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            E-mail (необязательно)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-row">
                                                    <div class="flex-col md-8">
                                                        <div class="price">
                                                            <div data-calculator-total class="price__num">0</div>
                                                            <div class="price__cur">₽</div>
                                                            <input data-calculator-total name="price" type="text" class="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="form-field">
                                                            <input type="text" data-phone-mask name="phone" class="form-control " id="inputName" placeholder="Телефон">
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="form-field">
                                                            <input type="text" class="form-control"  name="name" placeholder="Mail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab__buttons">
                                                <button data-send-request="calculator" class="btn btn-orange">
                                                    Отправить
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order__gift">
                        <div class="order__gift-img">
                            <img src="/local/templates/krovli/assets/images/order/house.png" alt="">
                        </div>
                        <b>Ремонт кровли</b>
                        <b>Рассчитайте стоимость работ самостоятельно или позвоните нашему специалисту
                            <a href="tel:84951090242">+7 (495) 109-02-42</a>
                        </b>
                        <p>* цены в калькуляторе ориентировочные, точная стоимость будет известна после консультации с нашим специалистом</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>