<?php

use classes\Models\Alpinism\News\Settings;

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
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_DETAIL_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
