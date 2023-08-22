<section style="background-image: url('/local/templates/sneg/assets/images/sections/bg7.jpg');"  class="cake">
    <div class="container">
        <div class="cake__wrapper">
            <form action="/request/test.php" class="cake__form">
                <h3 class="cake__form-title"><span>ВКУСНЫЙ ТОРТ</span>
                    В ПОДАРОК</h3>
                <div class="cake__form-subtitle">себе на почту, указав ваши контактные данные в форме ниже</div>
                <div class="form-group" data-form-group>
                    <label class="nx-dynamic-label" data-dynamic-label>
                        <input type="text"
                               class="nx-dynamic-label__input nx-form-element"
                               name="name"
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

                <div data-order-note class="cake__form-note">Нажимая на данную кнопку, я даю согласие на обработку персональных данных и ознакомлен с <a href="#" target="_blank">Политикой конфиденциальности</a>
                </div>

                <div class="cake__form-btn">
                    <button data-ok-title="Спасибо" data-ok-text="Мы с вами свяжемся"  type="submit"
                            class="btn btn--primary btn--lg"
                            data-send-request="callback">Заказать презентацию</button>
                </div>

            </form>
            <div class="cake__image">
                <img src="/local/templates/sneg/assets/images/sections/girl.png" alt=" ">
            </div>
        </div>
    </div>
</section>