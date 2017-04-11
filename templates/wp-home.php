<?php
/**
 * The template displaying the posts-overview
 *
 * @author      Local Marketing Inc.
 * @version     1.4.1
 * @since       wpseed 0.18
 */

?>
<?php get_header(); ?>
<!-- content » blog home -->
<div class="container" id="main">
  <div class="row">
    <h1 class="col-md-12 page-title">Blog</h1>
    <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
     <article class="page col-md-7" id="post-<?php the_ID(); ?>">
      <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <div class="post-info">
       <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo get_the_date(); ?></span><span class="entry-author">By:&nbsp;<?php echo get_the_author(); ?></span>
     </div>

     <?php if (has_post_thumbnail()) : ?>
      <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
    <?php endif ?>
    <p>
      <?php
      echo wp_trim_words( get_the_content(), 32, '...' );
      ?></p>
      <a class="read-more-link button" href="<?php echo get_permalink(); ?>">Read More&nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </article>
    <?php get_sidebar(); ?>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
</div>
</div>
<?php get_footer(); ?>