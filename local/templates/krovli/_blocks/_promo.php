<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="top-index-sections">
    <div class="top-index-sections__form">
        <?php if (!empty($arResult['PROPERTIES']['IMAGE_PROMO']['VALUE'])): ?>
            <div class="bg bg--promo">
                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_PROMO']['VALUE']) ?>"
                     alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_PROMO']['~DESCRIPTION']) ?>">
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="flex-row">
                <div class="flex-col md-12">
                    <div class="title big">
                        <?= $arResult['PROPERTIES']['TITLE_PROMO']['~VALUE'] ?>
                    </div>
                    <div class="guarantee">
                        <?= $arResult['PROPERTIES']['SUBTITLE_PROMO']['~VALUE'] ?>
                    </div>
                    <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_1_PROMO']['~VALUE'])): ?>
                        <button class="btn btn-blue" data-custom-open="modal-order" type="submit">
                            <span><?= $arResult['PROPERTIES']['TEXT_BTN_1_PROMO']['~VALUE'] ?></span>
                        </button>
                    <?php endif; ?>
                    <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_2_PROMO']['~VALUE'])): ?>
                        <button class="btn btn-orange" data-custom-open="modal-order" type="submit">
                            <?= $arResult['PROPERTIES']['TEXT_BTN_2_PROMO']['~VALUE'] ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
