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
        <h2 class="video__title">
            <?= $arResult['PROPERTIES']['TITLE_CONTACTS']['~VALUE'] ?>
        </h2>
        <div class="map__wrapper">
            <?= $arResult['PROPERTIES']['CODE_YANDEX_WIDGET_CONTACTS']['~VALUE'] ?>
        </div>
    </section>
<?php endif; ?>