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
<section class="top-index-sections">
    <div class="top-index-sections__form">
        <div class="bg bg--promo">
            <img src="/local/templates/krovli/assets/images/top-image.webp" alt=" ">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col">
                    <div class="title big">
                        Монтаж и ремонт кровли <span>любой сложности*</span>
                    </div>
                    <div class="guarantee">
                        *Предоставляется <span>гарантия до<br> 36 мес.</span> на все виды работ
                    </div>
                    <button class="btn btn-blue" data-custom-open="modal-order" type="submit">
                        Рассчитать стоимость
                    </button>
                    <button class="btn btn-orange" data-custom-open="modal-order" type="submit">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="top-index-sections__inform">
        <div class="bg bg--section-2">
            <img src="/local/templates/krovli/assets/images/advantage-image.png" alt=" ">
        </div>
        <div class="container">
            <div class="index-inform">
                <div class="title">
                    наши<br><span>преимущества</span>
                </div>
                <div class="row advantages">
                    <div class="item">
                        <div class="advantage">
                            <div class="advantage__pic">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/advantage-1.png" alt="">
                            </div>
                            <div class="advantage__info">
                                Монтаж и ремонт<br><span>в любую погоду</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="advantage">
                            <div class="advantage__pic">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/advantage-2.png" alt="">
                            </div>
                            <div class="advantage__info">
                                <span>Экономия до 25%</span><br>на материале и работах
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="advantage">
                            <div class="advantage__pic">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/advantage-3.png" alt="">
                            </div>
                            <div class="advantage__info">
                                <span>Бесплатный выезд</span><br> замерщика в Москве и МО
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="advantage">
                            <div class="advantage__pic">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/advantage-4.png" alt="">
                            </div>
                            <div class="advantage__info">
                                Штатные кровельщики<br><span> со стажем от 5 лет</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>