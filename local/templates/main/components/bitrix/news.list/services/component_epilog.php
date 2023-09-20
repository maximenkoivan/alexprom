<?php
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */

if(!empty($arResult["PAGE_SETTINGS"])){
    $APPLICATION->SetPageProperty("title", $arResult["PAGE_SETTINGS"]["ELEMENT_META_TITLE"]);
    $APPLICATION->SetPageProperty("description", $arResult["PAGE_SETTINGS"]["ELEMENT_META_DESCRIPTION"]);
    $APPLICATION->SetPageProperty("keywords", $arResult["PAGE_SETTINGS"]["ELEMENT_META_KEYWORDS"]);
}
