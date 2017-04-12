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

<?php /*
      <div class="search">
        <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
        <form class="search__form" action="">
          <input class="search__input" name="search" type="search" placeholder="Search..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
          <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
        <div class="search__related">
          <div class="search__suggestion">
            <h3>Recent News</h3>
            <ul class="latest-posts">
              <?php
              $args = array( 'numberposts' => '3' );
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
              }
              wp_reset_query();
              ?>
            </ul>
          </div>
          <div class="search__suggestion">
            <h3>Is It This?</h3>
            <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
          </div>
          <div class="search__suggestion">
            <h3>Needle, Where Art Thou?</h3>
            <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
          </div>
        </div>
      </div><!-- /search -->

<!--       <button class="hamburger--squeeze" id="hamburger" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button> -->

       */?>


       <nav class="navbar navbar-default" role="navigation">
        <div class="social-bar">
          <div class="container" id="main">
            <div class="row">

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
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>

              </div>
            </div>
          </div>
          <div class="container" id="main">
            <div class="row">
              <!-- Brand and toggle get grouped for better mobile display --> 
              <div class="navbar-header"> 
<!--                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                  <span class="sr-only">Toggle navigation</span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                </button>  -->
                <a class="logo-link" href="<?php echo get_home_url(); ?>">
                  <div class="logo"></div>
                </a>

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
<!--                 <div class="search-wrap">
                  <button id="btn-search" class="btn btn--search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
                </div> -->
                <!--               </div> navbar-collapse closing div -->
              </div>
            </div>
        </nav><!-- .main -->