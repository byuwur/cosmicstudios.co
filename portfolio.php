<?php
$_GET['title'] = 4;
require_once "./_var.php";
require_once $TO_HOME . "common.php";
require_once $TO_HOME . "breadcrumb.php";
?>
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <?php foreach ($category as $i => $categ) { ?>
                        <li data-filter="<?= $categ; ?>" class="<?= !$i ? "active" : "" ?>"><?= $cat[$i]; ?></li>
                    <?php } ?>
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
<script>
    innit_page();
    active_portfolio();
    document.title = "<?= $titles[$title_index] ?>";
</script>