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
                    <div data-order-counter class="order__counter">1/7</div>
                </header>

                <div class="order__inner">


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
                            <a data-send-request="order" data-ok-title='Спасибо за обращение в компанию ООО "Алекспром".' data-ok-text="Мы свяжемся с вами в ближайшее время" class="btn btn--primary btn--lg btn--right btn--b-r-5 hidden">Получить расчет стоимости></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="order"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <div class="modal-body">

                <div class="contact-block container">

                    <div class="contact-block__title">
                        Узнайте стоимость ремонта ответив на несколько вопросов
                    </div>
                    <div class="modal-form-wrap">
                        <div class="callback__form">
                            <form class="form-base">
                                <div class="complete">
                                    <div class="text">Выполнено</div>
                                    <div class="percent">10%</div>
                                </div>
                                <div class="progressbar">
                                    <span style="width: 30%"></span>
                                </div>

                                <div class="tab tab-1 quiz-tab active" data-tab="1">
                                    <div class="tab__title">
                                        Конструктив кровли*
                                    </div>
                                    <div class="tab__info roof">
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Односкатная</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Односкатная</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Односкатная</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Односкатная</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Односкатная</div>
                                        </div>
                                    </div>
                                    <div class="tab__buttons">
                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="2">
                                            Далее
                                        </button>
                                    </div>
                                </div>

                                <div class="tab tab-2 quiz-tab" data-tab="2">
                                    <div class="tab__title">
                                        Тип кровли*
                                    </div>
                                    <div class="tab__info roof">
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Металлочерепица</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Металлочерепица</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Металлочерепица</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Металлочерепица</div>
                                        </div>
                                        <div class="roof__item">
                                            <div class="pic">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/roof-1.png" alt="">
                                            </div>
                                            <div class="desc">Металлочерепица</div>
                                        </div>
                                    </div>
                                    <div class="tab__buttons">
                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="2">
                                            Назад
                                        </button>
                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="3">
                                            Далее
                                        </button>
                                    </div>
                                </div>

                                <div class="tab tab-3 quiz-tab" data-tab="3">
                                    <div class="get-info">
                                        <div class="get-info__left">
                                            <div class="tab__title">
                                                Что произошло?*
                                            </div>
                                            <div class="tab__info check-list">
                                                <div class="form-field">
                                                    <div class="form-check  @@modify">
                                                        <input class="form-check-input" type="checkbox" id="smoke" required>
                                                        <label class="form-check-label" for="smoke">
                                                            Протекает дымоход
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-check  @@modify">
                                                        <input class="form-check-input" type="checkbox" id="smoke" required>
                                                        <label class="form-check-label" for="smoke">
                                                            Протекает дымоход
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-check  @@modify">
                                                        <input class="form-check-input" type="checkbox" id="smoke" required>
                                                        <label class="form-check-label" for="smoke">
                                                            Протекает дымоход
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-check  @@modify">
                                                        <input class="form-check-input" type="checkbox" id="smoke" required>
                                                        <label class="form-check-label" for="smoke">
                                                            Протекает дымоход
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-check  @@modify">
                                                        <input class="form-check-input" type="checkbox" id="smoke" required>
                                                        <label class="form-check-label" for="smoke">
                                                            Протекает дымоход
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="get-info__right">
                                            <div class="tab__title">
                                                Кровельный пирог*
                                            </div>
                                            <div class="tab__info radio-list">
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke11" name="1">
                                                        <label class="form-radio-label" for="smoke11">
                                                            холодная кровля (без утеплителя)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke21" name="1">
                                                        <label class="form-radio-label" for="smoke21">
                                                            теплая кровля (кровля утеплена)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab__title">
                                                Выход на кровлю*
                                            </div>
                                            <div class="tab__info radio-list">
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke23" name="2">
                                                        <label class="form-radio-label" for="smoke23">
                                                            есть лестница
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke24" name="2">
                                                        <label class="form-radio-label" for="smoke24">
                                                            привезти свою лестницу
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="get-info__bottom">
                                            <div class="tab__title">
                                                Расстояние до объекта (от МКАД)
                                            </div>
                                            <div class="tab__info radio-list">
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke1" name="@@name">
                                                        <label class="form-radio-label" for="smoke1">
                                                            до 10 км
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-field">
                                                    <div class="form-radio">
                                                        <input class="form-radio-input" type="radio" id="smoke2" name="@@name">
                                                        <label class="form-radio-label" for="smoke2">
                                                            до 20 км
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__buttons">
                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="3">
                                            Назад
                                        </button>
                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="4">
                                            Далее
                                        </button>
                                    </div>
                                </div>

                                <div class="tab tab-4 quiz-tab" data-tab="4">
                                    <div class="tab__title">
                                        Можете загрузить фото крыши дома
                                    </div>
                                    <div class="tab__info">
                                        <div id="uploadFile_Loader" class="upload-zone">
                                            <form class="form-upload" id="uploadForm" method="post" enctype="multipart/form-data">
                                                <div class="upload-zone_dragover">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="upload-loader__image">
                                                        <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242M12 12v9"/>
                                                        <path d="m16 16-4-4-4 4"/>
                                                    </svg>
                                                    <p>Перетащите файл сюда</p>
                                                    <label class="form-upload__label" for="uploadForm_file">
                                                        <input class="form-upload__input" id="uploadForm_File" type="file" multiple="multiple" name="files[]" accept="image/*" aria-describedby="hint">
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab__buttons">
                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="4">
                                            Назад
                                        </button>
                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="5">
                                            Далее
                                        </button>
                                    </div>
                                </div>

                                <div class="tab tab-5 quiz-tab" data-tab="5">
                                    <div class="tab__title">
                                        <b>Спасибо за ответы!</b><br>
                                        Оставьте свои контактные данные и мы вышлем Вам результат.
                                    </div>
                                    <div class="tab__info">
                                        <div class="tab__info-final">
                                            <div class="form-field form-field__name">
                                                <input type="text" class="form-control " id="inputName" placeholder="Имя" required>
                                            </div>
                                            <div class="form-field form-field__phone">
                                                <input type="phone" class="form-control " id="inputName" placeholder="Телефон" required>
                                            </div>
                                            <div class="form-field form-field__email">
                                                <input type="email" class="form-control " id="inputName" placeholder="E-mail" required>
                                            </div>
                                            <div class="form-field form-field__textarea">
                                                <input type="textarea" class="form-control " id="inputName" placeholder="Можете написать нам сообщение" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab__buttons">
                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="5">
                                            Назад
                                        </button>
                                        <button class="btn btn-orange">
                                            Отправить
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                        <div class="prize">
                            <div class="text">
                                <p>Пройдите тест и получите расчет стоимости ремонта кровли на электронную почту.</p>
                                <p>После заполнения с вами свяжется наш специалист для консультации.</p>
                            </div>
                            <div class="box">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/prize.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---->
<!--<div id="calculator"-->
<!--     aria-hidden="true"-->
<!--     class="modal micromodal-slide"-->
<!--     tabindex="-1">-->
<!--    <div class="modal__overlay" tabindex="-1" data-custom-close>-->
<!--        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">-->
<!--            <div class="modal-header">-->
<!--                <a href="#"-->
<!--                   class="modal__close"-->
<!--                   aria-label="Close modal"-->
<!--                   data-custom-close>-->
<!--                    <svg data-custom-close height="30" width="30" class="call__icon">-->
<!--                        <use xlink:href="#icon-x"></use>-->
<!--                    </svg>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="contact-block container">-->
<!--                    <div class="contact-block__title">-->
<!--                        Калькулятор по ремонту кровли-->
<!--                    </div>-->
<!--                    <div class="modal-form-wrap">-->
<!--                        <div class="callback__form">-->
<!--                            <form class="form-base">-->
<!--                                <div class="tab tab-1">-->
<!--                                    <div class="tab__title">-->
<!--                                        Площадь кровли (м2)*-->
<!--                                    </div>-->
<!--                                    <div class="form-field">-->
<!--                                        <input type="text" class="form-control " id="inputName" placeholder="Укажите площадь в м2" required>-->
<!--                                    </div>-->
<!--                                    <div class="calculate-block">-->
<!--                                        <div class="tab__title">-->
<!--                                            Операции монтажа*-->
<!--                                        </div>-->
<!--                                        <div class="tab__info check-list">-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-check  @@modify">-->
<!--                                                    <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                    <label class="form-check-label" for="smoke">-->
<!--                                                        Протекает дымоход-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-check  @@modify">-->
<!--                                                    <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                    <label class="form-check-label" for="smoke">-->
<!--                                                        Протекает дымоход-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-check  @@modify">-->
<!--                                                    <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                    <label class="form-check-label" for="smoke">-->
<!--                                                        Протекает дымоход-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-check  @@modify">-->
<!--                                                    <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                    <label class="form-check-label" for="smoke">-->
<!--                                                        Протекает дымоход-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-check  @@modify">-->
<!--                                                    <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                    <label class="form-check-label" for="smoke">-->
<!--                                                        Протекает дымоход-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="calculate-block">-->
<!--                                        <div class="tab__title">-->
<!--                                            Материал кровли*-->
<!--                                        </div>-->
<!--                                        <div class="tab__info radio-list">-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke11" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke11">-->
<!--                                                        холодная кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <div class="form-radio">-->
<!--                                                    <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                    <label class="form-radio-label" for="smoke21">-->
<!--                                                        теплая кровля-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="calculate-block">-->
<!--                                        <div class="calculate-block__item">-->
<!--                                            <div class="tab__title">-->
<!--                                                Стоимость за работы:-->
<!--                                            </div>-->
<!--                                            <div class="price">-->
<!--                                                <div class="price__num">0</div>-->
<!--                                                <div class="price__cur">₽</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="calculate-block__item">-->
<!--                                            <div class="tab__title">-->
<!--                                                Телефон*-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <input type="text" class="form-control " id="inputName" placeholder="Телефон" required>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="calculate-block__item">-->
<!--                                            <div class="tab__title">-->
<!--                                                E-mail (необязательно)-->
<!--                                            </div>-->
<!--                                            <div class="form-field">-->
<!--                                                <input type="text" class="form-control " id="inputName" placeholder="Mail" required>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                            <div class="tab__buttons">-->
<!--                                <button class="btn btn-orange">-->
<!--                                    Отправить-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="prize ">-->
<!--                            <div class="box">-->
<!--                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/calculator.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="text">-->
<!--                                <div class="text__title">Ремонт кровли</div>-->
<!--                                <div class="text__title">Расчитайте стоимость работ самостоятельно или позвоните нашему специалисту<br> +7 (495) 109-02-42</div>-->
<!--                                <p>* цены в калькуляторе ориентировочные, точная стоимость будет известна после консультации с нашим специалистом</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->




<!---->
<!--<div class="modal fade callback" id="callback-old" tabindex="-1" aria-labelledby="callback" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!---->
<!--                <div class="contact-block container">-->
<!---->
<!--                    <div class="contact-block__title">-->
<!--                        Узнайте стоимость ремонта ответив на несколько вопросов-->
<!--                    </div>-->
<!--                    <div class="modal-form-wrap">-->
<!--                        <div class="callback__form">-->
<!--                            <form class="form-base">-->
<!--                                <div class="complete">-->
<!--                                    <div class="text">Выполнено</div>-->
<!--                                    <div class="percent">10%</div>-->
<!--                                </div>-->
<!--                                <div class="progressbar">-->
<!--                                    <span style="width: 30%"></span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="tab tab-1 quiz-tab active" data-tab="1">-->
<!--                                    <div class="tab__title">-->
<!--                                        Конструктив кровли*-->
<!--                                    </div>-->
<!--                                    <div class="tab__info roof">-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Односкатная</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Односкатная</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Односкатная</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Односкатная</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Односкатная</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab__buttons">-->
<!--                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="2">-->
<!--                                            Далее-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="tab tab-2 quiz-tab" data-tab="2">-->
<!--                                    <div class="tab__title">-->
<!--                                        Тип кровли*-->
<!--                                    </div>-->
<!--                                    <div class="tab__info roof">-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Металлочерепица</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Металлочерепица</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Металлочерепица</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Металлочерепица</div>-->
<!--                                        </div>-->
<!--                                        <div class="roof__item">-->
<!--                                            <div class="pic">-->
<!--                                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/roof-1.png" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="desc">Металлочерепица</div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab__buttons">-->
<!--                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="2">-->
<!--                                            Назад-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="3">-->
<!--                                            Далее-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="tab tab-3 quiz-tab" data-tab="3">-->
<!--                                    <div class="get-info">-->
<!--                                        <div class="get-info__left">-->
<!--                                            <div class="tab__title">-->
<!--                                                Что произошло?*-->
<!--                                            </div>-->
<!--                                            <div class="tab__info check-list">-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-check  @@modify">-->
<!--                                                        <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                        <label class="form-check-label" for="smoke">-->
<!--                                                            Протекает дымоход-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-check  @@modify">-->
<!--                                                        <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                        <label class="form-check-label" for="smoke">-->
<!--                                                            Протекает дымоход-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-check  @@modify">-->
<!--                                                        <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                        <label class="form-check-label" for="smoke">-->
<!--                                                            Протекает дымоход-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-check  @@modify">-->
<!--                                                        <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                        <label class="form-check-label" for="smoke">-->
<!--                                                            Протекает дымоход-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-check  @@modify">-->
<!--                                                        <input class="form-check-input" type="checkbox" id="smoke" required>-->
<!--                                                        <label class="form-check-label" for="smoke">-->
<!--                                                            Протекает дымоход-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="get-info__right">-->
<!--                                            <div class="tab__title">-->
<!--                                                Кровельный пирог*-->
<!--                                            </div>-->
<!--                                            <div class="tab__info radio-list">-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke11" name="1">-->
<!--                                                        <label class="form-radio-label" for="smoke11">-->
<!--                                                            холодная кровля (без утеплителя)-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke21" name="1">-->
<!--                                                        <label class="form-radio-label" for="smoke21">-->
<!--                                                            теплая кровля (кровля утеплена)-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="tab__title">-->
<!--                                                Выход на кровлю*-->
<!--                                            </div>-->
<!--                                            <div class="tab__info radio-list">-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke23" name="2">-->
<!--                                                        <label class="form-radio-label" for="smoke23">-->
<!--                                                            есть лестница-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke24" name="2">-->
<!--                                                        <label class="form-radio-label" for="smoke24">-->
<!--                                                            привезти свою лестницу-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="get-info__bottom">-->
<!--                                            <div class="tab__title">-->
<!--                                                Расстояние до объекта (от МКАД)-->
<!--                                            </div>-->
<!--                                            <div class="tab__info radio-list">-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke1" name="@@name">-->
<!--                                                        <label class="form-radio-label" for="smoke1">-->
<!--                                                            до 10 км-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="form-field">-->
<!--                                                    <div class="form-radio">-->
<!--                                                        <input class="form-radio-input" type="radio" id="smoke2" name="@@name">-->
<!--                                                        <label class="form-radio-label" for="smoke2">-->
<!--                                                            до 20 км-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab__buttons">-->
<!--                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="3">-->
<!--                                            Назад-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="4">-->
<!--                                            Далее-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="tab tab-4 quiz-tab" data-tab="4">-->
<!--                                    <div class="tab__title">-->
<!--                                        Можете загрузить фото крыши дома-->
<!--                                    </div>-->
<!--                                    <div class="tab__info">-->
<!--                                        <div id="uploadFile_Loader" class="upload-zone">-->
<!--                                            <form class="form-upload" id="uploadForm" method="post" enctype="multipart/form-data">-->
<!--                                                <div class="upload-zone_dragover">-->
<!--                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="upload-loader__image">-->
<!--                                                        <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242M12 12v9"/>-->
<!--                                                        <path d="m16 16-4-4-4 4"/>-->
<!--                                                    </svg>-->
<!--                                                    <p>Перетащите файл сюда</p>-->
<!--                                                    <label class="form-upload__label" for="uploadForm_file">-->
<!--                                                        <input class="form-upload__input" id="uploadForm_File" type="file" multiple="multiple" name="files[]" accept="image/*" aria-describedby="hint">-->
<!--                                                    </label>-->
<!--                                                </div>-->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab__buttons">-->
<!--                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="4">-->
<!--                                            Назад-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-orange btn-quiz btn-next" data-tab="5">-->
<!--                                            Далее-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="tab tab-5 quiz-tab" data-tab="5">-->
<!--                                    <div class="tab__title">-->
<!--                                        <b>Спасибо за ответы!</b><br>-->
<!--                                        Оставьте свои контактные данные и мы вышлем Вам результат.-->
<!--                                    </div>-->
<!--                                    <div class="tab__info">-->
<!--                                        <div class="tab__info-final">-->
<!--                                            <div class="form-field form-field__name">-->
<!--                                                <input type="text" class="form-control " id="inputName" placeholder="Имя" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-field form-field__phone">-->
<!--                                                <input type="phone" class="form-control " id="inputName" placeholder="Телефон" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-field form-field__email">-->
<!--                                                <input type="email" class="form-control " id="inputName" placeholder="E-mail" required>-->
<!--                                            </div>-->
<!--                                            <div class="form-field form-field__textarea">-->
<!--                                                <input type="textarea" class="form-control " id="inputName" placeholder="Можете написать нам сообщение" required>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="tab__buttons">-->
<!--                                        <button class="btn btn-gray btn-quiz btn-prev" data-tab="5">-->
<!--                                            Назад-->
<!--                                        </button>-->
<!--                                        <button class="btn btn-orange">-->
<!--                                            Отправить-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </form>-->
<!---->
<!--                        </div>-->
<!--                        <div class="prize">-->
<!--                            <div class="text">-->
<!--                                <p>Пройдите тест и получите расчет стоимости ремонта кровли на электронную почту.</p>-->
<!--                                <p>После заполнения с вами свяжется наш специалист для консультации.</p>-->
<!--                            </div>-->
<!--                            <div class="box">-->
<!--                                <img src="--><?php //= SITE_TEMPLATE_PATH ?><!--/local/templates/krovli/assets/images/prize.png" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<!--<div class="modal fade video-play" id="video-play" tabindex="-1" aria-labelledby="video-play" aria-hidden="true">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="contact-block container">-->
<!--                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/tAGnKpE4NCI?si=qhXJ7a8KG5gEhqUC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
