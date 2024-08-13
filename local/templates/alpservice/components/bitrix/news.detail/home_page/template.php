<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<div class="wrapper">
    <div class="wrapper__content">
        <?php
        $settings = \classes\Models\Alpservice\HomePage\Content::getInstance()->getPropertiesByCode('BLOCKS_PAGE');
        foreach ($settings as $code) {
            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_blocks/_' . $code . '.php', ['arResult' => $arResult]);
        }
        ?>
    </div>
</div>
