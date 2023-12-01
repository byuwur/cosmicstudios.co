<!-- Testimonial Section Begin -->
<section class="testimonial spad set-bg" data-setbg="img/testimonial-bg.jpg">
    <div class="container">
        <div class="section-title center-title">
            <span><?= $loved; ?></span>
            <h2><?= $says; ?></h2>
        </div>
        <div class="testimonial__slider owl-carousel">
            <?php foreach ($test_text as $i => $test) { ?>
                <div class="testimonial__item">
                    <p><?= $test; ?></p>
                    <img src="<?= $HOME_PATH . $test_img[$i]; ?>" alt="">
                    <h5><?= $test_name[$i]; ?></h5>
                    <span><?= $test_charge[$i]; ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
<!-- Team Section Begin -->
<section class="team spad set-bg" data-setbg="img/team-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="section-title team__title col-12">
                <span><?= $pleasure; ?></span>
                <h2><?= $weare; ?></h2>
            </div>
            <div class="col-md-4 p-0 team__item team__item--second set-bg" data-setbg="<?= $HOME_PATH; ?>img/mateus.jpg">
                <div class="team__item__text">
                    <h4>MATEUS ANDRÉS</h4>
                    <a href="<?= $byuwur_link[0]; ?>" target="_blank"><?= $byuwur; ?></a><br>
                    <?php foreach ($byuwur_link as $i => $link) { ?>
                        <a class="team__item__social" href="<?= $link; ?>" target="_blank"><i class="<?= $byuwur_link_icon[$i]; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4 p-0 team__item team__item--third set-bg" data-setbg="<?= $HOME_PATH; ?>img/cristian.jpg">
                <div class="team__item__text">
                    <h4>CRISTIAN PARRA</h4>
                    <a href="<?= $crisprodu_link[0]; ?>" target="_blank"><?= $crisprodu; ?></a><br>
                    <?php foreach ($crisprodu_link as $i => $link) { ?>
                        <a class="team__item__social" href="<?= $link; ?>" target="_blank"><i class="<?= $crisprodu_link_icon[$i]; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4 p-0 team__item team__item--four set-bg" data-setbg="<?= $HOME_PATH; ?>img/tito.jpg">
                <div class="team__item__text">
                    <h4>TITO BOCANEGRA</h4>
                    <a href="<?= $eltitogs_link[0]; ?>" target="_blank"><?= $eltitogs; ?></a><br>
                    <?php foreach ($eltitogs_link as $i => $link) { ?>
                        <a class="team__item__social" href="<?= $link; ?>" target="_blank"><i class="<?= $eltitogs_link_icon[$i]; ?>"></i></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="team__btn">
                    <a href="<?= $_about; ?>" target="_blank" class="primary-btn"><?= $meet; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->
<!-- Counter Section Begin -->
<section class="counter">
    <div class="container row">
        <?php foreach ($counter_q as $i => $count) { ?>
            <div class="col-6 col-md-3 counter__item <?= $i % 2 ? "second__item" : ""; ?>">
                <div class="counter__item__text">
                    <i class="<?= $counter_i[$i]; ?>"></i>
                    <h2><?= $count; ?></h2>
                    <p><?= $counter[$i]; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Counter Section End -->