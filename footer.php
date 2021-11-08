<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-4">
                    <a href="./">
                        <div class="footer__top__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-8">
                    <div class="footer__top__social">
                        <a href="<?= $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="<?= $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="es" title="Español"><img src="img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                        <a href="en" title="English"><img src="img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="footer__option__item">
                        <h5><?= $weare; ?></h5>
                        <p><?= $aboutus_short; ?></p>
                        <a href="<?= $_about; ?>" class="read__more"><?= $know; ?> <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $about_title_short; ?></h5>
                        <ul>
                            <li><a href="<?= $_about; ?>"><?= $footer_about_item1; ?></a></li>
                            <li><a href="<?= $_contact; ?>"><?= $footer_about_item2; ?></a></li>
                            <li><a href="<?= $_contact; ?>"><?= $footer_about_item3; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $portfolio_title_short; ?></h5>
                        <ul>
                            <li><a href="<?= $_portfolio; ?>"><?= $footer_portfolio_item1; ?></a></li>
                            <li><a href="<?= $_portfolio; ?>"><?= $footer_portfolio_item2; ?></a></li>
                            <li><a href="<?= $_services; ?>"><?= $footer_portfolio_item3; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="footer__copyright__text"><?= $footer_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>