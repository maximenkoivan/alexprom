<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "АЛЕКСПРОМ, промышленный альпинизм");
$APPLICATION->SetPageProperty("title", "О компании АЛЕКСПРОМ");
$APPLICATION->SetTitle("О компании");
?>
<div class="section-flip section-flip--light">
	<section class="section storytell" style="margin-bottom:-100px;">
		<div class="container storytell__container">
			<div class="storytell__section">
				<div class="storytell__head">
					<h2 class="title-h2 storytell__title">
						<? $APPLICATION->IncludeFile('/include/about/mission.php') ?>
					</h2>
				</div>
				<div class="storytell__body">
					<? $APPLICATION->IncludeFile('/include/about/missiontext.php') ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section experience">
		<div class="experience__main">
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"promoDir",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_ELEMENT_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"BROWSER_TITLE" => "-",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "N",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"ELEMENT_CODE" => "",
					"ELEMENT_ID" => "111",
					"FIELD_CODE" => array(
						0 => "PREVIEW_TEXT",
						1 => "PREVIEW_PICTURE",
						2 => "DETAIL_TEXT",
						3 => "DETAIL_PICTURE",
						4 => "",
					),
					"IBLOCK_ID" => "13",
					"IBLOCK_TYPE" => "service",
					"IBLOCK_URL" => "",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Страница",
					"PROPERTY_CODE" => array(
						0 => "VIDEO",
						1 => "TEXT1",
						2 => "TEXT2",
						3 => "TEXT3",
						4 => "TEXT4",
						5 => "PHOTOS",
						6 => "",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_CANONICAL_URL" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"STRICT_SECTION_CHECK" => "N",
					"USE_PERMISSIONS" => "N",
					"USE_SHARE" => "N",
					"COMPONENT_TEMPLATE" => "promoDir"
				),
				false
			); ?>
		</div>
		<div class="container">
			<div class="hero-info experience-info">
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"teasersAbout",
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
						"NEWS_COUNT" => "3",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "46",
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
						"SORT_BY1" => "ID",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "ASC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N",
						"COMPONENT_TEMPLATE" => "teasersAbout"
					),
					false
				); ?>
			</div>
		</div>
	</section>
	<section class="section advantages">
		<div class="container">
			<h2 class="title-h2 advantages__title"><? $APPLICATION->IncludeFile('/include/about/advantagestitle.php', array(), array("MODE" => "html")) ?></h2>
			<div class="advantages__box">
				<div class="advantages-card _has-img">
					<picture class="advantages-card__pic">
						<img class="advantages-card__img lazy" src="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/book.png" alt="">
					</picture>
					<? $APPLICATION->IncludeFile('/include/about/advantagescard_1.php', array(), array("MODE" => "html")) ?>
				</div>
				<div class="advantages-card _has-img">
					<picture class="advantages-card__pic">
						<img class="advantages-card__img lazy" src="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/helmet.png" alt="">
					</picture>
					<? $APPLICATION->IncludeFile('/include/about/advantagescard_2.php', array(), array("MODE" => "html")) ?>
				</div>
				<div class="advantages-card">
					<? $APPLICATION->IncludeFile('/include/about/advantagescard_3.php', array(), array("MODE" => "html")) ?>
				</div>
				<div class="advantages-card _has-img">
					<picture class="advantages-card__pic">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/card-4-mobile.png" media="(max-width: 420px)">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/card-4-tablet.png" media="(max-width: 768px)">
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-srcset="<?= SITE_TEMPLATE_PATH ?>/images/advantages/card-4-desk-m.png" media="(max-width: 1440px)">
						<img class="advantages-card__img lazy" src="<?= SITE_TEMPLATE_PATH ?>/images/placeholder.jpg" data-src="<?= SITE_TEMPLATE_PATH ?>/images/advantages/card-4-desk.png" alt="">
					</picture>
					<? $APPLICATION->IncludeFile('/include/about/advantagescard_4.php', array(), array("MODE" => "html")) ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section gallery">
		<div class="container">
			<div class="gallery__head">
				<h2 class="title-h2">Галерея выполненных работ</h2>
				<a href="/projects/" class="btn-primary _desktop">Смотреть все проекты</a>
			</div>
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"projectsgallery",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "6",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "ADDRESS",
						1 => "M2",
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
					"COMPONENT_TEMPLATE" => "projectsgallery"
				),
				false
			); ?>
			<a href="/projects/" class="gallery__button-all btn-primary _mobile">Смотреть все проекты</a>
		</div>
	</section>
	<section class="section staff">
		<div class="container staff__container">
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"staff",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "3",
					"IBLOCK_TYPE" => "service",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "PHONE",
						1 => "EMAIL",
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
					"COMPONENT_TEMPLATE" => "staff"
				),
				false
			); ?>
		</div>
	</section>
	<section class="section reviews">
		<div class="container reviews__container">
			<div class="reviews__head">
				<h2 class="title-h2 reviews__tilte">Отзывы о нас</h2>
				<div class="reviews__head-aside">
					<? $APPLICATION->IncludeFile('/include/about/reviewslinks.php', array(), array("MODE" => "text")) ?>
				</div>
			</div>
			<div style="display: flex; justify-content: center;margin-top: 20px;border-radius: 20px;">
				<iframe style="width: 100%;height: 100%;max-width: 100%;border: none;outline: none;padding: 0;margin: 0" id="myReviews__block-widget">
				</iframe>
			</div>
			<div style="display: none !important">
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"reviews",
					array(
						"ACTIVE_DATE_FORMAT" => "j F Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "4",
						"IBLOCK_TYPE" => "service",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "20",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array(
							0 => "S4",
							1 => "S2",
							2 => "S1",
							3 => "S3",
							4 => "",
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
						"COMPONENT_TEMPLATE" => "reviews"
					),
					false
				); ?>
			</div>
		</div>
	</section>
	<section class="section clients">
		<div class="container clients__container">
			<h2 class="title-h2">Среди наших клиентов</h2>
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"clients",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "Y",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "",
						1 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "5",	// Код информационного блока
					"IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
					"COMPONENT_TEMPLATE" => ".default"
				),
				false
			); ?>
		</div>
	</section>
	<section class="section requisites">
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"requisites",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"DISPLAY_DATE" => "Y",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
				"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"ELEMENT_CODE" => "",	// Код новости
				"ELEMENT_ID" => "112",	// ID новости
				"FIELD_CODE" => array(	// Поля
					0 => "PREVIEW_TEXT",
					1 => "PREVIEW_PICTURE",
					2 => "DETAIL_TEXT",
					3 => "DETAIL_PICTURE",
					4 => "",
				),
				"IBLOCK_ID" => "14",	// Код информационного блока
				"IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
				"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"PAGER_TITLE" => "Страница",	// Название категорий
				"PROPERTY_CODE" => array(	// Свойства
					0 => "S3",
					1 => "S4",
					2 => "S5",
					3 => "S6",
					4 => "S7",
					5 => "S1",
					6 => "S2",
					7 => "VIDEO",
					8 => "TEXT1",
					9 => "TEXT2",
					10 => "TEXT3",
					11 => "TEXT4",
					12 => "PHOTOS",
					13 => "",
				),
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SHOW_404" => "N",	// Показ специальной страницы
				"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
				"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
				"USE_SHARE" => "N",	// Отображать панель соц. закладок
				"COMPONENT_TEMPLATE" => "promoDir"
			),
			false
		); ?>
	</section>
	<section class="section-shifter consultation">
		<? $APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"consultation",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "N",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_CODE" => "",
				"ELEMENT_ID" => "113",
				"FIELD_CODE" => array(
					0 => "PREVIEW_TEXT",
					1 => "PREVIEW_PICTURE",
					2 => "DETAIL_TEXT",
					3 => "DETAIL_PICTURE",
					4 => "",
				),
				"IBLOCK_ID" => "15",
				"IBLOCK_TYPE" => "service",
				"IBLOCK_URL" => "",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Страница",
				"PROPERTY_CODE" => array(
					0 => "FZRULES",
					1 => "BUTTONTEXT",
					2 => "FZLINK",
					3 => "",
					4 => "",
					5 => "",
					6 => "",
					7 => "",
					8 => "",
					9 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_CANONICAL_URL" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"STRICT_SECTION_CHECK" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_SHARE" => "N",
				"COMPONENT_TEMPLATE" => "consultation"
			),
			false
		); ?>
	</section>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>