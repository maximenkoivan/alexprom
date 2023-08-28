<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

// массив результата работы компонента

$arResult = array();
CModule::IncludeModule('iblock');

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>'8', "ID"=>$arParams['ID']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>1), $arSelect);

while($ob = $res->GetNextElement()){
 $arFields = $ob->GetFields();
 $arProps = $ob->GetProperties();
 $arResult = $arFields;
 $arResult['PROPERTIES'] = $arProps;
}

$this->IncludeComponentTemplate();
?>
