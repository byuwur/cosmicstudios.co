<?php
$_GET['title'] = 3;
require("./header.php");
?>
<div class="breadcrumb-option spad video-foreground">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $portfolio_title; ?></h2>
                    <div class="breadcrumb__links">
                        <a href="javascript:;"><?= $weare; ?></a><span><?= $portfolio; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Section Begin -->
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li data-filter="*" class="active"><?= $cat0; ?></li>
                    <li data-filter=".cdc"><?= $cat1; ?></li>
                    <li data-filter=".tv"><?= $cat2; ?></li>
                    <li data-filter=".institution"><?= $cat3; ?></li>
                    <li data-filter=".enterprise"><?= $cat4; ?></li>
                    <li data-filter=".academy"><?= $cat5; ?></li>
                    <li data-filter=".events"><?= $cat6; ?></li>
                    <li data-filter=".cultural"><?= $cat7; ?></li>
                    <li data-filter=".sports"><?= $cat8; ?></li>
                    <li data-filter=".music"><?= $cat9; ?></li>
                    <li data-filter=".tourism"><?= $cat10; ?></li>
                    <li data-filter=".politics"><?= $cat11; ?></li>
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <div class="col-lg-4 col-md-6 col-sm-6 mix cdc">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="img/portfolio/portfolio-1.jpg">
                        <a href="https://www.youtube.com/watch?v=iSpKyHnJHwY" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="portfolio__item__text">
                        <h4>VIP Auto Tires & Service</h4>
                        <ul>
                            <li>eCommerce</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Portfolio Section End -->
<?php
require("./footer.php");
echo '<script type="text/javascript"> active_portfolio(); </script>';
?>