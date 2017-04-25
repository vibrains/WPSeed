<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.3
 * @since       wpseed 0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, shrink-to-fit=no" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--===== OPEN-GRAPH TAGS =====-->
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php bloginfo('url'); ?>">
  <meta property="og:image" content="<?php bloginfo('template_url') ?>/dist/images/ogimg.jpg">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
  
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#103e5f">
  <meta name="theme-color" content="#ffffff">

  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-98117281-1', 'auto');
   ga('send', 'pageview');

 </script>
        <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]--><script>document.documentElement.className = 'js';</script>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <svg class="hidden">
        <defs>
          <symbol id="icon-search" viewBox="0 0 24 24">
            <title>search</title>
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
          </symbol>
          <symbol id="icon-cross" viewBox="0 0 24 24">
            <title>cross</title>
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
          </symbol>
        </defs>
      </svg>

      <div class="nav-wrap">    
       <nav class="navbar navbar-default" role="navigation">
        <div class="social-bar">
          <div class="container" id="main">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <a class="logo-link" href="<?php echo get_home_url(); ?>">
                  <div class="logo"></div>
                </a>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 no-horizontal-padding header-social-links-holder">
                <div class="header-social-links">

                  <div class="cart-header-icon">
                    <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                      $count = WC()->cart->cart_contents_count;
                      ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
                      if ( $count > 0 ) {
                        ?>
                        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                        <?php
                      }
                      ?></a>
                      <?php } ?>
                    </div>
                    <ul>
                      <li><a href="https://twitter.com/ABACATL" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.facebook.com/ABACATL" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.instagram.com/abacatl" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.linkedin.com/groups/1854373/profile" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container" id="main">
            <div class="row">
              <!-- Brand and toggle get grouped for better mobile display --> 
              <div class="navbar-header">
                <?php echo do_shortcode('[responsive_menu]'); ?>
              </div> 
              <!-- Collect the nav links, forms, and other content for toggling --> 
              <!-- <div class="collapse navbar-collapse navbar-ex1-collapse"> -->
              <?php /* Primary navigation */
              wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar',
  //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
              );
              ?>
            </div>
          </div>
        </nav>
      </div>