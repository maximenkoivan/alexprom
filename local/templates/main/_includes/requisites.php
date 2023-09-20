<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('REQUISITES');
?>
<section class="section requisites">
    <div class="container requisites__container">
        <div class="section__head requisites__head">
            <h2 class="title-h2 requisites__title"><?= $settings['TITLE_REQUISITES']['~VALUE'] ?></h2>
        </div>
        <div class="requisites__content">
            <?php if (!empty($settings['TEXT_REQUISITES']['~VALUE'])): ?>
                <div class="requisites-table">
                    <?php foreach ($settings['TEXT_REQUISITES']['~VALUE'] as $key => $requisite): ?>
                        <?php if (!empty($requisite) && !empty($settings['TEXT_REQUISITES']['DESCRIPTION'][$key])): ?>
                            <div class="requisites-table__row">
                                <h3 class="requisites-table__title"><?= $settings['TEXT_REQUISITES']['DESCRIPTION'][$key] ?></h3>
                                <p class="requisites-table__desc"><?= $requisite ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="requisites-qr">
                <h3 class="requisites-qr__title"><?= $settings['SUBTITLE_REQUISITES']['~VALUE'] ?></h3>
                <?php if (!empty($settings['QR_1_REQUISITES']['VALUE'])): ?>
                    <div class="requisites-qr__media">
                        <picture class="requisites-qr__media-pic">
                            <img src="<?= CFile::GetPath($settings['QR_1_REQUISITES']['VALUE']) ?>"
                                 alt="<?= $settings['QR_1_REQUISITES']['DESCRIPTION'] ?>"
                                 class="requisites-qr__media-img">
                        </picture>
                        <p class="requisites-qr__media-caption">
                            <?= $settings['DESC_1_REQUISITES']['~VALUE']['TEXT'] ?? '' ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($settings['QR_2_REQUISITES']['VALUE'])): ?>
                    <div class="requisites-qr__media">
                        <picture class="requisites-qr__media-pic">
                            <img src="<?= CFile::GetPath($settings['QR_2_REQUISITES']['VALUE']) ?>"
                                 alt="<?= $settings['QR_2_REQUISITES']['DESCRIPTION'] ?>"
                                 class="requisites-qr__media-img">
                        </picture>
                        <p class="requisites-qr__media-caption">
                            <?= $settings['DESC_2_REQUISITES']['~VALUE']['TEXT'] ?? '' ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if (!empty($settings['FILE_REQUISITES']['VALUE']) && !empty($settings['TEXT_BTN_REQUISITES']['~VALUE'])): ?>
                    <a href="<?= CFile::GetPath($settings['FILE_REQUISITES']['VALUE']) ?>" download
                       class="requisites__download-button btn-primary"><?= $settings['TEXT_BTN_REQUISITES']['~VALUE'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

