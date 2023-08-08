<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прайс-лист на услуги промышленных альпинистов");
CModule::IncludeModule("iblock");
?>

<div class="section-flip section-flip--light">

  <div class="section price">
    <div class="container">
      <div class="price-card">
        <?php
            $arFilter = Array('IBLOCK_ID'=>'7');
            $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
            $db_list->NavStart(220);

            while($ar_result = $db_list->GetNext())
            {
            if($ar_result['ELEMENT_CNT'] > 0){
            ?>
              <div class="price-card__section" style="color:#222222; text-decoration: none; border: none; background:none;">
                <h2 class="price-card__title" style="color:#222222; text-decoration: none; border: none; background:none;"><?=$ar_result['NAME']?></h2>
                <div class="price-table">
                  <?php
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "PROPERTY_*", "DETAIL_PAGE_URL", "SECTION_ID");
                    $arFilterEL = Array("IBLOCK_ID"=>'7', "SECTION_ID"=>$ar_result['ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
                    $res = CIBlockElement::GetList(Array(), $arFilterEL, false, Array("nPageSize"=>50), $arSelect);
                    while($ob = $res->GetNextElement()){
                     $arFields = $ob->GetFields();
                     $arProps = $ob->GetProperties();
                     ?>
                     <div class="price-table__row">
                         <div class="price-table__item">
                             <a href="<?=$arFields['DETAIL_PAGE_URL']?>" class="price-table__link"><?=$arFields['NAME']?></a>
                         </div>
                         <div class="price-table__item">
                             <span class="price-table__qt"><?=$arProps['S2']['VALUE']?></span>
                         </div>
                         <div class="price-table__item">
                             <button class="price-table__link" data-b_modal-open="modal-service" type="button">Заказать</button>
                         </div>
                     </div>
                     <?
                   }
                  ?>
                </div>
              </div>
            <?}
          }
        ?>
      </div>
		<div class="section__buttons">
			<a href="/services/" class="btn-primary prices__button">Смотреть все услуги</a>
		</div>
    </div>
  </div>

<section class="section locations locations--dropdowns">
  <div class="container">
  	<h2 class="title-h2 locations__title">Работаем <br> по Москве и&nbsp;области</h2>
  	<div class="locations__content">
    	<div class="locations__map" id="locations__map" data-map-icon="/local/templates/main/images/map-point.svg">
		</div>
    	<div class="locations-addresses">
			<?php
				$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
				$arFilter = Array("IBLOCK_ID"=>"8");
				$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
				$cities = array();
				while($ob = $res->GetNextElement()){
				 $arFields = $ob->GetFields();
				 $arProps = $ob->GetProperties();
				 $cities[] = array(
          'arFields' => $arFields,
          'arProps' =>  $arProps
         );
				}
        ?>
			  <?php foreach ($cities as $city_count => $city) : ?>
				<article class="bayan bayan--selfish bayan--toggler-angle locations-card">
				  <div class="locations-card__top">
					<h3 class="locations-card__titie">
					  <span class="locations-addresses__link"><?=$city['arFields']['NAME']?></span>
					</h3>
				  </div>
				  <div class="locations-card__contacts">
					<p class="locations-card__contact">
						<img class="locations-card__contact-icon" src="/local/templates/main/images/geo.png" alt="Адрес">
					  <span class="locations-card__contact-text">
						<span class="locations-card__contact-address"><?=$city['arFields']['NAME']?>, <?=$city['arProps']['S3']['VALUE']?></span> <br>
            <span class="locations-card__contact-worktime"><?=$city['arProps']['S5']['VALUE']?></span>
					  </span>
					</p>
          <?if($city['arProps']['S2']['VALUE']){
            ?>
              <p class="locations-card__contact">
              <img class="locations-card__contact-icon" src="/local/templates/main/images/phone.png" alt="Телефон">
              <span class="locations-card__contact-text">
              <a href="tel:"><?=$city['arProps']['S2']['VALUE']?></a>
              </span>
					</p>
            <?
          }?>
          <?if($city['arProps']['S4']['VALUE']){
            ?>
              <p class="locations-card__contact">
              <img class="locations-card__contact-icon" src="/local/templates/main/images/email.png" alt="Электронная почта">
              <span class="locations-card__contact-text">
              <a href="mailto:<?=$city['arProps']['S4']['VALUE']?>"><?=$city['arProps']['S4']['VALUE']?></a>
              </span>
					</p>
            <?
          }?>
				  </div>
				</article>
			<?php endforeach; ?>
			<div class="locations-addresses__buttons">
        		<button class="btn-accent locations-addresses__button-more" type="button">
            		Показать больше
        		</button>
      		</div>
        </div>
    </div>
  </div>
</section>



<section class="section-shifter consultation">
  <?$APPLICATION->IncludeComponent(
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
);?>
</section>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
