<?php

if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arParams
 * @var array $arResult
 */




if ($arResult) {
    $sortMenu = [];
    $depthOne = 0;
    $depthTwo = 0;
    $depthThree = 0;
    $previousLevel = 0;
    foreach ($arResult as $item) {
        $depth = $item['DEPTH_LEVEL'];
        if ($depth === 1 && $previousLevel >= $depth) {
            $depthOne++;
            $depthTwo = 0;
            $depthThree = 0;
        }

        if ($depth === 2 && $previousLevel >= $depth) {
            $depthTwo++;
            $depthThree = 0;
        }

        if ($depth === 3 && $previousLevel >= $depth) {
            $depthThree++;
        }

        switch ($depth) {
            case 1:
                $sortMenu[$depthOne] = $item;
                break;
            case 2:
                $sortMenu[$depthOne]['child'][$depthTwo] = $item;
                break;
            case 3:
                $sortMenu[$depthOne]['child'][$depthTwo]['child'][$depthThree] = $item;
                break;
            default:
                break;
        }

        $previousLevel = $depth;
    }
    unset($depthOne, $depthTwo, $depthThree, $previousLevel);

    //-- Проставляем активность детям второго порядка
    foreach ($sortMenu as &$item) {
        if ($item['child']) {
            foreach ($item['child'] as &$child) {
                if ($child['child']) {
                    $active = false;
                    foreach ($child['child'] as $childTwo) {
                        if ($childTwo['SELECTED']) {
                            $active = true;
                            break;
                        }
                    }
                    if ($active) {
                        $child['SELECTED'] = true;
                    }
                }
            }
            unset($child);
        }
    }
    unset($item);

    $arResult['sortMenu'] = $sortMenu;
    unset($sortMenu);
}
