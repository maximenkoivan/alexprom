<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="header__menu">
	<div class="header__menu-inner">
		<nav class="header__nav">
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
					continue;
			?>
			<?if($arItem["SELECTED"]):?>
				<a class="header__nav-link active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<a class="header__nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>
			<?endforeach?>
		</nav>
		<button class="btn-accent header__button-callback" data-b_modal-open="form-contact">Заказать обратный звонок</button>
	</div>
</div>
<?endif?>
