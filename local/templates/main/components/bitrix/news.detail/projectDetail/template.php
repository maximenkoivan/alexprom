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

<section class="section storytell">
		<div class="container storytell__container">
				<div class="storytell__section">
						<div class="storytell__head">
								<h2 class="title-h2 storytell__title">
										О проекте
								</h2>
						</div>
						<div class="storytell__body">
								<?=$arResult["DETAIL_TEXT"];?>
						</div>
				</div>
		</div>
</section>
<div class="project-highlights">
		<div class="container project-highlights__container">
			<?php /*<picture class="project-highlights__pic">
						<img class="project-highlights__img" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
</picture> */ ?>
				<div class="project-highlights__gallery">
						<div class="swiper project-highlights-carousel">
							<div class="swiper-wrapper">
								<?php foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo) {
									?>
									<div class="swiper-slide project-highlights-carousel__slide">
											<picture class="project-highlights-carousel__pic">
													<img class="project-highlights-carousel__img lazy" src="/local/templates/main/images/placeholder.jpg" data-src="<?=CFile::GetPath($photo)?>" alt="">
											</picture>
											<a class="project-highlights-carousel__link" data-fancybox href="<?=CFile::GetPath($photo)?>"></a>
									</div>
									<?
								}
								?>
							</div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
				</div>
		</div>
</div>

<script>
var app = new Vue({
  el: '#alp',
  data: {
    serviceprice: '<?php echo $arResult["DISPLAY_PROPERTIES"]["S2"]["DISPLAY_VALUE"]?>',
	serviceimage: '<?php echo $arResult["DETAIL_PICTURE"]["SRC"]?>'
  }
})
</script>