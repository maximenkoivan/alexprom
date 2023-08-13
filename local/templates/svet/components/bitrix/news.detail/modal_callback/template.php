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

            <form class="modal__form modal__form--callback" action="/request/callback.php">
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
        <form class="call__form" action="/request/callback.php">
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
                        data-send-request="callback"><?= $arResult['PROPERTIES']['TEXT_BTN_MODAL_2']['~VALUE'] ?></button>
            </div>
        </form>
    </div>

</div>