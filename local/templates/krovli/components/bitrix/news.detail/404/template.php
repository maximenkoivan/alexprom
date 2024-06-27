<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="page-404">
    <div class="info page-404__info">
        <div class="title page-404__title"><?= $arResult['PROPERTIES']['TITLE_404']['~VALUE'] ?></div>
        <div class="text page-404__text"><?= $arResult['PROPERTIES']['SUBTITLE_404']['~VALUE'] ?></span></div>
    </div>
    <a href="/" class="btn btn-blue d-xl-block"><?= $arResult['PROPERTIES']['TEXT_BTN_404']['~VALUE'] ?></a>
</section>
