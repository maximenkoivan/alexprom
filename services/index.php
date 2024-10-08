<?php

use classes\Models\Alpinism\Services\Services;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global CMain $APPLICATION
 */
$APPLICATION->SetTitle("Услуги  промышленного  альпинизма");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:news",
    "services",
    array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000004",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("", ""),
        "DETAIL_PAGER_SHOW_ALL" => "N",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("", ""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => Services::getInstance()->getIblockId(),
        "IBLOCK_TYPE" => "services",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("*", ""),
        "LIST_PROPERTY_CODE" => array("*", ""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "Y",
        "META_KEYWORDS" => "Y",
        "NEWS_COUNT" => "500",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/services/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => array("detail" => "#ELEMENT_CODE#/", "news" => "", "section" => "#SECTION_CODE#/"),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "Y",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "CREATE_DATE",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "DESC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "Y",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "N",
        "USE_SHARE" => "N"
    )
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>