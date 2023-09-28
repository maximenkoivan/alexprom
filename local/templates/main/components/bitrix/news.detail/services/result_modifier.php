<?php

use classes\Models\Alpinism\Services\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */


// Получаем настройки страницы списка
$arResult['PAGE_SETTINGS'] = Settings::getInstance()->getElementByCode('settings', true);

foreach ($arResult['PROPERTIES']['TEXT']['~VALUE'] as $text) {
    if (is_array($text)) {
        $arResult['TITLES'] = $text['SUB_VALUES']['TITLE']['~VALUE'];
    }
    if (!empty($arResult['TITLES'])) break;
}
