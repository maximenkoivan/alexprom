<?php
const TITLE_PREFIX = ' в Москве — «Алекспром»';
const DESCRIPTION_PREFIX = ' — новости строительной компании «Алекспром» в Москве. Оказываем услуги промышленного альпинизма и высотных работ. ✔ Работаем с 2012 года ✔ 24/7 ☎ 8 (495) 109-02-42.';
$title = $arResult['META_TAGS']['TITLE'];
$description = $arResult['META_TAGS']['TITLE'];

$templateTitle = $title . TITLE_PREFIX;
$templateDescription = $description . DESCRIPTION_PREFIX;

$APPLICATION->SetPageProperty('title', $templateTitle);
$APPLICATION->SetPageProperty('description', $templateDescription);