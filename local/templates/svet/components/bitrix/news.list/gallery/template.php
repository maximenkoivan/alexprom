<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<ul class="video__ul">
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <?php if (!empty($arItem['PROPERTIES']['GALLERY']['VALUE'])): ?>
            <li>
                <?php foreach ($arItem['PROPERTIES']['GALLERY']['VALUE'] as $key => $image): ?>
                    <?php if ($key === 0): ?>
                        <a data-fslightbox="gal" href="<?= CFile::GetPath($image) ?>">
                            <?= $arItem['NAME'] ?>
                        </a> <span><?= $arItem['PROPERTIES']['DESCRIPTION']['~VALUE'] ?></span>
                    <?php else: ?>
                        <a class="hidden" data-fslightbox="gal"
                           href="<?= CFile::GetPath($image) ?>"></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </li>
        <?php else: ?>
            <li><?= $arItem['NAME'] ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
