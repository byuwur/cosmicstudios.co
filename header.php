<?php
require_once "./_var.php";
require_once $TO_HOME . "_routes.php";
require_once $TO_HOME . "common.php";
?>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-6">
                <a href="<?= $ROOT_ROUTE; ?>">
                    <div class="header__logo"><i></i></div>
                </a>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li id="li_home"><a href="<?= $ROOT_ROUTE; ?>"><?= $home; ?></a></li>
                            <li id="li_portfolio"><a href="<?= $ROOT_ROUTE . $_portfolio; ?>"><?= $portfolio; ?></a></li>
                            <li id="li_services"><a href="<?= $ROOT_ROUTE . $_services; ?>"><?= $services; ?></a></li>
                            <li id="li_about"><a href="<?= $ROOT_ROUTE . $_about; ?>"><?= $about; ?></a></li>
                            <li id="li_contact"><a href="<?= $ROOT_ROUTE . $_contact; ?>"><?= $contact; ?></a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <?php foreach ($cosmic_link as $i => $link) { ?>
                            <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                        <?php } ?>
                        <a href="<?= $ROOT_ROUTE; ?>es" title="Español"><img src="img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> ES</a>
                        <a href="<?= $ROOT_ROUTE; ?>en" title="English"><img src="img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> EN</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>