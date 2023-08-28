<?
    require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"; 
    
    include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
    CHTTP::SetStatus("404 Not Found");
    @define("ERROR_404","Y");

    LocalRedirect('/404/');
?>