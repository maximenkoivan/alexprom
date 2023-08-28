<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="header__menu">
            <div class="header__menu-inner">
              <nav class="header__nav">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</div>
		</div></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<div class="header__nav-dropdown">
				<a href="<?=$arItem["LINK"]?>" class="header__nav-link <?if ($arItem["SELECTED"]):?>active<?else:?><?endif?>"><?=$arItem["TEXT"]?></a>
				<div class="header__nav-dropdown-menu">
					<div class="header__nav-dropdown-menu-inner">
		<?else:?>

		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?><?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<a href="<?=$arItem["LINK"]?>" class="header__nav-link <?if ($arItem["SELECTED"]):?>active<?else:?><?endif?>"><?=$arItem["TEXT"]?></a><?else:?><a href="<?=$arItem["LINK"]?>" class="header__nav-link"><?=$arItem["TEXT"]?></a>
		<?endif?><?endif?>

	<?endif?><?$previousLevel = $arItem["DEPTH_LEVEL"];?><?endforeach?>



</nav><button class="btn-accent header__button-callback" data-b_modal-open="form-contact">Заказать обратный звонок</button></div></div>

<?endif?>