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
    if (is_array($text)) {
        $arResult['TITLES'] = $text['SUB_VALUES']['TITLE']['~VALUE'];
    }
    if (!empty($arResult['TITLES'])) break;
}


$arResult['~DETAIL_TEXT'] = str_replace(
    '<iframe',
    '<div class="responsive-video responsive-video__inner"><iframe loading="lazy"', 
    $arResult['~DETAIL_TEXT'],
);
$arResult['~DETAIL_TEXT'] = str_replace(
    '</iframe>',
    '</iframe></div>',
    $arResult['~DETAIL_TEXT'],
);
