<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$services = \classes\Models\Roofs\HomePage\Services::getInstance()->getAllElements();
?>
<?php if (!empty($services)): ?>
    <section class="services-sections">
        <div class="container services">
            <div class="title big">
                <?= $arResult['PROPERTIES']['TITLE_SERVICES']['~VALUE'] ?>
            </div>
            <div class="services__list">
                <?php foreach ($services as $service): ?>
                    <?php if (empty($service['IMAGE']['VALUE'])) continue ?>
                    <div class="services__list--item">
                        <div class="pic">
                            <img src="<?= CFile::GetPath($service['IMAGE']['VALUE']) ?>" alt="<?= $service['NAME'] ?>">
                        </div>
                        <div class="info__wrap">
                            <div class="info">
                                <div class="info__title"><?= $service['NAME'] ?></div>
                                <div class="info__subtitle"><?= $service['IMAGE']['~DESCRIPTION'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="services__info">
                <div class="services__info--left">
                    <?= $arResult['PROPERTIES']['FOOTNOTE_SERVICES']['~VALUE']['TEXT'] ?? '' ?>
                </div>
                <div class="services__info--right">
                    <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_SERVICES']['~VALUE'])): ?>
                        <button class="btn btn-blue" data-custom-open="callback" type="submit">
                            <span><?= $arResult['PROPERTIES']['TEXT_BTN_SERVICES']['~VALUE'] ?></span>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>