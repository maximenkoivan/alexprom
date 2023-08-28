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
<div class="staff__head section__head">
	<h2 class="title-h2 staff__title">Наши сотрудники</h2>
	<div class="staff__buttons">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>

<div class="gallery-carousel">
<div class="swiper staff-carousel">
		<div class="swiper-wrapper">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="swiper-slide">
					<div class="staff-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<picture class="staff-card__pic">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="staff-card__img">
						</picture>
						<h3 class="staff-card__title"><?=$arItem["NAME"]?></h3>
						<p class="staff-card__desc"><?=$arItem["PREVIEW_TEXT"];?></p>
						<div class="staffContainer">
							<?php if ($arItem["DISPLAY_PROPERTIES"]["PHONE"]["VALUE"]) : ?>
								<?php 
									$phone = $arItem["DISPLAY_PROPERTIES"]["PHONE"]["VALUE"];
									$raw_phone = substr_replace( preg_replace( "/[^0-9]/" , '' ,  $phone) , "+7" , 0 , 1 );
								?>
								<a href="tel:<?=$raw_phone?>" class="link link--phone">
									<?=$arItem["DISPLAY_PROPERTIES"]["PHONE"]["VALUE"]; ?>
								</a>
							<?php endif; ?>
							<?php if ($arItem["DISPLAY_PROPERTIES"]["EMAIL"]["VALUE"]) : ?>
								<a href="mailto:<?=$arItem["DISPLAY_PROPERTIES"]["EMAIL"]["VALUE"]?>" class="link link--mail">
									<?=$arItem["DISPLAY_PROPERTIES"]["EMAIL"]["VALUE"]?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>
