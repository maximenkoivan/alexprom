<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_PRESENT_2']['VALUE']) ?>');"
         class="cake">
    <div class="container">
        <div class="cake__wrapper">
            <form action="/request/snow/feedback.php" class="cake__form">
                <h3 class="cake__form-title">
                    <?= $arResult['FORM_SETTINGS']['TITLE_PRESENT_2']['~VALUE'] ?>
                </h3>
                <div class="cake__form-subtitle"><?= $arResult['FORM_SETTINGS']['SUBTITLE_PRESENT_2']['~VALUE'] ?></div>
                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="name"
                               data-dynamic-inp>
                        <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_1_PRESENT_2']['~VALUE'] ?></span>
                    </label>
                </div>

                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="phone"
                               data-dynamic-inp
                               data-phone-mask>
                        <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_2_PRESENT_2']['~VALUE'] ?></span>
                    </label>
                </div>

                <div data-order-note class="cake__form-note">
                    <?= $arResult['FORM_SETTINGS']['TEXT_COMMON']['~VALUE'] ?>
                    <a href="<?= $arResult['FORM_SETTINGS']['LINK_COMMON']['~VALUE'] ?>"
                       target="_blank"><?= $arResult['FORM_SETTINGS']['TEXT_LINK_COMMON']['~VALUE'] ?></a>
                </div>

                <div class="cake__form-btn">
                    <button data-ok-title="<?= $arResult['FORM_SETTINGS']['TITLE_FINAL_MSG_PRESENT_2']['~VALUE'] ?>"
                            data-ok-text="<?= $arResult['FORM_SETTINGS']['TEXT_FINAL_MSG_PRESENT_2']['~VALUE'] ?>"
                            type="submit"
                            class="btn btn--primary btn--lg"
                            data-send-request="applicationSnow"><?= $arResult['FORM_SETTINGS']['TEXT_BTN_PRESENT_2']['~VALUE'] ?></button>
                </div>

            </form>
            <div class="cake__image">
                <?php if (!empty($arResult['PROPERTIES']['IMAGE_PRESENT_2']['VALUE'])): ?>
                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_PRESENT_2']['VALUE']) ?>" alt=" ">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>