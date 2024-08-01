<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use classes\Services\FormHandler;

$needle_request = \Bitrix\Main\Context::getCurrent()->getRequest()->getPostList()->toArray();

/*global $USER;
if( $USER->GetId() == 1 ) {


//    $arTrace = debug_backtrace();

    \Bitrix\Main\Diag\Debug::dumpToFile(date("d.m.Y H:i:s"), ' feedback date ', '/testform.txt');

    die();
}*/


//$ch = curl_init('https://ingeni.app/2/sites/alexprom.ru/');
$ch = curl_init('https://ingeni.app/2/sites/'.$_SERVER['HTTP_HOST'].'/'); // теперь меняется в зависимости от сайта
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);



\classes\Helpers\Utm::cookieToForm($needle_request); // запишем куки которые пишутся на каждой странице классом

// найдём в формах имя-телефон и запишем в соотв. ключ
$phone = $name = '';

if( $needle_request['user_tel'] ) $phone = $needle_request['user_tel'];

if( $needle_request['user_name'] ) $name = $needle_request['user_name'];

if($phone && !$needle_request['phone'] )  $needle_request['phone'] = $phone;
if($name && !$needle_request['name'] )  $needle_request['name'] = $name;

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($needle_request));

// Установливаем правильный заголовок Content-Type для urlencoded
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36');
curl_exec($ch);
curl_close($ch);








