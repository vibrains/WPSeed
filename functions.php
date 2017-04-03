<?php
/**
 * Main Functions File - used for:
 * • including other function-files
 * • WP-Support & WP-Setup
 * • general functions like replacements, translations
 *
 * @author      Local Marketing Inc.
 * @version     1.3
 * @since       wpseed 0.1
 *
 */

/* ACCESS CONTROL
/===================================================== */
require('functions/functions-access.php');


/* DEVELOPER TOOLKIT
/===================================================== */
require('functions/functions-dev.php');


/* WP SETUP & SETTINGS
/===================================================== */
require('functions/functions-wpsetup.php');


/* BACKEND
/===================================================== */
require('functions/functions-backend.php');


/* ELEMENTS
/===================================================== */
  // Elements for ACF Flexible Content
  // » https://www.advancedcustomfields.com/resources/flexible-content/
require('functions/functions-elements.php');

?>

<?php
/* MENUS
/===================================================== */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {  
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	} endif;
	?>

<?php // Register custom navigation walker
require_once('wp-bootstrap-navwalker.php'); ?>


<?php // Register Sidebars
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Homepage Sidebar',
		'id' => 'homepage-sidebar',
		'description' => 'Appears as the sidebar on the custom homepage',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
}


/* BOOTSTRAP MENU Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {  
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	} endif;