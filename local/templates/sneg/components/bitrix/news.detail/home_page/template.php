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
include '_problems.php';
include '_order.php';
include '_team.php';
include '_presentation_1.php';
include '_video.php';
include '_type.php';
include '_permissions.php';
include '_presentation_2.php';
include '_map.php';