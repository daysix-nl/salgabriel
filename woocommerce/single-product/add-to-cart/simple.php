<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button id="add-to-cart" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="h-[55px] md:h-[47px] xl:h-[52px] bg-[#2E2E2E] rounded-[2px] xl:rounded-[3px] font-jost font-normal text-white text-15 xl:text-16 tracking-[0.02em] xl:tracking-[0.025em] w-[360px] md:w-[359px] lg:w-[420px] xl:w-[475px] flex items-center justify-center md:hover:opacity-80 duration-300">
        <svg class="mr-[15px]" xmlns="http://www.w3.org/2000/svg" width="13.244" height="12.125" viewBox="0 0 13.244 12.125">
            <path id="shopping-bag" d="M16.1,8.26a.449.449,0,0,0-.349-.169H13.436A3.473,3.473,0,0,0,10.048,5H9.136A3.473,3.473,0,0,0,5.748,8.091H3.432a.449.449,0,0,0-.355.167.49.49,0,0,0-.1.391l1.223,7.2a1.5,1.5,0,0,0,1.462,1.272h7.861a1.5,1.5,0,0,0,1.462-1.274l1.223-7.2A.489.489,0,0,0,16.1,8.26ZM9.136,5.951h.913a2.54,2.54,0,0,1,2.466,2.14H6.669A2.54,2.54,0,0,1,9.136,5.951Zm4.953,9.734a.579.579,0,0,1-.566.49H5.661a.579.579,0,0,1-.563-.487L3.975,9.042H15.208Z" transform="translate(-2.969 -5)" fill="#fff"/>
        </svg>
        Add to bag</button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
