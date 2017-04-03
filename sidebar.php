<div class="col-md-4 col-md-offset-1">
	<div id="sidebar" role="complementary">
		<div id="sidebar">
			<ul>
				<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
					endif; ?>
			</ul>
		</div>
	</div>
</div>