<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use classes\Helpers\Generic;
use classes\Models\Snow\Basic\CommonData;


/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$asset = Asset::getInstance();

$asset->addString(
    '<link rel="icon" type="image/png" href="' . SITE_TEMPLATE_PATH . '/favicon.ico">',
    AssetLocation::BEFORE_CSS
);
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/vendor.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/app.min.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/app.min.js', true);
$header = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
<!DOCTYPE HTML>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="<?= LANG_CHARSET ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php $APPLICATION->ShowHead(); ?>

    <meta property="og:title" content="<?php $APPLICATION->ShowTitle(); ?>"/>
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description', ''); ?>"/>
    <meta property="og:image" content="<?= 'http:/' . SITE_SERVER_NAME . SITE_TEMPLATE_PATH . '/favicon.ico' ?>">

    <?php if ($USER->IsAdmin() && $header['ADMIN_PANEL']['VALUE']): ?>
        <?php $APPLICATION->ShowPanel(); ?>
    <?php endif; ?>

</head>
<body>

<header class="header" data-header>
    <div class="header__wrap">
        <div class="container header__container">
            <?php if (!empty($header['LOGO_HEADER']['VALUE'])): ?>
                <div class="header__brand">
                    <a href="<?= $header['LINK_LOGO_HEADER']['VALUE'] ?>" class="brand">
                        <img alt="<?= CFile::GetFileArray($header['LOGO_HEADER']['VALUE'])['ORIGINAL_NAME'] ?>"
                             src="<?= CFile::GetPath($header['LOGO_HEADER']['VALUE']) ?>">
                    </a>
                </div>
            <?php endif; ?>

            <div class="header__text">
                <?= $header['DESC_HEADER']['~VALUE']['TEXT'] ?>
            </div>

            <div class="spacer"></div>

            <div class="header__contacts contacts">
                <a href="tel:<?= Generic::getCleanPhoneNumber($header['PHONE_HEADER']['~VALUE']) ?>"
                   class="contacts__link contacts__link--phone">
                    <?= $header['PHONE_HEADER']['~VALUE'] ?>
                </a>
                <a class="contacts__link" href="mailto:<?= $header['EMAIL_HEADER']['~VALUE'] ?>">
                    <?= $header['EMAIL_HEADER']['~VALUE'] ?>
                </a>
            </div>
            <?php if (!empty($header['TEXT_BTN_HEADER']['~VALUE'])): ?>
                <div class="header__btn">
                    <a data-custom-open="modal-callback"
                       class="btn btn--primary"><?= $header['TEXT_BTN_HEADER']['~VALUE'] ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<div class="wrapper">
    <div class="wrapper__content">
