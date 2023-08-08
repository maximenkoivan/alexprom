<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;


/**
 * @global CMain $APPLICATION
 * @global CDatabase $DB
 * @global CUser $USER
 */

$asset = Asset::getInstance();

$asset->addString(
    '<link rel="icon" type="image/png" href="' . SITE_TEMPLATE_PATH . '/favicon.png">',
    AssetLocation::BEFORE_CSS
);
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/vendor.css');
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/app.min.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/app.min.js', true);

?>
