<?php

use classes\Models\Alpinism\Basic\CommonBlocks;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
$settings = CommonBlocks::getInstance()->getPropertiesByPostfix('REVIEWS');
?>
<section class="section reviews">
    <div class="container reviews__container">
        <div class="reviews__head">
            <h2 class="title-h2 reviews__tilte"><?= $settings['TITLE_REVIEWS']['~VALUE'] ?></h2>
            <div class="reviews__head-aside">
                <?php foreach ($settings['LINK_REVIEWS']['~VALUE'] as $key => $link) : ?>
                    <?php if (!empty($settings['LINK_REVIEWS']['DESCRIPTION'][$key])) : ?>
                        <a href="<?= $link ?>" target="_blank" class="reviews__head-button btn-primary">
                            <?= $settings['LINK_REVIEWS']['DESCRIPTION'][$key] ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div style="display: flex; justify-content: center;margin-top: 20px;border-radius: 20px;">
            <iframe style="width: 100%;height: 100%;border: none;outline: none;padding: 0;margin: 0" id="myReviews__block-widget"></iframe>
        </div>
    </div>
</section>

<script src="https://myreviews.dev/widget/dist/index.js" defer></script>
<script defer>
    (function() {
        var ru = "ru";
        var myReviewsInit = function() {
            new window.myReviews.BlockWidget({
                uuid: "0c1e0f0d-d9ee-42f5-b967-06ba22289cb9",
                name: "g6281212",
                additionalFrame: "none",
                lang: "ru",
                widgetId: "0"
            }).init();

        };
        if (document.readyState === "loading") {
            document.addEventListener('DOMContentLoaded', function() {
                myReviewsInit()
            })
        } else {
            myReviewsInit()
        }
    })()
</script>

<?php /* Старый скрипт
<script src="https://myreviews.dev/widget/dist/index.js" defer></script>
<script defer>
    if (document.querySelector('#myReviews__block-widget')) {

        (() => {
            let scriptLoaded = false;

            let loadAndInitMyReviews = function () {
                if (scriptLoaded) return; // Если скрипт уже загружен, не делаем ничего

                scriptLoaded = true;

                // Создаём новый тег скрипта
                var script = document.createElement('script');
                script.src = "https://myreviews.dev/widget/dist/index.js";
                script.defer = true;
                document.head.appendChild(script);

                // Функция инициализации, которую вызываем после загрузки скрипта
                script.onload = function () {
                    let myReviewsInit = function () {
                        new window.myReviews.BlockWidget({
                            uuid: "69f23622-f471-4d7a-906e-380d7113fe48",
                            name: "g77642668",
                            additionalFrame: "none",
                            lang: "ru",
                            widgetId: "0"
                        }).init();
                    };

                    if (document.readyState === "loading") {
                        document.addEventListener('DOMContentLoaded', function () {
                            myReviewsInit();
                        });
                    } else {
                        myReviewsInit();
                    }
                };
            };

            // Добавляем обработчик события скролла к окну
            window.addEventListener('scroll', loadAndInitMyReviews, { once: true });
        })();

        const reviewsIframe = document.querySelector('#myReviews__block-widget');
        if (reviewsIframe) {
            let iframeStyle = reviewsIframe.contentDocument.querySelector('style'); // получаем объект style внутри iframe
            if (iframeStyle) {
                iframeStyle.innerHTML += '.slick-slide > div > div { width: 100% !important; }';
            }
        }
    }
</script>
*/ ?>