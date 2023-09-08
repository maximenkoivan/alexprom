<?php

use classes\Models\Alpinism\Projects\Settings;
use classes\Models\Alpinism\Projects\Projects;

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
$arResult['SECTIONS'] = Projects::getInstance()->getSections();
array_unshift($arResult['SECTIONS'], ['NAME' => 'Все проекты']);