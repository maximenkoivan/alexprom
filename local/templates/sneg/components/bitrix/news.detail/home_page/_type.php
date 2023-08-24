<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_TYPE']['VALUE']) ?>');"
         class="type">
    <div class="container">
        <div class="type__wrapper">
            <div class="type__heading">
                <h2 class="type__title"><?= $arResult['PROPERTIES']['TITLE_TYPE']['~VALUE'] ?></h2>
            </div>
            <div class="type__row">
                <?php if (!empty($arResult['PROPERTIES']['DESC_LEFT_TYPE']['~VALUE'])): ?>
                    <div class="type__item">
                        <h4><?= $arResult['PROPERTIES']['TITLE_LEFT_TYPE']['~VALUE'] ?></h4>
                        <ul>
                            <?php foreach ($arResult['PROPERTIES']['DESC_LEFT_TYPE']['~VALUE'] as $text): ?>
                                <li><?= $text ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_LEFT_TYPE']['~VALUE'])): ?>
                            <div class="type__item-btn">
                                <button type="submit"
                                        class="btn btn--primary btn--lg"
                                        data-type="<?= $arResult['PROPERTIES']['TITLE_LEFT_TYPE']['~VALUE'] ?>"
                                        data-custom-open="modal-callback"><?= $arResult['PROPERTIES']['TEXT_BTN_LEFT_TYPE']['~VALUE'] ?>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['DESC_RIGHT_TYPE']['~VALUE'])): ?>
                    <div class="type__item">
                        <h4><?= $arResult['PROPERTIES']['TITLE_RIGHT_TYPE']['~VALUE'] ?></h4>
                        <ul>
                            <?php foreach ($arResult['PROPERTIES']['DESC_RIGHT_TYPE']['~VALUE'] as $text): ?>
                                <li><?= $text ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_RIGHT_TYPE']['~VALUE'])): ?>
                            <div class="type__item-btn">
                                <button type="submit"
                                        class="btn btn--primary btn--lg"
                                        data-type="<?= $arResult['PROPERTIES']['TITLE_RIGHT_TYPE']['~VALUE'] ?>"
                                        data-custom-open="modal-callback"><?= $arResult['PROPERTIES']['TEXT_BTN_RIGHT_TYPE']['~VALUE'] ?>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>