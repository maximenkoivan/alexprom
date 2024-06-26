<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$addServices = \classes\Models\Roofs\HomePage\AddServices::getInstance()->getAllElements();
?>
<?php if (!empty($addServices)): ?>
    <section class="services-sections">
        <div class="container services">
            <div class="title big ta-c">
                <?= $arResult['PROPERTIES']['TITLE_ADD_SERVICES']['~VALUE'] ?>
            </div>
            <div class="add-services__list">
                <?php foreach ($addServices as $service): ?>
                    <?php if (empty($service['IMAGE']['VALUE'])) continue ?>
                    <div class="add-services__list--item">
                        <div class="pic">
                            <img src="<?= CFile::GetPath($service['IMAGE']['VALUE']) ?>" alt="<?= $service['NAME'] ?>">
                        </div>
                        <div class="info">
                            <div class="info__title"><?= $service['NAME'] ?></div>
                            <div class="info__price"><?= $service['IMAGE']['~DESCRIPTION'] ?></div>
                        </div>
                        <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_ADD_SERVICES']['~VALUE'])): ?>
                            <button class="btn btn-blue" data-type="<?= $service['NAME'] ?>" data-custom-open="order" type="submit">
                                <?= $arResult['PROPERTIES']['TEXT_BTN_ADD_SERVICES']['~VALUE'] ?>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

