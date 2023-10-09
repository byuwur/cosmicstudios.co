<?php
if (isset($_GET['title']))
    switch ($_GET['title']) {
        case 0:
            $bc_title = $home_title;
            $bc_sub = $home;
            break;
        case 1:
            $bc_title = $about_title;
            $bc_sub = $about;
            break;
        case 2:
            $bc_title = $services_title;
            $bc_sub = $services;
            break;
        case 3:
            $bc_title = $portfolio_title;
            $bc_sub = $portfolio;
            break;
        case 4:
            $bc_title = $contact_title;
            $bc_sub = $contact;
            break;
        default:
            $bc_title = "COSMIC Studios";
            $bc_sub = "";
            break;
    }
else {
    $bc_title = "COSMIC Studios";
    $bc_sub = "";
}
?>
<div class="breadcrumb-option spad video-foreground">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $bc_title; ?></h2>
                    <div class="breadcrumb__links">
                        <a href="javascript:;"><?= $weare; ?></a><span><?= $bc_sub; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>