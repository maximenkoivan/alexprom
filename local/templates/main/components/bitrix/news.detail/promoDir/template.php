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
<div class="container experience__container">
	<div class="experience__hero">
		<div class="experience__hero-media">
			<picture class="experience__hero-pic">
				<img  class="experience__hero-img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?echo $arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="">
			</picture>
			<div class="experience__hero-hint">
				<p class="experience__hero-hint-title">– <?=$arResult["DISPLAY_PROPERTIES"]["TEXT1"]["VALUE"]?></p>
				<p class="experience__hero-hint-desc">
					<?=$arResult["DISPLAY_PROPERTIES"]["TEXT2"]["~VALUE"]?>
				</p>
			</div>
		</div>
	</div>
	<div class="experience__content">
		<h2 class="title-h2 experience__title">
			<?=$arResult["NAME"]?>
		</h2>
		<div class="experience__video">
			<div class="experience__video-box">
				<img  class="experience__video-cover lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
				<a href="<?=$arResult["DISPLAY_PROPERTIES"]["VIDEO"]["VALUE"]?>" data-fancybox class="play-cover"></a>
			</div>
			<p class="experience__video-desc">
				<?echo $arResult["PREVIEW_TEXT"];?>
			</p>
		</div>
		<div class="experience-slides">
			<div class="gallery-carousel">
					<div class="swiper experience-gallery">
							<div class="swiper-wrapper">
								<?php foreach ($arResult["DISPLAY_PROPERTIES"]["PHOTOS"]["VALUE"] as $key => $photo) {
									?>
										<div class="swiper-slide experience-gallery__slide">
											<picture class="experience-gallery__thumb">
													<img class="experience-gallery__img lazy" src="<?=SITE_TEMPLATE_PATH?>/images/placeholder.jpg" data-src="<?echo CFile::GetPath($photo)?>" alt="">
											</picture>
											<a href="<?echo CFile::GetPath($photo)?>" data-fancybox class="experience-gallery__link"></a>
										</div>
									<?
								} ?>
							</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</div>
