<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши проекты");
?>

<div class="section-flip section-flip--light">

  <div class="section projects">
    <? $APPLICATION->IncludeComponent(
      "alexprom:projectlist.section",
      "",
      array()
    ); ?>
  </div>

  <section class="section experience">
    <div class="experience__main">
      <? $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "promoDir",
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_ELEMENT_CHAIN" => "N",
          "ADD_SECTIONS_CHAIN" => "N",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_STYLE" => "Y",
          "BROWSER_TITLE" => "-",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "N",
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "N",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "ELEMENT_CODE" => "",
          "ELEMENT_ID" => "111",
          "FIELD_CODE" => array(
            0 => "PREVIEW_TEXT",
            1 => "PREVIEW_PICTURE",
            2 => "DETAIL_TEXT",
            3 => "DETAIL_PICTURE",
            4 => "",
          ),
          "IBLOCK_ID" => "13",
          "IBLOCK_TYPE" => "service",
          "IBLOCK_URL" => "",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "MESSAGE_404" => "",
          "META_DESCRIPTION" => "-",
          "META_KEYWORDS" => "-",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_TEMPLATE" => ".default",
          "PAGER_TITLE" => "Страница",
          "PROPERTY_CODE" => array(
            0 => "VIDEO",
            1 => "TEXT1",
            2 => "TEXT2",
            3 => "TEXT3",
            4 => "TEXT4",
            5 => "PHOTOS",
            6 => "",
          ),
          "SET_BROWSER_TITLE" => "N",
          "SET_CANONICAL_URL" => "N",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "N",
          "SET_META_KEYWORDS" => "N",
          "SET_STATUS_404" => "N",
          "SET_TITLE" => "N",
          "SHOW_404" => "N",
          "STRICT_SECTION_CHECK" => "N",
          "USE_PERMISSIONS" => "N",
          "USE_SHARE" => "N",
          "COMPONENT_TEMPLATE" => "promoDir"
        ),
        false
      ); ?>
    </div>
    <div class="container">
      <div class="hero-info experience-info">
        <? $APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "teasersAbout",
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "N",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
              0 => "",
              1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "12",
            "IBLOCK_TYPE" => "service",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "3",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "46",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
              0 => "",
              1 => "ICON",
              2 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ID",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "teasersAbout"
          ),
          false
        ); ?>
      </div>
    </div>
  </section>

  <section class="section-shifter consultation">
    <? $APPLICATION->IncludeComponent(
      "bitrix:news.detail",
      "consultation",
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "113",
        "FIELD_CODE" => array(
          0 => "PREVIEW_TEXT",
          1 => "PREVIEW_PICTURE",
          2 => "DETAIL_TEXT",
          3 => "DETAIL_PICTURE",
          4 => "",
        ),
        "IBLOCK_ID" => "15",
        "IBLOCK_TYPE" => "service",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(
          0 => "FZRULES",
          1 => "BUTTONTEXT",
          2 => "FZLINK",
          3 => "",
          4 => "",
          5 => "",
          6 => "",
          7 => "",
          8 => "",
          9 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "consultation"
      ),
      false
    ); ?>
  </section>

</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>