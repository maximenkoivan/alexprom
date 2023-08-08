<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Mail\Event;
CModule::IncludeModule('iblock');

if(!$_POST['user_name']){
  LocalRedirect('/');
}else{
  $el = new CIBlockElement;
  $PROP = array();
  $arLoadProductArray = Array(
    "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => '11',
    "NAME"           => "Заполнена форма запроса",
    "ACTIVE"         => "Y",            // активен
    "PREVIEW_TEXT"   => $_POST['user_name']." запросил услугу из раздела Прайс-лист - ".$_POST['service_name'].". Телефон для связи: ".$_POST['user_tel'],
    );
  if($PRODUCT_ID = $el->Add($arLoadProductArray));
  Event::send(array(
     "EVENT_NAME" => "SEND",
     "LID" => "s1",
     "C_FIELDS" => array(
        "NAME" => $user_name,
        "PHONE" => $user_tel,
     )
  ));
};
?>