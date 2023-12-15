<?php
require_once "./_var.php";
require_once $TO_HOME . "common.php";
?>
<!-- Hero Section Begin -->
<section class="hero__slider owl-carousel video-foreground">
    <?php foreach ($carousel_title as $i => $title) { ?>
        <div class="hero__item container">
            <!--div class="hero__picture set-bg" data-setbg=""></div-->
            <div class="col-lg-6 hero__text">
                <span><?= $carousel_sub[$i]; ?></span>
                <h2><?= $title; ?></h2>
                <a href="<?= $TO_HOME . $carousel_link[$i]; ?>" class="primary-btn"><?= $carousel_link_text[$i]; ?></a>
            </div>
        </div>
    <?php } ?>
</section>
<!-- Hero Section End -->
<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="row col-12 mb-4">
                <div class="col-md-4 section-title">
                    <span><?= $services_title; ?></span>
                    <h2><?= $services_subtitle; ?></h2>
                </div>
                <div class="col-md-8">
                    <p><?= $services_short; ?></p>
                    <a href="<?= $TO_HOME . $services; ?>" class="primary-btn"><?= $meetservices; ?></a>
                </div>
            </div>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="services__item col-md-4">
                    <span class="services__item__icon"><i class="<?= $service_icon[$i]; ?> services_icon"></i></span>
                    <h4><?= $service_title[$i]; ?></h4>
                    <p><?= $service_desc[$i]; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- TODO: -->
<!-- Work Section Begin -->
<section class="work">
    <div class="work__gallery">
        <div class="grid-sizer"></div>
        <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
            <div class="work__item__hover">
                <h4>VIP Auto Tires & Service</h4>
                <ul>
                    <li>eCommerce</li>
                    <li>Magento</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Work Section End -->
<script>
    innit_page();
    active_home();
    document.title = "<?= $titles[$title_index] ?>";
</script>
<?php
require_once $TO_HOME . "extra.services.php";
require_once $TO_HOME . "extra.about.php";
?>