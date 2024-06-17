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
<section class="calculate-sections">
    <div class="block-ellipse">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/build/img/block-ellipse.png" alt="">
    </div>
    <div class="container">
        <div class="calculate">
            <div class="title big">
                Рассчитайте самостоятельно<br><span>ремонт кровли</span> крыши
            </div>
            <div class="calculate__info">
                в наших калькуляторах — <span>это интересно и бесплатно</span>
            </div>
            <div class="calculate__pic">
                <img class="desktop" src="<?= SITE_TEMPLATE_PATH ?>/assets/build/img/tablet.png" alt="">
                <img class="tablet" src="<?= SITE_TEMPLATE_PATH ?>/assets/build/img/tablet-tablet.png" alt="">
                <img class="mobile" src="<?= SITE_TEMPLATE_PATH ?>/assets/build/img/tablet-mobile.png" alt="">
            </div>
            <div class="calculate__buttons">
                <button class="btn btn-blue" data-bs-toggle="modal" data-bs-target="#" type="submit">
                    Получить бесплатный расчет
                </button>
                <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#" type="submit">
                    Самостоятельно<br> рассчитать ремонт кровли
                </button>
            </div>
        </div>
    </div>
</section>