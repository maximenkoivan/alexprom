<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$page = $APPLICATION->GetCurDir();
use Bitrix\Main\Page\Asset;
CModule::IncludeModule('iblock');
?>
<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?
      Asset::getInstance()->addString('<link rel="stylesheet" href="'.SITE_TEMPLATE_PATH.'/css/style.css">');
      Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/vue@2.7.8");
      Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js");
    ?>
    <!-- Отключить автодетект телефонов -->
    <meta name="format-detection" content="telephone=no">
  </head>
  <?
  $mainClasses = array(
  )?>
  <body>
    <div id="panel"><?$APPLICATION->ShowPanel()?></div>
    <div class="wrapper">
      <header>
        <div class="container">
            <div class="header">
                <a class="header__logo" href="/">
                    <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/include_areas/logotypeTop.php')?>
                </a>
                <?$APPLICATION->IncludeComponent(
                  "bitrix:menu", 
                  "multilevel", 
                  array(
                    "ALLOW_MULTI_SELECT" => "Y",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600000000000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "multilevel"
                  ),
                  false
                );?>
                <div class="header__info">
                  <a class="link" href="mailto:<?php echo $arSetting['S2']['VALUE'] ?>"><?php echo $arSetting['S2']['VALUE'] ?></a>
                  <a class="link" href="tel:<?php echo $arSetting['S6']['VALUE'] ?>"><?php echo $arSetting['S1']['VALUE'] ?></a>
                  <button class="btn-primary header__btn" type="button" data-b_modal-open="form-contact">Заказать звонок</button>
                </div>
                <div class="header-mobile">
                    <a class="header-mobile__btn" href="tel:+74951090242">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/icons/phone-menu.svg" alt="+74951090242">
                    </a>
                    <button class="header-mobile__btn burger" type="button">
                      <span class="burger__line"></span>
                      <span class="burger__line"></span>
                      <span class="burger__line"></span>
                    </button>
                </div>
            </div>
        </div>
      </header>
      <?php
        // echo $page;
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT","PROPERTY_*", "PREVIEW_PICTURE");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID"=>"18", "?CODE"=>$page);
        $res = CIBlockElement::GetList(Array("ID"=>"ASC"), $arFilter, false, Array("nPageSize"=>1), $arSelect);
        while($ob = $res->GetNextElement()){ 
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        }
        if($arProps['S2']['VALUE_XML_ID']){
          $styles = implode(' ',$arProps['S2']['VALUE_XML_ID']);
          //echo implode(',',$arProps['S2']['VALUE_XML_ID']);
        }

        if (!@define("ERROR_404","Y")){
          $mainclass = 'display:none';
        };
      ?>
      <?
      global $USER;
      if ($USER->IsAdmin()){
      //  echo $page;
      }?>
      <main class="hero <?=$styles?>" style="<?=$mainclass?>" id="alp">
        <div class="hero__thumb">
          <picture class="hero__pic">
            <?php if($arFields['PREVIEW_PICTURE']){
              ?><img class="hero__img" src="<?echo CFile::GetPath($arFields['PREVIEW_PICTURE'])?>" alt="Услуги промышленного альпинизма"><?
            }else{
              ?>
              <span v-if="serviceimage"><img class="hero__img" src="<?= SITE_TEMPLATE_PATH ?>/images/bg.jpg" :src="serviceimage" alt="Услуги промышленного альпинизма"></span>
              <span v-else><img class="hero__img" src="<?= SITE_TEMPLATE_PATH ?>/images/bg.jpg" alt="Услуги промышленного альпинизма"></span>
              <?
            }?>
          </picture>
          <div class="container hero__container">
            <!-- Хлебные крошки -->
            <?
            if($arProps['S1']['VALUE_XML_ID'] == 'true'){
              $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "universal",
                array(
                  "PATH" => "",
                  "SITE_ID" => "s1",
                  "START_FROM" => "0"
                )
              );
            }?>
            <!-- Заголовок -->
            <h1 class="title-h1 hero__title"><?
              if($arProps['S5']['VALUE']){
                echo $arProps['S5']['~VALUE'];
              }else{
                $APPLICATION->ShowTitle(false);
              }
            ?></h1>
            <p class="hero__desc"><?echo htmlspecialchars_decode($arFields['PREVIEW_TEXT'])?></p>
            <!-- Форма -->
            <?php
              $formType = '/include/forms/'.$arProps['S4']['VALUE_XML_ID'].'.php';
              $APPLICATION->IncludeFile($formType);
            ?>
            <!-- Тизеры -->
            <?
            if($arProps['S3']['VALUE_XML_ID'] == 'true'){
              ?>
              <div class="hero-info">
              <? $APPLICATION->IncludeComponent(
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
              ); ?>
            </div>
              <?
            }?>
            
          </div>
        </div>
      </main>

      <!-- Конец main -->
