<div class="suggest-events">
	<h2 style="margin-bottom: 5px;">Need Help Finding an Event?</h2>
	<h3 style="margin-top: 0;">Here are Upcoming Events!</h3>
	<div class="content home upcoming-events">
		<article class="homepage-events">
			<div class="row is-flex">
				<?php
				$events = tribe_get_events( array(
					'eventDisplay' => 'upcoming',
					'posts_per_page' => 3,
					) );

				foreach ( $events as $post ) {
					setup_postdata( $post ); ?>
					<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> col-md-4 col-xs-12">
						<div class="inner-event-content">
							<div class="event-thumbnail">
								<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
									<?php the_post_thumbnail( 'medium' ); ?></a>
								</div>

								<!-- Event Title -->
								<div class="event-text">	
									<h2 class="tribe-events-list-event-title homepage-event-title">
										<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><?php echo tribe_get_start_date ( $event_id, $display_time = false); ?><span>&nbsp;|&nbsp;</span>
											<?php the_title() ?>
										</a>
									</h2>
									<?php do_action( 'tribe_events_after_the_event_title' ) ?>

									<?php //tribe_get_template_part( 'list/single', 'event' ) ?>

									<div class="tribe-events-list-event-description tribe-events-content">
										<p>
											<?php
											echo wp_trim_words( get_the_content(), 24, '...' );
											?></p>

											<?php //echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
											<a class="button" href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'View Event', 'the-events-calendar' ) ?> &raquo;</a>
										</div><!-- .tribe-events-list-event-description -->
									</div>
								</div>
								<?php echo "</div>";
							} ?>
						</div>
					</div>
				</article>
			</div>
		</div>