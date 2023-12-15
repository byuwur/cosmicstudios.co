<?php
$_GET['title'] = 3;
require_once "./_var.php";
require_once $TO_HOME . "common.php";
require_once $TO_HOME . "breadcrumb.php";
?>
<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
        <div class="row">
            <?php foreach ($service_title as $i => $service) { ?>
                <div class="services__item col-md-6 col-lg-4">
                    <span class="services__item__icon"><i class="<?= $service_icon[$i]; ?> services_icon"></i></span>
                    <h4><?= $service; ?></h4>
                    <p><?= $service_desc[$i]; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
</section>
<!-- Services Section End -->
<script>
    innit_page();
    active_services();
    document.title = "<?= $titles[$title_index] ?>";
</script>
<?php
require_once $TO_HOME . "extra.services.php";
?>