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
$arResult['PAGE_SETTINGS'] = Settings::getInstance()->getElementByCode('settings');

// Получаем разделы
$arResult['SECTIONS'] = Projects::getInstance()->getSections();

$cp = $this->__component; // объект компонента

if (is_object($cp))
{
    $cp->arResult['PAGE_SETTINGS'] = $arResult['PAGE_SETTINGS'];
    $cp->SetResultCacheKeys(['PAGE_SETTINGS']);
}