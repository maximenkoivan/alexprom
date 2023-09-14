<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка 404");
?>
<?php /*
<style>
    .nfcontainer
    {
        text-align: center;
    }
    .nftitle
    {
        font-family: "Manrope";
        font-size: 420px;
        font-weight: 700;
        line-height: 567px;
        letter-spacing: 0em;
        text-align: center;
        color: #5486E5;
    }
    .nfsubtitle
    {
        font-family: Manrope;
        font-size: 40px;
        font-weight: 600;
        line-height: 54px;
        letter-spacing: 0em;
        text-align: center;
    }
    .subleveltext
    {
        font-family: Manrope;
        font-size: 20px;
        font-weight: 400;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: center;
    }
</style>

<div class="nfcontainer">
    <h1 class="nftitle">404</h1>
    <p class="nfsubtitle">Страница не найдена</p>
    <p class="subleveltext">Страница, на которую вы пытаетесь перейти не найдена.<br />Возможно, вы ввели неправильный адрес или страница была удалена.</p>
    <p>Перейти на <a href="/">главную страницу</a></p>
</div>
*/ ?>

    <main id="primary" class="site-main main">

        <div class="container">
            <section class="section-error error-404 not-found">
                <p class="section-error__number">404</p>
                <div class="section-error__content">
                    <h1 class="section-error__title">Страница не найдена</h1>
                    <p class="section-error__desc">
                        Страница, на которую вы пытаетесь перейти не найдена. <br>
                        Возможно, вы ввели неправильный адрес или страница была удалена
                    </p>
                    <p class="section-error__desc">
                        Перейти на <a href="/" class="link"><span class="link__text">главную страницу</span></a>
                    </p>
                </div>
            </section>
        </div>

    </main>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>