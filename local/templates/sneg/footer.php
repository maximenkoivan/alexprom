<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Helpers\Generic;
use classes\Models\Snow\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
</div>
<footer class="footer">
    <div class="footer__wrap">
        <div class="container">
            <div class="footer__container">
                <?php if (!empty($footer['LOGO_HEADER']['VALUE'])): ?>
                    <div class="header__brand">
                        <a href="<?= $footer['LINK_LOGO_HEADER']['VALUE'] ?>" class="brand">
                            <img alt="<?= CFile::GetFileArray($footer['LOGO_HEADER']['VALUE'])['ORIGINAL_NAME'] ?>"
                                 src="<?= CFile::GetPath($footer['LOGO_HEADER']['VALUE']) ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <div class="header__text">
                    <?= $footer['DESC_HEADER']['~VALUE']['TEXT'] ?>
                </div>

                <div class="spacer"></div>

                <div class="header__contacts contacts">
                    <a href="tel:<?= Generic::getCleanPhoneNumber($footer['PHONE_HEADER']['~VALUE']) ?>"
                       class="contacts__link contacts__link--phone">
                        <?= $footer['PHONE_HEADER']['~VALUE'] ?>
                    </a>
                    <a class="contacts__link" href="mailto:<?= $footer['EMAIL_HEADER']['~VALUE'] ?>">
                        <?= $footer['EMAIL_HEADER']['~VALUE'] ?>
                    </a>
                </div>
                <?php if (!empty($footer['TEXT_BTN_HEADER']['~VALUE'])): ?>
                    <div class="header__btn">
                        <a data-custom-open="modal-callback"
                           class="btn btn--primary"><?= $footer['TEXT_BTN_HEADER']['~VALUE'] ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__bottom">
                <div class="footer__copy"><?= $footer['COPYRIGHT_FOOTER']['~VALUE'] ?></div>
                <?php if (!empty($footer['TEXT_LINK_FOOTER']['~VALUE']) || !empty($footer['LINK_FOOTER']['~VALUE'])): ?>
                    <div class="footer__politics">
                        <a class="link link--hover-color link--white link--small"
                           href="<?= $footer['LINK_FOOTER']['~VALUE'] ?>"
                           target="_blank"><?= $footer['TEXT_LINK_FOOTER']['~VALUE'] ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
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
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "Y",
        "ELEMENT_CODE" => "settings",
        "ELEMENT_ID" => "",
        "FIELD_CODE" => array("ID"),
        "GROUP_PERMISSIONS" => array("1"),
        "IBLOCK_ID" => "feedback_settings",
        "IBLOCK_TYPE" => "snow",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK" => "",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "PAGER_PARAMS_NAME" => "arrPager",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("*"),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
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

<a href="https://wa.me/79995940242" target="_blank" class="call">
    <img src="/local/templates/sneg/assets/images/whatsapp.png" height="60" width="60">
</a>

</body>
</html>
