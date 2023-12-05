<?php

use classes\Helpers\Generic;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$videoYoutubeId1 = Generic::getYoutubeData($arResult['PROPERTIES']['LINK_VIDEO']['~VALUE'])['VIDEO'];
$videoYoutubeId2 = Generic::getYoutubeData($arResult['PROPERTIES']['LINK_VIDEO_BOTTOM']['~VALUE'])['VIDEO'];
?>
<section class="main">
    <div class="container">
        <div class="main__bg">
            <div class="main__bg-slider" data-list-slider="promo">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['PROPERTIES']['BG_IMAGES']['VALUE'] as $imageId): ?>
                        <div class="swiper-slide">
                            <div class="bg-fade"></div>
                            <div class="bg-fade bg-fade--r d-sm-none"></div>
                            <img src="<?= CFile::GetPath($imageId) ?>" alt=" ">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="main__wrapper">
            <div class="main__heading">
                <h1 class="main__title"><?= $arResult['PROPERTIES']['TITLE_PAGE']['~VALUE'] ?></h1>
                <?php foreach ($arResult['PROPERTIES']['SUBTITLE']['~VALUE'] as $subtitle): ?>
                    <div class="main__subtitle">
                        <?= $subtitle['TEXT'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="main__buttons">
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_1']['~VALUE'])): ?>
                    <a data-custom-open="modal-order"
                       class="btn btn--primary btn--animated btn--lg"><?= $arResult['PROPERTIES']['TEXT_BTN_1']['~VALUE'] ?></a>
                <?php endif; ?>
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_2']['~VALUE']) && !empty($arResult['PROPERTIES']['LINK_BTN_2']['~VALUE'])): ?>
                    <a href="<?= $arResult['PROPERTIES']['LINK_BTN_2']['~VALUE'] ?>" class="btn btn--outline main__btn-mob"><?= $arResult['PROPERTIES']['TEXT_BTN_2']['~VALUE'] ?></a>
                <?php endif; ?>
            </div>
            <div class="main__adv advantages">
                <?php foreach ($arResult['PROPERTIES']['ADVANTAGES']['VALUE'] as $key => $advantage): ?>
                    <div class="advantages__item">
                        <img class="advantages__img" width="38" height="38" src="<?= CFile::GetPath($advantage) ?>"
                             alt=" ">
                        <span class="advantages__text"><?= $arResult['PROPERTIES']['ADVANTAGES']['DESCRIPTION'][$key] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if (!empty($videoYoutubeId1) && !empty($arResult['PROPERTIES']['BG_IMAGE_VIDEO']['VALUE'])): ?>
            <div class="main__hand hand">
                <div class="hand__out">
                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['BG_IMAGE_VIDEO']['VALUE']) ?>" alt=" ">
                </div>
                <div class="hand__video" data-video-content>
                    <a href="#"
                       class="hand__video-link"
                       data-video-load="<?= $videoYoutubeId1 ?>"
                       style="background-image: url('<?= CFile::GetPath($arResult['PROPERTIES']['PREVIEW_VIDEO']['VALUE']) ?>')">
                        <div class="hand__video-icon">
                            <svg width="30" height="30" class="">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                        </div>
                    </a>
                </div>
                <?php if (!empty($arResult['PROPERTIES']['TEXT_BTN_2']['~VALUE']) && !empty($arResult['PROPERTIES']['LINK_BTN_2']['~VALUE'])): ?>
                    <a href="<?= $arResult['PROPERTIES']['LINK_BTN_2']['~VALUE'] ?>"
                       class="btn btn--outline hand__btn" target="_blank"><?= $arResult['PROPERTIES']['TEXT_BTN_2']['~VALUE'] ?></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="bottom">
    <div class="container bottom__container">
        <div class="bottom__wrapper">
            <div class="bottom__gift">
                <div class="bottom__gift-bg">
                    <?php if (!empty($arResult['PROPERTIES']['IMAGE_BOTTOM']['VALUE'])): ?>
                        <img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE_BOTTOM']['VALUE']) ?>" alt=" ">
                    <?php endif; ?>
                </div>
                <div class="bg-fade"></div>
                <div class="bottom__gift-text">
                    <?= $arResult['PROPERTIES']['DESC_IMAGE_BOTTOM']['~VALUE']['TEXT'] ?? '' ?>
                </div>
            </div>
            <div class="bottom__video video">
                <?php if (!empty($videoYoutubeId2)): ?>

                    <div class="video__yt">
                        <div class="video__youtube-wrap">
                            <a class="video__link"
                               style="background-image: url('https://img.youtube.com/vi/<?= $videoYoutubeId2 ?>/hqdefault.jpg ')"
                               data-video-load="<?= $videoYoutubeId2 ?>"
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
                <div class="video__text">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "gallery",
                        array(
                            "ACTIVE_DATE_FORMAT" => "j F Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "Y",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "N",
                            "CHECK_DATES" => "N",
                            "COMPONENT_TEMPLATE" => "",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "N",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(0 => "*", 1 => "",),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "examples",
                            "IBLOCK_TYPE" => "light",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => 50,
                            "PAGER_BASE_LINK" => "",
                            "PAGER_BASE_LINK_ENABLE" => "Y",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_PARAMS_NAME" => "arrPager",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(0 => "", 1 => "*", 2 => "",),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "DESC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
