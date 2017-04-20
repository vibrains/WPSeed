<?php
/**
 * Photo View Single Event
 * This file contains one event in the photo view
 *LMI Comment: THIS GENERATES THE EVENTS PAGE WITH ALL UPCOMING EVENTS /events
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/pro/photo/single_event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php

global $post;
?>
		<div class="tribe-events-photo-event-wrap">
			<div class="event-thumbnail">
				<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
					<?php the_post_thumbnail( 'medium' ); ?></a>
				</div>

				<div class="tribe-events-event-details tribe-clearfix">
					<!-- Event Title -->
					<?php do_action( 'tribe_events_before_the_event_title' ); ?>
					<h2 class="tribe-events-list-event-title">
						<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h2>
					<?php do_action( 'tribe_events_after_the_event_title' ); ?>

					<!-- Event Meta -->
					<?php do_action( 'tribe_events_before_the_meta' ); ?>
					<div class="tribe-events-event-meta">
						<div class="tribe-event-schedule-details">
							<?php if ( ! empty( $post->distance ) ) : ?>
								<strong>[<?php echo tribe_get_distance_with_unit( $post->distance ); ?>]</strong>
							<?php endif; ?>
							<?php echo tribe_events_event_schedule_details(); ?>
						</div>
					</div><!-- .tribe-events-event-meta -->
					<?php do_action( 'tribe_events_after_the_meta' ); ?>

					<!-- Event Content -->
					<?php do_action( 'tribe_events_before_the_content' ); ?>

					<div class="tribe-events-list-event-description tribe-events-content">
						<p>
							<?php
							echo wp_trim_words( get_the_content(), 32, '...' );
							?></p>

							<?php //echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
							<a class="button" href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'View Event', 'the-events-calendar' ) ?> &raquo;</a>
						</div><!-- .tribe-events-list-event-description -->
						<?php do_action( 'tribe_events_after_the_content' ) ?>
					</div><!-- /.tribe-events-event-details -->
				</div><!-- /.tribe-events-photo-event-wrap -->