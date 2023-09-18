<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$APPLICATION->SetTitle("Политика конфиденциальности");
$settings = \classes\Models\Alpinism\Basic\CommonData::getInstance()->getFieldsByCode(['DETAIL_TEXT']);
?>
    <div class="section-flip section-flip--light">
    <section class="section service">
        <div class="container wysiwyg">
            <?= $settings['~DETAIL_TEXT'] ?>
        </div>
    </section>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>