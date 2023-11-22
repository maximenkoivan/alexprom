<?php

use classes\Models\Alpinism\Projects\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */


// Получаем настройки страницы списка
$arResult['PAGE_SETTINGS'] = Settings::getInstance()->getElementByCode('settings', true);

$arResult['~DETAIL_TEXT'] = str_replace(
    '<iframe',
    '<div class="responsive-video responsive-video__inner"><iframe',
    $arResult['~DETAIL_TEXT'],
);
$arResult['~DETAIL_TEXT'] = str_replace(
    '</iframe>',
    '</iframe></div>',
    $arResult['~DETAIL_TEXT'],
);