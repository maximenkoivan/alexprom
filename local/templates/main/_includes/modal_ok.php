<?php

use classes\Models\Alpinism\Feedback\FormSettings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = FormSettings::getInstance()->getElementByCode('modal-ok');
?>
<?php if (!empty($settings)): ?>
    <div class="modal-form b_modal" id="form-ok" data-closer-type="inner">
        <div class="modal-form__head">
            <h3 class="modal-form__title">
                <?= $settings['TITLE']['~VALUE'] ?>
            </h3>
            <p class="modal-form__desc">
                <?= $settings ['SUBTITLE']['~VALUE'] ?>
            </p>
        </div>
        <div class="modal-form__body">
            <button class="btn-main" type="submit" data-b_modal-close="form-ok"><?= $settings ['TEXT_BTN']['~VALUE'] ?></button>
        </div>
    </div>
<?php endif; ?>
