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
$_GET['title'] = $services;
require("./header.php");
?>
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our Sevices</h2>
                    <div class="breadcrumb__links">
                        <a href="#">Home</a>
                        <span>Services</span>
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
                        <img src="img/icons/si-2.png" alt="">
                    </div>
                    <h4>Scriptwriting and editing</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="img/icons/si-1.png" alt="">
                    </div>
                    <h4>Motion graphics</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="img/icons/si-2.png" alt="">
                    </div>
                    <h4>Scriptwriting and editing</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="img/icons/si-3.png" alt="">
                    </div>
                    <h4>Video distribution</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="img/icons/si-4.png" alt="">
                    </div>
                    <h4>Video hosting</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="services__item">
                    <div class="services__item__icon">
                        <img src="img/icons/si-4.png" alt="">
                    </div>
                    <h4>Video hosting</h4>
                    <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                        production services can put the finishing touches.</p>
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