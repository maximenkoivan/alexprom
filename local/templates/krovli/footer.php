<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Helpers\Generic;
use classes\Models\Roofs\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
<footer class="footer">
    <div class="container footer-block">
        <?php if (!empty($footer['LOGO_FOOTER']['VALUE'])): ?>
            <a class="logo" href="<?= $footer['LOGO_FOOTER']['DESCRIPTION'] ?>">
                <img src="<?= CFile::GetPath($footer['LOGO_FOOTER']['VALUE']) ?>"
                     alt="<?= $footer['LOGO_FOOTER']['DESCRIPTION'] ?>">
            </a>
        <?php endif; ?>
        <div class="contacts">
            <div class="contacts__info">
                <?php if (!empty($footer['CONTACTS_FOOTER']['~VALUE'])): ?>
                    <div class="title foot">
                        <?= $footer['CONTACTS_FOOTER']['DESCRIPTION'] ?>
                    </div>
                    <?= $footer['CONTACTS_FOOTER']['~VALUE'] ?>
                <?php endif; ?>
            </div>
            <div class="contacts__connect">
                <?php if (!empty($footer['PHONE_HEADER']['DESCRIPTION'])): ?>
                    <a class="phone"
                       href="tel:<?= Generic::getCleanPhoneNumber($footer['PHONE_HEADER']['DESCRIPTION']) ?>">
                        <?= $footer['PHONE_HEADER']['DESCRIPTION'] ?>
                    </a>
                <?php endif; ?>
                <?php if (!empty($footer['EMAIL_HEADER']['DESCRIPTION'])): ?>
                    <a href="mailto:<?= $footer['EMAIL_HEADER']['DESCRIPTION'] ?>"
                       class="email"><?= $footer['EMAIL_HEADER']['DESCRIPTION'] ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="social">
            <div class="social__top">
                <div class="title foot">
                    соц сети:
                </div>
                <div class="social__list">
                    <?php foreach ($footer['SOCNET_FOOTER']['VALUE'] as $key => $imageId): ?>
                        <?php if (empty($footer['SOCNET_FOOTER']['DESCRIPTION'][$key]) || empty($imageId)) continue; ?>
                        <div class="item">
                            <a href="<?= $footer['SOCNET_FOOTER']['DESCRIPTION'][$key] ?>">
                                <img src="<?= CFile::GetPath($imageId) ?>"
                                     alt="<?= $footer['SOCNET_FOOTER']['DESCRIPTION'][$key] ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="corp"><?= $footer['TEXT_FOOTER']['~VALUE'] ?></div>
        </div>
        <div class="rights">
            <?= str_ireplace('#YEAR#', date('Y'), $footer['COPYRIGHT_FOOTER']['~VALUE']) ?>
        </div>
        <?php if (!empty($footer['POLICY_FOOTER']['~VALUE']) && !empty($footer['POLICY_FOOTER']['DESCRIPTION'])): ?>
            <a href="<?= $footer['POLICY_FOOTER']['~VALUE'] ?>" class="policy" target="_blank">
                <?= $footer['POLICY_FOOTER']['DESCRIPTION'] ?>
            </a>
        <?php endif; ?>
        <a href="https://d-option.ru" class="dev" target="_blank">
            Разработка сайта — Digital Option
        </a>
    </div>
</footer>
<a class="scroll-top hidden" data-scrolltop>
    <svg width="24" height="24">
        <use xlink:href="#icon-arrow-top"></use>
    </svg>
</a>
<?php if (!empty($footer['ICON_WHATSAPP_FOOTER']['VALUE'] && $footer['PHONE_WHATSAPP_FOOTER']['VALUE'])): ?>
    <a href="https://wa.me/<?= $footer['PHONE_WHATSAPP_FOOTER']['VALUE'] ?>"
       target="_blank" class="call">
        <img src="<?= CFile::GetPath($footer['ICON_WHATSAPP_FOOTER']['VALUE']) ?>" height="60" width="60"
             alt="<?= $footer['PHONE_WHATSAPP_FOOTER']['VALUE'] ?>">
    </a>
<?php endif; ?>
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
        "IBLOCK_ID" => \classes\Models\Roofs\Feedback\FormSettings::getInstance()->getIblockId(),
        "IBLOCK_TYPE" => "roofs",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_PARAMS_NAME" => "r",
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
<script defer>
    (function () {
        var ru = "ru";
        var myReviewsInit = function () {
            new window.myReviews.BlockWidget({
                uuid: "0c1e0f0d-d9ee-42f5-b967-06ba22289cb9",
                name: "g6281212",
                additionalFrame: "none",
                lang: "ru",
                widgetId: "0"
            }).init();

        };
        if (document.readyState === "loading") {
            document.addEventListener('DOMContentLoaded', function () {
                myReviewsInit()
            })
        } else {
            myReviewsInit()
        }
    })()
</script>
</body>
</html>
