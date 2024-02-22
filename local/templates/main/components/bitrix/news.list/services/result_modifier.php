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

// Resize image
if ($arResult['ITEMS']) {
    foreach ($arResult["ITEMS"] as &$arItem) {
        if (is_array($arItem['PREVIEW_PICTURE']) && ($arImg = $arItem['PREVIEW_PICTURE'])) {
            $arItem['PREVIEW_PICTURE']['SRC'] = array_change_key_case(
                CFile::ResizeImageGet($arImg, ['width' => 600, 'height' => 300], BX_RESIZE_IMAGE_PROPORTIONAL),
                CASE_UPPER
            )['SRC'];
        }
    }
}


// Получаем настройки страницы списка
$arResult['PAGE_SETTINGS'] = Settings::getInstance()->getElementByCode('settings');

// Получаем разделы
$arResult['SECTIONS'] = Services::getInstance()->getSections();

$cp = $this->__component; // объект компонента

if (is_object($cp))
{
    $cp->arResult['PAGE_SETTINGS'] = $arResult['PAGE_SETTINGS'];
    $cp->SetResultCacheKeys(['PAGE_SETTINGS']);
}
