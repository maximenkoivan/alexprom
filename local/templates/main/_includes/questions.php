<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('QUESTIONS');
?>
<?php if (!empty($settings['TEXT_QUESTIONS']['~VALUE'])): ?>
    <section class="section faq" data-show-cards="5">
        <div class="container">
            <h2 class="title-h2"><?= $settings['TITLE_BLOCK_QUESTIONS']['~VALUE'] ?></h2>
            <div class="faq__box">
                <?php foreach ($settings['TEXT_QUESTIONS']['~VALUE'] as $question): ?>
                    <?php if (!empty($question['SUB_VALUES']['TITLE_QUESTIONS']['~VALUE']) && !empty($question['SUB_VALUES']['DESC_QUESTIONS']['~VALUE'])): ?>
                        <div class="faq-card bayan">
                            <div class="faq-card__question">
                                <span><?= $question['SUB_VALUES']['TITLE_QUESTIONS']['~VALUE'] ?></span>
                            </div>
                            <div class="faq-card__answer">
                                <p>
                                    <?= $question['SUB_VALUES']['DESC_QUESTIONS']['~VALUE']['TEXT'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <button type="button" class="faq__button-more btn-accent">
                Показать больше
            </button>
        </div>
    </section>
<?php endif; ?>

