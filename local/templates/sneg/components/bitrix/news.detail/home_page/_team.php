<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="team">
    <div class="container">
        <?php if (!empty($arResult['PROPERTIES']['IMAGE_TEAM']['VALUE'])): ?>
            <div class="team__image">
                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_TEAM']['VALUE']) ?>" alt="">
            </div>
        <?php endif; ?>
        <div class="team__wrapper">
            <div class="team__heading">
                <h2 class="team__title">
                    <?= $arResult['PROPERTIES']['TITLE_TEAM']['~VALUE']['TEXT'] ?>
                </h2>
            </div>
            <div class="team__text">
                <?= $arResult['PROPERTIES']['TEXT_TEAM']['~VALUE']['TEXT'] ?>
            </div>
            <?php if (!empty($arResult['PROPERTIES']['DESC_IMAGE_TEAM']['~VALUE']['TEXT']) && !empty($arResult['PROPERTIES']['IMAGE_TEAM']['VALUE'])): ?>
                <div class="team__note">
                    <?= $arResult['PROPERTIES']['DESC_IMAGE_TEAM']['~VALUE']['TEXT'] ?>
                </div>
            <?php endif; ?>
            <div class="team__row">
                <?php if (!empty($arResult['PROPERTIES']['DESC_LEFT_TEAM']['~VALUE'])): ?>
                    <div class="team__item">
                        <div class="team__item-top">
                            <?php if (!empty($arResult['PROPERTIES']['IMAGE_LEFT_TEAM']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_LEFT_TEAM']['VALUE']) ?>"
                                     alt=" ">
                            <?php endif; ?>
                            <span><?= $arResult['PROPERTIES']['TITLE_LEFT_TEAM']['~VALUE'] ?></span>
                        </div>
                        <p><?= $arResult['PROPERTIES']['DESC_LEFT_TEAM']['~VALUE'] ?></p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['DESC_RIGHT_TEAM']['~VALUE'])): ?>
                    <div class="team__item">
                        <div class="team__item-top">
                            <?php if (!empty($arResult['PROPERTIES']['IMAGE_LEFT_TEAM']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_RIGHT_TEAM']['VALUE']) ?>"
                                     alt=" ">
                            <?php endif; ?>
                            <span><?= $arResult['PROPERTIES']['TITLE_RIGHT_TEAM']['~VALUE'] ?></span>
                        </div>
                        <p><?= $arResult['PROPERTIES']['DESC_RIGHT_TEAM']['~VALUE'] ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="team__btn">
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_TEAM']['VALUE'])): ?>
                    <button class="btn btn--primary btn--md"
                            data-custom-open="modal-callback"><?= $arResult['PROPERTIES']['TEXT_BTN_TEAM']['VALUE'] ?>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>