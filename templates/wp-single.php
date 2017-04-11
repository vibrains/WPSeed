<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @author      Local Marketing Inc.
 * @version     1.2.3
 * @since       WPegg 0.18
 */
?>

<?php get_header(); ?>
<!-- content » Single Post -->
<div class="content post">
  <div class="container" id="main">
    <div class="row">
      <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
        <article>
          <div class="col-md-7">
            <h2><?php the_title(); ?></h2>

            <?php if (has_post_thumbnail()) : ?>
              <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
            <?php endif ?>
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; endif; ?>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>