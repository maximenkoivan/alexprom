<?php

use classes\Helpers\Generic;
use classes\Models\Alpinism\Contacts\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';
?>
<div class="section-flip section-flip--light">
    <section class="section contacts">
        <div class="container contacts__container">
            <div class="contacts__gallery">
                <?php if (!empty($arResult['PROPERTIES']['TITLE_1_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_1_CONTENT']['~VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_1_CONTENT']['~VALUE'] ?>
                        </h3>
                        <p class="contacts-card__desc">
                            <a href="tel:<?= Generic::getCleanPhoneNumber($arResult['PROPERTIES']['DESC_1_CONTENT']['~VALUE']) ?>"><?= $arResult['PROPERTIES']['DESC_1_CONTENT']['~VALUE'] ?></a>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TITLE_2_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_2_CONTENT']['~VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_2_CONTENT']['~VALUE'] ?>
                        </h3>
                        <p class="contacts-card__desc">
                            <?= $arResult['PROPERTIES']['DESC_2_CONTENT']['~VALUE'] ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TITLE_3_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_3_CONTENT']['~VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_3_CONTENT']['~VALUE'] ?>
                        </h3>
                        <p class="contacts-card__desc">
                            <a href="mailto:<?= $arResult['PROPERTIES']['DESC_3_CONTENT']['~VALUE'] ?>"><?= $arResult['PROPERTIES']['DESC_3_CONTENT']['~VALUE'] ?></a>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TITLE_4_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_4_CONTENT']['~VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_4_CONTENT']['~VALUE'] ?>
                        </h3>
                        <p class="contacts-card__desc contacts-card__desc--bigger">
                            <?= $arResult['PROPERTIES']['DESC_4_CONTENT']['~VALUE'] ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TITLE_5_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_5_CONTENT']['VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_5_CONTENT']['~VALUE'] ?>
                        </h3>
                        <div class="contacts-card__socials socials">
                            <?php foreach ($arResult['PROPERTIES']['DESC_5_CONTENT']['VALUE'] as $key => $imageId): ?>
                                <a href="<?= $arResult['PROPERTIES']['DESC_5_CONTENT']['DESCRIPTION'][$key] ?>" target="_blank"
                                   class="socials__link">
                                    <div class="socials__icon">
                                        <img src="<?= CFile::GetPath($imageId) ?>" alt=""/>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TITLE_6_CONTENT']['~VALUE']) && !empty($arResult['PROPERTIES']['DESC_6_CONTENT']['VALUE'])): ?>
                    <div class="contacts-card">
                        <h3 class="contacts-card__title">
                            <?= $arResult['PROPERTIES']['TITLE_6_CONTENT']['~VALUE'] ?>
                        </h3>
                        <div class="contacts-card__socials socials">
                            <?php foreach ($arResult['PROPERTIES']['DESC_6_CONTENT']['VALUE'] as $key => $imageId): ?>
                                <a href="<?= $arResult['PROPERTIES']['DESC_6_CONTENT']['DESCRIPTION'][$key] ?>"
                                   class="socials__link">
                                    <svg class="socials__icon">
                                        <use href="<?= CFile::GetPath($imageId) ?>#<?= substr(CFile::GetFileArray($imageId)['ORIGINAL_NAME'], 0, 2) ?>"/>
                                    </svg>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
