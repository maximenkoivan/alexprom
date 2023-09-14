<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('FORM');
?>
<div class="container contacts__map-container">
    <div class="map">
        <div class="map__content">
            <?= $settings['MAP_FORM']['~VALUE']['TEXT'] ?? '' ?>
        </div>
    </div>

    <div class="consultation__bg">
        <div class="consultation__content">
            <h2 class="consultation__title"><?= $arResult['PROPERTIES']['TITLE']['~VALUE'] ?></h2>
            <p class="consultation__text">
                <?= $arResult['PROPERTIES']['SUBTITLE']['~VALUE'] ?>
            </p>
        </div>
        <div class="consultation__box">
            <form class="form-vertical js_form">
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
                <button class="btn-main" type="submit"><?= $arResult['PROPERTIES']['TEXT_BTN']['~VALUE'] ?></button>
                <span class="form__agree"><?= $arResult['PROPERTIES']['TEXT']['~VALUE'] ?> <a
                            href="<?= $arResult['PROPERTIES']['LINK']['~VALUE'] ?>" target="_blank"><?= $arResult['PROPERTIES']['TEXT_LINK']['~VALUE'] ?></a></span>
            </form>
        </div>
    </div>
</div>

