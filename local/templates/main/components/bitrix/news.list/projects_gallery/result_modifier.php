<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

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