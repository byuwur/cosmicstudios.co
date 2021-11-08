<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es') {
        require("./lang/lang_es.php");
    } else if ($_GET['lang'] == 'en') {
        require("./lang/lang_en.php");
    }
} else if (isset($_COOKIE['lang'])) {
    require("./lang/lang_" . $_COOKIE['lang'] . ".php");
} else {
    require("./lang/lang_es.php");
}
$_GET['title'] = $about;
require("./header.php");
?>
<div class="breadcrumb-option spad video-foreground">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $about_title; ?></h2>
                    <div class="breadcrumb__links">
                        <a href="javascript:;"><?= $weare; ?></a><span><?= $about; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__pic">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about__pic__item about__pic__item--large set-bg" data-setbg="img/about-1.jpg"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg" data-setbg="img/about-2.jpg"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg" data-setbg="img/about-3.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About videograph</span>
                        <h2>WHo we are?</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i class="fas fa-photo-video services_icon"></i>
                                </div>
                                <h4>Video distribution</h4>
                                <p>Whether you’re halfway through the editing process, or you.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i class="fas fa-film services_icon"></i>
                                </div>
                                <h4>Video hosting</h4>
                                <p>Whether you’re halfway through the editing process, or you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about__text__desc">
                        <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                            production company specializing in commercial, broadcast, tourism & action sport video
                            production services has been featured.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial spad set-bg" data-setbg="img/testimonial-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span><?= $loved; ?></span>
                    <h2><?= $says; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p><?= $test_text_0; ?></p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/mateus.old.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5><?= $test_name_0; ?></h5>
                                <span><?= $test_charge_0; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p><?= $test_text_1; ?></p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/cristian.old.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5><?= $test_name_1; ?></h5>
                                <span><?= $test_charge_1; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p><?= $test_text_2; ?></p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/tito.old.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5><?= $test_name_2; ?></h5>
                                <span><?= $test_charge_2; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
<?php
require("./extra.about.php");
require("./footer.php");
echo '<script type="text/javascript"> active_about(); </script>';
?>