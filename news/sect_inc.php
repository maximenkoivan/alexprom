<main class="hero hero--has-breadcrumbs hero--no-bullets">
    <div class="hero__thumb">
        <picture class="hero__pic">
            <source srcset="/local/templates/main/images/page-services/services-hero.webp" type="image/webp">
            <img class="hero__img" src="/local/templates/main/images/page-services/services-hero.jpg" alt="Услуги промышленного альпинизма">
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
            <h1 class="title-h1 hero__title"><?$APPLICATION->ShowTitle(false);?></h1>
        </div>

        <picture class="hero__worker">
            <source srcset="/local/templates/main/images/page-services/services-hero--mobile.webp" type="image/webp">
            <img class="hero__worker-img" src="/local/templates/main/images/page-services/services-hero--mobile.png" alt="Услуги промышленного альпинизма">
        </picture>
    </div>
</main>