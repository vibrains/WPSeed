<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.2.1
 * @since       wpseed 0.1
 */
?>
<?php /* Template Name: Events Landing */ ?>
<?php get_header(); ?>

<!-- content » page -->
<div class="events-page teaser" style="background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)">
	<div class="content home">
		<div class="container" id="main">
			<div class="row">
				<article>
					<div class="tribe-event-schedule-details">
						<i class="latest-upcoming-event"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Latest Upcoming Event</i>
						<?php if ( ! empty( $post->distance ) ) : ?>
							<strong>[<?php echo tribe_get_distance_with_unit( $post->distance ); ?>]</strong>
						<?php endif; ?>
						<?php echo tribe_events_event_schedule_details(); ?>
					</div>
					<h1><?php the_title(); ?></h1>
					<p class="latest-event-header-description">
						<?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
						<a class="read-more-link button" href="<?php echo get_permalink(); ?>">read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						<p class="tribe-events-back">
							<a class="button" href="<?php echo esc_url( tribe_get_events_link() ); ?>">&laquo; All Events</a>
						</p>
					</article>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="main">
		<div class="row">
			<div class="content page">
				<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
					<article>
						<h1><?php the_title(); ?></h1>
						<?php the_post_thumbnail('medium'); ?>
						<?php the_content(); ?>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>