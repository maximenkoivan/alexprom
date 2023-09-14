<?php

use classes\Models\Alpinism\News\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
include '_promo.php';
?>
<div class="section-flip section-flip--light">
    <section class="section services">
        <div class="container">
            <div class="services-box">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="services-box__item">
                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="services-box__media">
                                <picture class="services-box__thumb">
                                    <img class="services-box__img lazy" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                         alt="<?= $arItem['PREVIEW_PICTURE']['DESCRIPTION'] ?? $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                                </picture>
                            </a>
                            <h3 class="title-h3 services-box__title">
                                <a class="services-box__title-link"
                                   href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                            </h3>
                            <p class="services-box__desc">
                                <?= TruncateText($arItem['~PREVIEW_TEXT'], 135) ?>
                            </p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_LIST_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>