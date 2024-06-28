<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$portfolio = \classes\Models\Roofs\HomePage\Portfolio::getInstance()->getAllElements();
?>
<?php if (!empty($portfolio)): ?>
    <section class="portfolio-sections">
        <div class="container portfolio">
            <div class="title big">
                <?= $arResult['PROPERTIES']['TITLE_PORTFOLIO']['~VALUE'] ?>
            </div>
            <div class="swiper-outside-wrap">
                <div data-list-slider="portfolio" class="portfolio-slider">
                    <div class="swiper-wrapper portfolio-slider__wrapper">
                        <?php foreach ($portfolio as $items): ?>
                            <div class="swiper-slide">
                                <?php foreach ($items['IMAGES']['VALUE'] as $key => $imageId): ?>
                                    <?php if ($key > 0) continue ?>
                                    <div class="nx-video">
                                        <div class="nx-video__wrapper">
                                            <?php if (!empty($items['IMAGES']['DESCRIPTION'][$key])): ?>
                                                <div class="nx-video__link"
                                                     style="background-image: url('<?= CFile::GetPath($imageId) ?>')"
                                                     data-video-link="<?= \classes\Helpers\Generic::getVideoYoutubeID($items['IMAGES']['DESCRIPTION'][$key]) ?>"
                                                     data-video-modal="empty">
                                                    <div class="nx-video__icon"></div>
                                                </div>
                                            <?php else: ?>
                                                <a data-fslightbox="portfolio"
                                                   href="<?= CFile::GetPath($imageId) ?>"
                                                   class="nx-video__link">
                                                    <img src="<?= CFile::GetPath($imageId) ?>" alt=" ">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div class="pic-box">
                                    <?php foreach ($items['IMAGES']['VALUE'] as $key => $imageId): ?>
                                        <?php if ($key === 0 || $key > 3) continue ?>
                                        <a data-fslightbox="portfolio"
                                           href="<?= CFile::GetPath($imageId) ?>"
                                           class="pic-box__item">
                                            <img src="<?= CFile::GetPath($imageId) ?>" alt=" ">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="info-box">
                                    <div class="info-box__title">
                                        <?= $items['NAME'] ?>
                                    </div>
                                    <div class="info-box__desc">
                                        <?= $items['DESCRIPTION']['~VALUE']['TEXT'] ?? '' ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div data-list-slider-prev class="portfolio-slider__btn-prev">
                        <svg width="80" height="80">
                            <use xlink:href="#icon-caret-left"></use>
                        </svg>
                    </div>
                    <div data-list-slider-next class="portfolio-slider__btn-next">
                        <svg width="80" height="80">
                            <use xlink:href="#icon-caret-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>