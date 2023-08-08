<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<main class="hero parallax">
  <div class="hero__thumb">
      <picture class="hero__pic">
        <source srcset="<?=CFile::GetPath($arResult['DETAIL_PICTURE'])?>" type="image/webp">
        <img class="hero__img" src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE'])?>" alt="Услуги промышленного альпинизма">
      </picture>
      <div class="container hero__container">
          <h1 class="title-h1 hero__title"><?=htmlspecialchars_decode($arResult['PROPERTIES']['H1']['VALUE']['TEXT'])?></h1>
          <p class="hero__desc"><?=htmlspecialchars_decode($arResult['PROPERTIES']['SUBTITLE']['VALUE']['TEXT'])?></p>
          <p>Оставьте свой номер, чтобы получить прайс-лист на&nbsp;Whatsapp</p>
          <div class="hero__form js_form" data-action="/include/formservices.php">
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
