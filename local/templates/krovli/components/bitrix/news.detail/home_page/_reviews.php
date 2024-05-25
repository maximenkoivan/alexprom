<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="feedback">
    <div class="container">
        <div class="feedback__wrapper">
            <div class="feedback__heading">
                <h2 class="feedback__title"><?= $arResult['PROPERTIES']['TITLE_REVIEWS']['~VALUE'] ?></h2>
            </div>

            <div class="feedback__hc hc">
                <div class="hc__buttons">
                    <?php foreach ($arResult['REVIEWS'] as $key => $review): ?>
                        <div data-tab-btn="<?= $key ?>" class="hc__btn is-active">
                            <img src="<?= CFile::GetPath($review['ICON']['VALUE']) ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="hc__contents">
                    <?php foreach ($arResult['REVIEWS'] as $key => $review): ?>
                        <div data-tab-content="<?= $key ?>" class="hc__content is-active">
                            <div class="hc__image">
                                <?php if (!empty($review['IMAGE']['VALUE'])): ?>
                                    <img src="<?= CFile::GetPath($review['IMAGE']['VALUE']) ?>" alt="">
                                <?php endif; ?>
                            </div>

                            <div class="hc__text">
                                <h4><?= $review['NAME'] ?></h4>
                                <p><?= $review['~DETAIL_TEXT'] ?></p>
                                <?php if (!empty($review['PS']['~VALUE'])): ?>
                                    <span><?= $review['PS']['~VALUE'] ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="hc__paper">
                                <?php if (!empty($review['DOCUMENT']['VALUE'])): ?>
                                    <a class="hc__paper-top" data-fslightbox="paper"
                                       href="<?= $filePath = CFile::GetPath($review['DOCUMENT']['VALUE']) ?>">
                                        <img src="<?= $filePath ?>" alt="">
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($review['FOTO']['VALUE'])): ?>
                                    <a class="hc__paper-bottom" data-fslightbox="cake"
                                       href="<?= CFile::GetPath($review['FOTO']['VALUE']) ?>">
                                        <img src="<?= CFile::GetPath($review['FOTO']['VALUE']) ?>"
                                             alt="">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>