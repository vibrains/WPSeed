<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.2.1
 * @since       wpseed 0.1
 */
?>
<?php /* Template Name: Private Members Page  */ ?>
<?php get_header(); ?>

<div class="container page-holder" id="main">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="col-md-12 page-title"><?php the_title(); ?></h1>
			<article class="page col-md-7" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
					<hr>
					<h3>Recent Newsletter Posts</h3>
					<ul class="posts" style="padding-left: 0;">
						<?php query_posts('cat=25'); while (have_posts()) : the_post(); ?>
						<li style="list-style-type: none;">
							<div class="post-title">
								<a style="float: none; display: inline; border-bottom: none;" href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
							</div>
						</li>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
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
<?php get_sidebar(); ?>
</div> <!-- .row -->
</div>
<?php get_footer(); ?>