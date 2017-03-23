<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.2.1
 * @since       WPSeed 0.1
 */
?>

<?php get_header(); ?>

<!-- content » page -->

<div class="content page">

	<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('medium'); ?>
			<?php the_content(); ?>
		</article>
	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>