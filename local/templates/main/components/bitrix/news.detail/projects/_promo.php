<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$advantagesBlockStyle = !empty($arResult['PAGE_SETTINGS']['DESC_1']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_2']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_3']['~VALUE'])
|| !empty($arResult['PAGE_SETTINGS']['DESC_4']['~VALUE']) ? '' : 'hero--no-bullets';
?>
<main class="hero hero--has-overlay hero--has-breadcrumbs  <?= $advantagesBlockStyle ?>">
    <div class="hero__thumb">
        <?php if (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
            <picture class="hero__pic">
                <img class="hero__img" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                     alt="<?= $arResult['DETAIL_PICTURE']['DESCRIPTION'] ?? $arResult['DETAIL_PICTURE']['ALT'] ?>">
            </picture>
        <?php endif; ?>
        <div class="container hero__container">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item">
                        <a href="/" class="breadcrumbs__link">
                            Главная
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="<?= $arResult['LIST_PAGE_URL'] ?>" class="breadcrumbs__link">
                            <?= $arResult['IBLOCK']['NAME'] ?>
                        </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <?= $arResult['NAME'] ?>
                    </li>
                </ul>
            </div>
            <?php //микроразметка хлебных крошек
            $data = [
                '@context' => 'http://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem',
                    'position' => '1',
                        'item' => [
                            '@id' => 'https://alexprom.ru/',
                            'name' => 'Главная',
                        ],
                    ],
                    ['@type' => 'ListItem',
                    'position' => '2',
                        'item' => [
                            '@id' => 'https://alexprom.ru'.$arResult['LIST_PAGE_URL'],
                            'name' => $arResult['IBLOCK']['NAME'],
                        ],
                    ],
                    ['@type' => 'ListItem',
                    'position' => '3',
                        'item' => [
                            '@id' => 'https://alexprom.ru'.$APPLICATION->GetCurDir(),
                            'name' => $arResult['NAME'],
                        ],
                    ],
                ]
            ];
            $data = json_encode($data);
            echo '<script type="application/ld+json">' . $data . '</script>';
            ?>

            <h1 class="title-h1 hero__title">
                <?= $arResult['PROPERTIES']['TITLE_PAGE']['~VALUE'] ?? $arResult['META_TAGS']['TITLE'] ?>
            </h1>
            <p>
                <?= $arResult['PROPERTIES']['SUBTITLE']['~VALUE'] ?>
            </p>
            <?php if (!empty($arResult['PAGE_SETTINGS']['TEXT_BTN_DETAIL']['~VALUE'])): ?>
                <div class="hero__buttons">
                    <a href="#project" class="hero__btn"><?= $arResult['PAGE_SETTINGS']['TEXT_BTN_DETAIL']['~VALUE'] ?></a>
                </div>
            <?php endif; ?>
            <?php if (!$advantagesBlockStyle): ?>
                <div class="hero-info">
                    <div class="hero-info__stroke">
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_1_DETAIL']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_1_DETAIL']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_1_DETAIL']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_1_DETAIL']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_1_DETAIL']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_2_DETAIL']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_2_DETAIL']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_2_DETAIL']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_2_DETAIL']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_2_DETAIL']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_3_DETAIL']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_3_DETAIL']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_3_DETAIL']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_3_DETAIL']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_3_DETAIL']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($arResult['PAGE_SETTINGS']['IMAGE_4_DETAIL']['VALUE']) && !empty($arResult['PAGE_SETTINGS']['DESC_4_DETAIL']['~VALUE'])): ?>
                            <div class="hero-info__item">
                                <div class="hero-info__desc">
                                    <span class="hero-info__text"><?= $arResult['PAGE_SETTINGS']['DESC_4_DETAIL']['~VALUE'] ?></span>
                                </div>
                                <picture class="hero-info__icon">
                                    <img src="<?= CFile::GetPath($arResult['PAGE_SETTINGS']['IMAGE_4_DETAIL']['VALUE']) ?>"
                                         alt="<?= $arResult['PAGE_SETTINGS']['DESC_4_DETAIL']['~VALUE'] ?>">
                                </picture>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($arResult['DETAIL_PICTURE']['SRC'])): ?>
            <picture class="hero__worker">
                <img class="hero__worker-img" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                     alt="<?= $arResult['DETAIL_PICTURE']['DESCRIPTION'] ?? $arResult['DETAIL_PICTURE']['ALT'] ?>">
            </picture>
        <?php endif; ?>
    </div>
</main>