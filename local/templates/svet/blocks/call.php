<div class="call">

    <div data-open-popup class="call__btn">
        <svg height="30" width="30" class="call__icon call__icon--open">
            <use xlink:href="#icon-call"></use>
        </svg>

        <svg height="30" width="30" class="call__icon call__icon--close">
            <use xlink:href="#icon-x"></use>
        </svg>
    </div>

    <div data-popup class="call__popup">
        <div class="call__title">Напишите ваш номер мы вам перезвоним</div>
        <form class="call__form" action="/request/test.php">
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

            <div class="call__submit">
                <button type="submit"
                        class="btn btn--primary btn--lg btn--b-r-5"
                        data-send-request="callback">Заказать звонок</button>
            </div>
        </form>
    </div>

</div>