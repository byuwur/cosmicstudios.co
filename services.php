<?php
$_GET['title'] = 2;
require_once "./header.php";
require_once $to_home . "breadcrumb.php";
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
<?php
require_once $to_home . "extra.services.php";
require_once $to_home . "footer.php";
?>
<script>
    $(document).ready(() => active_services());
</script>