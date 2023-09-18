<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$advantagesBlockStyle = !empty($arResult['PAGE_SETTINGS']['DESC_1']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_2']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_3']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_4']['~VALUE']) ? '' : 'hero--no-bullets';
?>
<main class="hero hero--has-breadcrumbs <?= $advantagesBlockStyle ?>">
    <div class="hero__thumb">
        <?php if (!empty($arResult['PAGE_SETTINGS']['BG_IMAGE']['VALUE'])): ?>
            <picture class="hero__pic">
                <img class="hero__img" src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['BG_IMAGE']['VALUE']) ?>"
                     alt="<?= $arResult['PAGE_SETTINGS']['BG_IMAGE']['DESCRIPTION'] ?>">
            </picture>
        <?php endif; ?>
        <div class="container hero__container">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">
                            Главная
                        </a>
                    </li>
                    <li class="breadcrumbs__item">Цены</li>
                </ul>
            </div>
            <h1 class="title-h1 hero__title">
                <?= $arResult['PAGE_SETTINGS']['TITLE']['~VALUE'] ?>
            </h1>
            <p class="hero__desc"><?= $arResult['PAGE_SETTINGS']['SUBTITLE']['~VALUE'] ?></p>
            <?php if (!empty($arResult['PAGE_SETTINGS']['TEXT_BTN_1']['~VALUE'])): ?>
                <div class="hero__form js_form" data-action="/request/main/feedback.php">
                    <label class="input input-tel form-control">
                        <input class="input__field mask-tel" required name="user_tel" type="tel"
                               placeholder="<?= $arResult['PAGE_SETTINGS']['PLACEHOLDER']['~VALUE'] ?>" maxlength="25"
                               minlength="10" autocomplete="tel">
                    </label>
                    <input type="hidden" name="form_name" value="<?= $arResult['PAGE_SETTINGS']['TEXT_BTN_1']['~VALUE'] ?>">
                    <button class="hero__btn"
                            type="submit"><?= $arResult['PAGE_SETTINGS']['TEXT_BTN_1']['~VALUE'] ?></button>
                </div>
            <?php endif; ?>
            <?php if (!$advantagesBlockStyle): ?>
                <div class="hero-info">
                    <div class="hero-info__stroke">
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_1']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_1']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_1']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_1']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_1']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_2']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_2']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_2']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_2']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_2']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_3']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_3']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_3']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_3']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_3']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_4']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_4']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_4']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_4']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_4']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($arResult['PAGE_SETTINGS']['BG_IMAGE_MOB']['VALUE'])): ?>
            <picture class="hero__worker">
                <img class="hero__worker-img"
                     src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['BG_IMAGE_MOB']['VALUE']) ?>"
                     alt="<?= $arResult['PAGE_SETTINGS']['BG_IMAGE_MOB']['DESCRIPTION'] ?>">
            </picture>
        <?php endif; ?>
    </div>
</main>