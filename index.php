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
$_GET['title'] = $home;
require("./header.php");
?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item video-foreground">
            <div class="hero__picture set-bg" data-setbg="img/sample.png"><i></i></div>
            <div class="container">
                <div class="row">
                    <video class="video-container" autoplay muted loop>
                        <source src="./img/sample.mp4" type="video/mp4" />
                    </video>
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>For website and video editing</span>
                            <h2>Videographer’s Portfolio</h2>
                            <a href="#" class="primary-btn">See more about us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services__title">
                    <div class="section-title">
                        <span>Our services</span>
                        <h2>What We do?</h2>
                    </div>
                    <p>If you hire a videographer of our team you will get a video professional to make a custom
                        video for your business and, once the project is over.</p>
                    <a href="#" class="primary-btn">View all services</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-1.png" alt="">
                            </div>
                            <h4>Motion graphics</h4>
                            <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                post production services can put the finishing touches.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-2.png" alt="">
                            </div>
                            <h4>Scriptwriting and editing</h4>
                            <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                post production services can put the finishing touches.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-3.png" alt="">
                            </div>
                            <h4>Video distribution</h4>
                            <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                post production services can put the finishing touches.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-4.png" alt="">
                            </div>
                            <h4>Video hosting</h4>
                            <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                post production services can put the finishing touches.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

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
        <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
        <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
        <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
            <div class="work__item__hover">
                <h4>VIP Auto Tires & Service</h4>
                <ul>
                    <li>eCommerce</li>
                    <li>Magento</li>
                </ul>
            </div>
        </div>
        <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
        <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
        <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
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

<!-- Logo Begin -->
<div class="logo spad">
    <div class="container">
        <div class="logo__carousel owl-carousel">
            <a href="#" class="logo__item"><img src="img/logo/logo-1.png" alt=""></a>
            <a href="#" class="logo__item"><img src="img/logo/logo-2.png" alt=""></a>
            <a href="#" class="logo__item"><img src="img/logo/logo-3.png" alt=""></a>
            <a href="#" class="logo__item"><img src="img/logo/logo-4.png" alt=""></a>
            <a href="#" class="logo__item"><img src="img/logo/logo-5.png" alt=""></a>
            <a href="#" class="logo__item"><img src="img/logo/logo-6.png" alt=""></a>
        </div>
    </div>
</div>
<!-- Logo End -->

<!-- Call To Action Section Begin -->
<section class="spad set-bg" data-setbg="img/callto-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="callto__text">
                    <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                    <p>INC5000, Best places to work 2019</p>
                    <a href="#">Start your stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->

<!-- Team Section Begin -->
<section class="team spad set-bg" data-setbg="img/team-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title team__title">
                    <span>Nice to meet</span>
                    <h2>OUR Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--second set-bg" data-setbg="img/mateus.jpg">
                    <div class="team__item__text">
                        <h4>AMANDA STONE</h4>
                        <p>Videographer</p>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--third set-bg" data-setbg="img/cristian.jpg">
                    <div class="team__item__text">
                        <h4>AMANDA STONE</h4>
                        <p>Videographer</p>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--four set-bg" data-setbg="img/tito.jpg">
                    <div class="team__item__text">
                        <h4>AMANDA STONE</h4>
                        <p>Videographer</p>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-0">
                <div class="team__btn">
                    <a href="#" class="primary-btn">Meet Our Team</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Counter Section Begin -->
<section class="counter">
    <div class="container">
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__text">
                            <div class="set-bg" data-setbg="img/icons/ci-1.png"><i></i></div>
                            <h2 class="counter_num">230</h2>
                            <p>Compled Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item second__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-2.png" alt="">
                            <h2 class="counter_num">1068</h2>
                            <p>Happy clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item third__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-3.png" alt="">
                            <h2 class="counter_num">230</h2>
                            <p>Perspective clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-4.png" alt="">
                            <h2 class="counter_num">230</h2>
                            <p>Compled Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<?php
require("footer.php");
echo '<script type="text/javascript"> active_home(); </script>';
?>