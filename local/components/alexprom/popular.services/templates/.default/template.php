<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>
<div class="services-box">
  <?
    foreach ($arResult['ITEMS'] as $section) {
      ?>
      
        <div class="services-box__item">
            <picture class="services-box__thumb">
                <img class="services-box__img lazy" src="/local/templates/main/images/placeholder.jpg" data-src="<?=$section['PICTURE']?>" alt="">
            </picture>
            <a class="services-box__title-link" href="<?=$section['URL']?>"><h3 class="title-h3 services-box__title"><?=$section['NAME']?></h3></a>

        </div>
      
      <?
    }
  ?>
</div>
