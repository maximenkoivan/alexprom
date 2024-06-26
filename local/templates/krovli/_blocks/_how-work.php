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
        <div class="pic"></div>
        <div class="permissions-wrap">
            <div class="big-arrows">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/arrows-big.svg" alt="">
            </div>
        </div>
    </div>
</section>
