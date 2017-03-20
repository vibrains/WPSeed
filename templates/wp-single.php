<?
/**
 * The template for displaying all single posts and attachments
 *
 * @author      Flurin Dürst
 * @version     1.2.3
 * @since       WPegg 0.18
 */
?>

<? get_header(); ?>

<!-- content » single post -->

<div class="content post">
  <? if (have_posts() ) : while (have_posts()) : the_post(); ?>
  <article>
    <div class="col-xs-8">
      <h2><? the_title(); ?></h2>
      <div class="postinfo"><?= wpseed_get_the_date_german(); ?></div>
      <? if (has_post_thumbnail()) : ?>
      <div class="thumbnail" style="background-image: url(<? the_post_thumbnail_url() ?>)"></div>
    <? endif ?>
    <? the_content(); ?>
  </div>
</article>
<? endwhile; endif; ?>

<div class="col-xs-3 col-xs-offset-1">
  <?php get_sidebar(); ?>
</div>
</div>
<? get_footer(); ?>