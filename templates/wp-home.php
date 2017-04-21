<?php
/**
 * The template displaying the posts-overview
 *
 * @author      Local Marketing Inc.
 * @version     1.4.1
 * @since       wpseed 0.18
 */

?>
<?php /* Template Name: Blog Roll */ ?>
<?php get_header(); ?>
<!-- content » blog home -->
<div class="container page-holder" id="main">
  <h1 class="col-md-12 page-title">Blog</h1>
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div id="primary blog" class="content-area col-xs-12 col-sm-7">
        <article class="single-post-container">
          <?php
          query_posts(array(
            'post_type' => array('post'),
            'showposts' => 10
            ) );
            ?>
            <?php while (have_posts()) : the_post(); ?>

              <div class="single-post-holder"> 
                <div class="post-title">
                  <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
                </div>
                <p class="post-date">
                  <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php the_time('F jS, Y') ?></p>

                  <div class="post-thumbnail">
                    <a href="<?php echo get_permalink(); ?>"><?php
                      if ( has_post_thumbnail() ) {  
                        the_post_thumbnail();
                      }
                      ?></a>
                    </div>
                    <?php
                    the_excerpt(); ?>
                    <li class="blogroll-button">
                      <a class="button" href="<?php echo get_permalink(); ?>">read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                  </div>
                <?php endwhile;?>
              </article>
            </div>
          </article>
          <?php get_sidebar(); ?>
        </div>
      </div>
      <?php wp_reset_query(); ?>
      <?php get_footer(); ?>