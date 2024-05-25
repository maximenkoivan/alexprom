<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<?php if (!empty($arResult['PROPERTIES']['IMAGE_PERMISS']['VALUE'])): ?>
    <section
            style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_PERMISS']['VALUE']) ?>');"
            class="permits">
        <div class="container">
            <div class="permits__wrapper">
                <h2 class="permits__title">
                    <?= $arResult['PROPERTIES']['TITLE_PERMISS']['~VALUE'] ?>
                </h2>
                <div class="permits__row">
                    <?php foreach ($arResult['PROPERTIES']['IMAGE_PERMISS']['VALUE'] as $imageId): ?>
                        <div class="permits__image">
                            <a data-fslightbox="permits" href="<?= CFile::GetPath($imageId) ?>">
                                <img width="140" height="193" src="<?= CFile::GetPath($imageId) ?>" alt=" ">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>