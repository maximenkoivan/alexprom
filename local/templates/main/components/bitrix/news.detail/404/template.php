<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$this->setFrameMode(true);
?>
<main id="primary" class="site-main main">
    <div class="container">
        <section class="section-error error-404 not-found">
            <p class="section-error__number"><?= $arResult['PROPERTIES']['TITLE_404']['~VALUE'] ?></p>
            <div class="section-error__content">
                <h1 class="section-error__title"><?= $arResult['PROPERTIES']['SUBTITLE_404']['~VALUE'] ?></h1>
                <p class="section-error__desc">
                    <?= $arResult['PROPERTIES']['DESC_404']['~VALUE'] ?>
                </p>
                <p class="section-error__desc">
                    <?= $arResult['PROPERTIES']['LINK_404']['~VALUE'] ?>
                </p>
            </div>
        </section>
    </div>
</main>
