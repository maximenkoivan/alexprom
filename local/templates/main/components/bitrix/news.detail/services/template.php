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
        <section class="section storytell">
            <div class="container storytell__container">
                <?php if (!empty($arResult['~DETAIL_TEXT'])): ?>
                    <div class="storytell__body">
                        <?= $arResult['~DETAIL_TEXT'] ?>
                    </div>
                <?php else: ?>
                    <?php foreach ($arResult['PROPERTIES']['TEXT']['~VALUE'] as $text): ?>
                        <?php if (!empty($arResult['TITLES'])): ?>
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
                        <?php else: ?>
                            <div class="storytell__body">
                                <?= $text['SUB_VALUES']['DESC']['~VALUE']['TEXT'] ?? '' ?>
                            </div>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
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

<?php
$data = [
    '@context' => 'http://schema.org',
    '@type' => 'Product',
    'name' => $arResult['NAME'],
    'image' => 'https://alexprom.ru' . $arResult['DETAIL_PICTURE']['SRC'],
    'offers' => [
        '@type' => 'AggregateOffer',
        'lowPrice' => intval(preg_replace('/[^0-9]+/', '', $arResult['PROPERTIES']['PRICE']['VALUE']), 10),
        'priceCurrency' => 'RUB',
    ]
];

$data = json_encode($data);

echo '<script type="application/ld+json">' . $data . '</script>';
?>
