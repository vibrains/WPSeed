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
  <div class="row">
    <h1 class="col-md-12 page-title">Blog</h1>

    <?php
    $args=array(
     'post_type' => 'post',
     'post_status' => 'publish',
     'posts_per_page' => 18
     );

    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {

      $i = 0;
      while ($my_query->have_posts()) : $my_query->the_post();
  // modified to work with 3 columns
  // output an open <div>
      if($i % 3 == 0) { ?> 

      <div class="row">

        <?php
      }
      ?>

      <div class="col-md-7">
        <div class="my-inner">

          <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <div class="post-info">
           <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo get_the_date(); ?></span><span class="entry-author"><?php //echo get_the_author(); ?></span>
         </div>

         <?php if (has_post_thumbnail()) : ?>
          <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
        <?php endif ?>
        <p>
          <?php
          echo wp_trim_words( get_the_content(), 32, '...' );
          ?></p>
          <a class="read-more-link button" href="<?php echo get_permalink(); ?>">Read More&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

        </div>
      </div>  
      <?php $i++; 
      if($i != 0 && $i % 3 == 0) { ?>
    </div><!--/.row-->
    <div class="clearfix"></div>

    <?php
  } ?>

  <?php  
  endwhile;
}
wp_reset_query();
?>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>