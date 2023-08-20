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

            <div class="h4 modal__title modal__title--callback"><?= $arResult['PROPERTIES']['TITLE_CALLBACK']['~VALUE'] ?></div>

            <div class="modal__text modal__text--callback"><?= $arResult['PROPERTIES']['SUBTITLE_CALLBACK']['~VALUE'] ?></div>

            <form class="modal__form modal__form--callback" action="/request/snow/feedback.php">
                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="name"
                               data-dynamic-inp>
                        <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_1_CALLBACK']['~VALUE'] ?></span>
                    </label>
                </div>

                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="phone"
                               data-dynamic-inp
                               data-phone-mask>
                        <span class="nx-dynamic-label__text"><?= $arResult['PROPERTIES']['PLH_2_CALLBACK']['~VALUE'] ?></span>
                    </label>
                </div>
                <div data-order-note class="modal__note"><?= $arResult['PROPERTIES']['TEXT_COMMON']['~VALUE'] ?>
                    <a href="<?= $arResult['PROPERTIES']['LINK_COMMON']['~VALUE'] ?>"
                       target="_blank"><?= $arResult['PROPERTIES']['TEXT_LINK_COMMON']['~VALUE'] ?></a>
                </div>

                <div class="modal__btn">
                    <button data-ok-title="<?= $arResult['PROPERTIES']['TITLE_FINAL_MSG_CALLBACK']['~VALUE'] ?>"
                            data-ok-text="<?= $arResult['PROPERTIES']['TEXT_FINAL_MSG_CALLBACK']['~VALUE'] ?>"
                            type="submit"
                            class="btn btn--primary btn--lg btn--b-r-5"
                            data-send-request="callbackSnow"><?= $arResult['PROPERTIES']['TEXT_BTN_CALLBACK']['~VALUE'] ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
