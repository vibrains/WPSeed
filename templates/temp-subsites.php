<?php
/**
 * Template for Sites with Sub-Sites.
 *
 * @author      Local Marketing Inc.
 * @version     1.4.1
 * @since       WPSeed 0.2
 *
 */
?>
<?php /* Template Name: Subsites */ ?>

<?php get_header(); ?>

<!-- content » subsites -->

<div class="content subsites">

  <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
    <div class="summary">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?><p>
      </div>
    <?php endwhile; endif; ?>

    <?php // Child Pages
    $args = [
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
    ];
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <article>
        <h2><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
          <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
        <?php endif ?>
        <p><?php the_content(); ?></p>
      </article>

    <?php endwhile; ?>
  <?php endif; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
