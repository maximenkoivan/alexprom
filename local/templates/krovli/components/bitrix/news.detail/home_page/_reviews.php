<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="reviews-sections">
    <div class="container reviews">
        <div class="title big ta-c">
            отзывы
        </div>
        <div style="display: flex; justify-content: center;margin-top: 20px;border-radius: 20px;">
            <iframe style="width: 100%;height: 100%;border: none;outline: none;padding: 0;margin: 0" id="myReviews__block-widget"></iframe>
        </div>
    </div>
</section>