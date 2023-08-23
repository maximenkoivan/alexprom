<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_PRESENT']['VALUE']) ?>');"
         class="mistakes">
    <div class="container">
        <div class="mistakes__wrapper">
            <div class="mistakes__heading">
                <h2 class="mistakes__title">
                    <?= $arResult['PROPERTIES']['TITLE_PRESENT']['~VALUE'] ?>
                </h2>
                <div class="mistakes__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_PRESENT']['~VALUE'] ?></div>
            </div>

            <div class="mistakes__row">
                <div class="mistakes__image">
                    <?php if (!empty($arResult['PROPERTIES']['IMAGE_PRESENT']['VALUE'])): ?>
                        <img width="776" height="426"
                             src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_PRESENT']['VALUE']) ?>" alt=" ">
                    <?php endif; ?>
                </div>

                <form action="/request/snow/feedback.php" class="mistakes__form">
                    <h3 class="mistakes__form-title"><?= $arResult['FORM_SETTINGS']['TITLE_PRESENT']['~VALUE'] ?></h3>
                    <div class="mistakes__form-subtitle"><?= $arResult['FORM_SETTINGS']['SUBTITLE_PRESENT']['~VALUE'] ?></div>
                    <div class="form-group" data-form-group>
                        <label class="nx-dynamic-label" data-dynamic-label>
                            <input type="email"
                                   class="nx-dynamic-label__input nx-form-element"
                                   name="email"
                                   data-dynamic-inp>
                            <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_1_PRESENT']['~VALUE'] ?></span>
                        </label>
                    </div>

                    <div class="form-group" data-form-group>
                        <label class="nx-dynamic-label" data-dynamic-label>
                            <input type="text"
                                   class="nx-dynamic-label__input nx-form-element"
                                   name="phone"
                                   data-dynamic-inp
                                   data-phone-mask>
                            <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_2_PRESENT']['~VALUE'] ?></span>
                        </label>
                    </div>

                    <div data-order-note class="mistakes__form-note">
                        <?= $arResult['FORM_SETTINGS']['TEXT_COMMON']['~VALUE'] ?>
                        <a href="<?= $arResult['FORM_SETTINGS']['LINK_COMMON']['~VALUE'] ?>" target="_blank">
                            <?= $arResult['FORM_SETTINGS']['TEXT_LINK_COMMON']['~VALUE'] ?>
                        </a>
                    </div>

                    <div class="mistakes__form-btn">
                        <button data-ok-title="<?= $arResult['FORM_SETTINGS']['TITLE_FINAL_MSG_PRESENT']['~VALUE'] ?>"
                                data-ok-text="<?= $arResult['FORM_SETTINGS']['TEXT_FINAL_MSG_PRESENT']['~VALUE'] ?>"
                                type="submit"
                                class="btn btn--primary btn--lg"
                                data-send-request="presentationSnow"><?= $arResult['FORM_SETTINGS']['TEXT_BTN_PRESENT']['~VALUE'] ?>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>