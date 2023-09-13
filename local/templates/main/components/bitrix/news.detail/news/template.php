<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
include '_promo.php';
?>
<div class="section-flip section-flip--light" id="news">
    <div class="blog-article section">
        <div class="wysiwyg container blog-article__container">
            <p class="blog-article__date"><?= $arResult['DISPLAY_ACTIVE_FROM'] ?></p>
            <?= $arResult['~DETAIL_TEXT'] ?>
        </div>
    </div>
</div>
