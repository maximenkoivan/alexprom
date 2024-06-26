<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="sections-contact">
    <div class="title big ta-c">
        <?= $arResult['PROPERTIES']['TITLE_CONTACT']['~VALUE'] ?>
    </div>
    <div class="map-wrap">
        <div class="address-tab">
            <div class="logo">
                <?php if (!empty($arResult['PROPERTIES']['LOGO_CONTACT']['VALUE'])): ?>
                    <img src="<?= CFile::GetPath($arResult['PROPERTIES']['LOGO_CONTACT']['VALUE']) ?>"
                         alt="<?= strip_tags($arResult['PROPERTIES']['ADDRESS_CONTACT']['~VALUE']) ?>">
                <?php endif; ?>
            </div>
            <div class="info"><?= $arResult['PROPERTIES']['ADDRESS_CONTACT']['~VALUE'] ?></div>
            <?php if (!empty($arResult['PROPERTIES']['EMAIL_CONTACT']['~DESCRIPTION'])): ?>
                <div class="email">
                    <div class="ellipse-icon">
                        <div class="ellipse-icon__pic">
                            <?php if (!empty($arResult['PROPERTIES']['EMAIL_CONTACT']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['EMAIL_CONTACT']['VALUE']) ?>"
                                     alt="<?= strip_tags($arResult['PROPERTIES']['EMAIL_CONTACT']['~DESCRIPTION']) ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="mailto:<?= $arResult['PROPERTIES']['EMAIL_CONTACT']['~DESCRIPTION'] ?>">
                        <?= $arResult['PROPERTIES']['EMAIL_CONTACT']['~DESCRIPTION'] ?>
                    </a>
                </div>
            <?php endif; ?>
            <?php if (!empty($arResult['PROPERTIES']['PHONE_CONTACT']['~DESCRIPTION'])): ?>
                <div class="phone">
                    <div class="ellipse-icon">
                        <div class="ellipse-icon__pic">
                            <?php if (!empty($arResult['PROPERTIES']['PHONE_CONTACT']['VALUE'])): ?>
                                <img src="<?= CFile::GetPath($arResult['PROPERTIES']['PHONE_CONTACT']['VALUE']) ?>"
                                     alt="<?= strip_tags($arResult['PROPERTIES']['PHONE_CONTACT']['~DESCRIPTION']) ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <a class=""
                       href="tel:<?= \classes\Helpers\Generic::getCleanPhoneNumber($arResult['PROPERTIES']['PHONE_CONTACT']['~DESCRIPTION']) ?>"><?= $arResult['PROPERTIES']['PHONE_CONTACT']['~DESCRIPTION'] ?></a>
                </div>
            <?php endif; ?>
        </div>

        <div class="map-wrap__inner" id="contact-map" style="position:relative;overflow:hidden;">
            <iframe src="https://yandex.by/map-widget/v1/?ll=37.720023%2C55.808519&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1Njc2NDY5NhI70KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAsINCR0L7QudGG0L7QstCw0Y8g0YPQu9C40YbQsCwgMjIiCg3l5RZCFQtDX0I%2C&source=serp_navig&z=14.26"
                    frameborder="0" allowfullscreen="true"></iframe>
            <script>
                document.addEventListener('click', function (e) {
                    let map = document.querySelector('#contact-map iframe')
                    if (e.target.id === 'contact-map') {
                        map.style.pointerEvents = 'all'
                    } else {
                        map.style.pointerEvents = 'none'
                    }
                })
            </script>
        </div>
</section>