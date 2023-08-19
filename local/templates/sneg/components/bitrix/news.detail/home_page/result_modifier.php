<?php

use classes\Models\Snow\Feedback\FormSettings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */

$arResult['FORM_SETTINGS'] = FormSettings::getInstance()->getElementPropertiesByCode('settings');
