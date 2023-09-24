<?php
$_GET['title'] = 2;
require("./header.php");
?>
<div class="breadcrumb-option spad video-foreground">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $services_title; ?></h2>
                    <div class="breadcrumb__links">
                        <a href="javascript:;"><?= $weare; ?></a><span><?= $services; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_1; ?></h4>
                    <p><?= $service_desc_1; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_2; ?></h4>
                    <p><?= $service_desc_2; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_3; ?></h4>
                    <p><?= $service_desc_3; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_4; ?></h4>
                    <p><?= $service_desc_4; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_5; ?></h4>
                    <p><?= $service_desc_5; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_6; ?></h4>
                    <p><?= $service_desc_6; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_7; ?></h4>
                    <p><?= $service_desc_7; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_8; ?></h4>
                    <p><?= $service_desc_8; ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <i class="fas fa-film services_icon"></i>
                    </div>
                    <h4><?= $service_title_9; ?></h4>
                    <p><?= $service_desc_9; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<?php
require("./extra.services.php");
require("./footer.php");
echo '<script type="text/javascript"> active_services(); </script>';
?>