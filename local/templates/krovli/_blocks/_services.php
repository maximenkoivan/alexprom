<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="services-sections">
    <div class="container services">
        <div class="title big">
            Услуги по <span>ремонту и монтажу кровли:</span>
        </div>
        <div class="services__list">
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
            <div class="services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/services-bg.png" alt="">
                </div>
                <div class="info__wrap">
                    <div class="info">
                        <div class="info__title">Металлочерепица</div>
                        <div class="info__subtitle">от 350 р/м2</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services__info">
            <div class="services__info--left">
                <span>*Бесплатный выезд специалиста</span> для замера и расчетных работ (при условии дальнейшего заказа услуг монтажа/ремонта кровли. В иных случаях, стоимость <span>выезда специалиста 2000 руб.</span>
            </div>
            <div class="services__info--right">
                <button class="btn btn-blue" data-custom-open="callback" type="submit">
                    заказать услугу
                </button>
            </div>
        </div>
        <div class="title big ta-c">
            <span>Дополнительные</span> услуги
        </div>
        <div class="add-services__list">
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#confirm" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
            <div class="add-services__list--item">
                <div class="pic">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/add-services-bg.png" alt="">
                </div>
                <div class="info">
                    <div class="info__title">Герметизация кровли</div>
                    <div class="info__price">от 200 р/м2</div>
                </div>
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#feedback" type="submit">
                    заказать
                </button>
            </div>
        </div>
    </div>
</section>