<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");


use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Web\Cookie;

$request = Context::getCurrent()->getRequest();
$application = Application::getInstance();


$cookieValue = $request->getCookie('utm_source');
$cookieValue = Application::getInstance()->getContext()->getRequest()->getCookie("utm_source");
$cookieValue2 = $_COOKIE['utm_source'];

echo '<pre>$cookieValue '; print_r($cookieValue); echo '<br class="clear" /></pre>'; echo "\n";
echo '<pre>$cookieValue2 '; print_r($cookieValue2); echo '<br class="clear" /></pre>'; echo "\n";

?>