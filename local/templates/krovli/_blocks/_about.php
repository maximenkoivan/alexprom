<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<div class="sections-about">
    <?php if (!empty($arResult['PROPERTIES']['IMAGE_ABOUT']['VALUE'])): ?>
        <div class="bg bg--about">
            <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_ABOUT']['VALUE']) ?>"
                 alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_ABOUT']['~DESCRIPTION']) ?>">
        </div>
    <?php endif; ?>
    <div class="container about-block">
        <div class="title big">
            <?= $arResult['PROPERTIES']['TITLE_ABOUT']['~VALUE'] ?>
        </div>
        <div class="about-block__info">
            <?= $arResult['PROPERTIES']['DESC_ABOUT']['~VALUE']['TEXT'] ?? '' ?>
        </div>
        <div class="about-block__pics">
            <?php foreach ($arResult['PROPERTIES']['FACTOIDS_ABOUT']['~VALUE'] as $factoid): ?>
                <?php if (empty($factoid['SUB_VALUES']['ICON_ABOUT']['VALUE']) || empty($factoid['SUB_VALUES']['TEXT_ABOUT']['~VALUE'])) continue ?>
                <div class="about-block__item about-block__item-blue">
                    <div class="icon">
                        <img src="<?= CFile::GetPath($factoid['SUB_VALUES']['ICON_ABOUT']['VALUE']) ?>"
                             alt="<?= strip_tags($factoid['SUB_VALUES']['TEXT_ABOUT']['~VALUE']) ?>">
                    </div>
                    <div class="text"><?= $factoid['SUB_VALUES']['TEXT_ABOUT']['~VALUE'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>