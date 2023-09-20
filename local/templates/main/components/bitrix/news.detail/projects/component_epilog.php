<?php
const TITLE_PREFIX = ' в Москве — «Алекспром»';
const DESCRIPTION_PREFIX = ' — Фотографии выполненных работ строительной компанией «Алекспром» в Москве. Услуги промышленного альпинизма и высотных работ. Гарантия по договору! ✔ Работаем с 2012 года ✔ 24/7 ☎ 8 (495) 109-02-42.';
$title = $arResult['META_TAGS']['TITLE'];
$description = $arResult['META_TAGS']['TITLE'];

$templateTitle = $title . TITLE_PREFIX;
$templateDescription = $description . DESCRIPTION_PREFIX;

$APPLICATION->SetPageProperty('title', $templateTitle);
$APPLICATION->SetPageProperty('description', $templateDescription);