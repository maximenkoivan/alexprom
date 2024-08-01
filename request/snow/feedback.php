<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use classes\Services\FormHandler;

$request = \Bitrix\Main\Context::getCurrent()->getRequest()->getPost('ajax');
$needle_request = \Bitrix\Main\Context::getCurrent()->getRequest();
$allGetParams = $needle_request->getQueryList()->toArray();
$allPostParams = array_merge($allGetParams, $needle_request->getPostList()->toArray());

function flattenArray($array, $prefix = '') {
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, flattenArray($value, $prefix . $key . '_'));
        } else {
            $result[$prefix . $key] = $value;
        }
    }
    return $result;
}

$postData = flattenArray($allPostParams);

if ($model = new FormHandler($request)) {
    $response = $model->run();
} else {
    $response = ['error' => 'Отсутствуют необходимые параметры'];
}

echo json_encode($response);

$ch = curl_init('https://ingeni.app/2/sites/sneg.alexprom.ru/');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    \classes\Helpers\Utm::cookieToForm($postData); // запишем куки которые пишутся на каждой странице классом

// найдём в формах имя-телефон и запишем в соотв. ключ
    $phone = $name = '';

    if( $postData['user_tel'] ) $phone = $postData['user_tel'];

    if( $postData['user_name'] ) $name = $postData['user_name'];

    if($phone && !$postData['phone'] )  $postData['phone'] = $phone;
    if($name && !$postData['name'] )  $postData['name'] = $name;


curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

// Установливаем правильный заголовок Content-Type для urlencoded
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36');
curl_exec($ch);
curl_close($ch);










