<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$videoYoutubeId = Generic::getYoutubeData($arResult['PROPERTIES']['LINK_VIDEO_BOTTOM']['~VALUE'])['VIDEO'];

include '_promo.php';