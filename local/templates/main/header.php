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
$asset->addJs(SITE_TEMPLATE_PATH . '/js/bundle.min.js');
$header = CommonData::getInstance()->getElementByCode('basic_settings', true);
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
                        <?php if (!empty($header['TEXT_BTN_MOB_HEADER']['~VALUE'])): ?>
                            <button class="btn-accent header__button-callback" data-b_modal-open="form-contact">
                                <?= $header['TEXT_BTN_MOB_HEADER']['~VALUE'] ?>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="header__info">
                    <?php if (!empty($header['EMAIL_HEADER']['~VALUE'])): ?>
                        <a class="link"
                           href="mailto:<?= $header['EMAIL_HEADER']['~VALUE'] ?>"><?= $header['EMAIL_HEADER']['~VALUE'] ?></a>
                    <?php endif; ?>
                    <?php if (!empty($header['PHONE_HEADER']['~VALUE'])): ?>
                        <a class="link"
                           href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['~VALUE']) ?>"><?= $header['PHONE_HEADER']['~VALUE'] ?></a>
                    <?php endif; ?>
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
