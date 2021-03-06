<?php
/**
 * Template for the Home-Site containing a teaser-image.
 *
 * @author      Local Marketing Inc.
 * @version     1.1.1
 * @since       wpseed 0.2
 *
 */
?>
<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<!-- content » home -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>    
		<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="/event/meltdown-2017-carnaval/">
				<img src="/wp-content/themes/wpseed/dist/images/slides/atown-slide.jpg" alt="Atown">
			</a>
			<div class="carousel-caption first-slide">
			</div>
		</div>

		<div class="item">
			<a href="/community/mentorship/">
				<img src="/wp-content/themes/wpseed/dist/images/slides/mentor-slide.jpg" alt="Small dispute">
			</a>
			<div class="carousel-caption">
			</div>
		</div>

		<div class="item">
			<a href="/sponsorship">
				<img src="/wp-content/themes/wpseed/dist/images/slides/sponsor-slide.jpg" alt="general-corporate-counsel">
			</a>
			<div class="carousel-caption">
			</div>
		</div>
	</div><!-- /end carousel-inner -->

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="callout">
	<div class="container" id="main">
		<div class="row">
			<div class="content home welcome">
				<article>
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h2>ABAC Membership is free. Sign-Up and stay in the know!</h2>
					</div>
					<div class="newsletter-container">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<!-- Begin MailChimp Signup Form -->
							<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
							<style type="text/css">
								#mc_embed_signup{background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
	<form action="//abac-online.us1.list-manage.com/subscribe/post?u=e19a10c6ad85ab81a9de0153f&amp;id=e09f6753f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e19a10c6ad85ab81a9de0153f_e09f6753f2" tabindex="-1" value=""></div>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
		</div>
	</form>
</div>
<!--End mc_embed_signup-->
</div>
</div>
</article>
</div>
</div>
</div>
</div>

<div class="container" id="main">
	<div class="row">
		<div class="content home welcome">
			<article>
				<h3>Atlanta Broadcast and Advertising Club</h3>
				<p><strong>The Atlanta Broadcast and Advertising Club sets out to provide superior networking opportunities in all facets of the media business in Atlanta, provide educational opportunities that offer our members insight from industry experts and give back to the local community through fundraising efforts.</strong></p>
				<p>ABAC was established in the late sixties/early seventies by a local group of broadcast professionals. The founding members sought to provide a professional forum devoted specifically to broadcast concerns, as the Atlanta Ad Club was largely focused on print media in those days. Originally Atlanta Broadcast Executives Club (ABEC), our organization was re-named Atlanta Broadcast Advertising Club in the seventies.</p><br>
				<a href="/membership" class="button" style="margin: 20px; font-size: 18px;">Membership</a> <a href="/sponsorship/sponsor-meltdown/" class="button_alt" style="margin: 20px; font-size: 18px;">Sponsor Meltdown</a>
				<div class="custom-divider"></div>
			</article>
		</div>

		<!--UPCCOMING EVENTS LOOP-->
		<div class="content home upcoming-events">
			<article class="homepage-events">
				<div class="row is-flex">
					<div class="col-xs-12">
						<span class="section-title-events text-center">Browse Upcoming Events</span>
					</div>
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
		</div>

		<!--RECENT POSTS LOOP-->
		<div class="recent-posts-bg">
			<div class="container" id="main">
				<div class="row">
					<article class="content home recent-posts">
						<div class="row">
							<div class="col-xs-12">
								<span class="section-title-blog text-center">Browse Our Latest Blog Posts</span>
							</div>
						</div>
						<?php
						query_posts(array(
							'post_type' => array('post', 'event'),
							'showposts' => 4,
							'category_name'  => 'post'
							) );
							?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="col-md-6 col-xs-12">
									<div class="inner-post-content">
										<div class="post-thumbnail">
											<a href="<?php echo get_permalink(); ?>"><?php
												if ( has_post_thumbnail() ) {  
													the_post_thumbnail();
												}
												?></a>
											</div>
											<div class="post-title">
												<a style="float: none; display: inline; border-bottom: none;" href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
											</div>
											<p class="post-excerpt">
												<?php echo wp_trim_words( get_the_content(), 12 ); ?>
											</p>
											<li>
												<a class="read-more-link" href="<?php echo get_permalink(); ?>">read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											</li>
										</div>
									</div>
								<?php endwhile;?>
							</article>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="instagram-feed-bg">
						<article class="home instagram-feed">
							<?php 
							echo do_shortcode ('[instagram-feed]');
							?>
						</article>
					</div>
				</div>
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
				<script>
					$(function() {
						$('.inner-event-content').matchHeight();
					}); 
				</script>
				<?php get_footer(); ?>