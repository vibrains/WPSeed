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
		'name' => 'General Sidebar',
		'id' => 'general-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
		));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Events Sidebar',
		'id' => 'events-sidebar',
		'description' => 'Appears as the sidebar on events',
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


	/* ABAC Login Logo and Link */
	function my_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/login-logo.png);
			height:61px;
			width:320px;
			background-size: 320px 61px;
			background-repeat: no-repeat;
			padding-bottom: 20px;
		}
	</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );

	function mb_login_url() {  return home_url(); }
	add_filter( 'login_headerurl', 'mb_login_url' );

	function mb_login_title() { return get_option( 'blogname' ); }
	add_filter( 'login_headertitle', 'mb_login_title' );



/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {

	ob_start();
	$count = WC()->cart->cart_contents_count;
	?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
	if ( $count > 0 ) {
		?>
		<span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
		<?php            
	}
	?></a><?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );