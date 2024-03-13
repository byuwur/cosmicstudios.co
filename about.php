<?php
$_GET['title'] = 2;
require_once "./_var.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_config.php";
//require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
require_once $TO_HOME . "common.php";
require_once $TO_HOME . "breadcrumb.php";
// --- PHP ---
?>
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="row col-lg-5 mb-4">
                <div class="col-6">
                    <div class="about__pic__item about__pic__item--large set-bg" data-setbg="img/about-1.jpg"></div>
                </div>
                <div class="col-6">
                    <div class="about__pic__item set-bg" data-setbg="img/about-2.jpg"></div>
                    <div class="about__pic__item set-bg" data-setbg="img/about-3.jpg"></div>
                </div>
            </div>
            <div class="col-lg-7 mb-4">
                <div class="section-title">
                    <span><?= $about_subtitle; ?></span>
                    <h2><?= $about_sub; ?></h2>
                </div>
                <a href="<?= $_services; ?>" target="_blank" class="text-center primary-btn"><?= $meetservices; ?></a>
                <div class="row">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <div class="services__item col-md-4">
                            <span class="services__item__icon"><i class="<?= $service_icon[$i]; ?> services_icon"></i></span>
                            <h4><?= $service_title[$i]; ?></h4>
                            <p><?= $service_desc[$i]; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <p class="col-12 about__text"><?= $about_desc; ?></p>
        </div>
    </div>
</section>
<script>
    innit_page();
    active_about();
    document.title = "<?= $titles[$title_index] ?>";
</script>
<?php
require_once $TO_HOME . "extra.about.php";
//login([], true);
// Always output due to "/_var.php" invoking ob_start();
ob_end_flush();
?>