<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
?>
<?php if (!empty($arResult)): ?>
    <ul class="footer__menu-list">
    <?php foreach ($arResult as $arItem): ?>
        <li class="footer__menu-item">
            <a class="footer__menu-link" <?= !$arItem['SELECTED'] ? 'href="' . $arItem['LINK'] . '"' : '' ?>><?= $arItem['TEXT'] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
