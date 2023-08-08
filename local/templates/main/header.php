<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$page = $APPLICATION->GetCurDir();
use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="ru-RU">
  <head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
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
                	"headerMenu",
                	array(
                		"ALLOW_MULTI_SELECT" => "N",
                		"CHILD_MENU_TYPE" => "left",
                		"DELAY" => "N",
                		"MAX_LEVEL" => "1",
                		"MENU_CACHE_GET_VARS" => array(
                		),
                		"MENU_CACHE_TIME" => "3600000000000",
                		"MENU_CACHE_TYPE" => "A",
                		"MENU_CACHE_USE_GROUPS" => "Y",
                		"ROOT_MENU_TYPE" => "top",
                		"USE_EXT" => "N",
                		"COMPONENT_TEMPLATE" => "headerMenu"
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
      <?$APPLICATION->IncludeComponent(
      	"bitrix:main.include",
      	".default",
      	array(
      		"AREA_FILE_SHOW" => "sect",
      		"AREA_FILE_SUFFIX" => "inc",
      		"EDIT_TEMPLATE" => "",
      		"HIDE_ICONS" => "Y",
      		"COMPONENT_TEMPLATE" => ".default",
      		"AREA_FILE_RECURSIVE" => "Y"
      	),
      	false
      );?>
