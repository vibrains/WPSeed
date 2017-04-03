 <?php
/*
Template Name: Staff Template
*/
get_header(); ?>

<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="container staff-page" id="main">
	<div class="row">
		<h2>The ABAC Board Members &amp; Officers</h2>
		<h2 class="staff-section-title">The Officers</h2>
		<?php
		if( have_rows('management') ):
			while ( have_rows('management') ) : the_row();
		$image = get_sub_field('management_photo');
		$name = get_sub_field('management_name');
		$position = get_sub_field('management_position');
		$biography = get_sub_field('management_bio');
		$email = get_sub_field('management_mail');
		$linkedin = get_sub_field('management_linkedin');
		$twitter = get_sub_field('management_twitter');
		?>
		<div class="col-xs-12 col-sm-3">
			<div class="panel panel-default staff">
				<div class="panel-body">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<div class="staff-content">
						<p><?php the_sub_field('management_name'); ?></p>
						<div class="col-md-12 no-padding">
							<div class="staff-position">
								<p><?php the_sub_field('management_position'); ?></p>
							</div>
							<div class="staff-bio">
								<p class="staff-bio"><?php the_sub_field('management_bio'); ?></p>
							</div>
						</div>
						<div class="col-xs-12 no-padding staff-social-links">
							<a class="button" href="mailto:<?php the_sub_field('management_mail'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Send Email</a>
						</div>
					</div>


<!-- 						<a href="<?php the_sub_field('management_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	<a href="<?php the_sub_field('management_twitter'); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> -->

</div>
</div>
</div>
<?php  endwhile;
else : ?>
<p>Please Add Team Members</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
<div id="alt-container">
	<div id="content" class="site-content container-fluid staff-page">
		<a class="smoothScroll" href="#top" id="sales"></a>
		<h2 class="staff-section-title">Sales</h2>
		<?php
		if( have_rows('sales') ):
			while ( have_rows('sales') ) : the_row();
		$image = get_sub_field('sales_photo');
		$name = get_sub_field('sales_name');
		$position = get_sub_field('sales_position');
		$biography = get_sub_field('sales_bio');
		?>
		<div class="col-xs-12 col-sm-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
					<h3><?php the_sub_field('sales_name'); ?></h3>
					<p><strong><?php the_sub_field('sales_position'); ?></strong></p>
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p class="staff-bio"><i><?php the_sub_field('sales_bio'); ?></i></p>
				</div>
			</div>
		</div>
	<?php  endwhile;
	else : ?>
	<p>Please Add Team Members</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>

<div id="content" class="site-content container-fluid staff-page">
	<a class="smoothScroll" href="#top" id="service-parts"></a>
	<h2 class="staff-section-title">Service &amp; Parts</h2>
	<?php
	if( have_rows('service_and_parts') ):
		while ( have_rows('service_and_parts') ) : the_row();
	$image = get_sub_field('service_and_parts_photo');
	$name = get_sub_field('service_and_parts_name');
	$position = get_sub_field('service_and_parts_position');
	$biography = get_sub_field('service_and_parts_bio');
	?>
	<div class="col-xs-12 col-sm-3">
		<div class="panel panel-default staff">
			<div class="panel-body">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				<h3><?php the_sub_field('service_and_parts_name'); ?></h3>
				<p><strong><?php the_sub_field('service_and_parts_position'); ?></strong></p>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p class="staff-bio"><i><?php the_sub_field('service_and_parts_bio'); ?></i></p>
			</div>
		</div>
	</div>
<?php  endwhile;
else : ?>
<p>Please Add Team Members</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>
</article>
<?php
get_footer(); ?>