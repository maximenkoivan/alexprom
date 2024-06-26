<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<?php if (!empty($arResult['PROPERTIES']['ELEMENTS_ADVANTAGES']['VALUE'])): ?>
    <section class="top-index-sections">
        <div class="top-index-sections__inform">
            <div class="top-index-sections__ellipse"></div>
            <?php if (!empty($arResult['PROPERTIES']['IMAGE_ADVANTAGES']['VALUE'])): ?>
                <div class="bg bg--section-2">
                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_ADVANTAGES']['VALUE']) ?>"
                         alt="<?= strip_tags($arResult['PROPERTIES']['IMAGE_ADVANTAGES']['~DESCRIPTION']) ?>">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="index-inform">
                    <div class="title">
                        <?= $arResult['PROPERTIES']['TITLE_ADVANTAGES']['~VALUE'] ?>
                    </div>
                    <div class="row advantages">
                        <?php foreach ($arResult['PROPERTIES']['ELEMENTS_ADVANTAGES']['VALUE'] as $key => $imageId): ?>
                            <div class="item">
                                <div class="advantage">
                                    <div class="advantage__pic">
                                        <img src="<?= CFile::GetPath($imageId) ?>"
                                             alt="<?= strip_tags($arResult['PROPERTIES']['ELEMENTS_ADVANTAGES']['~DESCRIPTION'][$key]) ?>">
                                    </div>
                                    <div class="advantage__info">
                                        <?= $arResult['PROPERTIES']['ELEMENTS_ADVANTAGES']['~DESCRIPTION'][$key] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

