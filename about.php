<?php
$_GET['title'] = 1;
require_once "./header.php";
require_once $to_home . "breadcrumb.php";
?>
<!-- About Section Begin -->
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
<!-- About Section End -->
<?php
require_once $to_home . "extra.about.php";
require_once $to_home . "footer.php";
?>
<script>
    $(document).ready(() => active_about());
</script>