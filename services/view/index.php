<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<div class="section-flip section-flip--light" id="project">
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"servicedetail",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
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
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
    "ELEMENT_CODE" => $_REQUEST["CODE"],
    "ELEMENT_ID" => $_REQUEST["ID"],
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
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
			0 => "S2",
			1 => "S4",
			2 => "S1",
			3 => "S3",
			4 => "PHOTOS",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<section class="section-shifter consultation">
  <div class="container consultation__container">
    <div class="consultation__bg">
          <div class="consultation__content">
              <h2 class="consultation__title">
                  Запишитесь на бесплатную консультацию
              </h2>
              <p class="consultation__text">Оставьте заявку, и&nbsp;наш менеджер перезвонит вам в&nbsp;течение 30&nbsp;минут и&nbsp;проконсультируем по&nbsp;всем вопросам.</p>
          </div>
          <div class="consultation__box">
              <form class="form-vertical js_form">
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
                <span class="form__agree">Нажимая на&nbsp;кнопку, я соглашаюсь на&nbsp;обработку <a href="">персональных данных</a></span>
                <input type="hidden" name="utm_source" >
                <input type="hidden" name="utm_medium" >
                <input type="hidden" name="utm_campaign" >
                <input type="hidden" name="utm_content" >
                <input type="hidden" name="utm_term" >
                <input type="hidden" name="referrer" >
                <input type="hidden" name="requestTime" >
            </form>
        </div>
    </div>
</div>
</section>
<section class="section services">
  <div class="container">
    <div class="services__head">
        <h2 class="title-h2">Популярные услуги</h2>
        <a href="/services/" class="btn-primary _desktop">Смотреть все услуги</a>
    </div>
    <?$APPLICATION->IncludeComponent(
    	"alexprom:popular.services",
    	"",
    Array()
    );?>
  </div>
</section>
<section class="section experience">
  <div class="experience__main">
  <div class="container experience__container">
  <div class="experience__hero">
    <div class="experience__hero-media">
      <picture class="experience__hero-pic">
        <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/experience-hero.webp" type="image/webp">
        <img  class="experience__hero-img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/experience-hero.png" alt="">
      </picture>
      <div class="experience__hero-hint">
        <p class="experience__hero-hint-title">- Жданов Александр</p>
        <p class="experience__hero-hint-desc">
          Генеральный директор <br>
          ООО «АлексПром»
        </p>
      </div>
    </div>
  </div>
  <div class="experience__content">
    <h2 class="title-h2 experience__title">
      Опыт, накопленный <br>
      за 12 лет работы в&nbsp;сфере
      промышленного альпинизма
    </h2>
    <div class="experience__video">
      <div class="experience__video-box">
        <img  class="experience__video-cover lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/experience-video-cover.jpg" alt="">
        <a href="https://www.youtube.com/watch?v=S1wf1iKU3l4" data-fancybox class="play-cover"></a>
      </div>
      <p class="experience__video-desc">
        Позволяет нам предлагать рынку
        нестандартные решения в обмен
        на&nbsp;интересные и амбициозные проекты.
        Смотрите видео о нашей компании.
      </p>
    </div>
    <div class="experience-slides">
      <div class="gallery-carousel">
          <div class="swiper experience-gallery">
              <div class="swiper-wrapper">
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" data-fancybox class="experience-gallery__link"></a>
                </div>
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                    <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" data-fancybox class="experience-gallery__link"></a>
                </div>
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" data-fancybox class="experience-gallery__link"></a>
                </div>
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" data-fancybox class="experience-gallery__link"></a>
                </div>
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                      <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-vert.png" data-fancybox class="experience-gallery__link"></a>
                </div>
                <div class="swiper-slide experience-gallery__slide">
                  <picture class="experience-gallery__thumb">
                    <source srcset="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.webp" type="image/webp">
                      <img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" alt="">
                  </picture>
                  <a href="<?=SITE_TEMPLATE_PATH?>/images/experience/cert-hor.png" data-fancybox class="experience-gallery__link"></a>
                </div>

              </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="container">
  <div class="hero-info experience-info">
    <div class="hero-info__stroke">
      <?$APPLICATION->IncludeFile('/include/about/teasers.php', Array(), Array("MODE"=>"text"))?>
    </div>
  </div>
  </div>
</section>



<section class="section advantages">
  <div class="container">
  <h2 class="title-h2 advantages__title"><?$APPLICATION->IncludeFile('/include/about/advantagestitle.php', Array(), Array("MODE"=>"text"))?></h2>
  <div class="advantages__box">
    <div class="advantages-card _has-img">
        <picture class="advantages-card__pic">
          <img class="advantages-card__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/advantages/book.png" alt="">
        </picture>
        <?$APPLICATION->IncludeFile('/include/about/advantagescard_1.php', Array(), Array("MODE"=>"text"))?>
    </div>
    <div class="advantages-card _has-img">
        <picture class="advantages-card__pic">
          <img class="advantages-card__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/advantages/helmet.png" alt="">
        </picture>
        <?$APPLICATION->IncludeFile('/include/about/advantagescard_2.php', Array(), Array("MODE"=>"text"))?>
    </div>
    <div class="advantages-card">
      <?$APPLICATION->IncludeFile('/include/about/advantagescard_3.php', Array(), Array("MODE"=>"text"))?>
    </div>
    <div class="advantages-card _has-img">
        <picture class="advantages-card__pic">
          <source srcset="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-srcset="<?=SITE_TEMPLATE_PATH?>/images/advantages/card-4-mobile.png" media="(max-width: 420px)">
          <source srcset="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-srcset="<?=SITE_TEMPLATE_PATH?>/images/advantages/card-4-tablet.png" media="(max-width: 768px)">
          <source srcset="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-srcset="<?=SITE_TEMPLATE_PATH?>/images/advantages/card-4-desk-m.png" media="(max-width: 1440px)">
          <img class="advantages-card__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=SITE_TEMPLATE_PATH?>/images/advantages/card-4-desk.png" alt="">
        </picture>
        <?$APPLICATION->IncludeFile('/include/about/advantagescard_4.php', Array(), Array("MODE"=>"text"))?>
    </div>
  </div>
  </div>
</section>
<section class="section gallery">
  <div class="container">
    <div class="gallery__head">
        <h2 class="title-h2">Галерея выполненных работ</h2>
        <a href="/projects/" class="btn-primary _desktop">Смотреть все проекты</a>
    </div>
    <?$APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "projectsgallery",
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "6",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
          0 => "ADDRESS",
          1 => "M2",
          2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "projectsgallery"
      ),
      false
    );?>
    <a href="/projects/" class="gallery__button-all btn-primary _mobile">Смотреть все проекты</a>
  </div>
</section>
<section class="section faq">
  <div class="container">
      <h2 class="title-h2">Вопросы и ответы</h2>
      <?$APPLICATION->IncludeComponent(
      	"bitrix:news.list",
      	"faq",
      	Array(
      		"ACTIVE_DATE_FORMAT" => "d.m.Y",
      		"ADD_SECTIONS_CHAIN" => "N",
      		"AJAX_MODE" => "N",
      		"AJAX_OPTION_ADDITIONAL" => "",
      		"AJAX_OPTION_HISTORY" => "N",
      		"AJAX_OPTION_JUMP" => "N",
      		"AJAX_OPTION_STYLE" => "Y",
      		"CACHE_FILTER" => "N",
      		"CACHE_GROUPS" => "Y",
      		"CACHE_TIME" => "36000000",
      		"CACHE_TYPE" => "A",
      		"CHECK_DATES" => "Y",
      		"DETAIL_URL" => "",
      		"DISPLAY_BOTTOM_PAGER" => "N",
      		"DISPLAY_DATE" => "N",
      		"DISPLAY_NAME" => "Y",
      		"DISPLAY_PICTURE" => "N",
      		"DISPLAY_PREVIEW_TEXT" => "Y",
      		"DISPLAY_TOP_PAGER" => "N",
      		"FIELD_CODE" => array("", ""),
      		"FILTER_NAME" => "",
      		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
      		"IBLOCK_ID" => "10",
      		"IBLOCK_TYPE" => "content",
      		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      		"INCLUDE_SUBSECTIONS" => "Y",
      		"MESSAGE_404" => "",
      		"NEWS_COUNT" => "20",
      		"PAGER_BASE_LINK_ENABLE" => "N",
      		"PAGER_DESC_NUMBERING" => "N",
      		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      		"PAGER_SHOW_ALL" => "N",
      		"PAGER_SHOW_ALWAYS" => "N",
      		"PAGER_TEMPLATE" => ".default",
      		"PAGER_TITLE" => "Новости",
      		"PARENT_SECTION" => "",
      		"PARENT_SECTION_CODE" => "",
      		"PREVIEW_TRUNCATE_LEN" => "",
      		"PROPERTY_CODE" => array("", ""),
      		"SET_BROWSER_TITLE" => "N",
      		"SET_LAST_MODIFIED" => "N",
      		"SET_META_DESCRIPTION" => "N",
      		"SET_META_KEYWORDS" => "N",
      		"SET_STATUS_404" => "N",
      		"SET_TITLE" => "N",
      		"SHOW_404" => "N",
      		"SORT_BY1" => "ACTIVE_FROM",
      		"SORT_BY2" => "SORT",
      		"SORT_ORDER1" => "DESC",
      		"SORT_ORDER2" => "ASC",
      		"STRICT_SECTION_CHECK" => "N"
      	)
      );?>
  </div>
</section>

<section class="section-shifter consultation">
  <div class="container consultation__container">
    <div class="consultation__bg">
          <div class="consultation__content">
              <h2 class="consultation__title">
                  Запишитесь на бесплатную консультацию
              </h2>
              <p class="consultation__text">Оставьте заявку, и&nbsp;наш менеджер перезвонит вам в&nbsp;течение 30&nbsp;минут и&nbsp;проконсультируем по&nbsp;всем вопросам.</p>
          </div>
          <div class="consultation__box">
              <form class="form-vertical js_form">
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
                  <span class="form__agree">Нажимая на&nbsp;кнопку, я соглашаюсь на&nbsp;обработку <a href="/privacy-notice/">персональных данных</a></span>
                  <input type="hidden" name="utm_source" >
                  <input type="hidden" name="utm_medium" >
                  <input type="hidden" name="utm_campaign" >
                  <input type="hidden" name="utm_content" >
                  <input type="hidden" name="utm_term" >
                  <input type="hidden" name="referrer" >
                  <input type="hidden" name="requestTime" >
              </form>
          </div>
      </div>
  </div>
</section>
<section class="section locations locations--dropdowns">
  <div class="container">
  	<h2 class="title-h2 locations__title">Работаем <br> по Москве и&nbsp;области</h2>
  	<div class="locations__content">
    	<div class="locations__map" id="locations__map" data-map-icon="/local/templates/main/images/map-point.svg">
		</div>
    	<div class="locations-addresses">
			<?php
				$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
				$arFilter = Array("IBLOCK_ID"=>"8");
				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
				$cities = array();
				while($ob = $res->GetNextElement()){
				 $arFields = $ob->GetFields();
				 $arProps = $ob->GetProperties();
				 $cities[] = $arFields['NAME'];
				}
            ?>
			<?php foreach ($cities as $city_count => $city) : ?>
				<article class="bayan bayan--selfish bayan--toggler-angle locations-card">
				  <div class="locations-card__top">
					<h3 class="locations-card__titie">
					  <span class="locations-addresses__link"><?=$city?></span>
					</h3>
				  </div>
				  <div class="locations-card__contacts">
					<p class="locations-card__contact">
						<img class="locations-card__contact-icon" src="/local/templates/main/images/geo.png" alt="Адрес">
					  <span class="locations-card__contact-text">
						<span class="locations-card__contact-address">г. Москва, улица Наметкина, дом <?=$city_count;?></span> <br>
                		<span class="locations-card__contact-worktime">Режим работы: ПН - ПТ, с 9:00 до 18:00</span>
					  </span>
					</p>
					<p class="locations-card__contact">
						<img class="locations-card__contact-icon" src="/local/templates/main/images/phone.png" alt="Телефон">
					  <span class="locations-card__contact-text">
						<a href="tel:">+7 (999) 000 - 00 - 00</a>
					  </span>
					</p>
					<p class="locations-card__contact">
						<img class="locations-card__contact-icon" src="/local/templates/main/images/email.png" alt="Электронная почта">
					  <span class="locations-card__contact-text">
						<a href="mailto:">info@mail.ru</a>
					  </span>
					</p>
				  </div>
				</article>
			<?php endforeach; ?>
			<div class="locations-addresses__buttons">
        		<button class="btn-accent locations-addresses__button-more" type="button">
            		Показать больше
        		</button>
      		</div>
        </div>
    </div>
  </div>
</section>

<section class="section-shifter consultation">
  <div class="container consultation__container">
    <div class="consultation__bg">
          <div class="consultation__content">
              <h2 class="consultation__title">
                  Запишитесь на бесплатную консультацию
              </h2>
              <p class="consultation__text">Оставьте заявку, и&nbsp;наш менеджер перезвонит вам в&nbsp;течение 30&nbsp;минут и&nbsp;проконсультируем по&nbsp;всем вопросам.</p>
          </div>
          <div class="consultation__box">
              <form class="form-vertical js_form">
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
                  <span class="form__agree">Нажимая на&nbsp;кнопку, я соглашаюсь на&nbsp;обработку <a href="/privacy-notice/">персональных данных</a></span>
                  <input type="hidden" name="utm_source" >
                  <input type="hidden" name="utm_medium" >
                  <input type="hidden" name="utm_campaign" >
                  <input type="hidden" name="utm_content" >
                  <input type="hidden" name="utm_term" >
                  <input type="hidden" name="referrer" >
                  <input type="hidden" name="requestTime" >
              </form>
          </div>
      </div>
  </div>
</section>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
