<?php

use classes\Models\Alpinism\Services\Settings;
use classes\Models\Alpinism\Services\Services;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */


// Получаем настройки страницы списка
$arResult['PAGE_SETTINGS'] = Settings::getInstance()->getElementByCode('settings', true);

// Получаем разделы
$arResult['SECTIONS'] = Services::getInstance()->getSections();
