<main class="hero parallax">
	<div class="hero__thumb">
			<picture class="hero__pic">
				<source srcset="<?=SITE_TEMPLATE_PATH?>/images/bg.webp" type="image/webp">
				<img class="hero__img" src="<?=SITE_TEMPLATE_PATH?>/images/bg.jpg" alt="Услуги промышленного альпинизма">
			</picture>
			<div class="container hero__container">
					<h1 class="title-h1 hero__title"><?$APPLICATION->IncludeFile('/include/mainpage/maintext.php')?></h1>
					<p class="hero__desc">Получите точный расчет стоимости наших услуг</p>
					<div class="hero__form js_form" data-action="/include/formservices.php">
							<input type="hidden" name="user_name" value="Лид">
							<label class="input input-tel form-control">
								<input
									class="input__field mask-tel"
									required
									name="user_tel"
									type="tel"
									placeholder="Ваш номер телефона"
									maxlength="25"
									minlength="10"
									autocomplete="tel"
								>
							</label>
							<button class="hero__btn" type="submit">Получить прайс-лист</button>
							<input type="hidden" name="utm_source" >
							<input type="hidden" name="utm_medium" >
							<input type="hidden" name="utm_campaign" >
							<input type="hidden" name="utm_content" >
							<input type="hidden" name="utm_term" >
							<input type="hidden" name="referrer" >
							<input type="hidden" name="requestTime" >
					</div>
					<div class="hero-info">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"teasers",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "N",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(
									0 => "",
									1 => "",
								),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "12",
								"IBLOCK_TYPE" => "service",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "N",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "4",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "45",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(
									0 => "",
									1 => "ICON",
									2 => "",
								),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_BY2" => "SORT",
								"SORT_ORDER1" => "DESC",
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"COMPONENT_TEMPLATE" => "teasers"
							),
							false
						);?>
					</div>
			</div>

			<picture class="hero__worker">
					<source srcset="<?=SITE_TEMPLATE_PATH?>/images/bg-mobile.webp" type="image/webp">
					<img class="hero__worker-img" src="<?=SITE_TEMPLATE_PATH?>/images/bg-mobile.png" alt="Услуги промышленного альпинизма">
			</picture>
	</div>
</main>
