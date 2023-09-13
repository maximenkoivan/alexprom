<?php

use classes\Models\Alpinism\Basic\CommonBlocks;
use classes\Models\Alpinism\Services\Services;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('PRICES');
if (!empty($settings['SERVICE_PRICES']['VALUE'])) {
$services = Services::getInstance();
$elements = $services->getAllElements($settings['SERVICE_PRICES']['VALUE'], ['ID' => $settings['SERVICE_PRICES']['VALUE']]);
$sections = $services->getSections(['PRICE' => '%'], ['CREATED' => 'ASC'], array_column($elements, 'IBLOCK_SECTION_ID'));
}
?>
<?php if (!empty($settings['SERVICE_PRICES']['VALUE'])): ?>
    <section class="section price">
        <div class="container">
            <h2 class="title-h2 price__title"><?= $settings['TITLE_PRICES']['~VALUE'] ?></h2>
            <div class="price-card">
                <?php foreach ($sections as $section): ?>
                    <div class="price-card__section"
                         style="color:#222222; text-decoration: none; border: none; background:none;">
                        <h2 class="price-card__title"
                            style="color:#222222; text-decoration: none; border: none; background:none;"><?= $section['NAME'] ?></h2>
                        <div class="price-table">
                            <?php foreach ($elements as $element): ?>
                                <?php if ($section['ID'] == $element['IBLOCK_SECTION_ID']): ?>
                                    <div class="price-table__row">
                                        <div class="price-table__item">
                                            <a href="<?= $element['DETAIL_PAGE_URL'] ?>"
                                               class="price-table__link"><?= $element['NAME'] ?></a>
                                        </div>
                                        <div class="price-table__item">
                                            <span class="price-table__qt"><?= $element['PRICE']['~VALUE'] ?></span>
                                        </div>
                                        <?php if (!empty($settings['TEXT_BTN_1_PRICES']['~VALUE'])): ?>
                                            <div class="price-table__item">
                                                <button class="price-table__link" data-b_modal-open="modal-service"
                                                        type="button">
                                                    <?= $settings['TEXT_BTN_1_PRICES']['~VALUE'] ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if (!empty($settings['TEXT_BTN_2_PRICES']['~VALUE'])): ?>
            <div class="serviceAllBtn"><a href="/services/"
                                          class="btn-primary services__head-button"><?= $settings['TEXT_BTN_2_PRICES']['~VALUE'] ?></a>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>