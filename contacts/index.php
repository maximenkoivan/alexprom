<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetTitle("Контакты");
?>

<div class="section-flip section-flip--light" id="project">

  <section class="section contacts">
    <div class="container contacts__container">
      <div class="contacts__gallery">
          <div class="contacts-card">
              <h3 class="contacts-card__title">
                  Контактный телефон
              </h3>
              <p class="contacts-card__desc">
                <?$APPLICATION->IncludeFile('/include/contactsphone.php')?>
              </p>
          </div>
          <div class="contacts-card">
              <h3 class="contacts-card__title">
                  Адрес компании
              </h3>
              <p class="contacts-card__desc">
                  <?$APPLICATION->IncludeFile('/include/contactsaddress.php')?>
              </p>
          </div>
          <div class="contacts-card">
              <h3 class="contacts-card__title">
                  Электронная почта
              </h3>
              <p class="contacts-card__desc">
                  <?$APPLICATION->IncludeFile('/include/contactsemail.php')?>
              </p>
          </div>
          <div class="contacts-card">
              <h3 class="contacts-card__title">
                  График работы
              </h3>
              <p class="contacts-card__desc contacts-card__desc--bigger">
                  <?$APPLICATION->IncludeFile('/include/contactwork.php')?>
              </p>
          </div>
			<?php if (
				!empty($arSetting['S7']['VALUE']) ||
				!empty($arSetting['S8']['VALUE']) ||
				!empty($arSetting['S9']['VALUE'])
			) : ?>
				<div class="contacts-card">
					<h3 class="contacts-card__title">
						Социальные сети
					</h3>
					<div class="contacts-card__socials socials">
						<?php if (!empty($arSetting['S7']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S7']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в VK">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/vk-icon.svg#vk" />
							  </svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($arSetting['S8']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S8']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в Facebook">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/fb-icon.svg#fb" />
							  </svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($arSetting['S9']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S9']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в одноклассниках">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/ok-icon.svg#ok" />
							  </svg>
							</a>
						<?php endif; ?>
                      </div>
				</div>
			<?php endif; ?>
			<?php if (
				!empty($arSetting['S10']['VALUE']) ||
				!empty($arSetting['S11']['VALUE']) ||
				!empty($arSetting['S12']['VALUE'])
			) : ?>
                <div class="contacts-card">
                    <h3 class="contacts-card__title">
                        Мессенджеры
                    </h3>
					<div class="contacts-card__socials socials">
						<?php if (!empty($arSetting['S10']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S10']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в whatsapp">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/wa-icon.svg#wa" />
							  </svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($arSetting['S11']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S11']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в Viber">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/viber-icon.svg#viber" />
							  </svg>
							</a>
						<?php endif; ?>
						<?php if (!empty($arSetting['S12']['VALUE'])) : ?>
							<a href="<?php echo $arSetting['S12']['VALUE']; ?>" class="socials__link" aria-label="Alexprom в Telegram">
							  <svg class="socials__icon">
								<use href="/local/templates/main/images/socials/tg-icon.svg#tg" />
							  </svg>
							</a>
						<?php endif; ?>
                      </div>
                </div>
			<?php endif; ?>

      </div>
    </div>
  </section>

  <div class="container contacts__map-container">
      <div class="map">
          <div class="map__content">
              <?$APPLICATION->IncludeFile('/include/contactsmap.php')?>
          </div>
      </div>
            <div class="consultation__bg">
                <div class="consultation__content">
                    <h2 class="consultation__title"> Запишитесь на бесплатную <br> консультацию </h2>
                    <p class="consultation__text">
                        Оставьте заявку, и&nbsp;наш менеджер перезвонит вам в&nbsp;течение 30&nbsp;минут и&nbsp;проконсультируем по&nbsp;всем вопросам.
                    </p>
                </div>
                <div class="consultation__box">
                    <div class="form-vertical js_form" data-action="/include/formservices.php">
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
                        <span class="form__agree">Нажимая на кнопку, я соглашаюсь на обработку персональных данных и ознакомлен с&nbsp;<a href="/privacy-notice/">Политикой&nbsp;конфиденциальности</a></span>
                        <input type="hidden" name="utm_source" >
                        <input type="hidden" name="utm_medium" >
                        <input type="hidden" name="utm_campaign" >
                        <input type="hidden" name="utm_content" >
                        <input type="hidden" name="utm_term" >
                        <input type="hidden" name="referrer" >
                        <input type="hidden" name="requestTime" >
                    </div>
                </div>
            </div>


  </div>

	<?php /*
  <section class="section-shifter consultation">
    <?$APPLICATION->IncludeComponent(
  	"bitrix:news.detail",
  	"consultation",
  	array(
  		"ACTIVE_DATE_FORMAT" => "d.m.Y",
  		"ADD_ELEMENT_CHAIN" => "N",
  		"ADD_SECTIONS_CHAIN" => "N",
  		"AJAX_MODE" => "N",
  		"AJAX_OPTION_ADDITIONAL" => "",
  		"AJAX_OPTION_HISTORY" => "N",
  		"AJAX_OPTION_JUMP" => "N",
  		"AJAX_OPTION_STYLE" => "Y",
  		"BROWSER_TITLE" => "-",
  		"CACHE_GROUPS" => "Y",
  		"CACHE_TIME" => "36000000",
  		"CACHE_TYPE" => "A",
  		"CHECK_DATES" => "N",
  		"DETAIL_URL" => "",
  		"DISPLAY_BOTTOM_PAGER" => "N",
  		"DISPLAY_DATE" => "Y",
  		"DISPLAY_NAME" => "Y",
  		"DISPLAY_PICTURE" => "Y",
  		"DISPLAY_PREVIEW_TEXT" => "Y",
  		"DISPLAY_TOP_PAGER" => "N",
  		"ELEMENT_CODE" => "",
  		"ELEMENT_ID" => "113",
  		"FIELD_CODE" => array(
  			0 => "PREVIEW_TEXT",
  			1 => "PREVIEW_PICTURE",
  			2 => "DETAIL_TEXT",
  			3 => "DETAIL_PICTURE",
  			4 => "",
  		),
  		"IBLOCK_ID" => "15",
  		"IBLOCK_TYPE" => "service",
  		"IBLOCK_URL" => "",
  		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
  		"MESSAGE_404" => "",
  		"META_DESCRIPTION" => "-",
  		"META_KEYWORDS" => "-",
  		"PAGER_BASE_LINK_ENABLE" => "N",
  		"PAGER_SHOW_ALL" => "N",
  		"PAGER_TEMPLATE" => ".default",
  		"PAGER_TITLE" => "Страница",
  		"PROPERTY_CODE" => array(
  			0 => "FZRULES",
  			1 => "BUTTONTEXT",
  			2 => "FZLINK",
  			3 => "",
  			4 => "",
  			5 => "",
  			6 => "",
  			7 => "",
  			8 => "",
  			9 => "",
  		),
  		"SET_BROWSER_TITLE" => "N",
  		"SET_CANONICAL_URL" => "N",
  		"SET_LAST_MODIFIED" => "N",
  		"SET_META_DESCRIPTION" => "N",
  		"SET_META_KEYWORDS" => "N",
  		"SET_STATUS_404" => "N",
  		"SET_TITLE" => "N",
  		"SHOW_404" => "N",
  		"STRICT_SECTION_CHECK" => "N",
  		"USE_PERMISSIONS" => "N",
  		"USE_SHARE" => "N",
  		"COMPONENT_TEMPLATE" => "consultation"
  	),
  	false
  );?>
</section>
	*/?>


  <section class="section requisites">
    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "requisites", Array(
    	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
    		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    		"AJAX_MODE" => "N",	// Включить режим AJAX
    		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
    		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
    		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    		"CACHE_TYPE" => "A",	// Тип кеширования
    		"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
    		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
    		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
    		"DISPLAY_NAME" => "Y",	// Выводить название элемента
    		"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
    		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    		"ELEMENT_CODE" => "",	// Код новости
    		"ELEMENT_ID" => "112",	// ID новости
    		"FIELD_CODE" => array(	// Поля
    			0 => "PREVIEW_TEXT",
    			1 => "PREVIEW_PICTURE",
    			2 => "DETAIL_TEXT",
    			3 => "DETAIL_PICTURE",
    			4 => "",
    		),
    		"IBLOCK_ID" => "14",	// Код информационного блока
    		"IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
    		"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
    		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
    		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
    		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    		"PAGER_TITLE" => "Страница",	// Название категорий
    		"PROPERTY_CODE" => array(	// Свойства
    			0 => "S3",
    			1 => "S4",
    			2 => "S5",
    			3 => "S6",
    			4 => "S7",
    			5 => "S1",
    			6 => "S2",
    			7 => "VIDEO",
    			8 => "TEXT1",
    			9 => "TEXT2",
    			10 => "TEXT3",
    			11 => "TEXT4",
    			12 => "PHOTOS",
    			13 => "",
    		),
    		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
    		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    		"SET_STATUS_404" => "N",	// Устанавливать статус 404
    		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
    		"SHOW_404" => "N",	// Показ специальной страницы
    		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
    		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
    		"USE_SHARE" => "N",	// Отображать панель соц. закладок
    		"COMPONENT_TEMPLATE" => "promoDir"
    	),
    	false
    );?>
  </section>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
