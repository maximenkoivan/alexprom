<?php

use classes\Models\Alpinism\HomePage\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
$advantagesBlockStyle = !empty($arResult['PROPERTIES']['DESC_1']['~VALUE'])
|| !empty($arResult['PROPERTIES']['DESC_2']['~VALUE'])
|| !empty($arResult['PROPERTIES']['DESC_3']['~VALUE'])
|| !empty($arResult['PROPERTIES']['DESC_4']['~VALUE']) ? '' : 'hero--no-bullets';
?>
<main class="hero parallax">
    <div class="hero__thumb">
        <?php if (!empty($arResult['PROPERTIES']['BG_IMAGE']['VALUE'])): ?>
            <picture class="hero__pic">
                <img class="hero__img" src="<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE']['VALUE']) ?>"
                     alt="<?= $arResult['PROPERTIES']['BG_IMAGE']['DESCRIPTION'] ?>">
            </picture>
        <?php endif; ?>
        <div class="container hero__container">
            <h1 class="title-h1 hero__title">
                <?= $arResult['PROPERTIES']['TITLE_PAGE']['~VALUE'] ?>
            </h1>
            <p class="hero__desc"><?= $arResult['PROPERTIES']['SUBTITLE']['~VALUE'] ?></p>
            <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN']['~VALUE'])): ?>
                <div class="hero__form js_form" data-action="/request/main/feedback.php">
                    <label class="input input-tel form-control">
                        <input class="input__field mask-tel" required name="user_tel" type="tel"
                               placeholder="<?= $arResult['PROPERTIES']['PLACEHOLDER']['~VALUE'] ?>" maxlength="25"
                               minlength="10" autocomplete="tel">
                    </label>
                    <button class="hero__btn"
                            type="submit"><?= $arResult['PROPERTIES']['TEXT_BTN']['~VALUE'] ?></button>
                </div>
            <?php endif; ?>
            <?php if (!$advantagesBlockStyle): ?>
                <div class="hero-info">
                    <div class="hero-info__stroke">
                        <?php if (!empty($arResult['PROPERTIES']['IMAGE_1']['VALUE']) && !empty($arResult['PROPERTIES']['DESC_1']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PROPERTIES']['DESC_1']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_1']['VALUE']) ?>"
                                         alt="<?= $arResult['PROPERTIES']['DESC_1']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['IMAGE_2']['VALUE']) && !empty($arResult['PROPERTIES']['DESC_2']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PROPERTIES']['DESC_2']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_2']['VALUE']) ?>"
                                         alt="<?= $arResult['PROPERTIES']['DESC_2']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['IMAGE_3']['VALUE']) && !empty($arResult['PROPERTIES']['DESC_3']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PROPERTIES']['DESC_3']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_3']['VALUE']) ?>"
                                         alt="<?= $arResult['PROPERTIES']['DESC_3']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PROPERTIES']['IMAGE_4']['VALUE']) && !empty($arResult['PROPERTIES']['DESC_4']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PROPERTIES']['DESC_4']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_4']['VALUE']) ?>"
                                         alt="<?= $arResult['PROPERTIES']['DESC_4']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($arResult['PROPERTIES']['BG_IMAGE_MOB']['VALUE'])): ?>
            <picture class="hero__worker">
                <img class="hero__worker-img"
                     src="<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_MOB']['VALUE']) ?>"
                     alt="<?= $arResult['PROPERTIES']['BG_IMAGE_MOB']['DESCRIPTION'] ?>">
            </picture>
        <?php endif; ?>
    </div>
</main>
<div class="section-flip section-flip--light">
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
