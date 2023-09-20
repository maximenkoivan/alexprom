<?php

use classes\Models\Alpinism\Feedback\FormSettings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = FormSettings::getInstance()->getElementByCode('modal-service');
?>
<div class="modal-form modal-service b_modal" id="<?= $settings['CODE'] ?>" data-closer-type="inner">
    <div class="modal-form__head">
        <h3 class="modal-form__title">
            <?= $settings ['TITLE']['~VALUE'] ?> <span class="modal-service__name"></span>
        </h3>
        <p class="modal-form__desc">
            <?= $settings ['SUBTITLE']['~VALUE'] ?>
        </p>
    </div>
    <div class="modal-form__body">
        <div class="form-vertical js_form" data-action="/request/main/feedback.php" method="post">
            <input type="hidden" name="service_name">
            <label class="input input-name form-control">
                <input
                        class="input__field"
                        name="user_name"
                        type="text"
                        placeholder="<?= $settings ['PLH_NAME']['~VALUE'] ?>"
                        autocomplete="name"
                        required
                >
            </label>

            <label class="input input-tel form-control">
                <input
                        class="input__field mask-tel"
                        required
                        name="user_tel"
                        type="tel"
                        placeholder="<?= $settings ['PLH_PHONE']['~VALUE'] ?>"
                        maxlength="25"
                        minlength="10"
                        autocomplete="tel"
                >
            </label>
            <input type="hidden" name="form_name" value="<?= $settings ['TEXT_BTN']['~VALUE'] ?>">
            <button class="btn-main" type="submit"><?= $settings ['TEXT_BTN']['~VALUE'] ?></button>
            <span class="form__agree"><?= $settings ['TEXT']['~VALUE'] ?> <a href="<?= $settings ['LINK']['~VALUE'] ?>" target="_blank"><?= $settings ['TEXT_LINK']['~VALUE'] ?></a></span>
        </div>
    </div>
</div>

