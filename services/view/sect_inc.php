<main class="hero hero--has-breadcrumbs hero--thumb-half" id="alp">
  <div class="hero__thumb">
    <picture class="hero__pic">
      <img class="hero__img" :src="serviceimage" alt="">
    </picture>
    <div class="container hero__container">
      <? $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "universal",
        array(
          "PATH" => "",
          "SITE_ID" => "s1",
          "START_FROM" => "0"
        )
      ); ?>
      <h1 class="title-h1 hero__title"><? $APPLICATION->ShowTitle(false); ?></h1>
      <p>
        <span v-if="serviceprice">{{serviceprice}}. </span>Оставьте заявку и мы свяжемся с вами в течение 30 минут
      </p>
      <div class="hero__buttons">
        <button class="hero__btn" type="button" data-b_modal-open="form-price">Рассчитать стоимость</button>
      </div>
      <div class="hero-info">
        <div class="hero-info__stroke">
          <div class="hero-info__item">
            <? $APPLICATION->IncludeFile('/include/mainpage/teaser_1.php') ?>
          </div>
          <div class="hero-info__item">
            <? $APPLICATION->IncludeFile('/include/mainpage/teaser_2.php') ?>
          </div>
          <div class="hero-info__item">
            <? $APPLICATION->IncludeFile('/include/mainpage/teaser_3.php') ?>
          </div>
          <div class="hero-info__item">
            <? $APPLICATION->IncludeFile('/include/mainpage/teaser_4.php') ?>
          </div>
        </div>
      </div>
    </div>
    <picture class="hero__worker">
      <img class="hero__worker-img" :src="serviceimage" alt="Услуги промышленного альпинизма">
    </picture>
  </div>
</main>