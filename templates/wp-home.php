<?php
/**
 * The template displaying the posts-overview
 *
 * @author      Local Marketing Inc.
 * @version     1.4.1
 * @since       WPSeed 0.18
 */

?>

<?php get_header(); ?>

<!-- content » blog home -->

<div class="content blog">

  <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <div class="postinfo"><?php wpseed_get_the_date_german(); ?></div>
      <?php if (has_post_thumbnail()) : ?>
        <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
      <?php endif ?>
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>