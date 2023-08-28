<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<main class="hero hero--has-breadcrumbs">
  <div class="hero__thumb">
      <picture class="hero__pic">
        <source srcset="<?=CFile::GetPath($arResult['DETAIL_PICTURE'])?>" type="image/webp">
        <img class="hero__img" src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE'])?>" alt="<?=$arResult['NAME']?>">
      </picture>
      <div class="container hero__container">
        <?$APPLICATION->IncludeComponent(
          "bitrix:breadcrumb",
          "universal",
          Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
          )
        );?>
          <h1 class="title-h1 hero__title">
              <?=htmlspecialchars_decode($arResult['PROPERTIES']['H1']['VALUE']['TEXT'])?>
          </h1>
          <p class="hero__desc"><?=htmlspecialchars_decode($arResult['PROPERTIES']['SUBTITLE']['VALUE']['TEXT'])?></p>
          <p>Оставьте свой номер, чтобы получить прайс-лист на&nbsp;Whatsapp</p>
          <div class="hero__buttons">
              <button class="hero__btn" type="button" data-b_modal-open="form-price">Получить прайс-лист</button>
          </div>
          <div class="hero-info">
                <div class="hero-info__stroke">
                  <?foreach ($arResult['PROPERTIES']['TEASERTEXT']['VALUE'] as $teaser) {
                    echo htmlspecialchars_decode($teaser['TEXT']);
                  }?>
                </div>
          </div>
      </div>

      <picture class="hero__worker">
          <source srcset="<?=CFile::GetPath($arResult['PROPERTIES']['MOBILEBGWEBP']['VALUE'])?>" type="image/webp">
          <img class="hero__worker-img" src="<?=CFile::GetPath($arResult['PROPERTIES']['MOBILEBGJPG']['VALUE'])?>" alt="Услуги промышленного альпинизма">
      </picture>
  </div>
</main>
