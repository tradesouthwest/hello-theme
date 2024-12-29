<?php
/** 
 * Functions for theme Hello-Theme
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 * @since 1.0.1
 *
 */

 /**
 *  Setup function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hello_theme_theme_setup() {
    /**
     * Not used in ClassicPress < 2.0 
     * to output valid HTML5.
     */ /*
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )); 
        
        SO DO NOT INCLUDE HTML5 SUPPORT FOR ClassicPress THEMES! */

    load_theme_textdomain( 'hello-theme', get_template_directory_uri() . '/languages' );
}
add_action('after_setup_theme','hello_theme_theme_setup');