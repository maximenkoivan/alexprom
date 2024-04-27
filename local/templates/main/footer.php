<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Helpers\Generic;
use classes\Models\Alpinism\Basic\CommonData;
use classes\Models\Alpinism\Services\Services;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
$services = Services::getInstance()->getElementByIds($footer['SERVICES_FOOTER']['VALUE']);
?>
<footer class="footer">
    <div class="container">

        <div class="footer__wrap">
            <div class="footer__row">

                <div class="footer__col">
                    <div class="footer__logo">
                    <?php if (!empty($footer['LOGO_FOOTER']['VALUE'])) :
                        $logoSrc = array_change_key_case(
                            CFile::ResizeImageGet($footer['LOGO_FOOTER']['VALUE'], ['width' => 400, 'height' => 145], BX_RESIZE_IMAGE_PROPORTIONAL),
                            CASE_UPPER
                        )['SRC'];
                    ?>
                        <a <?= $APPLICATION->GetCurPage() == '/' ? '' : 'href="/"' ?>>
                            <img loading="lazy" src="<?= $logoSrc ?>" alt="AlexProm">
                        </a>
                    <?php endif; ?>
                    </div>
                </div>

                <div class="footer__col services-block">
                    <div class="footer__header_h3">
                        Услуги
                    </div> 
                    <div class="footer__menu-list--bold">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "footer_menu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "Y",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600000",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "services",
                                "USE_EXT" => "N",
                            )
                        );?>
                    </div>
                </div>

                <div class="footer__col-6">
                    <div class="footer__row">
                    
                        <div class="footer__col-12">
                            <div class="footer__header_h3">
                                Популярные услуги
                            </div> 
                        </div>

                        <div class="footer__row menu-wrap">

                            <div class="footer__col">
                                <div class="footer__header_h4">
                                    Кровельные работы
                                </div> 
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_menu",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "2",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MENU_CACHE_TIME" => "3600000",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "roofing",
                                        "USE_EXT" => "N",
                                    )
                                );?>
                            </div>
                            
                            <div class="footer__col">
                                <div class="footer__header_h4">
                                    Фасадные работы на высоте
                                </div> 
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_menu",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "2",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MENU_CACHE_TIME" => "3600000",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "facade",
                                        "USE_EXT" => "N",
                                    )
                                );?>
                            </div>

                            <div class="footer__col">
                                <div class="footer__header_h4">
                                    Промышленный альпинизм
                                </div> 
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "footer_menu",
                                    Array(
                                        "ALLOW_MULTI_SELECT" => "Y",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "2",
                                        "MENU_CACHE_GET_VARS" => array(),
                                        "MENU_CACHE_TIME" => "3600000",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "alpinism",
                                        "USE_EXT" => "N",
                                    )
                                );?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="footer__col soc-block">

                <?php if (!empty($footer['SOCNET_FOOTER']['VALUE'])) : ?>
                    <div class="footer__header_h3"><?= $footer['TITLE_SOCNET_FOOTER']['~VALUE'] ?></div> 

                    <ul class="footer__ul footer__contact">
                        <?php if (!empty($footer['EMAIL_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__contact_email">
                                <a href="mailto:<?= $footer['EMAIL_FOOTER']['~VALUE'] ?>" class="footer__menu-link link link--mail"><?= $footer['EMAIL_FOOTER']['~VALUE'] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($footer['PHONE_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__contact_phone">
                                <a href="tel:<?= Generic::getCleanPhoneNumber($footer['PHONE_FOOTER']['~VALUE']) ?>" class="footer__menu-link link link--phone"><?= $footer['PHONE_FOOTER']['~VALUE'] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($footer['ADDRESS_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__contact_street">
                                <span class="link link--geo"><?= $footer['ADDRESS_FOOTER']['~VALUE'] ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <ul class="footer__ul footer__soc">
                        <?php foreach ($footer['SOCNET_FOOTER']['VALUE'] as $key => $icon) : ?>
                                <?php if (!empty($footer['SOCNET_FOOTER']['DESCRIPTION'][$key])) : ?>
                                    <li>
                                        <a href="<?= $footer['SOCNET_FOOTER']['DESCRIPTION'][$key] ?>" target="_blank">
                                            <img src="<?= CFile::GetPath($icon) ?>" alt="" />
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (0) : ?>
            <div class="footer-top">
                <?php if (!empty($footer['LOGO_FOOTER']['VALUE'])) :
                    $logoSrc = array_change_key_case(
                        CFile::ResizeImageGet($footer['LOGO_FOOTER']['VALUE'], ['width' => 400, 'height' => 145], BX_RESIZE_IMAGE_PROPORTIONAL),
                        CASE_UPPER
                    )['SRC'];
                ?>
                    <a class="footer-top__logo" <?= $APPLICATION->GetCurPage() == '/' ? '' : 'href="/"' ?>>
                        <img class="footer-top__img" loading="lazy" src="<?= $logoSrc ?>" alt="AlexProm">
                    </a>
                <?php endif; ?>
                <div class="footer__menu">
                    <h3 class="footer__menu-title"><?= $footer['TITLE_CONTACTS_FOOTER']['~VALUE'] ?></h3>
                    <ul class="footer__menu-list">
                        <?php if (!empty($footer['EMAIL_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__menu-item">
                                <a href="mailto:<?= $footer['EMAIL_FOOTER']['~VALUE'] ?>" class="footer__menu-link link link--mail"><?= $footer['EMAIL_FOOTER']['~VALUE'] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($footer['PHONE_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__menu-item">
                                <a href="tel:<?= Generic::getCleanPhoneNumber($footer['PHONE_FOOTER']['~VALUE']) ?>" class="footer__menu-link link link--phone"><?= $footer['PHONE_FOOTER']['~VALUE'] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty($footer['ADDRESS_FOOTER']['~VALUE'])) : ?>
                            <li class="footer__menu-item">
                                <span class="link link--geo"><?= $footer['ADDRESS_FOOTER']['~VALUE'] ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="footer__menu">
                    <h3 class="footer__menu-title"><?= $footer['TITLE_SERVICES_FOOTER']['~VALUE'] ?></h3>
                    <ul class="footer__menu-list">
                        <?php foreach ($services as $service) : ?>
                            <li class="footer__menu-item">
                                <a href="<?= $service['DETAIL_PAGE_URL'] ?>" class="footer__menu-link" target="_blank"><?= $service['NAME'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="footer__menu">
                    <h3 class="footer__menu-title"><?= $footer['TITLE_SECTIONS_FOOTER']['~VALUE'] ?></h3>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer_menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "Y",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600000",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                        ),
                        false
                    ); ?>
                </div>
                <?php if (!empty($footer['SOCNET_FOOTER']['VALUE'])) : ?>
                    <div class="footer__menu">
                        <h3 class="footer__menu-title"><?= $footer['TITLE_SOCNET_FOOTER']['~VALUE'] ?></h3>
                        <div class="footer-bottom__socials socials">
                            <?php foreach ($footer['SOCNET_FOOTER']['VALUE'] as $key => $icon) : ?>
                                <?php if (!empty($footer['SOCNET_FOOTER']['DESCRIPTION'][$key])) : ?>
                                    <a href="<?= $footer['SOCNET_FOOTER']['DESCRIPTION'][$key] ?>" target="_blank" class="socials__link">
                                        <div class="socials__icon">
                                            <img src="<?= CFile::GetPath($icon) ?>" alt="" />
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>

        <div class="footer-bottom">
            <div class="footer-bottom__docs">
                <span><?= $footer['COPYRIGHT_FOOTER']['~VALUE'] ?></span>
                <?php if (!empty($footer['TEXT_LINK_POLICY_FOOTER']['~VALUE']) && !empty($footer['LINK_POLICY_FOOTER']['~VALUE'])) : ?>
                    <a class="footer-bottom__docs-link" href="<?= $footer['LINK_POLICY_FOOTER']['~VALUE'] ?>" target="_blank">
                        <?= $footer['TEXT_LINK_POLICY_FOOTER']['~VALUE'] ?>
                    </a>
                    <div class="footer__d-opt">
                        Разработка сайта —
                        <a class="link link--hover-color link--white link--small" href="https://d-option.ru/" target="_blank">
                            Digital Option
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<button class="button-scroll-top" aria-label="листать вверх" title="Листать наверх"></button>

<?/*
<?$APPLICATION->IncludeComponent(
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
        "ELEMENT_CODE" => "form-contact",
        "ELEMENT_ID" => "",
        "FIELD_CODE" => array("ID"),
        "GROUP_PERMISSIONS" => array("1"),
        "IBLOCK_ID" => "feedback_settings",
        "IBLOCK_TYPE" => "common_data",
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
        "PAGER_TITLE" => "",
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
);?>
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
        "ELEMENT_CODE" => "form-price",
        "ELEMENT_ID" => "",
        "FIELD_CODE" => array("ID"),
        "GROUP_PERMISSIONS" => array("1"),
        "IBLOCK_ID" => "feedback_settings",
        "IBLOCK_TYPE" => "common_data",
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
        "PAGER_TITLE" => "",
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
<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/modal_service.php') ?>
*/ ?>

<?php if (!empty($footer['IMAGE_LOADER_FOOTER']['VALUE'])) : ?>
    <div class="preloader">
        <img src="<?= CFile::GetPath($footer['IMAGE_LOADER_FOOTER']['VALUE']) ?>" alt="" class="preloader__loader">
    </div>
<?php endif; ?>
</div>



<?php $data = [
    '@context' => 'http://schema.org',
    '@type' => 'Organization',
    'name' => 'ALEXPROM',
    'email' => 'zakaz@alexprom.ru',
    'url' => 'https://alexprom.ru/',
    'logo' => 'https://alexprom.ru/local/templates/main/images/logo-minimal.png',
    'telephone' => '+7 (495) 109-02-42',
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Москва, Россия',
        'postalCode' => '109469',
        'streetAddress' => 'ул.Братиславская д.31 корпус 3',
    ],
    'sameAs' => [
        'https://vk.com/alexpromru',
        'https://t.me/+79252220242',
    ],
];

$data = json_encode($data);

echo '<script type="application/ld+json">' . $data . '</script>'; ?>

<link rel="stylesheet" href="/local/templates/main/css/noindex.css">

<? //модалки и скрипты
?>
<script>
    $(document).ready(function() {

        $.post('/local/ajax/modal-form.php', function(data) {
            $('body').append(data);

            $.getScript('/local/templates/main/assets/src/js/b_components/spawners/b_modal.js');
            $.getScript('/local/templates/main/js/formich_ajax.js');
            const telInputs = document.querySelectorAll('input[type="tel"]');
            telInputs.forEach(tel => {
                const maskOptions = {
                    mask: '+7(999) 999-99-99',
                    inputmode: 'tel',
                };
                new Inputmask(maskOptions).mask(tel);
            });
            window.b_modal.initPopups();
        });

        if(window.innerWidth <= 768){
            $('.services-block').detach().insertAfter('.footer__col-6');
        }

        $('.footer__header_h4').on('click', function () {
           if($(this).hasClass('view')){
            $(this).removeClass('view');
           }else {
            $(this).addClass('view');
           }
        });
    })
</script>

</body>

</html>