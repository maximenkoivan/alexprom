<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use classes\Models\Light\Basic\CommonData;

/**
 * @global CMain $APPLICATION
 */
$footer = CommonData::getInstance()->getElementByCode('basic_settings', true);
?>
</div>
<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__container container">
            <div class="footer__copy"><?= $footer['COPYRIGHT_FOOTER']['~VALUE'] ?></div>
            <?php if (!empty($footer['TEXT_LINK_FOOTER']['~VALUE']) || !empty($footer['LINK_FOOTER']['~VALUE'])): ?>
                <div class="footer__politics">
                    <a class="link link--hover-color link--white link--small"
                       href="<?= $footer['LINK_FOOTER']['~VALUE'] ?>"
                       target="_blank"><?= $footer['TEXT_LINK_FOOTER']['~VALUE'] ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
</div>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/modal-callback.php') ?>
<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/includes/call.php') ?>

</body>
</html>

