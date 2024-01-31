<?php

if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var $arResult
 */


if ($arResult) { ?>
    <nav class="header__nav">
        <?php foreach ($arResult as $arItem) {
            if ($arItem['DEPTH_LEVEL'] < 2 && ! $arItem['IS_PARENT']) { ?>
                <a class="header__nav-link <?= $arItem['SELECTED'] ? 'active' : '' ?>" <?= ! $arItem['SELECTED'] ? 'href="' . $arItem['LINK'] . '"' : '' ?>><?= $arItem['TEXT'] ?></a>
                <?php continue;
            }
            if ($arItem['IS_PARENT']) { ?>
                <div class="header__nav-dropdown">
                    <a class="header__nav-link <?= $arItem['SELECTED'] ? 'active' : '' ?>" <?= ! $arItem['SELECTED'] ? 'href="' . $arItem['LINK'] . '"' : '' ?>><?= $arItem['TEXT'] ?></a>
                    <div class="header__nav-dropdown-menu">
                        <div class="header__nav-dropdown-menu-inner">
                            <?php foreach ($arResult as $item) {
                                if ($item['DEPTH_LEVEL'] > 1) { ?>
                                    <a class="header__nav-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </nav>
<?php }
