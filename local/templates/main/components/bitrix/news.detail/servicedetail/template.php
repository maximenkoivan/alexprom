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
										Что включает <br> в&nbsp;себя услуга?
								</h2>
						</div>
						<div class="storytell__body">
								<?=$arResult["DISPLAY_PROPERTIES"]["S1"]["DISPLAY_VALUE"]?>
						</div>
				</div>
				<div class="storytell__section">
						<div class="storytell__head">
								<h2 class="title-h2 storytell__title">Стоимость <br> и&nbsp;сроки</h2>
						</div>
						<div class="storytell__body">
								<table>
										<tr>
												<td>Сроки - <?=$arResult["DISPLAY_PROPERTIES"]["S4"]["DISPLAY_VALUE"]?></td>
												<td>Стоимость - <?=$arResult["DISPLAY_PROPERTIES"]["S2"]["DISPLAY_VALUE"]?></td>
										</tr>
								</table>
								<p>
										Более точные стоимость и сроки вы можете уточнить у нашего менеджера <br>
										по телефону <a href="tel:84951090242">8 (495) 109 02 42</a> или через форму заказа на сайте
								</p>
						</div>
				</div>
				<div class="storytell__section">
						<div class="storytell__head">
								<h2 class="title-h2 storytell__title">
										Технологии <br>
										и оборудование
								</h2>
						</div>
						<div class="storytell__body">
								<p>
										<?=$arResult["DISPLAY_PROPERTIES"]["S3"]["DISPLAY_VALUE"]?>
								</p>
						</div>
				</div>
		</div>
</section>

<div class="section services-highlights">
		<div class="container">
				<div class="services-highlights__gallery">
					<?php foreach ($arResult["DISPLAY_PROPERTIES"]["PHOTOS"]["VALUE"] as $photo) {
						?>
							<picture class="services-highlights__pic">
									<img  class="services-highlights__img lazy" src="/local/templates/main/images/placeholder.jpg" data-src="<?=CFile::GetPath($photo)?>" alt="">
							</picture>
						<?
					} ?>
				</div>
		</div>
</div>
<script>
var app = new Vue({
  el: '#alp',
  data: {
    serviceprice: '<?php echo $arResult["DISPLAY_PROPERTIES"]["S2"]["DISPLAY_VALUE"]?>',
		serviceimage: '<?php echo $arResult["PREVIEW_PICTURE"]["SRC"]?>'
  }
})
</script>
