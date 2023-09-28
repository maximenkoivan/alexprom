<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @var $arParams
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('PROJECTS');
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <section class="section gallery">
        <div class="container">
            <div class="gallery__head">
                <h2 class="title-h2"><?= $settings['TITLE_PROJECTS']['~VALUE'] ?></h2>
                <?php if (!empty($settings['TEXT_BTN_PROJECTS']['~VALUE'])): ?>
                    <a href="/projects/"
                       class="btn-primary _desktop"><?= $settings['TEXT_BTN_PROJECTS']['~VALUE'] ?></a>
                <?php endif; ?>
            </div>
            <div class="gallery-carousel">
                <div class="swiper swiper-gallery">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                            <div class="swiper-slide swiper-gallery__slide">
                                <picture class="swiper-gallery__thumb">
                                    <img class="swiper-gallery__img lazy"
                                         src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                         alt="<?= $arItem['PREVIEW_PICTURE']['DESCRIPTION'] ?? $arItem['PREVIEW_PICTURE']['SRC'] ?>">
                                </picture>
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="swiper-gallery__link"><?= $arItem['NAME'] ?></a>
                                <span class="swiper-gallery__title"><?= $arItem['~PREVIEW_TEXT'] ?></span>
                                <span class="swiper-gallery__info swiper-gallery__arg"><?= $arItem['PROPERTIES']['SQUARE']['~VALUE'] ?></span>
                                <span class="swiper-gallery__info swiper-gallery__loc">
                                    <?
                                        $arItem['PROPERTIES']['ADDRESS']['~VALUE'] = trim($arItem['PROPERTIES']['ADDRESS']['~VALUE']);
                                        $f = mb_stripos($arItem['PROPERTIES']['ADDRESS']['~VALUE'], 'москва');
                                        if ($f !== false && $f >= 0 && $f < 5) {
                                            $arItem['PROPERTIES']['ADDRESS']['~VALUE'] = str_replace(['г. Москва', 'Москва', 'москва'], '', $arItem['PROPERTIES']['ADDRESS']['~VALUE']);
                                            echo '<span class="str-msk"></span>';
                                        }
                                        echo trim($arItem['PROPERTIES']['ADDRESS']['~VALUE']);
                                    ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php if (!empty($settings['TEXT_BTN_PROJECTS']['~VALUE'])): ?>
                <a href="/projects/"
                   class="gallery__button-all btn-primary _mobile"><?= $settings['TEXT_BTN_PROJECTS']['~VALUE'] ?></a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
