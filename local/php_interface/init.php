<?php
define("PREFIX_PATH_404", "/404.php");

AddEventHandler("main", "OnAfterEpilog", "Prefix_FunctionName");

function Prefix_FunctionName() {
    global $APPLICATION;

    // Check if we need to show the content of the 404 page
    if (!defined('ERROR_404') || ERROR_404 != 'Y') {
        return;
    }

    // Display the 404 page unless it is already being displayed
    if ($APPLICATION->GetCurPage() != PREFIX_PATH_404) {
        header('X-Accel-Redirect: '.PREFIX_PATH_404);
        exit();
    }
}

Class GarbageStorage{
    private static $globalStorage = [];
    public static function set ($storageName,  $variableValue){ self::$globalStorage[$storageName] = $variableValue;}
    public static function get ($storageName){ return self::$globalStorage[$storageName];}
}

CModule::IncludeModule('iblock');
$arSelect = Array("ID", "IBLOCK_ID","PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>"16", "ACTIVE_DATE"=>"Y", "ID"=>"114");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
    $arSetting = $ob->GetProperties();
}

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';
}