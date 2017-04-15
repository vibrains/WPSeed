<?php 
/*
Template Name: Cart
*/
get_header(); ?>

<!-- content » page -->
<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="page-holder container" id="main">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="col-md-12 page-title"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_title(); ?></h1>
			<article class="page col-md-12" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>

					<?php 
					if ( WC()->cart->get_cart_contents_count() == 0 ) { ?>
					<h2 style="margin-bottom: 5px;">Need Help Finding an Event?</h2>
					<h3 style="margin-top: 0; margin-bottom: 20px;">Here are Some Upcoming Events!</h3>
					<!--UPCCOMING EVENTS LOOP-->
					<div class="content home upcoming-events">
						<article class="homepage-events cart-events">
							<div class="row is-flex">
								<?php
								$events = tribe_get_events( array(
									'eventDisplay' => 'upcoming',
									'posts_per_page' => 4,
									) );

								foreach ( $events as $post ) {
									setup_postdata( $post ); ?>
									<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> col-md-3 col-xs-12">
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
														<p style="font-size: 14px; line-height: 22px;">
															<?php
															echo wp_trim_words( get_the_content(), 15, '...' );
															?></p>

															<?php //echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
															<a style="position:absolute;margin-left: 35px;bottom: 20px;" class="button" href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'View Event', 'the-events-calendar' ) ?> &raquo;</a>
														</div><!-- .tribe-events-list-event-description -->
													</div>
												</div>
												<?php echo "</div>";
											} ?>
										</div>
									</div>
								</article>
							</div>
							<?php
						}
						?>
					</div>
				</article>
			<?php endwhile; else: ?>
			<article class="page col-md-7 not-found">
				<div class="entry">
					<p class="lead"><?php _e('Sorry, this page does not exist. Try searching for one.'); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
		<?php endif; ?>
		<?php //get_sidebar(); ?>
	</div> <!-- .row -->
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script>
	$(function() {
		$('.inner-event-content').matchHeight();
	}); 
</script>
<?php get_footer(); ?>