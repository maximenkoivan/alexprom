<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$formSettings = \classes\Models\Roofs\Feedback\FormSettings::getInstance();
$formData = $formSettings->getPropertiesByPostfix('FEEDBACK');
$commonFormData = $formSettings->getPropertiesByPostfix('COMMON');
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
?>
<section class="questions-sections">
    <div class="container">
        <div class="questions">
            <div class="title big">
                <?= $formData['TITLE_FEEDBACK']['~VALUE'] ?>
            </div>
            <p><?= $formData['SUBTITLE_FEEDBACK']['~VALUE'] ?></p>
            <div class="questions__form">
                <div class="form-index-block">
                    <form action="/request/roofs/feedback.php" class="form-index col gx-5">
                        <div data-form-group class="form-group">
                            <input type="text" name="name" class="form-control" id="inputName"
                                   placeholder="<?= $formData['PLH_1_FEEDBACK']['~VALUE'] ?>">
                        </div>
                        <div data-form-group class="form-group">
                            <input
                                    type="tel"
                                    name="phone"
                                    data-phone-mask
                                    class="form-control"
                                    id="phone"
                                    placeholder="<?= $formData['PLH_2_FEEDBACK']['~VALUE'] ?>"
                            >
                        </div>
                        <div style="display: none">
                            <input name="form" value="<?= $formData['FORM_NAME_FEEDBACK']['~VALUE'] ?>">
                            <input name="utm_source" value="<?= $request->get('utm_source') ?>">
                            <input name="utm_medium" value="<?= $request->get('utm_medium') ?>">
                            <input name="utm_campaign" value="<?= $request->get('utm_campaign') ?>">
                            <input name="utm_term" value="<?= $request->get('utm_term') ?>">
                            <input name="utm_content" value="<?= $request->get('utm_content') ?>">
                        </div>
                        <button data-ok-title='<?= $formData['TITLE_SUCCESS_FEEDBACK']['~VALUE'] ?>".'
                                data-ok-text="<?= $formData['TEXT_SUCCESS_FEEDBACK']['~VALUE'] ?>"
                                class="btn btn-blue form-field" data-send-request="callbackRoofs">
                            <span><?= $formData['TEXT_BTN_FEEDBACK']['~VALUE'] ?></span>
                        </button>
                        <div class="form-field__text">
                            <p>
                                <?= $commonFormData['TEXT_COMMON']['~VALUE'] ?>
                                <a href="<?= $commonFormData['LINK_COMMON']['~VALUE'] ?>"
                                   target="_blank"><?= $commonFormData['TEXT_LINK_COMMON']['~VALUE'] ?></a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>