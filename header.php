<?
/**
 * @author      Flurin Dürst
 * @version     1.3
 * @since       WPSeed 0.1
 */
?>
<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1, user-scalable=no">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!--===== OPEN-GRAPH TAGS =====-->
  <meta property="og:title" content="<? bloginfo('name'); ?>">
  <meta property="og:description" content="<? bloginfo('description'); ?>">
  <meta property="og:url" content="<? bloginfo('url'); ?>">
  <meta property="og:image" content="<? bloginfo('template_url') ?>/dist/images/ogimg.jpg">
  <meta property="og:image:width" content="">
  <meta property="og:image:height" content="">
        <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]--><script>document.documentElement.className = 'js';</script>
      <? wp_head(); ?>
    </head>
    <body>
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
      <div class="search">
        <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
        <form class="search__form" action="">
          <input class="search__input" name="search" type="search" placeholder="menu" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
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
      <div class="top">
        <a href="<?= get_bloginfo('url'); ?>">
          <div class="logo"></div>
        </a>
        <button class="hamburger--squeeze" id="hamburger" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <nav id="nav_main" class="hiddenmobile">
          <ul>
            <? $frontPageID = get_option('page_on_front') ?>
            <? wp_list_pages([
              'depth' => 1,
              'sort_column' => 'menu_order',
              'title_li' => '',
              'exclude' => $frontPageID
              ]);
              ?>
            </ul>
          </nav>
          <div class="search-wrap">
            <button id="btn-search" class="btn btn--search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
          </div>
        </div>
