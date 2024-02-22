<?php

use classes\Helpers\Generic;
use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('EXPERIENCE');
?>
<section class="section experience">
    <div class="experience__main">
        <div class="container experience__container">
            <div class="experience__hero">
                <?php if (!empty($settings['IMAGE_EXPERIENCE']['VALUE'])):
                    $arImg = array_change_key_case(
                        CFile::ResizeImageGet($settings['IMAGE_EXPERIENCE']['VALUE'], ['width' => 1900, 'height' => 861]),
                        CASE_UPPER
                    );
                ?>
                    <div class="experience__hero-media">
                        <picture class="experience__hero-pic">
                            <?if ($webp = makeWebp($arImg['SRC'])) { ?>
                                <source type="image/webp" srcset="<?=$webp?>">
                            <?php } ?>
                            <img class="experience__hero-img lazy"
                                 loading="lazy"
                                 src="<?= $arImg['SRC'] ?>" alt="<?= $settings['IMAGE_EXPERIENCE']['DESCRIPTION'] ?>">
                        </picture>
                        <div class="experience__hero-hint">
                            <p class="experience__hero-hint-title"><?= $settings['TITLE_IMAGE_EXPERIENCE']['~VALUE'] ?></p>
                            <p class="experience__hero-hint-desc">
                                <?= $settings['DESC_IMAGE_EXPERIENCE']['~VALUE'] ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="experience__content">
                <h2 class="title-h2 experience__title">
                    <?= $settings['TITLE_BLOCK_EXPERIENCE']['~VALUE'] ?>
                </h2>
                <div class="experience__video">
                    <?php if (!empty($settings['LINK_VIDEO_EXPERIENCE']['~VALUE'])): ?>
                        <div class="experience__video-box">
                            <?php if (!empty($settings['PREVIEW_EXPERIENCE']['VALUE'])): ?>
                                <img class="experience__video-cover lazy"
                                     src="<?= CFile::GetPath($settings['PREVIEW_EXPERIENCE']['VALUE']) ?>"
                                     alt="">
                            <?php endif; ?>
                            <a href="https://www.youtube.com/watch?v=<?= Generic::getYoutubeData($settings['LINK_VIDEO_EXPERIENCE']['~VALUE'])['VIDEO'] ?>"
                               data-fancybox class="play-cover"></a>
                        </div>
                    <?php endif; ?>
                    <p class="experience__video-desc">
                        <?= $settings['DESC_VIDEO_EXPERIENCE']['~VALUE'] ?>
                    </p>
                </div>
                <div class="experience-slides">
                    <div class="gallery-carousel">
                        <div class="swiper experience-gallery">
                            <div class="swiper-wrapper">
                                <?php foreach ($settings['GALLERY_EXPERIENCE']['VALUE'] as $imageId):
                                    $arImg = array_change_key_case(
                                        CFile::ResizeImageGet($imageId, ['width' => 600, 'height' => 204]),
                                        CASE_UPPER
                                    );
                                    ?>
                                    <div class="swiper-slide experience-gallery__slide">
                                        <picture class="experience-gallery__thumb">
                                            <?if ($webp = makeWebp($arImg['SRC'])) { ?>
                                                <source type="image/webp" srcset="<?=$webp?>">
                                            <?php } ?>
                                            <img class="experience-gallery__img"
                                                 loading="lazy"
                                                 src="<?= $arImg['SRC'] ?>" alt="">
                                        </picture>
                                        <a href="<?= CFile::GetPath($imageId) ?>" data-fancybox
                                           class="experience-gallery__link"></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hero-info experience-info">
            <div class="hero-info__stroke">
                <?php if (!empty($settings['TITLE_FACT_1_EXPERIENCE']['~VALUE']) && !empty($settings['TEXT_FACT_1_EXPERIENCE']['~VALUE']) && !empty($settings['ICON_FACT_1_EXPERIENCE']['VALUE'])): ?>
                    <div class="hero-info__item">
                        <div class="hero-info__desc">
                            <p class="hero-info__title js_has-counter"><?= $settings['TITLE_FACT_1_EXPERIENCE']['~VALUE'] ?></p>
                            <span class="hero-info__text">
                        <?= $settings['TEXT_FACT_1_EXPERIENCE']['~VALUE'] ?>
                    </span>
                        </div>
                        <picture class="hero-info__icon">
                            <img src="<?= CFile::GetPath($settings['ICON_FACT_1_EXPERIENCE']['VALUE']) ?>" alt="">
                        </picture>
                    </div>
                <?php endif; ?>
                <?php if (!empty($settings['TITLE_FACT_2_EXPERIENCE']['~VALUE']) && !empty($settings['TEXT_FACT_2_EXPERIENCE']['~VALUE']) && !empty($settings['ICON_FACT_2_EXPERIENCE']['VALUE'])): ?>
                    <div class="hero-info__item">
                        <div class="hero-info__desc">
                            <p class="hero-info__title js_has-counter"><?= $settings['TITLE_FACT_2_EXPERIENCE']['~VALUE'] ?></p>
                            <span class="hero-info__text">
                        <?= $settings['TEXT_FACT_2_EXPERIENCE']['~VALUE'] ?>
                    </span>
                        </div>
                        <picture class="hero-info__icon">
                            <img src="<?= CFile::GetPath($settings['ICON_FACT_2_EXPERIENCE']['VALUE']) ?>" alt="">
                        </picture>
                    </div>
                <?php endif; ?>
                <?php if (!empty($settings['TITLE_FACT_3_EXPERIENCE']['~VALUE']) && !empty($settings['TEXT_FACT_3_EXPERIENCE']['~VALUE']) && !empty($settings['ICON_FACT_3_EXPERIENCE']['VALUE'])): ?>
                    <div class="hero-info__item">
                        <div class="hero-info__desc">
                            <p class="hero-info__title js_has-counter"><?= $settings['TITLE_FACT_3_EXPERIENCE']['~VALUE'] ?></p>
                            <span class="hero-info__text">
                        <?= $settings['TEXT_FACT_3_EXPERIENCE']['~VALUE'] ?>
                    </span>
                        </div>
                        <picture class="hero-info__icon">
                            <img src="<?= CFile::GetPath($settings['ICON_FACT_3_EXPERIENCE']['VALUE']) ?>" alt="">
                        </picture>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

