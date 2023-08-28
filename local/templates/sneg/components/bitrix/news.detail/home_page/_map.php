<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<?php if (!empty($arResult['PROPERTIES']['CODE_YANDEX_WIDGET_CONTACTS']['~VALUE'])): ?>
    <section class="map">
        <div class="map__heading">
            <h2 class="map__title">
                <?= $arResult['PROPERTIES']['TITLE_CONTACTS']['~VALUE'] ?>
            </h2>
        </div>
        <div class="map__wrapper" id="contact-map">
            <div class="map__popup">
                <?= $arResult['PROPERTIES']['ADDRESS_CONTACTS']['~VALUE'] ?>
            </div>
            <?= $arResult['PROPERTIES']['CODE_YANDEX_WIDGET_CONTACTS']['~VALUE'] ?>
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
<?php endif; ?>