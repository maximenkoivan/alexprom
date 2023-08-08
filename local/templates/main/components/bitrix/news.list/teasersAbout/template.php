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
<div class="hero-info__stroke">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="hero-info__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	    <div class="hero-info__desc">
	        <p class="hero-info__title js_has-counter"><?echo $arItem["NAME"]?></p>
	        <span class="hero-info__text">
	            <?echo $arItem["PREVIEW_TEXT"]?>
	        </span>
	    </div>
	    <picture class="hero-info__icon">
	        <img src="<?=CFile::GetPath($arItem["DISPLAY_PROPERTIES"]["ICON"]["VALUE"])?>" alt="<?echo $arItem["NAME"]?>">
	    </picture>
	</div>
<?endforeach;?>
</div>
