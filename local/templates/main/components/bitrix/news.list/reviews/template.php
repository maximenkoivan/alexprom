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

<pre style="display: none;">
<?php var_dump($arResult); ?>
</pre>
<div class="reviews-carousel">
		<div class="swiper reviews-gallery">
				<div class="swiper-wrapper">
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<div class="swiper-slide reviews-gallery__slide">
							<article class="review-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
								<div class="reivew-card__profile">
								<picture class="review-card__profile-pic">
									<img class="review-card__profile-img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
								</picture>
								<div class="review-card__profile-meta">
								<div class="review-card__profile-user">
									<p class="review-card__profile-name"><?=$arItem["NAME"]?></p>
									<p class="review-card__profile-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
								</div>
								<div class="review-card__profile-rating">
									<div class="review-card__profile-stars">
										<?
										echo str_repeat('<svg class="review-card__profile-star"><use xlink:href="'.SITE_TEMPLATE_PATH.'/images/reviews/star-icon.svg#star" /></svg>', $arItem["DISPLAY_PROPERTIES"]["S1"]["VALUE"]);
										?>
									</div>
									<img src="<?=$arItem["DISPLAY_PROPERTIES"]["S2"]["VALUE_XML_ID"]?>" alt="" class="reviews-card__profile-source">
								</div>
								</div>
								</div>
								<div class="review-card__feedback">
								<h3 class="review-card__title"><?=$arItem["DISPLAY_PROPERTIES"]["S4"]["VALUE"]?></h3>
								<p class="review-card__desc">
								<?=$arItem["PREVIEW_TEXT"]?>
								</p>
								<a href="<?=$arItem["DISPLAY_PROPERTIES"]["S3"]["VALUE"]?>" target="_blank" class="review-card__full">
								<span class="button__text">Читать полностью</span>
								</a>
								</div>
								</article>
						</div>
					<?endforeach;?>
				</div>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
</div>
