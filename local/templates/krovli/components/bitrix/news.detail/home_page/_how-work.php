<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="how-work-sections">
    <div class="block-ellipse">
        <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/block-ellipse.png" alt="">
    </div>
    <div class="how-work">
        <div class="title big ta-c">
            Как мы <span>работаем</span>
        </div>
        <div class="pic"></div>
        <div class="permissions-wrap">
            <div class="big-arrows">
                <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/icons/arrows-big.svg" alt="">
            </div>
            <div class="container">
                <div class="permissions">
                    <div class="permissions__left">
                        <div class="title big">
                            Работаем с Порталом<br><span>поставщиков</span>
                        </div>
                        <div class="title min">
                            наши допуски <span>и разрешения:</span>
                        </div>
                    </div>
                    <div class="permissions__center">
                        <div class="permissions__center-pic">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/permission-pic.png" alt="">
                        </div>
                        <ul class="permissions-list">
                            <li class="item">С физическими лицами</li>
                            <li class="item">С юридическими лицами</li>
                            <li class="item">С порталом поставщиков</li>
                        </ul>
                    </div>
                </div>
                <div data-list-slider="cert" class="cert-slider">
                    <div class="swiper-wrapper cert-slider__wrapper">
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fslightbox="cert" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cert.png" alt="">
                            </a>
                        </div>
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
            </div>
        </div>
    </div>
</section>