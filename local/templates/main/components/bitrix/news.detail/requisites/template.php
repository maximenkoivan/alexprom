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

$arSelect = Array("ID", "IBLOCK_ID","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>"16", "ACTIVE_DATE"=>"Y", "ID"=>"114");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
 $arSetting = $ob->GetProperties();
}

?>

<div class="container requisites__container">
    <div class="section__head requisites__head">
      <h2 class="title-h2 requisites__title">Реквизиты</h2>
	</div>
	<div class="requisites__content">
		<div class="requisites-table">
			<div class="requisites-table__row">
				<h3 class="requisites-table__title">Краткое наименование</h3>
				<p class="requisites-table__desc"><?=$arResult["NAME"]?></p>
			</div>
		<?php
		asort($arResult["DISPLAY_PROPERTIES"]);
		foreach ($arResult["DISPLAY_PROPERTIES"] as $key => $requisite) {
			?>
				<div class="requisites-table__row">
				<h3 class="requisites-table__title"><?=$requisite['NAME']?></h3>
				<p class="requisites-table__desc"><?=$requisite['VALUE']?></p>
			  </div>
			<?
		} ?>
	 	</div>
		<div class="requisites-qr">
        	<h3 class="requisites-qr__title">Оплата через QR</h3>
        	<div class="requisites-qr__media">
            	<picture class="requisites-qr__media-pic">
					<img src="<?=CFile::GetPath($arSetting['S14']['VALUE'])?>" alt="" class="requisites-qr__media-img">
            	</picture>
				<p class="requisites-qr__media-caption">
				  Отсканируйте платежные реквизиты в вашем Интернет банке и сформируйте платежное поручение <span class="section-text--underline">мгновенно</span>
				</p>
        	</div>

			<div class="requisites-qr__media">
				<picture class="requisites-qr__media-pic">
				  <img src="<?=CFile::GetPath($arSetting['S13']['VALUE'])?>" alt="" class="requisites-qr__media-img">
				</picture>
				<p class="requisites-qr__media-caption">
					Добавьте наши контакты в свой телефон, отсканировав данный QR код, и мы всегда будем на связи
				</p>
			</div>
			<a href="<?= CFile::GetPath($arSetting['DOC_REQUISITES']['VALUE']) ?>" download class="requisites__download-button btn-primary">Скачать реквизиты</a>
      </div>

	</div>
</div>
