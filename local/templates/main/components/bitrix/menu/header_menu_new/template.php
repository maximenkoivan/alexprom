<?php

if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var $arResult
 */


if ($arResult['sortMenu']) { ?>
    <nav class="menu-nav">
        <?php foreach ($arResult['sortMenu'] as $item) {
            if ($item['SELECTED']) { ?>
                <a class="menu-link active"
                   href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
            <?php } else { ?>
                <a class="menu-link"
                   href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
            <?php }
            if ($item['child']) { ?>
                <div class="menu-dropdown-wrapper">
                    <div class="menu-dropdown-container">
                        <div class="menu-dropdown">
                            <?php foreach ($item['child'] as $child) {
                                if ($child['SELECTED']) { ?>
                                    <a class="menu-link-section active"
                                       href="<?= $child['LINK'] ?>"><?= $child['TEXT'] ?></a>
                                <?php } else { ?>
                                    <a class="menu-link-section active"
                                       href="<?= $child['LINK'] ?>"><?= $child['TEXT'] ?></a>
                                <?php }
                                if ($child['child']) { ?>
                                    <div class="menu-child-wrapper">
                                        <div class="menu-child-container">
                                            <div class="menu-child">
                                                <?php foreach ($child['child'] as $childTwo) {
                                                    if ($childTwo['SELECTED']) { ?>
                                                        <a class="menu-link-child active"
                                                           href="<?= $childTwo['LINK'] ?>"><?= $childTwo['TEXT'] ?></a>
                                                    <?php } else { ?>
                                                        <a class="menu-link-child active"
                                                           href="<?= $childTwo['LINK'] ?>"><?= $childTwo['TEXT'] ?></a>
                                                    <?php }
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </nav>
<?php } ?>
