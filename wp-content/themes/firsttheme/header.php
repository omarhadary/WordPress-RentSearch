<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(array()); ?>>

    <div class="container">

        <!--site-header-->
        <header class="site-header">
            <!--<p>First header</p>-->
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        </header><!--/site-header-->