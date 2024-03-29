<?php
require_once "./_var.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_config.php";
require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
require_once $TO_HOME . "common.php";
// --- PHP ---
?>
<div class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-4">
                    <a href="<?= $ROOT_ROUTE; ?>">
                        <div class="footer__top__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-8">
                    <div class="footer__top__social">
                        <?php foreach ($cosmic_link as $i => $link) { ?>
                            <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                        <?php } ?>
                        <a href="<?= $ROOT_ROUTE; ?>es" title="Español"><img src="<?= $HOME_PATH; ?>/img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                        <a href="<?= $ROOT_ROUTE; ?>en" title="English"><img src="<?= $HOME_PATH; ?>/img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="footer__option__item">
                        <h5><?= $weare; ?></h5>
                        <p><?= $about_short; ?></p>
                        <a href="<?= $_about; ?>" class="read__more"><?= $know; ?> <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $footer_about; ?></h5>
                        <ul>
                            <?php foreach ($footer_about_item as $i => $item) { ?>
                                <li><a href="<?= $footer_about_link[$i]; ?>"><?= $item; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $footer_portfolio; ?></h5>
                        <ul>
                            <?php foreach ($footer_portfolio_item as $i => $item) { ?>
                                <li><a href="<?= $footer_portfolio_link[$i]; ?>"><?= $item; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="footer__copyright__text"><?= $footer_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//login([], true);
// Always output due to "/_var.php" invoking ob_start();
ob_end_flush();
?>