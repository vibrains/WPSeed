 <?php
/*
Template Name: Staff Template
*/
get_header(); ?>

<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="page-holder container staff-page" id="main">
	<div class="row">

		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="col-md-12 page-title"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;The ABAC Board Members and Officers</h1>
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
	</div> <!-- .row -->

	<h2 class="col-md-12 staff-section-title">The Officers</h2>
	<?php
	if( have_rows('officers') ):
		while ( have_rows('officers') ) : the_row();
	$image = get_sub_field('officers_photo');
	$name = get_sub_field('officers_name');
	$position = get_sub_field('officers_position');
	$biography = get_sub_field('officers_bio');
	$email = get_sub_field('officers_mail');
	$linkedin = get_sub_field('officers_linkedin');
	$twitter = get_sub_field('officers_twitter');
	?>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="panel panel-default staff">
			<div class="panel-body">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="staff-content">
					<p class="staff-name"><?php the_sub_field('officers_name'); ?></p>
					<div class="col-md-12 no-padding">
						<div class="staff-position">
							<p><?php the_sub_field('officers_position'); ?></p>
						</div>
						<div class="staff-bio">
							<p class="staff-bio"><?php the_sub_field('officers_bio'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 no-padding staff-social-links">
					<a class="button" href="mailto:<?php the_sub_field('officers_mail'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
				</div>


<!--<a href="<?php the_sub_field('officers_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	<a href="<?php the_sub_field('officers_twitter'); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> -->

</div>
</div>
</div>
<?php  endwhile;
else : ?>
<p>Please Add Members</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>

<br>
<hr>
<br>

<div class="row">
	<h2 class="col-md-12 staff-section-title">The Board</h2>
	<?php
	if( have_rows('board') ):
		while ( have_rows('board') ) : the_row();
	$image = get_sub_field('board_photo');
	$name = get_sub_field('board_name');
	$position = get_sub_field('board_position');
	$biography = get_sub_field('board_bio');
	?>
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="panel panel-default staff">
			<div class="panel-body">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="staff-content">
					<p class="staff-name"><?php the_sub_field('board_name'); ?></p>
					<div class="col-md-12 no-padding">
						<div class="staff-position">
							<p><?php the_sub_field('board_position'); ?></p>
						</div>
						<div class="staff-bio">
							<p class="staff-bio"><?php the_sub_field('board_bio'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 no-padding staff-social-links">
					<a class="button" href="mailto:<?php the_sub_field('board_mail'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
				</div>


<!--<a href="<?php the_sub_field('board_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	<a href="<?php the_sub_field('board_twitter'); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> -->

</div>
</div>
</div>
<?php  endwhile;
else : ?>
<p>Please Add Members</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script>
	$(function() {
		$('.staff-content').matchHeight();
	}); 
</script>
<?php get_footer(); ?>