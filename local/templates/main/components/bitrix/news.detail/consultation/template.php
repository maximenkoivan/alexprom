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

<div class="container consultation__container">
	<div class="consultation__bg">
		<div class="consultation__content">
			<h2 class="consultation__title">
			<?php echo $arResult['NAME'] ?></h2>
			<p class="consultation__text"><?php echo $arResult['PREVIEW_TEXT'] ?></p>
		</div>
		<div class="consultation__box">
			<div class="form-vertical js_form" data-action="/include/formservices.php">
 				<label class="input input-name form-control">
					<input class="input__field" name="user_name" type="text" placeholder="Ваше имя" autocomplete="name">
				</label>
				<label class="input input-tel form-control">
					<input class="input__field mask-tel" required="" name="user_tel" type="tel" placeholder="Ваш номер телефона" maxlength="25" minlength="10" autocomplete="tel">
				</label>
				<button class="btn-main" type="submit"><?=$arResult['PROPERTIES']['BUTTONTEXT']['VALUE']?></button>
				<span class="form__agree">
Нажимая на кнопку, я соглашаюсь на обработку персональных данных и ознакомлен с&nbsp;<a href="<?=$arResult['PROPERTIES']['FZLINK']['VALUE']?>">Политикой&nbsp;конфиденциальности</a>
					<!--<a href="<?=$arResult['PROPERTIES']['FZLINK']['VALUE']?>"><?=$arResult['PROPERTIES']['FZRULES']['VALUE']?></a>-->
				</span>
				<input type="hidden" name="utm_source">
				<input type="hidden" name="utm_medium">
				<input type="hidden" name="utm_campaign">
				<input type="hidden" name="utm_content">
				<input type="hidden" name="utm_term">
				<input type="hidden" name="referrer">
				<input type="hidden" name="requestTime">
			</div>
		</div>
	</div>
</div>
