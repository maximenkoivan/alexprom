<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_ORDER']['VALUE']) ?>');"
         class="order-section">
    <div class="container">
        <div data-order class="order-section__wrapper">
            <div class="order__counter">
                <div data-order-counter class="order__counter-top">
                    <span>01</span>
                    <span>/ 03</span>
                </div>
                <div class="order__counter-bottom"><?= $arResult['PROPERTIES']['SUBTITLE_ORDER']['~VALUE'] ?></div>
            </div>
            <div class="order-section__heading">
                <h2 class="order-section__title">
                    <?= $arResult['PROPERTIES']['TITLE_ORDER']['~VALUE'] ?>
                </h2>
            </div>
            <form data-order-form action="/request/snow/feedback.php" class="order-section__form order__form">
                <div class="order__title"></div>
                <div data-order-step="1" class="order__step">
                    <div class="order__step-title">
                        <?= $arResult['FORM_SETTINGS']['TITLE_FORM_STEP_1_ORDER']['VALUE'] ?>
                    </div>
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <div class="form-group__title"><?= $arResult['FORM_SETTINGS']['TITLE_1_STEP_1_ORDER']['VALUE'] ?></div>
                            <select class="nx-form-element" name="type">
                                <?php foreach ($arResult['FORM_SETTINGS']['DESC_1_STEP_1_ORDER']['VALUE'] as $item): ?>
                                    <option value="<?= $item ?>"><?= $item ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div data-form-group class="form-group">
                            <div class="form-group__title"><?= $arResult['FORM_SETTINGS']['TITLE_2_STEP_1_ORDER']['VALUE'] ?></div>
                            <select class="nx-form-element" name="scope">
                                <?php foreach ($arResult['FORM_SETTINGS']['DESC_2_STEP_1_ORDER']['VALUE'] as $item): ?>
                                    <option value="<?= $item ?>"><?= $item ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="order__row">
                        <?php foreach ($arResult['FORM_SETTINGS']['RADIO_BTN_STEP_1_ORDER']['VALUE'] as $key => $item): ?>
                            <div data-form-group class="form-group">
                                <label class="checkbox checkbox--radio">
                                    <input type="radio"
                                           class="checkbox__input"
                                           value="<?= $item ?>"
                                           name="fence"
                                        <?= $key === array_key_first($arResult['FORM_SETTINGS']['RADIO_BTN_STEP_1_ORDER']['VALUE']) ? 'checked' : '' ?>>
                                    <span class="checkbox__text"><?= $item ?></span>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div data-order-step="2" class="order__step hidden">
                    <div class="order__step-title">
                        <?= $arResult['FORM_SETTINGS']['TITLE_FORM_STEP_2_ORDER']['VALUE'] ?>
                    </div>
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <div class="form-group__title"><?= $arResult['FORM_SETTINGS']['TITLE_1_STEP_2_ORDER']['VALUE'] ?></div>
                            <select class="nx-form-element" name="type_service">
                                <?php foreach ($arResult['FORM_SETTINGS']['DESC_1_STEP_2_ORDER']['VALUE'] as $item): ?>
                                    <option value="<?= $item ?>"><?= $item ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div data-form-group class="form-group">
                            <div class="form-group__title"><?= $arResult['FORM_SETTINGS']['TITLE_2_STEP_2_ORDER']['VALUE'] ?></div>
                            <select class="nx-form-element" name="area">
                                <?php foreach ($arResult['FORM_SETTINGS']['DESC_2_STEP_2_ORDER']['VALUE'] as $item): ?>
                                    <option value="<?= $item ?>"><?= $item ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div data-order-step="3" class="order__step hidden">
                    <div class="order__step-title">
                        <?= $arResult['FORM_SETTINGS']['TITLE_FORM_STEP_3_ORDER']['VALUE'] ?>
                    </div>
                    <div class="order__row">
                        <div data-form-group class="form-group">
                            <label class="nx-dynamic-label" data-dynamic-label>
                                <input type="text"
                                       class="nx-dynamic-label__input nx-form-element"
                                       name="name"
                                       data-dynamic-inp>
                                <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_1_STEP_3_ORDER']['VALUE'] ?></span>
                            </label>
                        </div>
                        <div data-form-group class="form-group">
                            <label class="nx-dynamic-label" data-dynamic-label>
                                <input type="text"
                                       class="nx-dynamic-label__input nx-form-element"
                                       name="phone"
                                       data-dynamic-inp
                                       data-phone-mask>
                                <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_2_STEP_3_ORDER']['VALUE'] ?></span>
                            </label>
                        </div>
                        <div data-form-group class="form-group">
                            <label class="nx-dynamic-label" data-dynamic-label>
                                <textarea type="text"
                                       class="nx-dynamic-label__input nx-form-element"
                                       name="comment"
                                          data-dynamic-inp></textarea>
                                <span class="nx-dynamic-label__text"><?= $arResult['FORM_SETTINGS']['PLH_3_STEP_3_ORDER']['VALUE'] ?></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="order__nav">
                    <a data-order-nav="next" data-nav="2"
                       class="btn btn--primary btn--md"><?= $arResult['FORM_SETTINGS']['TEXT_BTN_1_ORDER']['VALUE'] ?></a>
                    <a data-ok-title="<?= $arResult['FORM_SETTINGS']['TITLE_FINAL_MSG_ORDER']['VALUE'] ?>"
                       data-ok-text="<?= $arResult['FORM_SETTINGS']['TEXT_FINAL_MSG_ORDER']['VALUE'] ?>"
                       data-send-request="orderSnow"
                       class="btn btn--primary btn--md hidden"><?= $arResult['FORM_SETTINGS']['TEXT_BTN_2_ORDER']['VALUE'] ?></a>
                </div>
                <div data-order-note class="modal__note modal__note--order hidden">
                    <?= $arResult['FORM_SETTINGS']['TEXT_COMMON']['VALUE'] ?>
                    <a href="<?= $arResult['FORM_SETTINGS']['LINK_COMMON']['VALUE'] ?>" target="_blank">
                        <?= $arResult['FORM_SETTINGS']['TEXT_LINK_COMMON']['VALUE'] ?>
                    </a>
                </div>
            </form>
        </div>
        <?php if (!empty($arResult['PROPERTIES']['FOOTNOTE_ORDER']['~VALUE']['TEXT'])): ?>
            <div class="order-section__text">
                <?= $arResult['PROPERTIES']['FOOTNOTE_ORDER']['~VALUE']['TEXT'] ?>
            </div>
        <?php endif; ?>
    </div>
</section>