<div class="col-md-4 col-md-offset-1">
	<div id="sidebar" role="complementary">
		<ul>
			<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('events-sidebar') ) :
				endif; ?>
		</ul>
	</div>
</div>