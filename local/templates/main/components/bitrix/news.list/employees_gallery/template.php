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
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('EMPLOYEES');
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <section class="section staff">
        <div class="container staff__container">
            <div class="staff__head section__head">
                <h2 class="title-h2 staff__title"><?= $settings['TITLE_EMPLOYEES']['~VALUE'] ?></h2>
                <div class="staff__buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="gallery-carousel">
                <div class="swiper staff-carousel">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                            <?php if (!empty($arItem["PROPERTIES"]["FOTO"]['VALUE'])): ?>
                                <?
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="swiper-slide">
                                    <div class="staff-card" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                        <picture class="staff-card__pic">
                                            <?
                                            $src = CFile::GetPath($arItem["PROPERTIES"]["FOTO"]['VALUE']);
                                            if ($webp = makeWebp($src)) { ?>
                                                <source type="image/webp" srcset="<?=$webp?>">
                                            <?php } ?>
                                            <img
                                                 loading="lazy"
                                                 src="<?= $src ?>"
                                                 alt="<?= $arItem["PROPERTIES"]["FOTO"]['DESCRIPTION'] ?>"
                                                 class="staff-card__img">
                                        </picture>
                                        <h3 class="staff-card__title"><?= $arItem["NAME"] ?></h3>
                                        <p class="staff-card__desc"><?= $arItem["PROPERTIES"]["POST"]['VALUE'] ?></p>
                                        <div class="staffContainer">
                                            <?php if ($arItem["PROPERTIES"]["PHONE"]["VALUE"]) : ?>
                                                <a href="tel:<?= Generic::getCleanPhoneNumber($arItem["PROPERTIES"]["PHONE"]["VALUE"]) ?>"
                                                   class="link link--phone">
                                                    <?= $arItem["PROPERTIES"]["PHONE"]["VALUE"] ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($arItem["PROPERTIES"]["EMAIL"]["VALUE"]) : ?>
                                                <a href="mailto:<?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>"
                                                   class="link link--mail">
                                                    <?= $arItem["PROPERTIES"]["EMAIL"]["VALUE"] ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
