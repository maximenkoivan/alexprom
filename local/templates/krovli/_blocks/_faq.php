<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$questions = \classes\Models\Roofs\HomePage\Faq::getInstance()->getAllElements();
?>
<?php if (!empty($questions)): ?>
    <section class="faq-sections">
        <div class="container faq">
            <div class="title big ta-c">
                <?= $arResult['PROPERTIES']['TITLE_FAQ']['~VALUE'] ?>
            </div>
            <div class="faq__list">
                <?php foreach ($questions as $question): ?>
                    <?php if (empty($question['QUESTION']['~VALUE']) || empty($question['ANSWER']['~VALUE'])) continue ?>
                    <div class="faq__list--item">
                        <div class="spoiler">
                            <div class="text"><?= $question['QUESTION']['~VALUE'] ?></div>
                            <div class="icon"></div>
                        </div>
                        <div class="info">
                            <?= $question['ANSWER']['~VALUE']['TEXT'] ?? '' ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

