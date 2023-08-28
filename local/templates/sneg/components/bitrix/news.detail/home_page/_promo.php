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
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_PROMO']['~VALUE']) ?>');"
         class="promo">
    <div class="container">
        <div class="promo__wrapper">
            <div class="promo__left">
                <div class="promo__heading">
                    <h1 class="promo__title">
                        <?= $arResult['PROPERTIES']['TITLE_PROMO']['~VALUE'] ?>
                    </h1>
                    <?php foreach ($arResult['PROPERTIES']['SUBTITLE_PROMO']['~VALUE'] as $key => $text): ?>
                        <div class="promo__subtitle <?= $key === array_key_last($arResult['PROPERTIES']['SUBTITLE_PROMO']['~VALUE']) ? 'promo__subtitle--arrow' : '' ?>">
                            <?= $text ?>
                        </div>
                        <br>
                    <?php endforeach; ?>
                </div>

                <form action="/request/test.php" class="promo__form">
                    <div class="form-group" data-form-group>
                        <label class="nx-dynamic-label" data-dynamic-label>
                            <input type="text"
                                   class="nx-dynamic-label__input nx-form-element"
                                   name="name"
                                   data-dynamic-inp>
                            <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_1_DISCOUNT']['~VALUE'] ?></span>
                        </label>
                    </div>
                    <div class="form-group" data-form-group>
                        <label class="nx-dynamic-label" data-dynamic-label>
                            <input type="text"
                                   class="nx-dynamic-label__input nx-form-element"
                                   name="phone"
                                   data-dynamic-inp
                                   data-phone-mask>
                            <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_2_DISCOUNT']['~VALUE'] ?></span>
                        </label>
                    </div>
                    <div class="promo__submit">
                        <button data-ok-title="<?= $arResult['FORM_SETTINGS']['TITLE_FINAL_MSG_DISCOUNT']['~VALUE'] ?>"
                                data-ok-text="<?= $arResult['FORM_SETTINGS']['TEXT_FINAL_MSG_DISCOUNT']['~VALUE'] ?>"
                                type="submit"
                                class="btn btn--primary btn--md"
                                data-send-request="discountSnow"><?= $arResult['FORM_SETTINGS']['TEXT_BTN_DISCOUNT']['~VALUE'] ?>
                        </button>
                    </div>
                </form>
            </div>

            <?php if (!empty($arResult['PROPERTIES']['DESC_PROMO']['~VALUE']['TEXT'])): ?>
                <div class="promo__right">
                    <?php if (!empty($arResult['PROPERTIES']['IMAGE_PROMO']['~VALUE'])): ?>
                        <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_PROMO']['~VALUE']) ?>" alt="">
                    <?php endif; ?>
                    <?= $arResult['PROPERTIES']['DESC_PROMO']['~VALUE']['TEXT'] ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="promo__bottom factoids">
            <?php if (!empty($arResult['PROPERTIES']['FACT_1_PROMO']['~DESCRIPTION']) && !empty($arResult['PROPERTIES']['FACT_1_PROMO']['~VALUE'])): ?>
                <div class="factoids__item">
                    <div data-anim-num="<?= $arResult['PROPERTIES']['FACT_1_PROMO']['~DESCRIPTION'] ?>"
                         class="factoids__number">
                        <?= Generic::separate($arResult['PROPERTIES']['FACT_1_PROMO']['~DESCRIPTION']) ?>
                    </div>
                    <div class="factoids__text">
                        <?= $arResult['PROPERTIES']['FACT_1_PROMO']['~VALUE'] ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($arResult['PROPERTIES']['FACT_2_PROMO']['~DESCRIPTION']) && !empty($arResult['PROPERTIES']['FACT_2_PROMO']['~VALUE'])): ?>
                <div class="factoids__item">
                    <div data-anim-num="<?= $arResult['PROPERTIES']['FACT_2_PROMO']['~DESCRIPTION'] ?>"
                         class="factoids__number">
                        <?= Generic::separate($arResult['PROPERTIES']['FACT_2_PROMO']['~DESCRIPTION']) ?>
                    </div>
                    <div class="factoids__text">
                        <?= $arResult['PROPERTIES']['FACT_2_PROMO']['~VALUE'] ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($arResult['PROPERTIES']['FACT_3_PROMO']['~DESCRIPTION']) && !empty($arResult['PROPERTIES']['FACT_3_PROMO']['~VALUE'])): ?>
                <div class="factoids__item">
                    <div class="factoids__number">
                        <span data-anim-num="<?= $arResult['PROPERTIES']['FACT_3_PROMO']['~DESCRIPTION'] ?>">
                            <?= $arResult['PROPERTIES']['FACT_3_PROMO']['~DESCRIPTION'] ?>
                        </span><?= Generic::separate($arResult['PROPERTIES']['FACT_3_PROMO']['~DESCRIPTION']) ?>
                    </div>
                    <div class="factoids__text">
                        <?= $arResult['PROPERTIES']['FACT_3_PROMO']['~VALUE'] ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (!empty($arResult['PROPERTIES']['FACT_4_PROMO']['~DESCRIPTION']) && !empty($arResult['PROPERTIES']['FACT_4_PROMO']['~VALUE'])): ?>
                <div class="factoids__item">
                    <div data-anim-num="<?= $arResult['PROPERTIES']['FACT_4_PROMO']['~DESCRIPTION'] ?>"
                         class="factoids__number">
                        <?= Generic::separate($arResult['PROPERTIES']['FACT_4_PROMO']['~DESCRIPTION']) ?>
                    </div>
                    <div class="factoids__text">
                        <?= $arResult['PROPERTIES']['FACT_4_PROMO']['~VALUE'] ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>