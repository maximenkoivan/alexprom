<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('CLIENTS');
?>
<?php if (!empty($settings['LOGO_CLIENTS']['VALUE'])): ?>
    <section class="section clients">
        <div class="container clients__container">
            <h2 class="title-h2"><?= $settings['TITLE_CLIENTS']['~VALUE'] ?></h2>
            <div class="clients-carousel">
                <div class="swiper clients-carousel__swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($settings['LOGO_CLIENTS']['VALUE'] as $key => $imageId): ?>
                            <div class="swiper-slide clients-carousel__slide">
                                <picture class="clients__thumb">
                                    <img class="clients__img lazy" src="<?= CFile::GetPath($imageId) ?>"
                                         alt="<?= $settings['LOGO_CLIENTS']['DESCRIPTION'][$key] ?>">
                                </picture>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-buttons clients-carousel-buttons">
                    <div class="swiper-button-prev clients-carousel-button-prev"></div>
                    <div class="swiper-button-next clients-carousel-button-next"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

