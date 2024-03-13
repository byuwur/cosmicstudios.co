<?php
require_once "./_var.php";
//require_once $TO_HOME . "_functions.php";
//require_once $TO_HOME . "_config.php";
//require_once $TO_HOME . "_routes.php";
//require_once $TO_HOME . "_router.php";
//require_once $TO_HOME . "_auth.php";
require_once $TO_HOME . "common.php";
// --- PHP ---
$bc = [
    ["bc_title" => "COSMIC Studios", "bc_sub" => ""],
    ["bc_title" => $home_title, "bc_sub" => $home],
    ["bc_title" => $about_title, "bc_sub" => $about],
    ["bc_title" => $services_title, "bc_sub" => $services],
    ["bc_title" => $portfolio_title, "bc_sub" => $portfolio],
    ["bc_title" => $contact_title, "bc_sub" => $contact],
];
?>
<div class="breadcrumb-option spad video-foreground">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $bc[$title_index]["bc_title"] ?? "COSMIC Studios"; ?></h2>
                    <div class="breadcrumb__links">
                        <a href="javascript:;"><?= $weare; ?></a><span><?= $bc[$title_index]["bc_sub"] ?? ""; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>