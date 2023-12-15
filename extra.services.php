<?php
require_once "./_var.php";
require_once $TO_HOME . "common.php";
?>
<!-- Logo Begin -->
<div class="logo spad">
    <div class="container">
        <div class="logo__carousel owl-carousel">
            <a href="javascript:;" class="logo__item"><img src="<?= $HOME_PATH; ?>img/logos/byuwur.png" alt=""></a>
            <a href="javascript:;" class="logo__item"><img src="<?= $HOME_PATH; ?>img/logos/itfip.png" alt=""></a>
            <a href="javascript:;" class="logo__item"><img src="<?= $HOME_PATH; ?>img/logos/bm.png" alt=""></a>
            <a href="javascript:;" class="logo__item"><img src="<?= $HOME_PATH; ?>img/logos/eaaa.png" alt=""></a>
            <a href="javascript:;" class="logo__item"><img src="<?= $HOME_PATH; ?>img/logos/concejoespinal.png" alt=""></a>
        </div>
    </div>
</div>
<!-- Logo End -->
<!-- Call To Action Section Begin -->
<section class="set-bg" data-setbg="img/dron.jpg" style="background-position:center;">
    <div class="video-foreground">
        <div class="callto__text py-5 container">
            <h2><?= $wings; ?></h2>
            <p><?= $slogan; ?></p>
            <a href="<?= $_contact; ?>"><?= $start; ?></a>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->