<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<div class="section-flip section-flip--light" id="project">
			<?
			$ElementID = $APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"",
				[
					"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
					"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
					"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
					"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
					"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
					"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"META_KEYWORDS" => $arParams["META_KEYWORDS"],
					"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
					"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
					"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
					"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
					"SET_TITLE" => $arParams["SET_TITLE"],
					"MESSAGE_404" => $arParams["MESSAGE_404"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"SHOW_404" => $arParams["SHOW_404"],
					"FILE_404" => $arParams["FILE_404"],
					"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
					"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
					"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
					"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
					"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
					"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
					"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
					"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
					"CHECK_DATES" => $arParams["CHECK_DATES"],
					"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
					"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
					"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
					"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
					"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					"USE_SHARE" => $arParams["USE_SHARE"],
					"SHARE_HIDE" => $arParams["SHARE_HIDE"],
					"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
					"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
					"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
					'STRICT_SECTION_CHECK' => $arParams['STRICT_SECTION_CHECK'],
				],
				$component,
				['HIDE_ICONS' => 'Y']
			);?>
</div>
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
