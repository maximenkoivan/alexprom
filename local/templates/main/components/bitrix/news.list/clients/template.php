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

<div class="clients-carousel">
	<div class="swiper clients-carousel__swiper">
		<div class="swiper-wrapper">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="swiper-slide clients-carousel__slide">
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<picture class="clients__thumb" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<img class="clients__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					</picture>
				</div>
			<?endforeach;?>
		</div>
	</div>
 	<div class="swiper-buttons clients-carousel-buttons">
		<div class="swiper-button-prev clients-carousel-button-prev"></div>
		<div class="swiper-button-next clients-carousel-button-next"></div>
	</div>
</div>
