<?php
if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "pxplus:menu.list",
    "",
    array(
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/services/",
        "SECTION_PAGE_URL" => "#SECTION_ID#/",
        "DETAIL_PAGE_URL" => "#ELEMENT_CODE#/",
        "IBLOCK_TYPE" => "services",
        "IBLOCK_ID" => "33",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
    )
);




$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

