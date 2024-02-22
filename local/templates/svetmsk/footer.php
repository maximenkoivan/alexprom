<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Models\LightMsk\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
</div>
<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__container container">
            <div class="footer__copy"><?= $footer['COPYRIGHT_FOOTER']['~VALUE'] ?></div>
            <?php if (!empty($footer['TEXT_LINK_FOOTER']['~VALUE']) || !empty($footer['LINK_FOOTER']['~VALUE'])): ?>
                <div class="footer__politics">
                    <a class="link link--hover-color link--white link--small"
                       href="<?= $footer['LINK_FOOTER']['~VALUE'] ?>"
                       target="_blank"><?= $footer['TEXT_LINK_FOOTER']['~VALUE'] ?>
                    </a>
                    <span class="footer__copy footer__d-opt">Разработка сайта — <a href="https://d-option.ru/" target="_blank">Digital Option</a></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
</div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "modal",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "360000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "settings",
        "ELEMENT_ID" => "",
        "FIELD_CODE" => array("ID"),
        "GROUP_PERMISSIONS" => array("1"),
        "IBLOCK_ID" => "feedback_settings",
        "IBLOCK_TYPE" => "light_msk",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_PARAMS_NAME" => "arrPager",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("*"),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHARE_HANDLERS" => array("delicious"),
        "SHARE_HIDE" => "N",
        "SHARE_SHORTEN_URL_KEY" => "",
        "SHARE_SHORTEN_URL_LOGIN" => "",
        "SHARE_TEMPLATE" => "",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
); ?>
</body>
</html>

