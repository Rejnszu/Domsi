<!Doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $args["metaDescription"] ?>">
    <meta name="keywords" content="">
    <link delay-1 rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <link delay-1 rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $args["ogTitle"] ?>">
    <meta property="og:url" content="<?php echo $args["ogUrl"] ?>">
    <meta property="og:site_name" content="<?php echo $args["ogSite_name"] ?>">
    <meta name="google-site-verification" content="" />
    <title><?php echo $args["title"] ?>Domsi</title>

    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="container-fluid navigation m-0 p-0 ">
        <div class="row navigation-row m-0 p-0 ">
            <div class="openbtn-wrapper">
                <span class=""></span>
                <span class=""></span>
                <span class=""></span>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <div class="col-sm-12 col-md-6 logo-img "> <a class="d-flex justify-content-center" href="<?php echo get_home_url() ?>"><img src=<?php echo get_template_directory_uri() . "/assets/DOMSI_logo.png"; ?> alt="Domsi logo"></a></div>
            </div>
            <div class="col-sm-12 navigation-mobile">

                <a href="<?php echo get_home_url() ?>" class="nav-link active">home</a>
                <a href="<?php echo get_home_url() ?>/standard" class="nav-link">standard</a>
                <a href="<?php echo get_home_url() ?>/doswiadczenie" class="nav-link">doświadczenie</a>
                <a href="<?php echo get_home_url() ?>/galeria" class="nav-link">galeria</a>
                <a href="<?php echo get_home_url() ?>/domy" class="nav-link">dostępne domy</a>
                <a href="<?php echo get_home_url() ?>/grunt" class="nav-link">kupimy grunt</a>
                <a href="<?php echo get_home_url() ?>/kontakt" class="nav-link">kontakt</a>
            </div>



            <div class="col-sm-12 navigation-desktop">
                <a href="<?php echo get_home_url() ?>" class="nav-link active">home</a>
                <a href="<?php echo get_home_url() ?>/standard" class="nav-link">standard</a>
                <a href="<?php echo get_home_url() ?>/doswiadczenie" class="nav-link">doświadczenie</a>
                <a href="<?php echo get_home_url() ?>/galeria" class="nav-link">galeria</a>
                <a href="<?php echo get_home_url() ?>/domy" class="nav-link">dostępne domy</a>
                <a href="<?php echo get_home_url() ?>/grunt" class="nav-link">kupimy grunt</a>
                <a href="<?php echo get_home_url() ?>/kontakt" class="nav-link">kontakt</a>
            </div>
        </div>
    </div>