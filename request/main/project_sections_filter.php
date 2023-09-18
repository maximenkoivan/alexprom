<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$sectionCode = \Bitrix\Main\Context::getCurrent()->getRequest()->getPost('section_code');
$result = \classes\Models\Alpinism\Projects\Projects::getInstance()->getElementsBySectionCode($sectionCode);
echo json_encode($result);

