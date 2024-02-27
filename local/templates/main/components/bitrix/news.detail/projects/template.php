<?php

use classes\Models\Alpinism\Projects\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';
?>
<div class="section-flip section-flip--light" id="project">
    <section class="section storytell">
        <div class="container storytell__container">
            <div class="storytell__head">
                <h2 class="title-h2 storytell__title">
                    <?= $arResult['PROPERTIES']['TITLE_DETAIL_DESC']['~VALUE'] ?>
                </h2>
            </div>
            <div class="storytell__body">
                <?= $arResult['~DETAIL_TEXT'] ?>
            </div>
        </div>
    </section>

    <div class="project-highlights">
        <div class="container project-highlights__container">
            <?php if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])): ?>
                <div class="project-highlights__gallery">
                    <div class="swiper project-highlights-carousel">
                        <div class="swiper-wrapper">
                            <?php foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $imageId):
                                $filePath = array_change_key_case(
                                    CFile::ResizeImageGet($imageId, ['width' => 600, 'height' => 600], BX_RESIZE_IMAGE_PROPORTIONAL),
                                    CASE_UPPER
                                )['SRC'];
                                ?>
                                <div class="swiper-slide project-highlights-carousel__slide">
                                    <picture class="project-highlights-carousel__pic">
                                        <?php if ($webp = makeWebp($filePath)) { ?>
                                            <source type="image/webp" srcset="<?=$webp?>">
                                        <?php } ?>
                                        <img class="project-highlights-carousel__img" loading="lazy"
                                             src="<?= $filePath ?>"
                                             alt="<?= $arResult['PROPERTIES']['GALLERY']['DESCRIPTON'][$key] ?>">
                                    </picture>
                                    <a class="project-highlights-carousel__link" data-fancybox
                                       href="<?= CFile::GetPath($imageId) ?>"></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_DETAIL_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
