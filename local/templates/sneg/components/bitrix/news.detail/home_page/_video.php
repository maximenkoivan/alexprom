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
<section class="video">
    <div class="container">
        <div class="video__wrapper">
            <div class="video__heading">
                <h2 class="video__title">
                    <?= $arResult['PROPERTIES']['TITLE_VIDEO']['~VALUE'] ?>
                </h2>
            </div>
            <div class="video__row flex-row">
                <div class="flex-col md-8 sm-24">
                    <div class="video__item">
                        <div class="video__item-num">1</div>
                        <h4><?= $arResult['PROPERTIES']['TITLE_1_VIDEO']['~VALUE'] ?></h4>
                        <p><?= $arResult['PROPERTIES']['DESC_1_VIDEO']['~VALUE'] ?></p>
                    </div>
                </div>
                <div class="flex-col md-8 sm-24">
                    <div class="video__item">
                        <div class="video__item-num">2</div>
                        <h4><?= $arResult['PROPERTIES']['TITLE_2_VIDEO']['~VALUE'] ?></h4>
                        <p><?= $arResult['PROPERTIES']['DESC_2_VIDEO']['~VALUE'] ?></p>
                    </div>
                </div>
                <div class="flex-col md-8 sm-24">
                    <div class="video__item">
                        <div class="video__item-num">3</div>
                        <h4><?= $arResult['PROPERTIES']['TITLE_3_VIDEO']['~VALUE'] ?></h4>
                        <p><?= $arResult['PROPERTIES']['DESC_3_VIDEO']['~VALUE'] ?></p>
                        <div class="video__item-btn">
                            <button type="submit"
                                    class="btn btn--primary btn--lg"
                                    data-custom-open="modal-callback"><?= $arResult['PROPERTIES']['TEXT_BTN_VIDEO']['~VALUE'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($videoYoutubeId = Generic::getYoutubeData($arResult['PROPERTIES']['LINK_VIDEO']['~VALUE'])['VIDEO']): ?>
                <div class="video__youtube">
                    <div class="video__youtube-wrap">
                        <a class="video__link"
                           style="background-image: url('https://img.youtube.com/vi/<?= $videoYoutubeId ?>/hqdefault.jpg ')"
                           data-video-load="<?= $videoYoutubeId ?>"
                           data-video-content>
                            <div class="video__btn">
                                <svg class="video__icon">
                                    <use xlink:href="#icon-play"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>