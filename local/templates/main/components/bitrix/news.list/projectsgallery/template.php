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
<div class="gallery-carousel">
		<div class="swiper swiper-gallery">
				<div class="swiper-wrapper">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="swiper-slide swiper-gallery__slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<picture class="swiper-gallery__thumb">
								<img class="swiper-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
						</picture>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="swiper-gallery__link"><?=$arItem["NAME"]?></a>
						<span class="swiper-gallery__title"><?=$arItem["PREVIEW_TEXT"]?></span>
						<span class="swiper-gallery__info swiper-gallery__arg"><?=$arItem["DISPLAY_PROPERTIES"]["M2"]["VALUE"]?>м²</span>
						<span class="swiper-gallery__info swiper-gallery__loc"><?=$arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["VALUE"]?></span>
					</div>
				<?endforeach;?>
			</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
</div>
