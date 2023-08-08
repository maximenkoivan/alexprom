<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

CModule::IncludeModule("iblock");

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>"6", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>$data['iid']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement()){
 $arFields = $ob->GetFields();
 $arProps = $ob->GetProperties();
 $arResult['ITEMS'][] = array(
   'NAME' =>  $arFields['NAME'],
   'URL'  =>  $arFields['DETAIL_PAGE_URL'],
   'SID' => $arFields['IBLOCK_SECTION_ID'],
   'PICTURE'  =>  CFile::GetPath($arFields['PREVIEW_PICTURE']),
   'TEXT' =>  $arFields['PREVIEW_TEXT'],
   'S1' =>  $arProps['M2']['VALUE'],
   'S2' =>  $arProps['ADDRESS']['VALUE'],
 );
}

echo json_encode($arResult['ITEMS']);

?>