<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="how-work-sections">
    <div class="block-ellipse">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/block-ellipse.png" alt="">
    </div>
    <div class="how-work">
        <div class="title big ta-c">
            <?= $arResult['PROPERTIES']['TITLE_WORK']['~VALUE'] ?>
        </div>
        <div class="how-work__wrapper">
            <?php foreach ($arResult['PROPERTIES']['STAGES_WORK']['VALUE'] as $key => $stage): ?>
                <div class="how-work__item">
                    <div class="how-work__count">0<?= $key + 1 ?></div>
                    <div class="how-work__img">
                        <?php if (!empty($stage['SUB_VALUES']['IMAGE_WORK']['VALUE'])): ?>
                            <?php if ($key != array_key_last($arResult['PROPERTIES']['STAGES_WORK']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($stage['SUB_VALUES']['IMAGE_WORK']['VALUE']) ?>"
                                     alt="<?= $stage['SUB_VALUES']['DESC_WORK']['~VALUE'] ?>">
                            <?php else: ?>
                                <img class="hidden xs-visible"
                                     src="<?= CFile::GetPath($arResult['PROPERTIES']['STAGES_WORK']['VALUE'][$key - 2]['SUB_VALUES']['IMAGE_WORK']['VALUE']) ?>"
                                     alt="<?= $arResult['PROPERTIES']['STAGES_WORK']['VALUE'][$key - 2]['SUB_VALUES']['DESC_WORK']['VALUE'] ?>">
                                <img class="xs-hidden" src="<?= CFile::GetPath($stage['SUB_VALUES']['IMAGE_WORK']['VALUE']) ?>"
                                     alt="<?= $stage['SUB_VALUES']['DESC_WORK']['~VALUE'] ?>">
                            <?php endif ?>
                        <?php endif; ?>
                    </div>
                    <div class="how-work__bottom"><?= $stage['SUB_VALUES']['DESC_WORK']['~VALUE'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
