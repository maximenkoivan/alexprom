<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Helpers\Generic;
use classes\Models\Snow\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
<a class="scroll-top hidden" data-scrolltop>
    <svg width="16" height="8">
        <use xlink:href="#icon-arrow-top"></use>
    </svg>
    <span>Наверх</span>
</a>
</div>
<footer class="footer">
    <div class="footer__wrap">
        <div class="container">
            <div class="footer__container">
                <?php if (!empty($footer['LOGO_FOOTER']['VALUE'])): ?>
                    <div class="header__brand">
                        <a href="<?= $footer['LINK_LOGO_HEADER']['VALUE'] ?>" class="brand">
                            <img alt="<?= CFile::GetFileArray($footer['LOGO_FOOTER']['VALUE'])['ORIGINAL_NAME'] ?>"
                                 src="<?= CFile::GetPath($footer['LOGO_FOOTER']['VALUE']) ?>">
                        </a>
                    </div>
                <?php endif; ?>
                <div class="header__text">
                    <?= $footer['DESC_HEADER']['~VALUE']['TEXT'] ?? ''?>
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
        "IBLOCK_TYPE" => "snow",
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
<?php if (!empty($footer['PHONE_WHATSAPP_FOOTER']['VALUE']) && !empty($footer['ICON_WHATSAPP_FOOTER']['VALUE'])): ?>
    <a href="https://wa.me/<?= ltrim(Generic::getCleanPhoneNumber($footer['PHONE_WHATSAPP_FOOTER']['VALUE']), '+') ?>"
       target="_blank" class="call">
        <img src="<?= CFile::GetPath($footer['ICON_WHATSAPP_FOOTER']['VALUE']) ?>" height="60" width="60" alt="">
    </a>
<?php endif; ?>
<?php if ($APPLICATION->GetCurPage() == '/'): ?>
    <script>(function(a,m,o,c,r,m){a[m]={id:"393457",hash:"313e563912d9d72dc2997a7b3b75a75c80cd602fb1cee3a655c45980c21756ab",locale:"ru",inline:false,setMeta:function(p){this.params=(this.params||[]).concat([p])}};a[o]=a[o]||function(){(a[o].q=a[o].q||[]).push(arguments)};var d=a.document,s=d.createElement('script');s.async=true;s.id=m+'_script';s.src='https://gso.amocrm.ru/js/button.js?1694165626';d.head&&d.head.appendChild(s)}(window,0,'amoSocialButton',0,0,'amo_social_button'));</script>
<?php endif; ?>
</body>
</html>
