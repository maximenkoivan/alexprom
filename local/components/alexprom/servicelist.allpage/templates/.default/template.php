<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $section) {
  if($section['DEPTH_LEVEL'] == '1'){
    ?>
    <section class="section services">
      <div class="container">
        <div class="services__head">
            <h2 class="title-h2"><?=$section['NAME']?></h2>
        </div>
        <div class="services-box">
          <?
          foreach ($arResult['ITEMS'] as $item) {
            if($item['SID'] == $section['ID']){
              ?>
              
                <div class="services-box__item">
                    <picture class="services-box__thumb">
                        <img class="services-box__img lazy" src="/local/templates/main/images/placeholder.jpg" data-src="<?=$item['PICTURE']?>" alt="">
                    </picture>
                    <h3 class="title-h3 services-box__title"><a href="<?=$item['URL']?>" class="services-box__title-link"><?=$item['NAME']?></a></h3>
                </div>
              </a>
              <?
            }
          }?>
        </div>
      </div>
    </section>
    <?
  }
}
