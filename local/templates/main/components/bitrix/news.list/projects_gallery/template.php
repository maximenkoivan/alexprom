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
<section class="section gallery">
    <div class="container">
        <div class="gallery__head">
            <h2 class="title-h2"><?= $settings['TITLE_PROJECTS']['~VALUE'] ?></h2>
            <a href="#" class="btn-primary _desktop"><?= $settings['TEXT_BTN_PROJECTS']['~VALUE'] ?></a>
        </div>
        <div class="gallery-carousel">
            <div class="swiper swiper-gallery">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                    <div class="swiper-slide swiper-gallery__slide">
                        <picture class="swiper-gallery__thumb">
                            <source srcset= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.webp" type="image/webp">
                            <img class="swiper-gallery__img lazy" src= "<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src= "<?= SITE_TEMPLATE_PATH ?>/images/gallery/01.jpg" alt="">
                        </picture>
                        <a href="#" class="swiper-gallery__link">Штаб квартира “Газпром”</a>
                        <span class="swiper-gallery__title">Мойка окон</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">6500м²</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">Москва, улица Наметкина, дом 16</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <a href="#" class="gallery__button-all btn-primary _mobile"><?= $settings['TEXT_BTN_PROJECTS']['~VALUE'] ?></a>
    </div>
</section>


