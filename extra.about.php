<!-- Team Section Begin -->
<section class="team spad set-bg" data-setbg="img/team-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title team__title">
                    <span><?= $pleasure; ?></span>
                    <h2><?= $weare; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--second set-bg" data-setbg="img/mateus.jpg">
                    <div class="team__item__text">
                        <h4>MATEUS ANDRÉS</h4>
                        <a href="<?= $byuwur_link[0]; ?>" target="_blank">
                            <p><?= $byuwur; ?></p>
                        </a>
                        <div class="team__item__social">
                            <?php foreach ($byuwur_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $byuwur_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--third set-bg" data-setbg="img/cristian.jpg">
                    <div class="team__item__text">
                        <h4>CRISTIAN PARRA</h4>
                        <a href="<?= $crisprodu_link[0]; ?>" target="_blank">
                            <p><?= $crisprodu; ?></p>
                        </a>
                        <div class="team__item__social">
                            <?php foreach ($crisprodu_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $crisprodu_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--four set-bg" data-setbg="img/tito.jpg">
                    <div class="team__item__text">
                        <h4>TITO BOCANEGRA</h4>
                        <a href="<?= $eltitogs_link[0]; ?>" target="_blank">
                            <p><?= $eltitogs; ?></p>
                        </a>
                        <div class="team__item__social">
                            <?php foreach ($eltitogs_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $eltitogs_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-0">
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
    <div class="container">
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__text">
                            <i class="fas fa-check-circle counter_icon"></i>
                            <h2 class="counter_num"><?= $counterq1; ?></h2>
                            <p><?= $counter1; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item second__item">
                        <div class="counter__item__text">
                            <i class="fas fa-thumbs-up counter_icon"></i>
                            <h2 class="counter_num"><?= $counterq2; ?></h2>
                            <p><?= $counter2; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item third__item">
                        <div class="counter__item__text">
                            <i class="fas fa-user-friends counter_icon"></i>
                            <h2 class="counter_num"><?= $counterq3; ?></h2>
                            <p><?= $counter3; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <i class="fas fa-clipboard-list counter_icon"></i>
                            <h2 class="counter_num"><?= $counterq4; ?></h2>
                            <p><?= $counter4; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->