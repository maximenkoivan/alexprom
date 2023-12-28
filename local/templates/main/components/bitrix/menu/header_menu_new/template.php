<?php

if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $componentPath
 * @var CBitrixComponent $component
 */

CUtil::InitJSCore('jquery');

if ($arResult['sortMenu']) { ?>
    <nav class="menu-nav">
        <?php foreach ($arResult['sortMenu'] as $item) {
            if ($item['child']) { ?>
                <div class="menu-with-child js-first">
                    <?php if ($item['SELECTED']) { ?>
                        <a class="menu-link active"
                           href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                    <?php } else { ?>
                        <a class="menu-link"
                           href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                    <?php } ?>
                    <div class="menu-dropdown-wrapper hide">
                        <div class="menu-dropdown-container">
                            <div class="menu-dropdown">
                                <?php foreach ($item['child'] as $child) {
                                    if ($child['child']) { ?>
                                        <div class="menu-with-child js-second">
                                            <?php if ($child['SELECTED']) { ?>
                                                <span class="menu-link-section active"><?= $child['TEXT'] ?></span>
                                            <?php } else { ?>
                                                <span class="menu-link-section"><?= $child['TEXT'] ?></span>
                                            <?php } ?>
                                            <div class="menu-child-wrapper hide">
                                                <div class="menu-child-container">
                                                    <div class="menu-child">
                                                        <?php foreach ($child['child'] as $childTwo) {
                                                            if ($childTwo['SELECTED']) { ?>
                                                                <a class="menu-link-child active"
                                                                   href="<?= $childTwo['LINK'] ?>"><?= $childTwo['TEXT'] ?></a>
                                                            <?php } else { ?>
                                                                <a class="menu-link-child"
                                                                   href="<?= $childTwo['LINK'] ?>"><?= $childTwo['TEXT'] ?></a>
                                                            <?php } ?>
                                                            <hr class="menu-hr">
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else {
                                        if ($child['SELECTED']) { ?>
                                            <a class="menu-link-section active"
                                               href="<?= $child['LINK'] ?>"><?= $child['TEXT'] ?></a>
                                        <?php } else { ?>
                                            <a class="menu-link-section"
                                               href="<?= $child['LINK'] ?>"><?= $child['TEXT'] ?></a>
                                        <?php }
                                    } ?>
                                    <hr class="menu-hr">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else {
                if ($item['SELECTED']) { ?>
                    <a class="menu-link active"
                       href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                <?php } else { ?>
                    <a class="menu-link"
                       href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                <?php }
            }
        } ?>
    </nav>
<?php } ?>
