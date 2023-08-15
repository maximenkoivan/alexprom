<div id="modal-callback"
     aria-hidden="true"
     class="modal micromodal-slide"
     tabindex="-1">
    <div class="modal__overlay" tabindex="-1" data-custom-close>
        <div class="modal__container modal__container--callback" role="dialog" aria-modal="true">
            <a href="#"
               class="modal__close"
               aria-label="Close modal"
               data-custom-close>
                <svg data-custom-close height="30" width="30" class="call__icon">
                    <use xlink:href="#icon-x"></use>
                </svg>
            </a>

            <div class="h4 modal__title modal__title--callback">Менеджер вам перезвонит</div>

            <div class="modal__text modal__text--callback">оставьте номер телефона для связи</div>

            <form class="modal__form modal__form--callback" action="/request/test.php">
                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="phone"
                               data-dynamic-inp>
                        <span class="nx-dynamic-label__text">Ваше имя</span>
                    </label>
                </div>

                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="phone"
                               data-dynamic-inp
                               data-phone-mask>
                        <span class="nx-dynamic-label__text">Ваш телефон</span>
                    </label>
                </div>

                <div data-order-note class="modal__note">Нажимая на данную кнопку, я даю согласие на обработку персональных данных и ознакомлен с <a href="#" target="_blank">Политикой конфиденциальности</a>
                </div>

                <div class="modal__btn">
                    <button data-ok-title="Спасибо" data-ok-text="Мы с вами свяжемся"  type="submit"
                            class="btn btn--primary btn--lg btn--b-r-5"
                            data-send-request="callback">Заказать звонок</button>
                </div>
            </form>
        </div>
    </div>
</div>

