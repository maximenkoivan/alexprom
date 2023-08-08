<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>

<footer class="footer">
  <div class="container">
      <div class="footer-top">
          <a class="footer-top__logo" href="/">
            <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/include_areas/logotypeBottom.php')?>
          </a>
          <?$APPLICATION->IncludeComponent("bitrix:menu", "footerMenu", Array(
          	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
          		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
          		"DELAY" => "N",	// Откладывать выполнение шаблона меню
          		"MAX_LEVEL" => "1",	// Уровень вложенности меню
          		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
          		"MENU_CACHE_TIME" => "3600000000000",	// Время кеширования (сек.)
          		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
          		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
          		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
          		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
          		"COMPONENT_TEMPLATE" => "headerMenu"
          	),
          	false
          );?>
          <div class="footer-top__info">
            <a class="link" href="mailto:<?php echo $arSetting['S2']['VALUE'] ?>"><?php echo $arSetting['S2']['VALUE'] ?></a>
            <a class="link" href="tel:<?php echo $arSetting['S6']['VALUE'] ?>"><?php echo $arSetting['S1']['VALUE'] ?></a>
			<span><a target="_blank" href="<?php echo $arSetting['S4']['VALUE'] ?>" class="footer-bottom__docs-link"><?php echo $arSetting['S3']['VALUE'] ?></a></span>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="footer-bottom__docs">
			  <a class="footer-bottom__docs-link" href="/"><?php echo $arSetting['S5']['VALUE'] ?></span>
              <a class="footer-bottom__docs-link" href="/privacy-notice/">Политика конфиденциальности</a>
          </div>
		  <div class="footer-bottom__socials socials">
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
  </div>
</footer>

<button class="button-scroll-top" aria-label="листать вверх" title="Листать наверх" type="button"></button>

<div class="modal-form modal-service b_modal" id="modal-service" data-closer-type="inner">
	<div class="modal-form__head">
		<h3 class="modal-form__title">
			Заказать <span class="modal-service__name"></span>
 		</h3>
		<p class="modal-form__desc">
			Оставьте заявку, и наш менеджер перезвонит вам <br>
			в течение 30 минут и проконсультирует по всем вопросам.
		</p>
	</div>
	<div class="modal-form__body">
	  <div class="form-vertical js_form" data-action="/include/sendpriceform.php" method="post">
	      <input type="hidden" name="service_name">
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

	      <button class="btn-main" type="submit">Заказать</button>
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
	  <div class="form-vertical js_form" method="post" data-action="/include/formservices.php">
	  		<input type="hidden" name="utm_source" >
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

	      <button class="btn-main" type="submit">Получить консультацию!</button>
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
<div class="modal-form b_modal" id="form-price" data-closer-type="inner">
	<div class="modal-form__head">
		<h3 class="modal-form__title">
			Оставьте свои контакты <br> и получите прайс-лист
 		</h3>
		<p class="modal-form__desc">
			Оставьте заявку, и наш менеджер перезвонит вам <br>
			в течение 30 минут и проконсультирует по всем вопросам.
		</p>
	</div>
	<div class="modal-form__body">
	  <div class="form-vertical js_form" method="post" data-action="/include/formservices.php">
	  		<input type="hidden" name="utm_source" >
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


<div class="preloader">
	<img src="/local/templates/main/images/common/loader.svg" alt="" class="preloader__loader">
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(94489760, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/94489760" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<script src="https://myreviews.dev/widget/dist/index.js" defer></script> 
    <script defer>
		if (document.querySelector('#myReviews__block-widget')) {

        (function (){
          var ru = "ru";
          var myReviewsInit = function () {
            new window.myReviews.BlockWidget({
            uuid: "0c1e0f0d-d9ee-42f5-b967-06ba22289cb9",
            name: "g7413939",
            additionalFrame:"none",
            lang:"ru",
            widgetId: "0"
            }).init();

          };
        if (document.readyState === "loading") {
          document.addEventListener('DOMContentLoaded', function () {
              myReviewsInit()
          })
        } else {
          myReviewsInit()
        }
        })()
		}
</script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=2b19e0af-ec94-422d-9726-8deb559736fe&_v=20230217195447"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bundle.min.js?_v=20230614164212"></script>
</body>
</html>
