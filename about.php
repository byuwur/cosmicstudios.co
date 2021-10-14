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
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>About us</h2>
                    <div class="breadcrumb__links">
                        <a href="#">Home</a>
                        <span>About</span>
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
                            <div class="about__pic__item about__pic__item--large set-bg" data-setbg="img/about/about-1.jpg"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg" data-setbg="img/about/about-2.jpg"></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="about__pic__item set-bg" data-setbg="img/about/about-3.jpg"></div>
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
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>Video distribution</h4>
                                <p>Whether you’re halfway through the editing process, or you.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
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
                    <span>Loved By Clients</span>
                    <h2>What clients say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Delivers such a great service that it can benefit all kinds of people from any number
                                of industries.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Videographer delivers such a great service that it can benefit all kinds of people
                                from any number.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Videographer delivers such a great service that it can benefit all kinds of people
                                from any number.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-3.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Delivers such a great service that it can benefit all kinds of people from any number
                                of industries.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <div class="testimonial__text">
                            <p>Videographer delivers such a great service that it can benefit all kinds of people
                                from any number.</p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Krista Attorn</h5>
                                <span>Web Designer</span>
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