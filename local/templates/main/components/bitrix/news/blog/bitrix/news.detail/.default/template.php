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

<div class="blog-article section">
	<div class="wysiwyg container blog-article__container">
		<p class="blog-article__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p>
		<p><?echo $arResult["DETAIL_TEXT"];?></p>
	</div>
</div>