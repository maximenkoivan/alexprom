<?php

use classes\Models\Alpinism\Services\Settings;

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
    <?php foreach ($arResult['SECTIONS'] as $section): ?>
        <?php if ($section['ELEMENT_CNT'] > 0): ?>
            <section class="section services">
                <div class="container">
                    <div class="services__head">
                        <h2 class="title-h2"><?= $section['NAME'] ?></h2>
                    </div>
                    <div class="services-box">
                        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                            <?php if ($arItem['IBLOCK_SECTION_ID'] == $section['ID'] && !empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                                <?
                                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                ?>
                                <div class="services-box__item" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
                                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="services-box__thumb">
                                        <img class="services-box__img lazy"
                                             src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                             alt="<?= $arItem['PREVIEW_PICTURE']['DESCRIPTION'] ?? $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                                    </a>
                                    <a class="title-h3 services-box__title"
                                       href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                                        <p><?= TruncateText($arItem['~PREVIEW_TEXT'], 105) ?></p></a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_LIST_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    } ?>
</div>
