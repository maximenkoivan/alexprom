<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_404']['VALUE']) ?>');"
         class="page-404">
    <div class="bg bg--404">
        <?php if (!empty($arResult['PROPERTIES']['BG_IMAGE_404']['VALUE'])): ?>
            <img src="<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_404']['VALUE']) ?>" alt="">
        <?php endif; ?>
    </div>
    <div class="info page-404__info">
        <div class="title page-404__title"><?= $arResult['PROPERTIES']['TITLE_404']['~VALUE'] ?></div>
        <div class="text page-404__text"><?= $arResult['PROPERTIES']['SUBTITLE_404']['~VALUE'] ?></span></div>
    </div>
    <a href="/" class="btn btn-blue d-xl-block"><?= $arResult['PROPERTIES']['TEXT_BTN_404']['~VALUE'] ?></a>
</section>
