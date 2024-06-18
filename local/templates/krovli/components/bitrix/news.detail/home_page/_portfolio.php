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
<section class="portfolio-sections">
    <div class="portfolio-blur"></div>
    <div class="container portfolio">
        <div class="title big">
            портфолио
        </div>
        <div class="swiper-outside-wrap">
            <div class="swiper swiperPortfolio">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="video-box">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/video-box.png" alt="">
                            <div class="play-cover" data-bs-toggle="modal" data-bs-target="#video-play">
                                <div class="play-cover__icon"></div>
                            </div>
                        </div>
                        <div class="pic-box">
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                Москва, ул. Тверская, д. 19
                            </div>
                            <div class="info-box__desc">
                                Выполнили обслуживание и дозаправку системы кондиционирования в магазине одежды "United Colors of Benetton".
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-box">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/video-box.png" alt="">
                            <a href="/" class="play-cover" target="_blank">
                                <div class="play-cover__icon"></div>
                            </a>
                        </div>
                        <div class="pic-box">
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                Москва, ул. Тверская, д. 19
                            </div>
                            <div class="info-box__desc">
                                Выполнили обслуживание и дозаправку системы кондиционирования в магазине одежды "United Colors of Benetton".
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-box">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/video-box.png" alt="">
                            <a href="/" class="play-cover" target="_blank">
                                <div class="play-cover__icon"></div>
                            </a>
                        </div>
                        <div class="pic-box">
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                Москва, ул. Тверская, д. 19
                            </div>
                            <div class="info-box__desc">
                                Выполнили обслуживание и дозаправку системы кондиционирования в магазине одежды "United Colors of Benetton".
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-box">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/video-box.png" alt="">
                            <a href="/" class="play-cover" target="_blank">
                                <div class="play-cover__icon"></div>
                            </a>
                        </div>
                        <div class="pic-box">
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                            <div class="pic-box__item">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/pic-box.png" alt="">
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                Москва, ул. Тверская, д. 19
                            </div>
                            <div class="info-box__desc">
                                Выполнили обслуживание и дозаправку системы кондиционирования в магазине одежды "United Colors of Benetton".
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiperPortfolio__button-prev button-prev"></div>
            <div class="swiperPortfolio__button-next button-next"></div>
        </div>
    </div>
</section>