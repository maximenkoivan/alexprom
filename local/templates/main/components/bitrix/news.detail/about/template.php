<?php

use classes\Models\Alpinism\About\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';
$youtubeVideoId = \classes\Helpers\Generic::getYoutubeData($arResult['PROPERTIES']['LINK_VIDEO']['~VALUE'])['VIDEO'];
?>
<div class="section-flip section-flip--light">
    <?php if (!empty($arResult['~DETAIL_TEXT'])): ?>
        <section class="section storytell">
            <div class="container storytell__container">
                <div class="storytell__body">
                    <?= $arResult['~DETAIL_TEXT'] ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($youtubeVideoId)): ?>
        <div class="container">
            <div class="video">
                <?php if (!empty($arResult['PROPERTIES']['PREVIEW']['~VALUE'])): ?>
                    <picture class="video__preview-pic">
                        <img src="<?= CFile::GetPath($arResult['PROPERTIES']['PREVIEW']['~VALUE']) ?>"
                             alt="<?= $arResult['PROPERTIES']['PREVIEW']['DESCRIPTION'] ?>"
                             class="video__preview-img">
                    </picture>
                <?php endif; ?>
                <a href="https://www.youtube.com/watch?v=<?= $youtubeVideoId ?>" data-fancybox class="play-cover"></a>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
