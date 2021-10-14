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
$_GET['title'] = $contact;
require("./header.php");
?>
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact us</h2>
                    <div class="breadcrumb__links">
                        <a href="#">Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Widget Section Begin -->
<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Address</h4>
                        <p>Los Angeles Gournadi, 1230 Bariasl</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Hotline</h4>
                        <p>1-677-124-44227 • 1-688-356-66889</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Email</h4>
                        <p>Support@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Widget Section End -->

<!-- Call To Action Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.35330665071!2d-74.889348684749!3d4.150743947335077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ed34df51acbb1%3A0xbdb77d4ff326b7a4!2sCosmic%20Studios!5e0!3m2!1ses-419!2sco!4v1634200215224!5m2!1ses-419!2sco" height="480" style="border:0;"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Get in touch</h3>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Website">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
<?php
require("./footer.php");
echo '<script type="text/javascript"> active_contact(); </script>';
?>