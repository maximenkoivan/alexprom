<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use classes\Helpers\Generic;
use classes\Models\Alpinism\Basic\CommonData;


/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$asset = Asset::getInstance();
$asset->addString(
    '<link rel="icon" type="image/png" href="' . SITE_TEMPLATE_PATH . '/favicon.png">',
    AssetLocation::BEFORE_CSS
);
$asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/css/custom.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/bundle.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/vue.min.js');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/axios.min.js');
$header = CommonData::getInstance()->getElementByCode('basic_settings', true);

if (substr($_SERVER['REQUEST_URI'], -1) !== '/') {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $_SERVER['REQUEST_URI'] . '/');
}
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="<?= LANG_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php $APPLICATION->ShowHead(); ?>

    <meta property="og:title" content="<?php $APPLICATION->ShowTitle(); ?>"/>
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description', ''); ?>"/>
    <meta property="og:image" content="<?= 'http:/' . SITE_SERVER_NAME . SITE_TEMPLATE_PATH . '/favicon.png' ?>">

    <?php if ($USER->IsAdmin() && $header['ADMIN_PANEL']['VALUE']): ?>
        <?php $APPLICATION->ShowPanel(); ?>
    <?php endif; ?>

    <!-- Отключить автодетект телефонов -->
    <meta name="format-detection" content="telephone=no">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(94489760, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/94489760" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

</head>
<body>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header">
                <?php if (!empty($header['LOGO_HEADER']['VALUE'])): ?>
                    <a class="header__logo" <?= $APPLICATION->GetCurPage() == '/' ? '' : 'href="/"' ?>>
                        <img class="header__img" src="<?= CFile::GetPath($header['LOGO_HEADER']['VALUE']) ?>"
                             alt="AlexProm">
                    </a>
                <?php endif; ?>
                <div class="header__menu">
                    <div class="header__menu-inner">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "Y",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "2",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600000",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "multilevel"
                            ),
                            false
                        ); ?>
                        <div class="mobile_link">

                            <?php if (!empty($header['PHONE_HEADER']['~VALUE'])): ?>
                                <a class="link" href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['~VALUE']) ?>">
                                    <?= $header['PHONE_HEADER']['~VALUE'] ?>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($header['EMAIL_HEADER']['~VALUE'])): ?>
                                <a class="link" href="mailto:<?= $header['EMAIL_HEADER']['~VALUE'] ?>">
                                    <?= $header['EMAIL_HEADER']['~VALUE'] ?>
                                </a>
                            <?php endif; ?>    

                            <?php if (!empty($header["HEADER_CITY"]['VALUE'])): ?>
                                <div class="rows_info">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3833 2.22982C12.9454 0.791896 11.0336 0 9.00006 0C6.96655 0 5.05468 0.791896 3.61679 2.22982C2.17886 3.66779 1.38696 5.57959 1.38696 7.61307C1.38696 11.7268 5.27659 15.1484 7.36624 16.9865C7.65664 17.242 7.90741 17.4626 8.1072 17.6492C8.35751 17.883 8.67881 18 9.00003 18C9.32132 18 9.64255 17.883 9.89289 17.6492C10.0927 17.4626 10.3435 17.242 10.6338 16.9865C12.7235 15.1483 16.6131 11.7268 16.6131 7.61307C16.6131 5.57959 15.8212 3.66779 14.3833 2.22982ZM9.9374 16.1949C9.64065 16.4559 9.38439 16.6814 9.1731 16.8787C9.07604 16.9693 8.92402 16.9694 8.82692 16.8787C8.61566 16.6813 8.35938 16.4559 8.06262 16.1949C6.09809 14.4668 2.4413 11.25 2.4413 7.6131C2.4413 3.99664 5.3835 1.05444 8.99999 1.05444C12.6165 1.05444 15.5587 3.99664 15.5587 7.6131C15.5587 11.25 11.9019 14.4668 9.9374 16.1949Z" fill="#828282"/>
                                        <path d="M9.00008 3.97048C7.15012 3.97048 5.64508 5.47549 5.64508 7.32545C5.64508 9.17541 7.15012 10.6804 9.00008 10.6804C10.85 10.6804 12.3551 9.17541 12.3551 7.32545C12.3551 5.47549 10.85 3.97048 9.00008 3.97048ZM9.00008 9.62598C7.73154 9.62598 6.69949 8.59393 6.69949 7.32542C6.69949 6.05691 7.73154 5.02486 9.00008 5.02486C10.2686 5.02486 11.3006 6.05691 11.3006 7.32542C11.3006 8.59393 10.2686 9.62598 9.00008 9.62598Z" fill="#828282"/>
                                    </svg>

                                    <div class="link" href="#">
                                        <?= $header["HEADER_CITY"]['VALUE'] ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($header["HEADER_WORK_SCHEDULE"]["VALUE"])): ?>
                                <div class="rows_info">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_43)">
                                            <g clip-path="url(#clip1_1_43)">
                                                <path d="M9.08156 9.73406L5.70656 12.2653C5.45794 12.4518 5.10553 12.4014 4.91906 12.1528C4.73259 11.9042 4.78294 11.5518 5.03156 11.3653L8.15625 9V4.21875C8.15625 3.90797 8.40797 3.65625 8.71875 3.65625C9.02953 3.65625 9.28125 3.90797 9.28125 4.21875V9.28125C9.28125 9.468 9.20306 9.63619 9.08156 9.73406Z" fill="#828282"/>
                                                <path d="M8.43752 0.5625C12.5547 0.5625 16.0706 3.53419 16.7569 7.59375L16.9706 7.27594C17.1447 7.01803 17.4946 6.94997 17.7525 7.12406C18.0104 7.29816 18.0785 7.64803 17.9044 7.90594L16.7794 9.59344C16.6869 9.73406 16.5361 9.82603 16.3688 9.84375H16.3125C16.1635 9.84319 16.0209 9.78356 15.916 9.67781L14.5097 8.27156C14.2901 8.05191 14.2901 7.69528 14.5097 7.47563C14.7294 7.25597 15.086 7.25597 15.3056 7.47563L15.6544 7.82719C15.0067 3.84075 11.25 1.13456 7.26387 1.78228C3.27771 2.43 0.570963 6.18637 1.21868 10.1728C1.79384 13.7126 4.85131 16.3131 8.43752 16.3125C10.6993 16.3536 12.8385 15.2865 14.1666 13.455C14.3469 13.2019 14.6981 13.1425 14.9513 13.3228C15.2044 13.5031 15.2637 13.8544 15.0835 14.1075C13.5456 16.2371 11.0638 17.4805 8.43752 17.4375C3.77749 17.4375 2.47955e-05 13.66 2.47955e-05 9C2.47955e-05 4.33997 3.77749 0.5625 8.43752 0.5625Z" fill="#828282"/>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_43">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            <clipPath id="clip1_1_43">
                                                <rect width="18" height="18" fill="white" transform="matrix(-1 0 0 1 18 0)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span>
                                        <?=$header["HEADER_WORK_SCHEDULE"]["~VALUE"]?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($header['TEXT_BTN_MOB_HEADER']['~VALUE'])): ?>
                            <button class="btn-accent header__button-callback" data-b_modal-open="form-contact">
                                <?= $header['TEXT_BTN_MOB_HEADER']['~VALUE'] ?>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="header__info">
                    <div class="header__info_left_part">
                        <div>
                            <?php if (!empty($header['PHONE_HEADER']['~VALUE'])): ?>
                                <a class="link" href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['~VALUE']) ?>">
                                    <?= $header['PHONE_HEADER']['~VALUE'] ?>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($header["HEADER_CITY"]['VALUE'])): ?>
                            <div class="rows_info">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3833 2.22982C12.9454 0.791896 11.0336 0 9.00006 0C6.96655 0 5.05468 0.791896 3.61679 2.22982C2.17886 3.66779 1.38696 5.57959 1.38696 7.61307C1.38696 11.7268 5.27659 15.1484 7.36624 16.9865C7.65664 17.242 7.90741 17.4626 8.1072 17.6492C8.35751 17.883 8.67881 18 9.00003 18C9.32132 18 9.64255 17.883 9.89289 17.6492C10.0927 17.4626 10.3435 17.242 10.6338 16.9865C12.7235 15.1483 16.6131 11.7268 16.6131 7.61307C16.6131 5.57959 15.8212 3.66779 14.3833 2.22982ZM9.9374 16.1949C9.64065 16.4559 9.38439 16.6814 9.1731 16.8787C9.07604 16.9693 8.92402 16.9694 8.82692 16.8787C8.61566 16.6813 8.35938 16.4559 8.06262 16.1949C6.09809 14.4668 2.4413 11.25 2.4413 7.6131C2.4413 3.99664 5.3835 1.05444 8.99999 1.05444C12.6165 1.05444 15.5587 3.99664 15.5587 7.6131C15.5587 11.25 11.9019 14.4668 9.9374 16.1949Z" fill="#828282"/>
                                    <path d="M9.00008 3.97048C7.15012 3.97048 5.64508 5.47549 5.64508 7.32545C5.64508 9.17541 7.15012 10.6804 9.00008 10.6804C10.85 10.6804 12.3551 9.17541 12.3551 7.32545C12.3551 5.47549 10.85 3.97048 9.00008 3.97048ZM9.00008 9.62598C7.73154 9.62598 6.69949 8.59393 6.69949 7.32542C6.69949 6.05691 7.73154 5.02486 9.00008 5.02486C10.2686 5.02486 11.3006 6.05691 11.3006 7.32542C11.3006 8.59393 10.2686 9.62598 9.00008 9.62598Z" fill="#828282"/>
                                </svg>

                                <div class="link" href="#">
                                    <?= $header["HEADER_CITY"]['VALUE'] ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if (!empty($header['EMAIL_HEADER']['~VALUE'])): ?>
                                <a class="link" href="mailto:<?= $header['EMAIL_HEADER']['~VALUE'] ?>">
                                    <?= $header['EMAIL_HEADER']['~VALUE'] ?>
                                </a>
                            <?php endif; ?>    
                            <?php if (!empty($header["HEADER_WORK_SCHEDULE"]["VALUE"])): ?>
                                <div class="rows_info">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_43)">
                                            <g clip-path="url(#clip1_1_43)">
                                                <path d="M9.08156 9.73406L5.70656 12.2653C5.45794 12.4518 5.10553 12.4014 4.91906 12.1528C4.73259 11.9042 4.78294 11.5518 5.03156 11.3653L8.15625 9V4.21875C8.15625 3.90797 8.40797 3.65625 8.71875 3.65625C9.02953 3.65625 9.28125 3.90797 9.28125 4.21875V9.28125C9.28125 9.468 9.20306 9.63619 9.08156 9.73406Z" fill="#828282"/>
                                                <path d="M8.43752 0.5625C12.5547 0.5625 16.0706 3.53419 16.7569 7.59375L16.9706 7.27594C17.1447 7.01803 17.4946 6.94997 17.7525 7.12406C18.0104 7.29816 18.0785 7.64803 17.9044 7.90594L16.7794 9.59344C16.6869 9.73406 16.5361 9.82603 16.3688 9.84375H16.3125C16.1635 9.84319 16.0209 9.78356 15.916 9.67781L14.5097 8.27156C14.2901 8.05191 14.2901 7.69528 14.5097 7.47563C14.7294 7.25597 15.086 7.25597 15.3056 7.47563L15.6544 7.82719C15.0067 3.84075 11.25 1.13456 7.26387 1.78228C3.27771 2.43 0.570963 6.18637 1.21868 10.1728C1.79384 13.7126 4.85131 16.3131 8.43752 16.3125C10.6993 16.3536 12.8385 15.2865 14.1666 13.455C14.3469 13.2019 14.6981 13.1425 14.9513 13.3228C15.2044 13.5031 15.2637 13.8544 15.0835 14.1075C13.5456 16.2371 11.0638 17.4805 8.43752 17.4375C3.77749 17.4375 2.47955e-05 13.66 2.47955e-05 9C2.47955e-05 4.33997 3.77749 0.5625 8.43752 0.5625Z" fill="#828282"/>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_43">
                                                <rect width="18" height="18" fill="white"/>
                                            </clipPath>
                                            <clipPath id="clip1_1_43">
                                                <rect width="18" height="18" fill="white" transform="matrix(-1 0 0 1 18 0)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    <span>
                                        <?=$header["HEADER_WORK_SCHEDULE"]["~VALUE"]?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (!empty($header['TEXT_BTN_HEADER']['~VALUE'])): ?>
                        <button class="btn-primary header__btn" type="button" data-b_modal-open="form-contact">
                            <?= $header['TEXT_BTN_HEADER']['~VALUE'] ?>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="header-mobile">
                    <?php if (!empty($header['PHONE_HEADER']['~VALUE']) && !empty($header['ICON_BTN_MOB_HEADER']['VALUE'])): ?>
                        <a class="header-mobile__btn"
                           href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['~VALUE']) ?>">
                            <img src="<?= CFile::GetPath($header['ICON_BTN_MOB_HEADER']['VALUE']) ?>"
                                 alt="<?= $header['PHONE_HEADER']['~VALUE'] ?>">
                        </a>
                    <?php endif; ?>
                    <button class="header-mobile__btn burger" type="button">
                        <span class="burger__line"></span>
                        <span class="burger__line"></span>
                        <span class="burger__line"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
