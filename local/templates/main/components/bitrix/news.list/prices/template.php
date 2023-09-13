<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
include '_promo.php';
?>
<div class="section-flip section-flip--light">
    <div class="section price">
        <div class="container">
            <div class="price-card">
                <?php foreach ($arResult['SECTIONS'] as $section): ?>
                    <div class="price-card__section" style="color:#222222; text-decoration: none; border: none; background:none;">
                        <div class="price-card__title" style="color:#222222; text-decoration: none; border: none; background:none;"><?= $section['NAME'] ?></div>
                        <div class="price-table">
                            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                                <?php if ($section['ID'] === $arItem['IBLOCK_SECTION_ID'] && !empty($arItem['PROPERTIES']['PRICE']['~VALUE'])): ?>
                                    <div class="price-table__row">
                                        <div class="price-table__item">
                                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="price-table__link"><?= $arItem['NAME'] ?></a>
                                        </div>
                                        <div class="price-table__item">
                                            <span class="price-table__qt"><?= $arItem['PROPERTIES']['PRICE']['~VALUE'] ?></span>
                                        </div>
                                        <div class="price-table__item">
                                            <?php if (!empty($arResult['PAGE_SETTINGS']['TEXT_BTN_2']['~VALUE'])): ?>
                                                <button class="price-table__link" data-b_modal-open="modal-service"
                                                        type="button"><?= $arResult['PAGE_SETTINGS']['TEXT_BTN_2']['~VALUE'] ?>
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (!empty($arResult['PAGE_SETTINGS']['TEXT_BTN_3']['~VALUE'])): ?>
                <div class="section__buttons">
                    <a href="/services/"
                       class="btn-primary prices__button"><?= $arResult['PAGE_SETTINGS']['TEXT_BTN_3']['~VALUE'] ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
