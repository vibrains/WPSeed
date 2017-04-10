 <?php
/*
Template Name: Staff Template
*/
get_header(); ?>

<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="container staff-page" id="main">
	<div class="row">
		<h1 class="col-md-12 page-title"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;The ABAC Board Members and Officers</h1>
		<h2 class="staff-section-title">The Officers</h2>
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
		<div class="col-xs-12 col-sm-3">
			<div class="panel panel-default staff">
				<div class="panel-body">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="staff-content">
						<p><?php the_sub_field('officers_name'); ?></p>
						<div class="col-md-12 no-padding">
							<div class="staff-position">
								<p><?php the_sub_field('officers_position'); ?></p>
							</div>
							<div class="staff-bio">
								<p class="staff-bio"><?php the_sub_field('officers_bio'); ?></p>
							</div>
						</div>
						<div class="col-xs-12 no-padding staff-social-links">
							<a class="button" href="mailto:<?php the_sub_field('officers_mail'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
						</div>
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
	<h2 class="staff-section-title">The Board</h2>
	<?php
	if( have_rows('board') ):
		while ( have_rows('board') ) : the_row();
	$image = get_sub_field('board_photo');
	$name = get_sub_field('board_name');
	$position = get_sub_field('board_position');
	$biography = get_sub_field('board_bio');
	?>
	<div class="col-xs-12 col-sm-3">
		<div class="panel panel-default staff">
			<div class="panel-body">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<div class="staff-content">
					<p><?php the_sub_field('board_name'); ?></p>
					<div class="col-md-12 no-padding">
						<div class="staff-position">
							<p><?php the_sub_field('board_position'); ?></p>
						</div>
						<div class="staff-bio">
							<p class="staff-bio"><?php the_sub_field('board_bio'); ?></p>
						</div>
					</div>
					<div class="col-xs-12 no-padding staff-social-links">
						<a class="button" href="mailto:<?php the_sub_field('board_mail'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
					</div>
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
<?php get_footer(); ?>