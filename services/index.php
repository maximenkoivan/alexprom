<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги  промышленного  альпинизма");
?><div class="section-flip section-flip--light">
	 <?$APPLICATION->IncludeComponent(
	"alexprom:servicelist.allpage",
	"",
Array()
);?>
</div>
 <br>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>