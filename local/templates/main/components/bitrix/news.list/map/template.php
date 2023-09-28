<?php

use classes\Helpers\Generic;
use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @var $arParams
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('MAP');
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <section class="section locations locations--dropdowns">
        <div class="container">
            <h2 class="title-h2 locations__title"><?= $settings['TITLE_MAP']['~VALUE'] ?></h2>
            <div class="locations__content">
                <?php if (!empty($settings['IMAGE_POINT_MAP']['VALUE'])): ?>
                    <div class="locations__map" id="locations__map"
                         data-map-icon="<?= CFile::GetPath($settings['IMAGE_POINT_MAP']['VALUE']) ?>">
                    </div>
                <?php endif; ?>
                <div class="locations-addresses" data-show="5">
                    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                        <article class="bayan bayan--selfish bayan--toggler-angle locations-card">
                            <div class="locations-card__top">
                                <h3 class="locations-card__titie">
                                    <span class="locations-addresses__link"><?= $arItem['PROPERTIES']['CITY']['~VALUE'] ?></span>
                                </h3>
                            </div>
                            <div class="locations-card__contacts">
                                <p class="locations-card__contact">
                                    <?php if (!empty($settings['IMAGE_ADDRESS_MAP']['VALUE'])): ?>
                                        <img class="locations-card__contact-icon"
                                             src="<?= CFile::GetPath($settings['IMAGE_ADDRESS_MAP']['VALUE']) ?>"
                                             alt="Адрес">
                                    <?php endif; ?>
                                    <span class="locations-card__contact-text">
                                <span class="locations-card__contact-address">
                                    <?
                                    $arItem['NAME'] = trim($arItem['NAME']);
                                    $f = mb_stripos($arItem['NAME'], 'москва');
                                    if ($f !== false && $f >= 0 && $f < 5) {
                                        $arItem['NAME'] = str_replace(['г. Москва', 'Москва', 'москва'], '', $arItem['NAME']);
                                        echo '<span class="str-msk"></span>';
                                    }
                                    echo trim($arItem['NAME']);
                                    ?>
                                </span> <br>
                                <span class="locations-card__contact-worktime"><?= $arItem['PROPERTIES']['MODE']['~VALUE'] ?></span>
                            </span>
                                </p>
                                <?php if (!empty($arItem['PROPERTIES']['PHONE']['~VALUE'])): ?>
                                    <p class="locations-card__contact">
                                        <?php if (!empty($settings['IMAGE_PHONE_MAP']['VALUE'])): ?>
                                            <img class="locations-card__contact-icon"
                                                 src="<?= CFile::GetPath($settings['IMAGE_PHONE_MAP']['VALUE']) ?>"
                                                 alt="Телефон">
                                        <?php endif; ?>
                                        <span class="locations-card__contact-text">
                                <a href="tel:<?= Generic::getCleanPhoneNumber($arItem['PROPERTIES']['PHONE']['~VALUE']) ?>"><?= $arItem['PROPERTIES']['PHONE']['~VALUE'] ?></a>
                            </span>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty($arItem['PROPERTIES']['EMAIL']['~VALUE'])): ?>
                                    <p class="locations-card__contact">
                                        <img class="locations-card__contact-icon"
                                             src="<?= CFile::GetPath($settings['IMAGE_EMAIL_MAP']['VALUE']) ?>"
                                             alt="Электронная почта">
                                        <span class="locations-card__contact-text">
                                <a href="mailto:<?= $arItem['PROPERTIES']['EMAIL']['~VALUE'] ?>"><?= $arItem['PROPERTIES']['EMAIL']['~VALUE'] ?></a>
                            </span>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    <?php if (!empty($settings['TEXT_BTN_MAP']['~VALUE']) && count($arResult['ITEMS']) > 5): ?>
                        <div class="locations-addresses__buttons">
                            <button class="btn-accent locations-addresses__button-more">
                                <?= $settings['TEXT_BTN_MAP']['~VALUE'] ?>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

