<!-- modal -->
<div id="modal_front" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div id="modal_front_container" class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div id="modal_front_title" class="modal-header m-0 fs-5 alert alert-success">Info.</div>
            <div id="modal_front_body" class="modal-body"></div>
            <div class="modal-footer">
                <a id="modal_front_back" href="javascript:$('#modal_front').modal('hide');" onclick="$('#modal_front').modal('hide')" class="btn btn-dark"><?= $_close; ?></a>
                <a id="modal_front_ok" href="javascript:;" class="btn btn-success"><?= $_ok; ?></a>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-4">
                    <a href="javascript:;">
                        <div class="footer__top__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-8">
                    <div class="footer__top__social">
                        <?php foreach ($cosmic_link as $i => $link) { ?>
                            <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                        <?php } ?>
                        <a href="<?= $to_home; ?>es" title="Español"><img src="<?= $to_home; ?>img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                        <a href="<?= $to_home; ?>en" title="English"><img src="<?= $to_home; ?>img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="footer__option__item">
                        <h5><?= $weare; ?></h5>
                        <p><?= $about_short; ?></p>
                        <a href="<?= $_about; ?>" class="read__more"><?= $know; ?> <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $footer_about; ?></h5>
                        <ul>
                            <?php foreach ($footer_about_item as $i => $item) { ?>
                                <li><a href="<?= $footer_about_link[$i]; ?>"><?= $item; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer__option__item">
                        <h5><?= $footer_portfolio; ?></h5>
                        <ul>
                            <?php foreach ($footer_portfolio_item as $i => $item) { ?>
                                <li><a href="<?= $footer_portfolio_link[$i]; ?>"><?= $item; ?></a></li>
                            <?php } ?>
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
<!-- end footer -->
<script src="<?= $to_home; ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= $to_home; ?>js/bootstrap.min.js"></script>
<script src="<?= $to_home; ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= $to_home; ?>js/mixitup.min.js"></script>
<script src="<?= $to_home; ?>js/masonry.pkgd.min.js"></script>
<script src="<?= $to_home; ?>js/jquery.slicknav.js"></script>
<script src="<?= $to_home; ?>js/owl.carousel.min.js"></script>
<script src="<?= $to_home; ?>js/main.js"></script>
<script src="<?= $to_home; ?>_functions.js"></script>
</body>

</html>