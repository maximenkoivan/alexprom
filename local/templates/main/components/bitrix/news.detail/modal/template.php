<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<div class="modal-form b_modal" id="<?= $arResult['CODE'] ?>" data-closer-type="inner">
    <div class="modal-form__head">
        <h3 class="modal-form__title">
            <?= $arResult['PROPERTIES']['TITLE']['~VALUE'] ?>
        </h3>
        <p class="modal-form__desc">
            <?= $arResult['PROPERTIES']['SUBTITLE']['~VALUE'] ?>
        </p>
    </div>
    <div class="modal-form__body">
        <div data-action="/request/main/feedback.php" class="form-vertical js_form">
            <label class="input input-name form-control">
                <input
                        class="input__field"
                        name="user_name"
                        type="text"
                        placeholder="<?= $arResult['PROPERTIES']['PLH_NAME']['~VALUE'] ?>"
                        autocomplete="name"
                >
            </label>
            <label class="input input-tel form-control">
                <input
                        class="input__field mask-tel"
                        required
                        name="user_tel"
                        type="tel"
                        placeholder="<?= $arResult['PROPERTIES']['PLH_PHONE']['~VALUE'] ?>"
                        maxlength="25"
                        minlength="10"
                        autocomplete="tel"
                >
            </label>
            <input type="hidden" name="form_name" value="<?= $arResult['PROPERTIES']['TEXT_BTN']['~VALUE'] ?>">
            <button class="btn-main" type="submit"><?= $arResult['PROPERTIES']['TEXT_BTN']['~VALUE'] ?></button>
            <span class="form__agree"><?= $arResult['PROPERTIES']['TEXT']['~VALUE'] ?> <a
                        href="<?= $arResult['PROPERTIES']['LINK']['~VALUE'] ?>"
                        target="_blank"><?= $arResult['PROPERTIES']['TEXT_LINK']['~VALUE'] ?></a></span>
        </div>
    </div>
</div>

