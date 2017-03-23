<?php
/**
 * Template for ACF flexible elements
 *
 * @author      Local Marketing Inc.
 * @version     1.0.1
 * @since       WPSeed 0.10.0
 *
 */
?>
<?php /* Template Name: Elements */ ?>

<?php get_header(); ?>

<!-- content » elements -->

<div class="content elements">

	<?php if (have_posts()): while (have_posts()): the_post() ?>

		<?php elements_teaser() ?>

		<?php if (get_the_content() != ''): ?>
			<section class="text intro">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</section>
		<?php endif; ?>

		<?php elements() ?>

	<?php endwhile; endif ?>

</div>

<?php get_footer() ?>