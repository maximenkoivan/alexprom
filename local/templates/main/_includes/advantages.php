<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('ADVANTAGES');
?>
<section class="section advantages">
    <div class="container">
        <h2 class="title-h2 advantages__title"><?= $settings['TITLE_BLOCK_ADVANTAGES']['~VALUE'] ?></h2>
        <div class="advantages__box">
            <?php if (!empty($settings['TITLE_1_ADVANTAGES']['~VALUE']) || !empty($settings['DESC_1_ADVANTAGES']['~VALUE'])): ?>
                <div class="advantages-card _has-img">
                    <?php if (!empty($settings['IMAGE_1_ADVANTAGES']['VALUE'])): ?>
                        <picture class="advantages-card__pic">
                            <img class="advantages-card__img lazy"
                                 src="<?= CFile::GetPath($settings['IMAGE_1_ADVANTAGES']['VALUE']) ?>" alt="">
                        </picture>
                    <?php endif; ?>
                    <h3 class="advantages-card__title">
                        <?= $settings['TITLE_1_ADVANTAGES']['~VALUE'] ?>
                    </h3>
                    <p><?= $settings['DESC_1_ADVANTAGES']['~VALUE']['TEXT'] ?? '' ?></p>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['TITLE_2_ADVANTAGES']['~VALUE']) || !empty($settings['DESC_2_ADVANTAGES']['~VALUE'])): ?>
                <div class="advantages-card _has-img">
                    <?php if (!empty($settings['IMAGE_2_ADVANTAGES']['VALUE'])): ?>
                        <picture class="advantages-card__pic">
                            <img class="advantages-card__img lazy"
                                 src="<?= CFile::GetPath($settings['IMAGE_2_ADVANTAGES']['VALUE']) ?>" alt="">
                        </picture>
                    <?php endif; ?>
                    <h3 class="advantages-card__title">
                        <?= $settings['TITLE_2_ADVANTAGES']['~VALUE'] ?>
                    </h3>
                    <p><?= $settings['DESC_2_ADVANTAGES']['~VALUE']['TEXT'] ?? '' ?></p>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['TITLE_3_ADVANTAGES']['~VALUE']) || !empty($settings['DESC_3_ADVANTAGES']['~VALUE'])): ?>
                <div class="advantages-card">
                    <?php if (!empty($settings['IMAGE_3_ADVANTAGES']['VALUE'])): ?>
                        <picture class="advantages-card__pic">
                            <img class="advantages-card__img lazy"
                                 src="<?= CFile::GetPath($settings['IMAGE_3_ADVANTAGES']['VALUE']) ?>" alt="">
                        </picture>
                    <?php endif; ?>
                    <h3 class="advantages-card__title">
                        <?= $settings['TITLE_3_ADVANTAGES']['~VALUE'] ?>
                    </h3>
                    <p><?= $settings['DESC_3_ADVANTAGES']['~VALUE']['TEXT'] ?? '' ?></p>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['TITLE_4_ADVANTAGES']['~VALUE']) || !empty($settings['DESC_4_ADVANTAGES']['~VALUE'])): ?>
                <div class="advantages-card _has-img">
                    <?php if (!empty($settings['IMAGE_4_ADVANTAGES']['VALUE'])): ?>
                        <picture class="advantages-card__pic">
                            <img class="advantages-card__img lazy"
                                 src="<?= CFile::GetPath($settings['IMAGE_4_ADVANTAGES']['VALUE']) ?>" alt="">
                        </picture>
                    <?php endif; ?>
                    <h3 class="advantages-card__title">
                        <?= $settings['TITLE_4_ADVANTAGES']['~VALUE'] ?>
                    </h3>
                    <p><?= $settings['DESC_4_ADVANTAGES']['~VALUE']['TEXT'] ?? '' ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


