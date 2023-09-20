<?php

use Bitrix\Main\Diag\Debug;
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
    if(isset($text['SUB_VALUES']['TITLE']['~VALUE']) && !empty($text['SUB_VALUES']['TITLE']['~VALUE'])){
        $arResult['TITLES'] = $text['SUB_VALUES']['TITLE']['~VALUE'];
        if (!empty($arResult['TITLES'])) break;
    }
}
