<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use classes\Helpers\Generic;
use classes\Models\Roofs\Basic\CommonData;


/**
 * @global CMain $APPLICATION
 * @global $HTTP_X_FORWARDED_PROTO
 * @global CUser $USER
 */

$asset = Asset::getInstance();

$asset->addString(
    '<link rel="icon" type="image/png" href="' . SITE_TEMPLATE_PATH . '/favicon.png">',
    AssetLocation::BEFORE_CSS
);
$asset->addString(
    '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
    AssetLocation::BEFORE_CSS
);

$asset->addCss('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/build/css/style.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/build/css/libs.min.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/build/js/main.min.js', true);
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/build/js/libs.min.js', true);
$asset->addJs('https://myreviews.dev/widget/dist/index.js', true);
$asset->addJs('https://code.jquery.com/jquery-3.7.1.min.js', true);
$asset->addJs('https://myreviews.dev/widget/dist/index.js', true);
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

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?= $HTTP_X_FORWARDED_PROTO . '://' . SITE_SERVER_NAME ?>"/>
    <meta property="og:title" content="<?php $APPLICATION->ShowTitle(); ?>"/>
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description', ''); ?>"/>
    <meta property="og:image"
          content="<?= $HTTP_X_FORWARDED_PROTO . '://' . SITE_SERVER_NAME . SITE_TEMPLATE_PATH . '/assets/images/favicon.png' ?>"/>

    <?php if ($USER->IsAdmin() && $header['ADMIN_PANEL']['VALUE']): ?>
        <?php $APPLICATION->ShowPanel(); ?>
    <?php endif; ?>
</head>
<body>
<header class="header">
    <div class="container header-block">
        <div class="header-block__wrap">
            <div class="header-block__left">
                <?php if (!empty($header['LOGO_HEADER']['VALUE'])): ?>
                    <a class="logo" href="<?= $header['LOGO_HEADER']['DESCRIPTION'] ?>" target="_blank">
                        <img src="<?= CFile::GetPath($header['LOGO_HEADER']['VALUE']) ?>"
                             alt="<?= $header['LOGO_HEADER']['DESCRIPTION'] ?>">
                    </a>
                <?php endif; ?>
                <div class="work">
                    <?= $header['DESC_HEADER']['~VALUE']['TEXT'] ?? '' ?>
                </div>
            </div>
            <div class="header-block__center">
                <?php if (!empty($header['EMAIL_HEADER']['DESCRIPTION'])): ?>
                    <div class="email">
                        <div class="ellipse-icon">
                            <div class="ellipse-icon__pic">
                                <img src="<?= CFile::GetPath($header['EMAIL_HEADER']['VALUE']) ?>"
                                     alt="<?= $header['EMAIL_HEADER']['DESCRIPITON'] ?>">
                            </div>
                        </div>
                        <a class=""
                           href="mailto:<?= $header['EMAIL_HEADER']['DESCRIPTION'] ?>"><?= $header['PHONE_HEADER']['DESCRIPTION'] ?></a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($header['PHONE_HEADER']['DESCRIPTION'])): ?>
                    <div class="phone">
                        <div class="ellipse-icon">
                            <div class="ellipse-icon__pic">
                                <img src="<?= CFile::GetPath($header['PHONE_HEADER']['VALUE']) ?>"
                                     alt="<?= $header['PHONE_HEADER']['DESCRIPTION'] ?>">
                            </div>
                        </div>
                        <a class=""
                           href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['DESCRIPTION']) ?>"><?= $header['PHONE_HEADER']['DESCRIPTION'] ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if (!empty($header['TEXT_BTN_HEADER']['~VALUE'])): ?>
            <div class="header-block__right">
                <button class="btn btn-orange d-xl-block" data-bs-toggle="modal" data-bs-target="#callback"
                        type="submit">
                    <?= $header['TEXT_BTN_HEADER']['~VALUE'] ?>
                </button>
            </div>
        <?php endif; ?>
    </div>
</header>