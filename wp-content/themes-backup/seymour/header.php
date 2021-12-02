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
        <?php wp_head();?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
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
                    <a href="<?php echo home_url('/');?>">
                        <img src="<?php bloginfo('template_directory');?>/icons/seymour-motel-logo.png" alt="Seymour Motel Logo">
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
       <?php get_template_part('inc/navigation');?>