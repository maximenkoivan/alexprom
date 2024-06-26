<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
?>


<div id="callback"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <header class="modal__header">
                <div class="title">
                    <?= $arResult['PROPERTIES']['TITLE_FEEDBACK']['~VALUE'] ?>
                </div>
                <a href="#"
                   class="modal__close"
                   aria-label="Close modal"
                   data-custom-close>
                    <svg data-custom-close height="30" width="30" class="call__icon">
                        <use xlink:href="#icon-x"></use>
                    </svg>
                </a>
            </header>
            <div class="form-index-block">
                <form action="/request/roofs/feedback.php" class="form-index col gx-5">
                    <div data-form-group class="form-group">
                        <input name="name" type="text" class="form-control" id="name"
                               placeholder="<?= $arResult['PROPERTIES']['PLH_1_FEEDBACK']['~VALUE'] ?>">
                    </div>
                    <div data-form-group class="form-group">
                        <input data-phone-mask name="phone" type="tel" class="form-control" id="phone"
                               placeholder="<?= $arResult['PROPERTIES']['PLH_2_FEEDBACK']['~VALUE'] ?>">
                    </div>
                    <div style="display: none">
                        <input name="form" value="<?= $arResult['PROPERTIES']['FORM_NAME_FEEDBACK']['~VALUE'] ?>">
                        <input name="utm_source" value="<?= $request->get('utm_source') ?>">
                        <input name="utm_medium" value="<?= $request->get('utm_medium') ?>">
                        <input name="utm_campaign" value="<?= $request->get('utm_campaign') ?>">
                        <input name="utm_term" value="<?= $request->get('utm_term') ?>">
                        <input name="utm_content" value="<?= $request->get('utm_content') ?>">
                    </div>
                    <button data-ok-title='<?= $arResult['PROPERTIES']['TITLE_SUCCESS_FEEDBACK']['~VALUE'] ?>'
                            data-ok-text="<?= $arResult['PROPERTIES']['TEXT_SUCCESS_FEEDBACK']['~VALUE'] ?>"
                            class="btn btn-blue" data-send-request="callbackRoofs" type="submit">
                        <?= $arResult['PROPERTIES']['TEXT_BTN_FEEDBACK']['~VALUE'] ?>
                    </button>
                    <div class="form-group__text">
                        <p>
                            <?= $arResult['PROPERTIES']['TEXT_COMMON']['~VALUE'] ?>
                            <a href="<?= $arResult['PROPERTIES']['LINK_COMMON']['~VALUE'] ?>"
                               target="_blank"><?= $arResult['PROPERTIES']['TEXT_LINK_COMMON']['~VALUE'] ?></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="order"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <header class="modal__header">
                <div class="title">
                    Сделать заказ
                </div>
                <a href="#"
                   class="modal__close"
                   aria-label="Close modal"
                   data-custom-close>
                    <svg data-custom-close height="30" width="30" class="call__icon">
                        <use xlink:href="#icon-x"></use>
                    </svg>
                </a>
            </header>
            <div class="form-index-block">
                <form action="/request/roofs/feedback.php" class="form-index col gx-5">
                    <div data-form-group class="form-group">
                        <input name="name" type="text" class="form-control" id="name"
                               placeholder="<?= $arResult['PROPERTIES']['PLH_1_FEEDBACK']['~VALUE'] ?>">
                    </div>
                    <div data-form-group class="form-group">
                        <input data-phone-mask name="phone" type="tel" class="form-control" id="phone"
                               placeholder="<?= $arResult['PROPERTIES']['PLH_2_FEEDBACK']['~VALUE'] ?>">
                    </div>
                    <div style="display: none">
                        <input name="form" value="<?= $arResult['PROPERTIES']['FORM_NAME_FEEDBACK']['~VALUE'] ?>">
                        <input name="utm_source" value="<?= $request->get('utm_source') ?>">
                        <input name="utm_medium" value="<?= $request->get('utm_medium') ?>">
                        <input name="utm_campaign" value="<?= $request->get('utm_campaign') ?>">
                        <input name="utm_term" value="<?= $request->get('utm_term') ?>">
                        <input name="utm_content" value="<?= $request->get('utm_content') ?>">
                        <input name="service-name" value="">
                    </div>
                    <button data-ok-title='<?= $arResult['PROPERTIES']['TITLE_SUCCESS_FEEDBACK']['~VALUE'] ?>'
                            data-ok-text="<?= $arResult['PROPERTIES']['TEXT_SUCCESS_FEEDBACK']['~VALUE'] ?>"
                            class="btn btn-blue" data-send-request="callbackRoofs" type="submit">
                        <?= $arResult['PROPERTIES']['TEXT_BTN_FEEDBACK']['~VALUE'] ?>
                    </button>
                    <div class="form-group__text">
                        <p>
                            <?= $arResult['PROPERTIES']['TEXT_COMMON']['~VALUE'] ?>
                            <a href="<?= $arResult['PROPERTIES']['LINK_COMMON']['~VALUE'] ?>"
                               target="_blank"><?= $arResult['PROPERTIES']['TEXT_LINK_COMMON']['~VALUE'] ?></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="modal-order"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>

        <div class="modal__container modal__container--order" role="dialog" aria-modal="true">
            <a href="#"
               class="modal__close"
               aria-label="Close modal"
               data-custom-close>
                <svg data-custom-close height="30" width="30" class="call__icon">
                    <use xlink:href="#icon-x"></use>
                </svg>
            </a>

            <div data-order class="order">

                <header class="order__header">
                    <div class="order__text"><?= $arResult['PROPERTIES']['TITLE_QUIZ']['~VALUE'] ?></div>
                </header>

                <div class="order__container">
                    <div class="order__inner">

                        <div class="order__progress">
                            <p><?= $arResult['PROPERTIES']['STATUS_QUIZ']['~VALUE'] ?></p>
                            <div data-order-counter></div>
                        </div>

                        <div class="order__progressbar">
                            <div data-order-progress class="order__progressbar--active"></div>
                        </div>

                        <form data-order-form class="order__form" action="/request/roofs/feedback.php">

                            <div data-order-select class="order__select">
                                <div data-order-step="1" class="order__step">
                                    <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_STEP_1_QUIZ']['~VALUE'] ?></div>
                                    <div data-required data-form-group class="form-group form-group--flex">
                                        <?php foreach ($arResult['PROPERTIES']['IMAGE_STEP_1_QUIZ']['VALUE'] as $key => $imageId): ?>
                                            <?php if (empty($arResult['PROPERTIES']['IMAGE_STEP_1_QUIZ']['~DESCRIPTION'][$key])) continue; ?>
                                            <label class="checkbox checkbox--image">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="<?= $arResult['PROPERTIES']['IMAGE_STEP_1_QUIZ']['~DESCRIPTION'][$key] ?>"
                                                       name="constructive">
                                                <div class="inner">
                                                    <img src="<?= CFile::GetPath($imageId) ?>"
                                                         alt="<?= $arResult['PROPERTIES']['IMAGE_STEP_1_QUIZ']['~DESCRIPTION'][$key] ?>">
                                                </div>
                                                <span class="checkbox__text"><?= $arResult['PROPERTIES']['IMAGE_STEP_1_QUIZ']['~DESCRIPTION'][$key] ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="order__error"><?= $arResult['PROPERTIES']['ERROR_MESSAGE_COMMON']['~VALUE'] ?></div>
                                </div>
                                <div data-order-step="2" class="order__step hidden">
                                    <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_STEP_2_QUIZ']['~VALUE'] ?></div>
                                    <div data-form-group data-required class="form-group form-group--flex">
                                        <?php foreach ($arResult['PROPERTIES']['IMAGE_STEP_2_QUIZ']['VALUE'] as $key => $imageId): ?>
                                            <?php if (empty($arResult['PROPERTIES']['IMAGE_STEP_2_QUIZ']['~DESCRIPTION'][$key])) continue; ?>
                                            <label class="checkbox checkbox--image">
                                                <input type="radio"
                                                       class="checkbox__input"
                                                       value="<?= $arResult['PROPERTIES']['IMAGE_STEP_2_QUIZ']['~DESCRIPTION'][$key] ?>"
                                                       name="type">
                                                <div class="inner">
                                                    <img src="<?= CFile::GetPath($imageId) ?>"
                                                         alt="<?= $arResult['PROPERTIES']['IMAGE_STEP_2_QUIZ']['~DESCRIPTION'][$key] ?>">
                                                </div>
                                                <span class="checkbox__text"><?= $arResult['PROPERTIES']['IMAGE_STEP_2_QUIZ']['~DESCRIPTION'][$key] ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="order__error"><?= $arResult['PROPERTIES']['ERROR_MESSAGE_COMMON']['~VALUE'] ?></div>
                                </div>
                                <div data-order-step="3" class="order__step hidden">
                                    <div class="form-group" data-required data-form-group>
                                        <div class="flex-row mb-20">
                                            <div class="flex-col sm-12">
                                                <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_1_STEP_3_QUIZ']['~VALUE'] ?></div>
                                                <div class="form-group">
                                                    <?php foreach ($arResult['PROPERTIES']['OPTIONS_1_STEP_3_QUIZ']['~VALUE'] as $key => $option): ?>
                                                        <label class="checkbox">
                                                            <input type="checkbox"
                                                                   class="checkbox__input"
                                                                   value="<?= $option ?>"
                                                                   name="problem[]">
                                                            <span class="checkbox__text"><?= $option ?></span>
                                                        </label>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="flex-col sm-12">
                                                <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_2_STEP_3_QUIZ']['~VALUE'] ?></div>
                                                <div class="form-group">
                                                    <?php foreach ($arResult['PROPERTIES']['OPTIONS_2_STEP_3_QUIZ']['~VALUE'] as $key => $option): ?>
                                                        <label class="checkbox checkbox--radio">
                                                            <input type="radio"
                                                                   class="checkbox__input"
                                                                   value="<?= $option ?>"
                                                                   name="thermal_insulation">
                                                            <span class="checkbox__text"><?= $option ?></span>
                                                        </label>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_3_STEP_3_QUIZ']['~VALUE'] ?></div>
                                                <div class="form-group">
                                                    <?php foreach ($arResult['PROPERTIES']['OPTIONS_3_STEP_3_QUIZ']['~VALUE'] as $key => $option): ?>
                                                        <label class="checkbox checkbox--radio">
                                                            <input type="radio"
                                                                   class="checkbox__input"
                                                                   value="<?= $option ?>"
                                                                   name="access">
                                                            <span class="checkbox__text"><?= $option ?></span>
                                                        </label>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_4_STEP_3_QUIZ']['~VALUE'] ?></div>
                                        <div class="form-group d-flex g-20">
                                            <?php foreach ($arResult['PROPERTIES']['OPTIONS_4_STEP_3_QUIZ']['~VALUE'] as $key => $option): ?>
                                                <label class="checkbox checkbox--radio">
                                                    <input type="radio"
                                                           class="checkbox__input"
                                                           value="<?= $option ?>"
                                                           name="location">
                                                    <span class="checkbox__text"><?= $option ?></span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="order__error"><?= $arResult['PROPERTIES']['ERROR_MESSAGE_COMMON']['~VALUE'] ?></div>
                                </div>
                                <div data-order-step="4" class="order__step hidden">
                                    <div class="order__heading"><?= $arResult['PROPERTIES']['TITLE_STEP_4_QUIZ']['~VALUE'] ?></div>
                                    <div data-form-group class="form-group form-group--flex">
                                        <div class="nx-files nx-files_upload" data-files>
                                            <label class="nx-files__item">
                                                <svg class="nx-files__icon">
                                                    <use xlink:href="#icon-upload"></use>
                                                </svg>
                                                <span class="nx-files__content">
                                                    <span class="nx-files__title"><?= $arResult['PROPERTIES']['PLH_STEP_4_QUIZ']['~VALUE'] ?></span>
                                                </span>
                                                <input type="file"
                                                       class="hidden"
                                                       data-files-inp="file"
                                                       data-accept="jpg|jpeg|png|gif|webp|svg"
                                                       data-name="files[]"
                                                       multiple="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order__error"><?= $arResult['PROPERTIES']['ERROR_MESSAGE_COMMON']['~VALUE'] ?></div>
                                </div>
                                <div data-order-step="5" class="order__step hidden">
                                    <div class="order__heading mb-30">
                                        <b><?= $arResult['PROPERTIES']['TITLE_STEP_5_QUIZ']['~VALUE'] ?></b>
                                        <?= $arResult['PROPERTIES']['SUBTITLE_STEP_5_QUIZ']['~VALUE'] ?>
                                    </div>
                                    <div data-form-group class="form-group">
                                        <div class="flex-row">
                                            <div class="flex-col md-12">
                                                <div data-form-group class="form-group">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="<?= $arResult['PROPERTIES']['PLH_1_STEP_5_QUIZ']['~VALUE'] ?>">
                                                </div>
                                            </div>
                                            <div class="flex-col md-12">
                                                <div data-form-group class="form-group">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="phone"
                                                           placeholder="<?= $arResult['PROPERTIES']['PLH_2_STEP_5_QUIZ']['~VALUE'] ?>"
                                                           data-phone-mask>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-form-group class="form-group">
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="<?= $arResult['PROPERTIES']['PLH_3_STEP_5_QUIZ']['~VALUE'] ?>"
                                                   name="email">
                                        </div>
                                        <div data-form-group class="form-group">
                                            <textarea type="text"
                                                      class="form-control"
                                                      placeholder="<?= $arResult['PROPERTIES']['PLH_4_STEP_5_QUIZ']['~VALUE'] ?>"
                                                      name="message"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div style="display: none">
                                <input name="form" value="<?= $arResult['PROPERTIES']['FORM_NAME_QUIZ']['~VALUE'] ?>">
                                <input name="utm_source" value="<?= $request->get('utm_source') ?>">
                                <input name="utm_medium" value="<?= $request->get('utm_medium') ?>">
                                <input name="utm_campaign" value="<?= $request->get('utm_campaign') ?>">
                                <input name="utm_term" value="<?= $request->get('utm_term') ?>">
                                <input name="utm_content" value="<?= $request->get('utm_content') ?>">
                            </div>
                            <div class="order__nav g-20">
                                <a data-order-nav="prev" data-nav="1" class="btn btn-gray d-xl-block">
                                    <span><?= $arResult['PROPERTIES']['TEXT_BTN_BACK_QUIZ']['~VALUE'] ?></span>
                                </a>
                                <a data-order-nav="next" data-nav="2" class="btn btn-orange d-xl-block">
                                    <span><?= $arResult['PROPERTIES']['TEXT_BTN_FORWARD_QUIZ']['~VALUE'] ?></span>
                                </a>
                                <a data-send-request="quizRoofs"
                                   data-ok-title='<?= $arResult['PROPERTIES']['TEXT_SUCCESS_QUIZ']['~VALUE'] ?>'
                                   class="btn btn-orange d-xl-block hidden"><?= $arResult['PROPERTIES']['TEXT_BTN_SEND_QUIZ']['~VALUE'] ?></a>
                            </div>
                        </form>
                    </div>

                    <div class="order__gift">
                        <?= $arResult['PROPERTIES']['TEXT_BANNER_QUIZ']['~VALUE']['TEXT'] ?? '' ?>
                        <div class="order__gift-img">
                            <?php if (!empty($arResult['PROPERTIES']['IMAGE_BANNER_QUIZ']['~VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_BANNER_QUIZ']['~VALUE']) ?>"
                                     alt="<?= $arResult['PROPERTIES']['IMAGE_BANNER_QUIZ']['~DESCRIPTION'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="calculator"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>

        <div class="modal__container modal__container--order" role="dialog" aria-modal="true">
            <a href="#"
               class="modal__close"
               aria-label="Close modal"
               data-custom-close>
                <svg data-custom-close height="30" width="30" class="call__icon">
                    <use xlink:href="#icon-x"></use>
                </svg>
            </a>

            <div data-order class="order">

                <header class="order__header">
                    <div class="order__text"><?= $arResult['PROPERTIES']['TITLE_CALC']['~VALUE'] ?></div>
                </header>

                <div class="order__container">
                    <div class="order__inner order__inner--calculator">
                        <div class="modal-body">
                            <div class="contact-block">
                                <div class="modal-form-wrap">
                                    <div class="callback__form">
                                        <form action="/request/roofs/feedback.php" data-calculator class="form-base">
                                            <div class="tab">
                                                <div class="tab__title">
                                                    <?= $arResult['PROPERTIES']['TITLE_1_CALC']['~VALUE'] ?>
                                                </div>
                                                <div class="form-field mb-30">
                                                    <input data-num-only
                                                           data-value="<?= $arResult['PROPERTIES']['PLH_1_CALC']['DESCRIPTION'] ?>"
                                                           type="text"
                                                           class="form-control" name="square" id="inputName"
                                                           placeholder="<?= $arResult['PROPERTIES']['PLH_1_CALC']['~VALUE'] ?>">
                                                </div>
                                                <div class="calculate-block mb-30">
                                                    <div class="tab__title">
                                                        <?= $arResult['PROPERTIES']['TITLE_2_CALC']['~VALUE'] ?>
                                                    </div>
                                                    <div class="flex-row">
                                                        <?php $options = array_chunk($arResult['PROPERTIES']['OPTION_2_CALC']['~VALUE'], 3, true); ?>
                                                        <?php foreach ($options as $option): ?>
                                                            <div class="flex-col md-8">
                                                                <?php foreach ($option as $key => $item): ?>
                                                                    <div class="form-field">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input data-value="<?= $arResult['PROPERTIES']['OPTION_2_CALC']['~DESCRIPTION'][$key] ?>"
                                                                                       data-calculator-check
                                                                                       class="form-check-input"
                                                                                       name="operation[]"
                                                                                       value="<?= $item ?>"
                                                                                       type="checkbox">
                                                                                <?= $item ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="calculate-block mb-30">
                                                    <div class="tab__title">
                                                        <?= $arResult['PROPERTIES']['TITLE_3_CALC']['~VALUE'] ?>
                                                    </div>
                                                    <div class="flex-row">
                                                        <?php $options = array_chunk($arResult['PROPERTIES']['OPTION_3_CALC']['~VALUE'], 2, true); ?>
                                                        <?php foreach ($options as $option): ?>
                                                            <div class="flex-col md-8">
                                                                <?php foreach ($option as $key => $item): ?>
                                                                    <div class="form-field">
                                                                        <div class="form-radio">
                                                                            <label class="form-radio-label">
                                                                                <input data-value="<?= $arResult['PROPERTIES']['OPTION_3_CALC']['~DESCRIPTION'][$key] ?>"
                                                                                       data-calculator-radio
                                                                                       class="form-radio-input"
                                                                                       name="material"
                                                                                       value="<?= $item ?>"
                                                                                       type="radio">
                                                                                <?= $item ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                                <div class="flex-row mb-30">
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            <?= $arResult['PROPERTIES']['TITLE_4_CALC']['~VALUE'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            <?= $arResult['PROPERTIES']['TITLE_5_CALC']['~VALUE'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="tab__title">
                                                            <?= $arResult['PROPERTIES']['TITLE_6_CALC']['~VALUE'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-row">
                                                    <div class="flex-col md-8">
                                                        <div class="price">
                                                            <div data-calculator-total class="price__num">0</div>
                                                            <div class="price__cur"><?= $arResult['PROPERTIES']['PLH_4_CALC']['~VALUE'] ?></div>
                                                            <input data-calculator-total name="price" type="text"
                                                                   class="hidden">
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="form-field">
                                                            <input type="text" data-phone-mask name="phone"
                                                                   class="form-control " id="inputName"
                                                                   placeholder="<?= $arResult['PROPERTIES']['PLH_5_CALC']['~VALUE'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="flex-col md-8">
                                                        <div class="form-field">
                                                            <input type="text" class="form-control" name="email"
                                                                   placeholder="<?= $arResult['PROPERTIES']['PLH_6_CALC']['~VALUE'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: none">
                                                <input name="form"
                                                       value="<?= $arResult['PROPERTIES']['FORM_NAME_CALC']['~VALUE'] ?>">
                                                <input name="utm_source" value="<?= $request->get('utm_source') ?>">
                                                <input name="utm_medium" value="<?= $request->get('utm_medium') ?>">
                                                <input name="utm_campaign" value="<?= $request->get('utm_campaign') ?>">
                                                <input name="utm_term" value="<?= $request->get('utm_term') ?>">
                                                <input name="utm_content" value="<?= $request->get('utm_content') ?>">
                                            </div>
                                            <div class="tab__buttons">
                                                <button data-ok-title='<?= $arResult['PROPERTIES']['TEXT_SUCCESS_QUIZ']['~VALUE'] ?>'
                                                        data-send-request="calculatorRoofs" class="btn btn-orange">
                                                    <?= $arResult['PROPERTIES']['TEXT_BTN_CALC']['~VALUE'] ?>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order__gift">
                        <div class="order__gift-img">
                            <?php if (!empty($arResult['PROPERTIES']['IMAGE_BANNER_CALC']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_BANNER_CALC']['VALUE']) ?>"
                                     alt="<?= $arResult['PROPERTIES']['IMAGE_BANNER_CALC']['~DESCRIPTION'] ?>">
                            <?php endif; ?>
                        </div>
                        <?= $arResult['PROPERTIES']['TEXT_BANNER_CALC']['~VALUE']['TEXT'] ?? '' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="empty"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-video-close>
        <a href="#"
           class="modal__close"
           aria-label="Close modal"
           data-video-close>
            <svg data-video-close height="30" width="30" class="call__icon">
                <use xlink:href="#icon-x"></use>
            </svg>
        </a>
        <div class="modal__container modal__container--empty" role="dialog" aria-modal="true">
            <div data-modal-content class="inner"></div>
        </div>
    </div>
</div>