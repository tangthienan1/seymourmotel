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
    <!-- header -->
    <?php wp_head(); ?>
    <!-- custom css -->
    <link rel="shortcut icon" href="http://seymourmotel.com/wp-content/uploads/2016/05/favicon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?t=<?php echo time() ?>" />
    <link rel="stylesheet" type="text/css" href="https://useross.com/433.css" />
    <!-- J Query -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.css" integrity="sha512-HGWrJz+Lr07phD0DNoLsSVwn3przno/eSLf1cGOrLzr6c7NUZROZJPhQdSPmLHNbsO0HP2UfUnpKTMiVxonEHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.js" integrity="sha512-taR40V17AK2+3RjqzCYkczb0/hTHuQCid0kBs0I2g6DqkFjkTcAIpsa+4PzGuWcRica2AOZQmz4pNPj4InFR8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css" />
    <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.3.18/dist/js/splide-extension-grid.min.js"></script>
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
    <?php get_template_part('inc/navigation'); ?>