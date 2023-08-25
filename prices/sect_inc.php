<main class="hero hero--has-breadcrumbs hero--no-bullets">
	<div class="hero__thumb">
		<picture class="hero__pic">
			<source srcset="/local/templates/main/images/page-price/price-hero.webp" type="image/webp">
			<img class="hero__img" src="/local/templates/main/images/page-price/price-hero.jpg" alt="">
		</picture>
		<div class="container hero__container">
			<? $APPLICATION->IncludeComponent(
				"bitrix:breadcrumb",
				"universal",
				array(
					"PATH" => "",
					"SITE_ID" => "s1",
					"START_FROM" => "0"
				)
			); ?>
			<h1 class="title-h1 hero__title"><? $APPLICATION->ShowTitle(false); ?></h1>
			<div class="hero__buttons">
				<button class="hero__btn" type="button" data-b_modal-open="form-price">Получить прайс-лист</button>
			</div>
		</div>
		<picture class="hero__worker">
			<source srcset="/local/templates/main/images/page-price/price-hero--mobile.webp" type="image/webp">
			<img class="hero__worker-img" src="/local/templates/main/images/page-price/price-hero--mobile.png" alt="">
		</picture>
	</div>
</main>