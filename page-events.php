<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.2.1
 * @since       WPSeed 0.1
 */
?>
<?php /* Template Name: Events Landing */ ?>
<?php get_header(); ?>

<!-- content » page -->
<div class="events-page teaser" style="background-image: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)">
	<div class="content home">
		<article>
			<div class="tribe-event-schedule-details">
				<?php if ( ! empty( $post->distance ) ) : ?>
					<strong>[<?php echo tribe_get_distance_with_unit( $post->distance ); ?>]</strong>
				<?php endif; ?>
				<?php echo tribe_events_event_schedule_details(); ?>
			</div>
			<h1><?php the_title(); ?></h1>
			<p>
				<?php
				echo wp_trim_words( get_the_content(), 10, '...' );
				?></p>
			</article>
		</div>
	</div>

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