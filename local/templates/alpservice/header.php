<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use classes\Helpers\Generic;
use classes\Models\Alpservice\Basic\CommonData;


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

$asset->addCss(SITE_TEMPLATE_PATH . '/assets/app.min.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/vendor.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/app.min.js', true);
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
              content="<?= $HTTP_X_FORWARDED_PROTO . '://' . SITE_SERVER_NAME . SITE_TEMPLATE_PATH . '/favicon.png' ?>"/>

        <?php if ($USER->IsAdmin() && $header['ADMIN_PANEL']['VALUE']): ?>
            <?php $APPLICATION->ShowPanel(); ?>
        <?php endif; ?>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(97921040, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/97921040" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
<body>
<?php if (!(defined('ERROR_404') && ERROR_404 == 'Y')): ?>
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
                               href="mailto:<?= $header['EMAIL_HEADER']['DESCRIPTION'] ?>"><?= $header['EMAIL_HEADER']['DESCRIPTION'] ?></a>
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
                    <button class="btn btn-orange d-xl-block" data-custom-open="callback"
                            type="submit">
                        <span><?= $header['TEXT_BTN_HEADER']['~VALUE'] ?></span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </header>
<?php endif; ?>