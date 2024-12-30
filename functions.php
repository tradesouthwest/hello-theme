<?php
/** 
 * Functions for theme Hello-Theme
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 * @package    WordPress
 * @package    ClassicPress
 * @subpackage Hello Theme
 * @since      1.0.1
 *
 */
 if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/** 
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own hello_theme_child_setup() function to override in a child theme.
 * 
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @since Hello Theme 1.0
 */
if ( ! function_exists( 'hello_theme_theme_setup' ) ) :

function hello_theme_theme_setup() {
    /**
     * Not used in ClassicPress < 2.0 
     * to output valid HTML5.
     */ 
    if ( function_exists( 'is_classicpress' ) && version_compare( '2.0', $cp_version, '<' ) ) {
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )); 
    }
           
    /**
	* Make theme available for translation.
	* Translations can be added to the /languages/ directory.
	*/
    load_theme_textdomain( 'hello-theme', get_template_directory_uri() . '/languages' );
}
endif

add_action('after_setup_theme','hello_theme_theme_setup');

/**
 * `wp_body_open` Tag may or may not be needed but accommodate for it.
 * 
 * @since 1.0
 */
if ( ! function_exists( 'wp_body_open' ) ) {
    /**
    * Add backwards compatibility support for wp_body_open function.
    */
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/** 
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since 1.0
 */
function hello_theme_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters( 'hello_theme_content_width', 680 );
}

add_action( 'after_setup_theme',        'hello_theme_theme_content_width', 0 ); 