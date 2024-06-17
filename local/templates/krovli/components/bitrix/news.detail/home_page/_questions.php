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
<section class="questions-sections">
    <div class="container">
        <div class="questions">
            <div class="title big">
                остались <span>вопросы?</span>
            </div>
            <p>Оставьте заявку и мы свяжемся с вами <span>в ближайшее время</span></p>
            <div class="questions__form">
                <div class="form-index-block">
                    <form class="form-index col gx-5">
                        <div class="form-field">
                            <input type="text" class="form-control " id="inputName" placeholder="Имя" required>
                        </div>
                        <div class="form-field">
                            <input
                                type="tel"
                                class="form-control"
                                id="inputPhone"
                                placeholder="Телефон"
                                required
                                minlength="11"
                                maxlength="11"
                            >
                        </div>
                        <button class="btn btn-blue form-field" type="submit">
                            заказать услугу
                        </button>
                        <div class="form-field__text">
                            <p>
                                Нажимая на данную кнопку, вы даете согласие на обработку<br>
                                персональных данных подтверждаете ознакомление с<br>
                                политикой конфиденциальности
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>