<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_PROBLEMS']['VALUE']) ?>');"
         class="problems">
    <div class="container">
        <div class="problems__wrapper">
            <div class="problems__heading">
                <h2 class="problems__title">
                    <?= $arResult['PROPERTIES']['TITLE_PROBLEMS']['~VALUE']['TEXT'] ?? '' ?>
                </h2>
            </div>
            <div class="problems__list">
                <?php foreach ($arResult['PROPERTIES']['IMAGE_PROBLEMS']['VALUE'] as $key => $image): ?>
                    <?php if (!empty($arResult['PROPERTIES']['IMAGE_PROBLEMS']['DESCRIPTION'][$key])): ?>
                        <div class="problems__item">
                            <img class="problems__img" src="<?= CFile::GetPath($image) ?>" alt="">
                            <span><?= $arResult['PROPERTIES']['IMAGE_PROBLEMS']['DESCRIPTION'][$key] ?></span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_PROBLEMS']['VALUE'])): ?>
                    <div class="problems__item problems__btn">
                        <button class="btn btn--primary btn--md"
                                data-custom-open="modal-callback"><?= $arResult['PROPERTIES']['TEXT_BTN_PROBLEMS']['VALUE'] ?></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>