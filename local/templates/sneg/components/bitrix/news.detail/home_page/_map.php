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
        <div class="map__wrapper">
            <?= $arResult['PROPERTIES']['CODE_YANDEX_WIDGET_CONTACTS']['~VALUE'] ?>
        </div>
    </section>
<?php endif; ?>