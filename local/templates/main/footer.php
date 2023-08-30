<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Helpers\Generic;
use classes\Models\Alpinism\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <?php if (!empty($footer['LOGO_FOOTER']['VALUE'])): ?>
                <a class="footer-top__logo" <?= $APPLICATION->GetCurPage() == '/' ? '' : 'href="/"' ?>>
                    <img class="footer-top__img" src="<?= CFile::GetPath($footer['LOGO_FOOTER']['VALUE']) ?>"
                         alt="AlexProm">
                </a>
            <?php endif; ?>
            <div class="footer__menu">
                <h3 class="footer__menu-title"><?= $footer['TITLE_CONTACTS_FOOTER']['~VALUE'] ?></h3>
                <ul class="footer__menu-list">
                    <?php if (!empty($footer['EMAIL_FOOTER']['~VALUE'])): ?>
                        <li class="footer__menu-item">
                            <a href="mailto:<?= $footer['EMAIL_FOOTER']['~VALUE'] ?>"
                               class="footer__menu-link link link--mail"><?= $footer['EMAIL_FOOTER']['~VALUE'] ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($footer['PHONE_FOOTER']['~VALUE'])): ?>
                        <li class="footer__menu-item">
                            <a href="tel:<?= Generic::getCleanPhoneNumber($footer['PHONE_FOOTER']['~VALUE']) ?>"
                               class="footer__menu-link link link--phone"><?= $footer['PHONE_FOOTER']['~VALUE'] ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if (!empty($footer['ADDRESS_FOOTER']['~VALUE'])): ?>
                        <li class="footer__menu-item">
                            <span class="link link--geo"><?= $footer['ADDRESS_FOOTER']['~VALUE'] ?></span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer__menu">
                <h3 class="footer__menu-title"><?= $footer['TITLE_SERVICES_FOOTER']['~VALUE'] ?></h3>
                <ul class="footer__menu-list">
                    <?php foreach ($footer['SERVICES_FOOTER']['VALUE'] as $service): ?>
                        <li class="footer__menu-item">
                            <a href="<?= $service ?>" class="footer__menu-link"><?= $service ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer__menu">
                <h3 class="footer__menu-title"><?= $footer['TITLE_SECTIONS_FOOTER']['~VALUE'] ?></h3>
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Новости</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Проекты</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="#" class="footer__menu-link">Вакансии</a>
                    </li>
                </ul>
            </div>

            <div class="footer__menu">
                <h3 class="footer__menu-title"><?= $footer['TITLE_SOCNET_FOOTER']['~VALUE'] ?></h3>
                <div class="footer-bottom__socials socials">
                    <?php foreach ($footer['SOCNET_FOOTER']['VALUE'] as $key => $icon): ?>
                        <?php if (!empty($footer['SOCNET_FOOTER']['DESCRIPTION'][$key])): ?>
                            <a href="<?= $footer['SOCNET_FOOTER']['DESCRIPTION'][$key] ?>" target="_blank"
                               class="socials__link">
                                <svg class="socials__icon">
                                    <use href="<?= CFile::GetPath($icon) ?>#<?= substr(CFile::GetFileArray($icon)['ORIGINAL_NAME'], 0, 2) ?>"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__docs">
                <span><?= $footer['COPYRIGHT_FOOTER']['~VALUE'] ?></span>
                <?php if (!empty($footer['TEXT_LINK_POLICY_FOOTER']['~VALUE']) && !empty($footer['LINK_POLICY_FOOTER']['~VALUE'])): ?>
                    <a class="footer-bottom__docs-link" href="<?= $footer['LINK_POLICY_FOOTER']['~VALUE'] ?>">
                        <?= $footer['TEXT_LINK_POLICY_FOOTER']['~VALUE'] ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<button class="button-scroll-top" aria-label="листать вверх" title="Листать наверх"></button>

<div class="modal-form b_modal" id="form-contact" data-closer-type="inner">
    <div class="modal-form__head">
        <h3 class="modal-form__title">
            Оставьте свои контакты <br> и мы вам перезвоним
        </h3>
        <p class="modal-form__desc">
            Оставьте заявку, и наш менеджер перезвонит вам <br>
            в течение 30 минут и проконсультирует по всем вопросам.
        </p>
    </div>
    <div class="modal-form__body">
        <div data-action="/" class="form-vertical js_form">
            <input type="hidden" name="utm_source">
            <input type="hidden" name="form_message" value>
            <label class="input input-name form-control">
                <input
                        class="input__field"
                        name="user_name"
                        type="text"
                        placeholder="Ваше имя"
                        autocomplete="name"
                >
            </label>
            <label class="input input-tel form-control">
                <input
                        class="input__field mask-tel"
                        required
                        name="user_tel"
                        type="tel"
                        placeholder="Ваш номер телефона"
                        maxlength="25"
                        minlength="10"
                        autocomplete="tel"
                >
            </label>
            <button class="btn-main" type="submit">Получить консультацию</button>
            <span class="form__agree">Нажимая на кнопку, я соглашаюсь на обработку <a
                        href="#">персональных данных</a></span>
            <input type="hidden" name="utm_source">
            <input type="hidden" name="utm_medium">
            <input type="hidden" name="utm_campaign">
            <input type="hidden" name="utm_content">
            <input type="hidden" name="utm_term">
            <input type="hidden" name="referrer">
            <input type="hidden" name="requestTime">
        </div>
    </div>
</div>

<div class="preloader">
    <img src="./images/common/loader.svg" alt="" class="preloader__loader">
</div>

</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=2b19e0af-ec94-422d-9726-8deb559736fe&_v=20230217195447"></script>
</body>
</html>