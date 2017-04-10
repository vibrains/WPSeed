<?php 
/*
Template Name: Checkout Page
*/
get_header(); ?>

<!-- content » page -->
<!-- <div class="events-page teaser" style="max-height: 300px; background-repeat:no-repeat!important; background-size:cover!important; background: url(<?php the_post_thumbnail_url('large', $post->ID) ?>)"></div> -->
<div class="container" id="main">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="col-md-12 page-title"><?php the_title(); ?>
				
				<tbody>
					<?php
					do_action( 'woocommerce_review_order_before_cart_contents' );

					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
							?>
							<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
								<td class="product-name">
									<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
									<?php echo WC()->cart->get_item_data( $cart_item ); ?>
								</td>
							</tr>
							<?php
						}
					}
					?>
				</tbody>

			</h1>

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