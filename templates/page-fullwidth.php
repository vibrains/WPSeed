<?php 
/*
Template Name: Fullwidth Page
*/
get_header(); ?>

<!-- content » page -->
<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="container" id="main">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="col-md-12 page-title"><?php the_title(); ?></h1>
			<article class="page col-md-12" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
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
<?php get_footer(); ?>