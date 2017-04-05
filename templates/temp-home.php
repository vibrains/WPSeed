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
<div id="main-content">
<!-- 	<header class="nav-animation-element">
		<svg viewBox="0 0 1226 340" id="back-rainbow" preserveAspectRatio="none">
			<defs>
				<linearGradient x1="100%" y1="0%" x2="0%" y2="15%" id="back-rainbow-gradient">
					<stop stop-color="#d7d88d" offset="12%"></stop>
					<stop stop-color="#dfcc97" offset="40%"></stop>
					<stop stop-color="#fff39f" offset="100%"></stop>
				</linearGradient>
			</defs>
			<path d="M1074 0C673.94.2 303.56 126 0 340h1226V6c-50.1-3.72-100.95-5.8-152-6z" fill="url(#back-rainbow-gradient)"></path>
		</svg>

		<svg viewBox="120 0 200 350" id="front-blue-rainbow" preserveAspectRatio="none">
			<defs>
				<linearGradient x1="100%" y1="0%" x2="0%" y2="25%" id="front-blue-gradient">
					<stop stop-color="#103e5f" offset="0%"></stop>
					<stop stop-color="#4889c9" offset="50%"></stop>
					<stop stop-color="#7aa4cd" offset="100%"></stop>
				</linearGradient>
			</defs>
			<path d="M0 475h1031V0C630.46 33.34 270 208.52 0 475z" fill="url(#front-blue-gradient)" fill-opacity="0.65"></path>
		</svg>

 		<svg viewBox="0 0 1031 475" id="front-rainbow" preserveAspectRatio="none">
			<defs>
				<linearGradient x1="100%" y1="0%" x2="0%" y2="25%" id="front-rainbow-gradient">
					<stop stop-color="#a7d700" offset="0%"></stop>
					<stop stop-color="#91d75d" offset="50%"></stop>
					<stop stop-color="#FFB367" offset="100%"></stop>
				</linearGradient>
			</defs>
			<path d="M0 475h1031V0C630.46 33.34 270 208.52 0 475z" fill="url(#front-rainbow-gradient)" fill-opacity="0.65"></path>
		</svg>
	
		<svg viewBox="0 0 1280 110" preserveAspectRatio="none" id="header-curve-shadow">
			<path d="M1280 3.9V110H0C194 71.33 662-19.9 1280 3.9z"></path>
		</svg>

		<svg viewBox="0 0 1280 110" preserveAspectRatio="none" id="header-curve">
			<path d="M1280 3.9V110H0C194 71.33 662-19.9 1280 3.9z" fill="#fff"></path>
		</svg>
	</header> -->
</div>

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="8000" id="bs-carousel">
	<!-- Overlay -->

	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
		<li data-target="#bs-carousel" data-slide-to="1"></li>
		<li data-target="#bs-carousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item slides active">
			<div class="overlay"></div>
			<div class="slide-1"></div>
			<div class="hero">
				<hgroup>
					<h1>Atlanta Broadcast Advertising Club</h1>        
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus reprehenderit natus.</h3>
				</hgroup>
				<button class="btn btn-hero btn-lg" role="button">See all features</button>
			</div>
		</div>
		<div class="item slides">
			<div class="overlay"></div>
			<div class="slide-2"></div>
			<div class="hero">        
				<hgroup>
					<h1>Atlanta Broadcast Advertising Club</h1>        
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus reprehenderit natus.</h3>
				</hgroup>       
				<button class="btn btn-hero btn-lg" role="button">See all features</button>
			</div>
		</div>
		<div class="item slides">
			<div class="overlay"></div>
			<div class="slide-3"></div>
			<div class="hero">        
				<hgroup>
					<h1>Atlanta Broadcast Advertising Club</h1>        
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus reprehenderit natus.</h3>
				</hgroup>
				<button class="btn btn-hero btn-lg" role="button">See all features</button>
			</div>
		</div>
	</div> 
</div>


<!-- <div class="teaser" style="background-image: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)">
	<div class="content home">
		<article>
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex adipisci ea minus asperiores error esse recusandae ipsa quam vero, tempore quasi vel eveniet optio excepturi quas dolorum saepe cupiditate aspernatur!</p>
		</article>
	</div>
</div>
-->
<div class="teaser callout">
	<article>
		<div class="row">
			<div class="col-md-9 col-xs-12">
				<h2>ABAC Membership is free. Sign-Up &amp; and stay in the know!</h2>
			</div>
			<div class="newsletter-container">
				<div class="col-md-3 col-xs-12">
					<input type="text" placeholder="Email">
				</div>
			</div>
		</div>
	</article>
</div>

<div class="container" id="main">
	<div class="row">

		<div class="content home welcome">
			<article>
				<h3>Atlanta Broadcast and Advertising Club</h3>
				<p><strong>The Atlanta Broadcast and Advertising Club sets out to provide superior networking opportunities in all facets of the media business in Atlanta, provide educational opportunities that offer our members insight from industry experts and give back to the local community through fundraising efforts.</strong></p>
				<p>ABAC was established in the late sixties/early seventies by a local group of broadcast professionals. The founding members sought to provide a professional forum devoted specifically to broadcast concerns, as the Atlanta Ad Club was largely focused on print media in those days. Originally Atlanta Broadcast Executives Club (ABEC), our organization was re-named Atlanta Broadcast Advertising Club in the seventies.</p><br>
				<a href="http://www.google.com" class="button">Button Number One</a> <a href="http://www.google.com" class="button_alt">Button Number Two</a>
				<div class="divider"></div>
			</article>
		</div>

		<!--UPCCOMING EVENTS LOOP-->
		<div class="content home upcoming-events">
			<article class="homepage-events">
				<div class="row is-flex">
					<div class="col-xs-12">
						<span class="section-title text-center">Browse Upcoming Events</span>
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
								<span class="section-title text-center">Browse Our Latest Blog Posts</span>
							</div>
						</div>
						<?php
						query_posts(array(
							'post_type' => array('post', 'event'),
							'showposts' => 4
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
												<?php echo wp_trim_words( get_the_content(), 15 ); ?>
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

				<div class="container" id="main">
					<div class="row">
						<div class="instagram-feed-bg">
							<article class="content home instagram-feed">
								<?php 
								echo do_shortcode ('[instagram-feed]');
								?>
							</article>
						</div>
					</div>
				</div>

<!-- 				<div class="flexbox-2-container">
					<div class="flexbox-container">
						<div class="flexbox">
							<div class="flexbox-item flexbox-2 first-item">
								<img src='/wp-content/themes/wpseed/assets/images/cta-icon.png'/>
								<h2>Lorem ipsum dolor sit amet</h2>
								<p class="flexbox-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quos vitae, aliquid consectetur asperiores nihil tempore excepturi optio, pariatur atque iusto, corporis esse placeat. Nemo praesentium maxime laboriosam labore natus!</p>
							</div>
							<div class="flexbox-item flexbox-2 last-item">
								<img src='/wp-content/themes/wpseed/assets/images/integrations-icon.png'/>
								<h2>Lorem ipsum dolor sit amet</h2>
								<p class="flexbox-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nisi, rem id amet! Dolor eligendi neque, iure quia maiores aspernatur iste quod eius molestias! Eum obcaecati asperiores nisi velit. Aut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam impedit enim praesentium, minus harum vitae sint modi maiores. Veniam unde amet perspiciatis excepturi praesentium quaerat deserunt dicta, officiis necessitatibus sequi.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="flexbox-container">
					<div class="flexbox">
						<div class="flexbox-item first-item">
							<img src='/wp-content/themes/wpseed/assets/images/cta-icon.png'/>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="flexbox-item">
							<img src='/wp-content/themes/wpseed/assets/images/integrations-icon.png'/>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="flexbox-item">
							<img src='/wp-content/themes/wpseed/assets/images/pricing.png'/>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
					</div>
				</div> -->
				<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
				<script>
					$(function() {
						$('.inner-event-content').matchHeight();
					}); 
				</script>
				<?php get_footer(); ?>