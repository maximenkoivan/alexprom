<?php

use Bitrix\Main\Diag\Debug;
use classes\Models\Alpinism\Services\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';

$menuHide = $arResult['PROPERTIES']['MENUHIDE']['~VALUE'];
$GLOBALS['MENUHIDE'] = $menuHide === '' || $menuHide == 'Нет' ? true : false;
?>
<div class="section-flip section-flip--light">

    <?if(!empty($arResult['PROPERTIES']['PRICE']['~VALUE'])):?>
        <section class="section price priceTop">
            <div class="container">
                <div class="price-card">
                    <div class="price-card__section" style="color:#222222; text-decoration: none; border: none; background:none;">
                        <div class="price-table price-table-top">
                            <div class="price-table__row">
                                <div class="price-table__item">
                                    <span class="price-table__link"><?= $arResult['NAME'] ?></span>
                                </div>
                                <div class="price-table__item">
                                    <span class="price-table__qt"><?= $arResult['PROPERTIES']['PRICE']['~VALUE'] ?></span>
                                </div>
                                <div class="price-table__item">
                                    <button class="price-table__link" data-b_modal-open="modal-service" type="button">Заказать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </section>
    <?endif?>

    <section class="section storytell">

        <?//echo'<pre>';print_r($arResult['PROPERTIES']['PRICE']['VALUE']);echo'</pre>';?>

        <div class="container storytell__container">
            <?php if (!empty($arResult['~DETAIL_TEXT'])): ?>
                <div class="storytell__body">
                    <?= $arResult['~DETAIL_TEXT'] ?>
                </div>
            <?php else: ?>
                <?php foreach ($arResult['PROPERTIES']['TEXT']['~VALUE'] as $text):
                    if ($text['SUB_VALUES']['DESC']['~VALUE']) {
                        $text['SUB_VALUES']['DESC']['~VALUE']['TEXT'] = str_replace(
                            '<iframe',
                            '<iframe loading="lazy"',
                            $text['SUB_VALUES']['DESC']['~VALUE']['TEXT'],
                        );
                    }

                    ?>
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
                    <?php foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $image):
                        $arImg = array_change_key_case(
                            CFile::ResizeImageGet($image, ['width' => 600, 'height' => 600], BX_RESIZE_IMAGE_EXACT, true),
                            CASE_UPPER
                        );
                        ?>
                        <picture class="services-highlights__pic">
                            <?php if ($webp = makeWebp($arImg['SRC'])) { ?>
                                <source type="image/webp" srcset="<?=$webp?>">
                            <? } ?>
                            <img class="services-highlights__img" loading="lazy" src="<?= $arImg['SRC'] ?>" alt="">
                        </picture>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php
    // Подтягиваем детальные Вопросы-ответы
    if($arResult['PROPERTIES']['TEXT_QUESTIONS']['~VALUE']){
        $GLOBALS['SERVICES_QUESTIONS'] = $arResult['PROPERTIES']['TEXT_QUESTIONS'];
    }
    // Подтягиваем детальные Вопросы-ответы end
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_DETAIL_PAGE');
    foreach ($settings as $code) {
        if($code === 'services' && $GLOBALS['MENUHIDE']) continue;

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
