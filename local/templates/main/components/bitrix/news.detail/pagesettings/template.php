<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<main class="hero parallax">
  <div class="hero__thumb">
      <picture class="hero__pic">
        <source srcset="<?=SITE_TEMPLATE_PATH?>/images/bg.webp" type="image/webp">
        <img class="hero__img" src="<?=SITE_TEMPLATE_PATH?>/images/bg.jpg" alt="Услуги промышленного альпинизма">
      </picture>
      <div class="container hero__container">
          <h1 class="title-h1 hero__title">Промышленный альпинизм в&nbsp;Москве и&nbsp;<span class="_desktop">Московской области</span><span class="_mobile">МО</span></h1>
          <p class="hero__desc">Получите точный расчет стоимости наших услуг</p>
          <p>Оставьте свой номер, чтобы получить прайс-лист на&nbsp;Whatsapp</p>
          <div class="hero__form js_form" data-action="/include/formservices.php">
			<input type="hidden" name="user_name" value="Лид">
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
              <button class="hero__btn" type="submit">Получить прайс-лист</button>
              <input type="hidden" name="utm_source" >
              <input type="hidden" name="utm_medium" >
              <input type="hidden" name="utm_campaign" >
              <input type="hidden" name="utm_content" >
              <input type="hidden" name="utm_term" >
              <input type="hidden" name="referrer" >
              <input type="hidden" name="requestTime" >
          </div>
          <div class="hero-info">
              <div class="hero-info__stroke">
                  <div class="hero-info__item">
                      <div class="hero-info__desc">
                          <span class="hero-info__text">Приступим к работам уже&nbsp;через 3&nbsp;часа после согласования всех условий</span>
                      </div>
                      <picture class="hero-info__icon">
                          <img src="./images/icons/notice.svg" alt="Приступим к работам уже через 3 часа">
                      </picture>
                  </div>
                  <div class="hero-info__item">
                      <div class="hero-info__desc">
                          <span class="hero-info__text">Работаем 24/7 без праздников и выходных. Всегда на&nbsp;связи</span>
                      </div>
                      <picture class="hero-info__icon">
                          <img src="./images/icons/celandar.svg" alt="Работаем без праздников и выходных">
                      </picture>
                  </div>
                  <div class="hero-info__item">
                      <div class="hero-info__desc">
                          <span class="hero-info__text">Предоставляем гарантию 5&nbsp;лет на все виды наших&nbsp;работ</span>
                      </div>
                      <picture class="hero-info__icon">
                          <img src="./images/icons/garant.svg" alt="редоставляем гарантию 5 лет">
                      </picture>
                  </div>
                  <div class="hero-info__item">
                      <div class="hero-info__desc">
                          <span class="hero-info__text">По&nbsp;статистике 84,6% всех&nbsp;наших работ мы заканчиваем досрочно</span>
                      </div>
                      <picture class="hero-info__icon">
                          <img src="./images/icons/chart.svg" alt="85% всех наших работ заканчиваем досрочно">
                      </picture>
                  </div>
              </div>
          </div>
      </div>

      <picture class="hero__worker">
          <source srcset="<?=SITE_TEMPLATE_PATH?>/images/bg-mobile.webp" type="image/webp">
          <img class="hero__worker-img" src="<?=SITE_TEMPLATE_PATH?>/images/bg-mobile.png" alt="Услуги промышленного альпинизма">
      </picture>
  </div>
</main>
<!--
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '') !== ''):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
-->
