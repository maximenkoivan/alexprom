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
<section class="sections-contact">
    <div class="title big ta-c">
        контакты
    </div>
    <div class="map-wrap">
        <div class="address-tab">
            <div class="logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/logo.svg" alt="">
            </div>
            <div class="info">Москва, <span>ул. Бойцовая, д.22</span>, этаж 2, пом.V, комн.9, офис 4 г</div>
            <div class="email">
                <div class="ellipse-icon">
                    <div class="ellipse-icon__pic">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/email.svg" alt="email-icon">
                    </div>
                </div>
                zakaz@alexprom.ru
            </div>
            <div class="phone">
                <div class="ellipse-icon">
                    <div class="ellipse-icon__pic">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/phone.svg" alt="phone-icon">
                    </div>
                </div>
                <a class="" href="tel:+7 (495) 109-02-42">+7 (495) 109-02-42</a>
            </div>
        </div>

        <div class="map-wrap__inner" id="contact-map" style="position:relative;overflow:hidden;">
            <iframe src="https://yandex.by/map-widget/v1/?ll=37.720023%2C55.808519&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1Njc2NDY5NhI70KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAsINCR0L7QudGG0L7QstCw0Y8g0YPQu9C40YbQsCwgMjIiCg3l5RZCFQtDX0I%2C&source=serp_navig&z=14.26"  frameborder="0" allowfullscreen="true"></iframe>
            <script>
                document.addEventListener('click', function (e) {
                    let map = document.querySelector('#contact-map iframe')
                    if (e.target.id === 'contact-map') {
                        map.style.pointerEvents = 'all'
                    } else {
                        map.style.pointerEvents = 'none'
                    }
                })
            </script>
    </div>
</section>