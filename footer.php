<?php
/**
 * @author      Local Marketing Inc.
 * @version     1.7
 * @since       wpseed 0.1
 */
?>
<?php include 'templates/str-footer.php' ?>
<script>
	jQuery(function($) {
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});
		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	});
</script>
<?php wp_footer() ?>
<script src="/wp-content/themes/wpseed/assets/scripts/search.js"></script>
</body>
</html>