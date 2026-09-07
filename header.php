<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main" tag.
 *
 * @package hello theme
 * @since   1.0
 */

?><!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" aria-label="first content" 
        href="#sitecontent">
        <?php esc_html_e( 'Skip to content', 'hello-theme' ); ?>
    </a>
    
        <!-- nav or top section can go here -->
        <nav class="page-nav-wrapper" aria-label="Primary" style="[for toggle]">
            <div id="page_nav" class="nav-wrapper">

            <details><summary style="padding:1.67em;">|||</summary>
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary-menu',
                    'depth'          => 3,
                    'container'     => 'div',
                    'menu_class'   => 'page-nav',
                    'fallback_cb' => 'wp_page_menu',
                )
            ); ?>
                </details>
            </div>
        </nav>
        <hr><!-- hr just for test -->