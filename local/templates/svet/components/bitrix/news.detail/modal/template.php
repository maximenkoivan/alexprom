<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<div id="modal-callback"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <a href="#"
               class="modal__close"
               aria-label="Close modal"
               data-custom-close>
                <svg data-custom-close height="30" width="30" class="call__icon">
                    <use xlink:href="#icon-x"></use>
                </svg>
            </a>

            <div class="h4 modal__title modal__title--callback"><?= $arResult['PROPERTIES']['TITLE_MODAL_1']['~VALUE'] ?></div>

            <div class="modal__text modal__text--callback"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_1']['~VALUE'] ?></div>

            <form class="modal__form modal__form--callback" action="/request/light/feedback.php">
                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="name"
                               data-dynamic-inp>
                        <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_NAME_MODAL_1']['~VALUE'] ?></span>
                    </label>
                    <br>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="phone"
                               data-dynamic-inp
                               data-phone-mask>
                        <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_PHONE_MODAL_1']['~VALUE'] ?></span>
                    </label>
                </div>

                <div class="modal__btn">
                    <button type="submit"
                            class="btn btn--primary btn--lg btn--b-r-5"
                            data-ok-title="<?= $arResult['PROPERTIES']['TITLE_FINAL_MSG__MODAL_1']['~VALUE'] ?>"
                            data-ok-text="<?= $arResult['PROPERTIES']['TEXT_FINAL_MSG__MODAL_1']['~VALUE'] ?>"
                            data-send-request="callback">
                        <?= $arResult['PROPERTIES']['TEXT_BTN_MODAL_1']['~VALUE'] ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="call">

    <div data-open-popup class="call__btn">
        <svg height="30" width="30" class="call__icon call__icon--open">
            <use xlink:href="#icon-call"></use>
        </svg>

        <svg height="30" width="30" class="call__icon call__icon--close">
            <use xlink:href="#icon-x"></use>
        </svg>
    </div>

    <div data-popup class="call__popup">
        <div class="call__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_2']['~VALUE'] ?></div>
        <form class="call__form" action="/request/light/feedback.php">
            <div class="form-group" data-form-group>
                <label class="nx-dynamic-label" data-dynamic-label>
                    <input type="text"
                           class="nx-dynamic-label__input nx-form-element"
                           name="name"
                           data-dynamic-inp>
                    <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_NAME_MODAL_2']['~VALUE'] ?></span>
                </label>
                <br>
                <label class="nx-dynamic-label" data-dynamic-label>
                    <input type="text"
                           class="nx-dynamic-label__input nx-form-element"
                           name="phone"
                           data-dynamic-inp
                           data-phone-mask>
                    <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_PHONE_MODAL_2']['~VALUE'] ?></span>
                </label>
            </div>

            <div class="call__submit">
                <button type="submit"
                        class="btn btn--primary btn--lg btn--b-r-5"
                        data-ok-title="<?= $arResult['PROPERTIES']['TITLE_FINAL_MSG__MODAL_2']['~VALUE'] ?>"
                        data-ok-text="<?= $arResult['PROPERTIES']['TEXT_FINAL_MSG__MODAL_2']['~VALUE'] ?>"
                        data-send-request="callback"><?= $arResult['PROPERTIES']['TEXT_BTN_MODAL_2']['~VALUE'] ?></button>
            </div>
        </form>
    </div>

</div>

<div id="modal-order"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <a href="#"
           class="modal__close"
           aria-label="Close modal"
           data-custom-close>
            <svg data-custom-close height="30" width="30" class="call__icon">
                <use xlink:href="#icon-x"></use>
            </svg>
        </a>

        <div class="modal__container modal__container--order" role="dialog" aria-modal="true">

            <div data-order class="order">

                <header class="order__header">
                    <div class="order__text--lg">
                        <?= $arResult['PROPERTIES']['TITLE_FORM_MODAL_3_STEP_7']['~VALUE']['TEXT'] ?>
                    </div>
                    <div class="order__text">
                        <?= $arResult['PROPERTIES']['TITLE_FORM_MODAL_3_STEP_1']['~VALUE']['TEXT'] ?>
                    </div>
                    <div data-order-counter class="order__counter">1/7</div>
                </header>

                <div class="order__progressbar">
                    <div data-order-progress class="order__progressbar--active"></div>
                </div>

                <form data-order-form class="order__form" action="/request/light/feedback.php">

                    <div data-order-select class="order__select">
                        <div data-order-step="1" class="order__step">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_1']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_1']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_1']['~VALUE'] as $text): ?>
                                    <label class="checkbox checkbox--radio">
                                        <input type="radio"
                                               class="checkbox__input"
                                               value="<?= $text ?>"
                                               name="place">
                                        <span class="checkbox__text"><?= $text ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="2" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_2']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_2']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_2']['~VALUE'] as $key => $picture): ?>
                                    <label class="checkbox checkbox--image">
                                        <input type="radio"
                                               class="checkbox__input"
                                               value="<?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_2']['DESCRIPTION'][$key] ?>"
                                               name="type">
                                        <div class="inner">
                                            <img src="<?= CFile::GetPath($picture) ?>" alt="">
                                        </div>
                                        <span class="checkbox__text"><?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_2']['DESCRIPTION'][$key] ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="3" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_3']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_3']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_3']['~VALUE'] as $key => $picture): ?>
                                    <label class="checkbox checkbox--image">
                                        <input type="checkbox"
                                               class="checkbox__input"
                                               value="<?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_3']['DESCRIPTION'][$key] ?>"
                                               name="where[]">
                                        <div class="inner">
                                            <img src="<?= CFile::GetPath($picture) ?>" alt="">
                                        </div>
                                        <span class="checkbox__text"><?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_3']['DESCRIPTION'][$key] ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="4" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_4']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_4']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group form-group--flex">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_4']['~VALUE'] as $key => $picture): ?>
                                    <label class="checkbox checkbox--image">
                                        <input type="radio"
                                               class="checkbox__input"
                                               value="<?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_4']['DESCRIPTION'][$key] ?>"
                                               name="style">
                                        <div class="inner">
                                            <img src="<?= CFile::GetPath($picture) ?>" alt="">
                                        </div>
                                        <span class="checkbox__text"><?= $arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_4']['DESCRIPTION'][$key] ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="5" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_5']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_5']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_5']['~VALUE'] as $text): ?>
                                    <label class="checkbox checkbox--radio">
                                        <input type="radio"
                                               class="checkbox__input"
                                               value="<?= $text ?>"
                                               name="size">
                                        <span class="checkbox__text"><?= $text ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="6" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_6']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_6']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group">
                                <?php foreach ($arResult['PROPERTIES']['VARIANTS__MODAL_3_STEP_6']['~VALUE'] as $text): ?>
                                    <label class="checkbox checkbox--radio">
                                        <input type="radio"
                                               class="checkbox__input"
                                               value="<?= $text ?>"
                                               name="date">
                                        <span class="checkbox__text"><?= $text ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <div class="order__error"><?= $arResult['PROPERTIES']['ERR_MESSAGE_MODAL_3']['~VALUE'] ?></div>
                        </div>
                        <div data-order-step="7" class="order__step hidden">
                            <div class="order__heading">
                                <div class="order__title"><?= $arResult['PROPERTIES']['TITLE_MODAL_3_STEP_7']['~VALUE'] ?></div>
                                <div class="order__subtitle"><?= $arResult['PROPERTIES']['SUBTITLE_MODAL_3_STEP_7']['~VALUE'] ?></div>
                            </div>
                            <div data-form-group class="form-group">
                                <label class="nx-dynamic-label" data-dynamic-label>
                                    <input type="text"
                                           class="nx-dynamic-label__input nx-form-element"
                                           name="name"
                                           data-dynamic-inp>
                                    <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_1_MODAL_3_STEP_7']['~VALUE'] ?></span>
                                </label>
                                <br>
                                <label class="nx-dynamic-label" data-dynamic-label>
                                    <input type="text"
                                           class="nx-dynamic-label__input nx-form-element"
                                           name="phone"
                                           data-dynamic-inp
                                           data-phone-mask>
                                    <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_2_MODAL_3_STEP_7']['~VALUE'] ?></span>
                                </label>
                                <br>
                                <label class="nx-dynamic-label" data-dynamic-label>
                                        <textarea data-autosize-textarea class="nx-dynamic-label__input nx-form-element" name="comment" data-dynamic-inp></textarea>
                                    <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_3_MODAL_3_STEP_7']['~VALUE'] ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="order__nav">
                        <a data-order-nav="prev" data-nav="1" class="btn btn--grey btn--lg btn--b-r-5">
                            <svg width="18" height="15">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                            <span><?= $arResult['PROPERTIES']['TEXT_BTN_1_MODAL_3']['~VALUE'] ?></span>
                        </a>
                        <a data-order-nav="next" data-nav="2" class="btn btn--primary btn--lg btn--right btn--b-r-5">
                            <span><?= $arResult['PROPERTIES']['TEXT_BTN_2_MODAL_3']['~VALUE'] ?></span>
                            <svg width="18" height="15">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                        </a>
                        <a data-send-request="order"
                           data-ok-title="<?= $arResult['PROPERTIES']['TITLE_FINAL_MSG__MODAL_3']['~VALUE'] ?>"
                           data-ok-text="<?= $arResult['PROPERTIES']['TEXT_FINAL_MSG__MODAL_3']['~VALUE'] ?>"
                           class="btn btn--primary btn--lg btn--right btn--b-r-5 hidden"><?= $arResult['PROPERTIES']['TEXT_BTN_3_MODAL_3']['~VALUE'] ?></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>