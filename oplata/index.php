<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global CMain $APPLICATION
 */
$APPLICATION->SetTitle("Оплата");
?><main class="hero hero--has-breadcrumbs hero--no-bullets topBlockOplata">
<div class="hero__thumb">
 <span class="hero__pic hero__pic-desc"> <source srcset="/local/templates/main/images/oplata/oplata_BG_02.jpg" media="(max-width: 768px)"> <img src="/local/templates/main/images/oplata/oplata_BG_01.jpg" class="hero__img"> </span>
	<div class="container hero__container">
		<div class="breadcrumbs">
			<ul class="breadcrumbs__list">
				<li class="breadcrumbs__item"> <a href="/" class="breadcrumbs__link">
				Главная </a> </li>
				<li class="breadcrumbs__item">
				Оплата </li>
			</ul>
		</div>
		 <?php //микроразметка хлебных крошек
            $data = [
                '@context' => 'http://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem',
                    'position' => '1',
                        'item' => [
                            '@id' => 'https://alexprom.ru/',
                            'name' => 'Главная',
                        ],
                    ],
                    ['@type' => 'ListItem',
                    'position' => '2',
                        'item' => [
                            '@id' => 'https://alexprom.ru'.$APPLICATION->GetCurDir(),
                            'name' => 'Оплата',
                        ],
                    ],
                ]
            ];
            $data = json_encode($data);
            echo '<script type="application/ld+json">' . $data . '</script>';
            ?>
		<h1 class="title-h1 hero__title">Оплата</h1>
		<p>
			 Расчет цены производится исходя из индивидуальных особенностей объекта, конфигурации кровли, высоты здания, дальности объекта, срочности выезда бригады и других аспектов
		</p>
	</div>
</div>
 </main>
<div class="section-flip section-flip--light contentBlockOplata">
 <section class="oplataBlock">
	<div class="container">
		<div class="oplataBlock__title">
			 Условия оплаты:
		</div>
		<div class="oplataBlock__items">
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 1
				</div>
				<div class="oplataBlock__items__item__text">
					 Стандартные условия оплаты - 50% предоплата
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 2
				</div>
				<div class="oplataBlock__items__item__text">
					 При полной предоплате по договору скидка 10%
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 3
				</div>
				<div class="oplataBlock__items__item__text">
					 При условии постоплаты цена выше базовой на 9%
				</div>
			</div>
		</div>
	</div>
 </section> <section class="oplataBlock">
	<div class="container">
		<div class="oplataBlock__title">
			 Возможные режимы налогообложения:
		</div>
		<div class="oplataBlock__items">
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 1
				</div>
				<div class="oplataBlock__items__item__text">
					 Работаем с НДС и без НДС
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 2
				</div>
				<div class="oplataBlock__items__item__text">
					 Возможен расчет между физическими лицами
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 3
				</div>
				<div class="oplataBlock__items__item__text">
					 Работаем по ЭДО
				</div>
			</div>
		</div>
	</div>
 </section> <section class="oplataBlock oplataBlock-icon">
	<div class="container">
		<div class="oplataBlock__title">
			 Возможные варианты оплаты:
		</div>
		<div class="oplataBlock__items">
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__icon">
 <img src="/local/templates/main/images/oplata/oplata_icon_01.svg">
				</div>
				<div class="oplataBlock__items__item__text">
					 Наличный расчет
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__icon">
 <img src="/local/templates/main/images/oplata/oplata_icon_02.svg">
				</div>
				<div class="oplataBlock__items__item__text">
					 Расчеты криптовалютой
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__icon">
 <img src="/local/templates/main/images/oplata/oplata_icon_03.svg">
				</div>
				<div class="oplataBlock__items__item__text">
					 Безналичный расчет
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__icon">
 <img src="/local/templates/main/images/oplata/oplata_icon_03.svg">
				</div>
				<div class="oplataBlock__items__item__text">
					 Онлайн-оплата*
				</div>
			</div>
		</div>
	</div>
 </section> <section class="oplataBlock">
	<div class="container">
		<div class="oplataBlock__title">
			 Что включено в услугу (работу)**:
		</div>
		<div class="oplataBlock__items">
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 1
				</div>
				<div class="oplataBlock__items__item__text">
					 Материалы
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 2
				</div>
				<div class="oplataBlock__items__item__text">
					 Накладные расходы
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 3
				</div>
				<div class="oplataBlock__items__item__text">
					 Логистика
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 4
				</div>
				<div class="oplataBlock__items__item__text">
					 Транспортные расходы
				</div>
			</div>
			<div class="oplataBlock__items__item">
				<div class="oplataBlock__items__item__number">
					 5
				</div>
				<div class="oplataBlock__items__item__text">
					 Спецтехника
				</div>
			</div>
		</div>
	</div>
 </section> <section class="oplataBlock">
	<div class="container">
		<div class="oplataBlock-warranty">
			<div class="oplataBlock__title">
				 Гарантии
			</div>
			<div class="oplataBlock__items__item__text">
				 Работы производятся специалистами, имеющими необходимые допуски к высотным работам, а также застрахованными&nbsp;в страховой компании ИНГОССТРАХ
			</div>
		</div>
	</div>
 </section>
	<div class="container container-oplataBottom">
		<div class="oplataBlock__items__item__text">
			 * После расчета и оформления&nbsp;заявки, наш менеджер вышлет вам ссылку на онлайн оплату
		</div>
		<div class="oplataBlock__items__item__text">
			 ** Более подробную информацию о составе услуг (работ) при необходимости предоставит ваш личный менеджер
		</div>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>