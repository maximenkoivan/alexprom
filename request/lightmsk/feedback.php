<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use classes\Services\FormHandler;

$request = \Bitrix\Main\Context::getCurrent()->getRequest()->getPost('ajax');

if ($model = new FormHandler($request)) {
    $response = $model->run();

	 $url = 'https://ingeni.app/2/sites/svetmsk.alexprom.ru/'; // URL внешнего endpoint

  // Проверяем, существует ли cookie с UTM-метками
if (isset($_COOKIE['utm'])) {
    // Декодируем JSON-форматированные UTM-метки из cookie
    $utmData = json_decode($_COOKIE['utm'], true);
} else {
    // Если cookie не установлено, используем пустой массив
    $utmData = [];
}

$postData = $_POST;
// Добавление UTM-меток к данным формы
$postData = array_merge($postData, $utmData);



        \classes\Helpers\Utm::cookieToForm($postData); // запишем куки которые пишутся на каждой странице классом

// найдём в формах имя-телефон и запишем в соотв. ключ
        $phone = $name = '';

        if( $postData['user_tel'] ) $phone = $postData['user_tel'];

        if( $postData['user_name'] ) $name = $postData['user_name'];

        if($phone && !$postData['phone'] )  $postData['phone'] = $phone;
        if($name && !$postData['name'] )  $postData['name'] = $name;




    // Подготовка данных для отправки
    $postData = http_build_query($postData);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    
    $externalResponse = curl_exec($ch);
    curl_close($ch);

} else {
    $response = ['error' => 'Отсутствуют необходимые параметры'];
}

echo json_encode($response);