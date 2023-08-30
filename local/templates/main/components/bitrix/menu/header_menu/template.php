<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $arResult
 */
?>
<?php if (!empty($arResult)): ?>
    <nav class="header__nav">
        <?php foreach ($arResult as $arItem): ?>
            <?php if ($arItem['DEPTH_LEVEL'] < 2 && !$arItem['IS_PARENT']): ?>
                <a class="header__nav-link <?= $arItem['SELECTED'] ? 'active' : '' ?>" <?= !$arItem['SELECTED'] ? 'href="' . $arItem['LINK'] . '"' : '' ?>><?= $arItem['TEXT'] ?></a>
                <?php continue; ?>
            <?php endif; ?>
            <?php if ($arItem['IS_PARENT']): ?>
                <div class="header__nav-dropdown">
                    <a class="header__nav-link <?= $arItem['SELECTED'] ? 'active' : '' ?>" <?= !$arItem['SELECTED'] ? 'href="' . $arItem['LINK'] . '"' : '' ?>><?= $arItem['TEXT'] ?></a>
                    <div class="header__nav-dropdown-menu">
                        <div class="header__nav-dropdown-menu-inner">
                            <?php foreach ($arResult as $item): ?>
                                <?php if ($item['DEPTH_LEVEL'] > 1): ?>
                                    <a class="header__nav-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>
<?php endif; ?>