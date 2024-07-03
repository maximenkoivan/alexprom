<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
?>
<section class="how-work-sections">
    <div class="block-ellipse">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/block-ellipse.png" alt="">
    </div>
    <div class="how-work">
        <div class="title big ta-c">
            <?= $arResult['PROPERTIES']['TITLE_WORK']['~VALUE'] ?>
        </div>
        <div class="how-work__wrapper">
            <div class="how-work__item">
                <div class="how-work__count">01</div>
                <div class="how-work__img">
                    <img src="/local/templates/krovli/assets/images/how-work-1.png" alt="">
                </div>
                <div class="how-work__bottom">Заявка, замер и расчет сметы</div>
            </div>
            <div class="how-work__item">
                <div class="how-work__count">02</div>
                <div class="how-work__img">
                    <img src="/local/templates/krovli/assets/images/how-work-2.png" alt="">
                </div>
                <div class="how-work__bottom">Согласование и подписание договора</div>
            </div>
            <div class="how-work__item">
                <div class="how-work__count">03</div>
                <div class="how-work__img"></div>
                <div class="how-work__bottom">Закупка и доставка материалов</div>
            </div>
            <div class="how-work__item">
                <div class="how-work__count">04</div>
                <div class="how-work__img">
                    <img src="/local/templates/krovli/assets/images/how-work-4.png" alt="">
                </div>
                <div class="how-work__bottom">Монтажные/ремонтные работы</div>
            </div>
            <div class="how-work__item">
                <div class="how-work__count">05</div>
                <div class="how-work__img">
                    <img src="/local/templates/krovli/assets/images/how-work-5.png" alt="">
                </div>
                <div class="how-work__bottom">Сдача объекта/проверка на наличии повреждений</div>
            </div>
            <div class="how-work__item">
                <div class="how-work__count">06</div>
                <div class="how-work__img">
                    <img class="hidden xs-visible" src="/local/templates/krovli/assets/images/how-work-4.png" alt="">
                    <img class="xs-hidden" src="/local/templates/krovli/assets/images/how-work-6.png" alt="">
                </div>
                <div class="how-work__bottom">Гарантия и обслуживание кровли</div>
            </div>
        </div>
    </div>
</section>
