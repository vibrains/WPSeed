<?php
/**
 * Main Functions File - used for:
 * • including other function-files
 * • WP-Support & WP-Setup
 * • general functions like replacements, translations
 *
 * @author      Local Marketing Inc.
 * @version     1.3
 * @since       WPSeed 0.1
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
require_once('wp-bootstrap-navwalker.php');
?>