<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule("iblock");

  $arFilter = Array('IBLOCK_ID'=>'7', 'GLOBAL_ACTIVE'=>'Y', 'DEPTH_LEVEL'=>'2');
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
  $db_list->NavStart($arParams['SET']);
  while($ar_result = $db_list->GetNext())
  {
    $arResult['SECTIONS'][] = array(
      'ID' => $ar_result['ID'],
      'SID' => $ar_result['IBLOCK_SECTION_ID'],
      'CODE' => $ar_result['ID'],
      'NAME' => $ar_result['NAME'],
      'DEPTH_LEVEL' =>  $ar_result['DEPTH_LEVEL'],
      'PICTURE' =>  CFile::GetPath($ar_result['PICTURE'])
    );
  }
  $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_*");
  $arFilter = Array("IBLOCK_ID"=>"7", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
  $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);
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

$this->IncludeComponentTemplate();
?>
