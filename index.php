<?php
require("./header.php");
?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel video-foreground">
        <div class="hero__item">
            <div class="hero__picture set-bg" data-setbg="img/sample.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span><?= $carrousel1_sub; ?></span>
                            <h2><?= $carrousel1_title; ?></h2>
                            <a href="<?= $_portfolio; ?>" class="primary-btn"><?= $carrousel1_link; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item">
            <div class="hero__picture set-bg" data-setbg="img/sample.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span><?= $carrousel2_sub; ?></span>
                            <h2><?= $carrousel2_title; ?></h2>
                            <a href="<?= $_services; ?>" class="primary-btn"><?= $carrousel2_link; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item">
            <div class="hero__picture set-bg" data-setbg="img/sample.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span><?= $carrousel3_sub; ?></span>
                            <h2><?= $carrousel3_title; ?></h2>
                            <a href="<?= $_about; ?>" class="primary-btn"><?= $carrousel3_link; ?></a>
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
<?php
require("./extra.services.php");
require("./extra.about.php");
require("./footer.php");
echo '<script type="text/javascript"> active_home(); </script>';
?>