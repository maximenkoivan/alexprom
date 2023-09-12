<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @var $arParams
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('SERVICES');
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <section class="section services">
        <div class="container">
            <div class="services__head">
                <h2 class="title-h2"><?= $settings['TITLE_SERVICES']['~VALUE'] ?></h2>
                <a href="/services/" class="btn-primary _desktop"><?= $settings['TEXT_BTN_SERVICES']['~VALUE'] ?></a>
            </div>
            <div class="services-box">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="services-box__item" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="services-box__thumb">
                                <img class="services-box__img lazy" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                     alt="<?= $arItem['PREVIEW_PICTURE']['DESCRIPTION'] ?? $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                            </a>
                            <h3 class="title-h3 services-box__title"><?= $arItem['NAME'] ?></h3>
                            <p><?= TruncateText($arItem['~PREVIEW_TEXT'], 105) ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>