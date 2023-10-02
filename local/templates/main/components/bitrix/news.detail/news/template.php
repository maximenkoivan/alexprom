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

<?php
$data = [
    '@context' => 'http://schema.org',
    '@type' => 'Article',
    'headline' => $arResult['NAME'],
    'description' => $arResult['PREVIEW_TEXT'],
    'image' => [
        'type' => 'ImageObject',
        'url' => 'https://alexprom.ru'.$arResult['DETAIL_PICTURE']['SRC'],
    ],
    'datePublished' => $arResult['TIMESTAMP_X'],
    'dateModified' => $arResult['TIMESTAMP_X'],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'ALEXPROM',
        'logo' => 'https://alexprom.ru/local/templates/main/images/logo-minimal.png'
    ],
];

$data = json_encode($data);

echo '<script type="application/ld+json">' . $data . '</script>';
?>
