<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pluga_Cuca
 */

?>
    <!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="/wp-content/themes/pluga_cuca/images/favicon.ico">

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="<?= get_template_directory_uri() . '/images/logo.png'; ?>" width="178" height="57" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">AULAS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FALE CONOSCO</a>
                    </li>
                </ul>


                Olá, João da Silva
            </div>
        </div>
    </nav>

<!--    <a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'pluga_cuca' ); ?><!--</a>-->


<?php

/*
<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
        endif;
        $pluga_cuca_description = get_bloginfo( 'description', 'display' );
        if ( $pluga_cuca_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $pluga_cuca_description; ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pluga_cuca' ); ?></button>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->

<div id="content" class="site-content">
    */

?>