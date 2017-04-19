		<div class="our-partners-bg">
			<span class="section-title-partners text-center">Our Partners</span>
			<?php echo do_shortcode( '[logoshowcase center_mode="false" slides_column="6"]' ); ?>
		</div>
		<div class="container footer-container" id="main">
			<div class="row">
				<div id="footer-sidebar" class="secondary">
					<div class="col-md-4 col-xs-12">
						<div id="footer-sidebar1">
							<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
							?>
						</div>
					</div>

					<div class="col-md-4 col-xs-12">
						<div id="footer-sidebar2">
							<?php
							if(is_active_sidebar('footer-sidebar-2')){
								dynamic_sidebar('footer-sidebar-2');
							}
							?>
						</div>
					</div>

					<div class="col-md-4 col-xs-12">
						<div id="footer-sidebar3">
							<?php
							if(is_active_sidebar('footer-sidebar-3')){
								dynamic_sidebar('footer-sidebar-3');
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="skyline"></div>
		<div class="ferris-wheel">
			<img class="image" src="/wp-content/themes/wpseed/dist/images/ferris-wheel.png"/>
		</div>
		<footer class="footer">
			<div class="footer-credits">Site Designed &amp; Developed by <a href="http://localmarketinginc.com" target="_blank"><small>LMI</small></a></div>
		</footer>
		<div class="admin-area">
			<span><a href="/member-admin/">Board Member Login</a></span>
		</div>