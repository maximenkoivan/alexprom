<?php

use classes\Models\Alpinism\Services\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';
?>
<div class="section-flip section-flip--light">
    <?php if (!empty($arResult['PROPERTIES']['TEXT']['~VALUE'])): ?>
        <section class="section storytell">
            <div class="container storytell__container">
                <?php foreach ($arResult['PROPERTIES']['TEXT']['~VALUE'] as $text): ?>
                    <div class="storytell__section">
                        <div class="storytell__head">
                            <h2 class="title-h2 storytell__title">
                                <?= $text['SUB_VALUES']['TITLE']['~VALUE'] ?>
                            </h2>
                        </div>
                        <div class="storytell__body">
                            <?= $text['SUB_VALUES']['DESC']['~VALUE']['TEXT'] ?? '' ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($arResult["PROPERTIES"]["GALLERY"]["VALUE"])): ?>
        <div class="section services-highlights">
            <div class="container">
                <div class="services-highlights__gallery">
                    <?php foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $image): ?>
                        <picture class="services-highlights__pic">
                            <img class="services-highlights__img lazy" src="<?= CFile::GetPath($image) ?>" alt="">
                        </picture>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_DETAIL_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
