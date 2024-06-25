<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="calculate-sections">
    <div class="block-ellipse">
        <img src="<?= SITE_TEMPLATE_PATH ?>/local/templates/krovli/assets/images/block-ellipse.png" alt=" ">
    </div>
    <div class="container">
        <div class="calculate">
            <div class="title big">
                <?= $arResult['PROPERTIES']['TITLE_CALCULATE']['~VALUE'] ?>
            </div>
            <div class="calculate__info">
                <?= $arResult['PROPERTIES']['SUBTITLE_CALCULATE']['~VALUE'] ?>
            </div>
            <div class="calculate__pic">
                <?php if (!empty($arResult['PROPERTIES']['IMAGE_DESKTOP_CALCULATE']['VALUE'])): ?>
                    <img class="desktop"
                         src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_DESKTOP_CALCULATE']['VALUE']) ?>"
                         alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_DESKTOP_CALCULATE']['~DESCRIPTION']) ?>">
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['IMAGE_TABLET_CALCULATE']['VALUE'])): ?>
                    <img class="tablet"
                         src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_TABLET_CALCULATE']['VALUE']) ?>"
                         alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_TABLET_CALCULATE']['~DESCRIPTION']) ?>">
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['IMAGE_MOBILE_CALCULATE']['VALUE'])): ?>
                    <img class="mobile"
                         src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_MOBILE_CALCULATE']['VALUE']) ?>"
                         alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_MOBILE_CALCULATE']['~DESCRIPTION']) ?>">
                <?php endif; ?>
            </div>
            <div class="calculate__buttons">
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_1_CALCULATE']['~VALUE'])): ?>
                    <button class="btn btn-blue" data-custom-open="callback">
                        <?= $arResult['PROPERTIES']['TEXT_BTN_1_CALCULATE']['~VALUE'] ?>
                    </button>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_2_CALCULATE']['~VALUE'])): ?>
                    <button class="btn btn-orange" data-custom-open="calculator">
                        <?= $arResult['PROPERTIES']['TEXT_BTN_2_CALCULATE']['~VALUE'] ?>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>