<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Seymour Motel
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1. maximum-scale=1">

    <!-- custom css -->
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="http://seymourmotel.com/wp-content/uploads/2016/05/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?t=<?php echo time() ?>" />
    <link rel="stylesheet" type="text/css" href="https://useross.com/433.css" />
    <!-- J Query -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Animation -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css" />
    <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide.min.css" />
</head>

<body id="home">
    <div class="body-inactive"></div>
    <div class="clear"></div>
    <div class="offcanvas">
        <div class="nano">
            <div class="nano-content">
                <div class="offcanvas-content">
                </div>
            </div>
        </div>
    </div>
    <header class="header-mbl hidden-lg clearfix fixed">
        <div class="mytable">
            <div class="logo table-cell va-middle">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php bloginfo("template_url") ?>/icons/seymour-motel-logo.png" alt="Seymour Motel - Seymour Accommodation - Best Seymour Motel">
                </a>
            </div>
            <div class="toggle table-cell va-middle text-right">
                <a href="javascript:;" class="pull-right">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </header>
    <div id="headerMblHeight"></div>
    <?php get_template_part('inc/navigation'); ?>