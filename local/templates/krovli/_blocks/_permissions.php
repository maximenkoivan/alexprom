<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="how-work-sections">
    <div class="container">
        <div class="permissions">
            <div class="permissions__left">
                <div class="title big">
                    <?= $arResult['PROPERTIES']['TITLE_PERMISSIONS']['~VALUE'] ?>
                </div>
                <div class="title min">
                    <?= $arResult['PROPERTIES']['SUBTITLE_PERMISSIONS']['~VALUE'] ?>
                </div>
            </div>
            <div class="permissions__center">
                <div class="permissions__center-pic">
                    <?php if (!empty($arResult['PROPERTIES']['IMAGE_PERMISSIONS']['VALUE'])): ?>
                        <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_PERMISSIONS']['VALUE']) ?>"
                             alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_PERMISSIONS']['~DESCRIPTION']) ?>">
                    <?php endif; ?>
                </div>
                <ul class="permissions-list">
                    <?php foreach ($arResult['PROPERTIES']['TEXT_PERMISSIONS']['~VALUE'] as $text): ?>
                        <li class="item"><?= $text ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="permissions-wrap">
                <div class="big-arrows">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/arrows-big.svg" alt="">
                </div>
            </div>
        </div>
        <?php if (!empty($arResult['PROPERTIES']['SLIDER_PERMISSIONS']['VALUE'])): ?>
            <div data-list-slider="cert" class="cert-slider">
                <div class="swiper-wrapper cert-slider__wrapper">
                    <?php foreach ($arResult['PROPERTIES']['SLIDER_PERMISSIONS']['VALUE'] as $key => $imageId): ?>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= $path = CFile::GetPath($imageId) ?>">
                                <img src="<?= $path ?>"
                                     alt="<?= strip_tags($arResult['PROPERTIES']['SLIDER_PERMISSIONS']['~DESCRIPTION'][$key]) ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div data-list-slider-prev class="cert-slider__btn-prev">
                    <svg width="80" height="80">
                        <use xlink:href="#icon-caret-left"></use>
                    </svg>
                </div>
                <div data-list-slider-next class="cert-slider__btn-next">
                    <svg width="80" height="80">
                        <use xlink:href="#icon-caret-right"></use>
                    </svg>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>