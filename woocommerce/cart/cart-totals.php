<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<h2><?php esc_html_e( 'Cart totals', 'woocommerce' ); ?></h2>

	<table cellspacing="0" class="shop_table shop_table_responsive">

		<tr class="cart-subtotal">
			<th><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td data-title="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

			<tr class="woocommerce-shipping-totals shipping">
				<th>Shipping</th>
				<td data-title="Shipping"><?php
				$verzendkosten = WC()->cart->shipping_total;

				if ($verzendkosten >= 1) {
					echo '' . wc_price($verzendkosten);
				} else {
					echo '<span class="text-[#000]">Free</span>';
				}
				?></td>

				</tr>

			<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

		<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

			<tr class="shipping">
				<th>Shipping</th>
				<td data-title="<?php esc_attr_e( 'Shipping', 'woocommerce' ); ?>"><?php woocommerce_shipping_calculator(); ?></td>
			</tr>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php
		if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
			$taxable_address = WC()->customer->get_taxable_address();
			$estimated_text  = '';

			if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
				/* translators: %s location. */
				$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
			}

			if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
				foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
					?>
					<tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<th><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
						<td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
					<?php
				}
			} else {
				?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
					<td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
				<?php
			}
		}
		?>

		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

		<tr class="order-total">
			<th><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
			<td data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>

		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

	</table>
	<hr class="border-[#DDDDDD] my-[20px]">
	<div class="w-full mx-auto flex justify-between max-w-[360px] md:max-w-[unset]">
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.474" height="6.247" viewBox="0 0 19.474 6.247">
                        <g id="Group_75" data-name="Group 75" transform="translate(0 0)">
                            <path id="Path_66" data-name="Path 66" d="M19.668,57.661H18.079l.993-6.035h1.589Zm-2.926-6.035-1.515,4.151-.179-.894h0l-.535-2.714a.678.678,0,0,0-.754-.543h-2.5l-.029.1a5.984,5.984,0,0,1,1.662.69l1.381,5.243h1.656l2.528-6.035Zm12.5,6.035H30.7l-1.272-6.035H28.15a.729.729,0,0,0-.734.45l-2.37,5.585H26.7l.331-.9h2.02Zm-1.749-2.135.835-2.258.47,2.258Zm-2.321-2.449.227-1.3a4.632,4.632,0,0,0-1.429-.263c-.789,0-2.661.341-2.661,2,0,1.559,2.2,1.578,2.2,2.4s-1.971.672-2.622.156l-.236,1.355a4.5,4.5,0,0,0,1.794.341c1.084,0,2.72-.555,2.72-2.066,0-1.569-2.218-1.715-2.218-2.4S24.491,52.708,25.171,53.078Z" transform="translate(-11.226 -51.519)" fill="#2566af"/>
                        </g>
                    </svg>
                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.211" height="13.467" viewBox="0 0 21.211 13.467">
                        <ellipse id="Ellipse_20" data-name="Ellipse 20" cx="6.749" cy="6.734" rx="6.749" ry="6.734" fill="#eb001b"/>
                        <ellipse id="Ellipse_21" data-name="Ellipse 21" cx="6.749" cy="6.734" rx="6.749" ry="6.734" transform="translate(7.713)" fill="#f79e1b"/>
                        <path id="Path_57" data-name="Path 57" d="M21.785,11.734A6.488,6.488,0,0,0,18.892,6.3,6.751,6.751,0,0,0,16,11.734a6.617,6.617,0,0,0,2.892,5.434,6.488,6.488,0,0,0,2.892-5.434Z" transform="translate(-8.287 -5)" fill="#ff5f00"/>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10.506" height="12.512" viewBox="0 0 10.506 12.512">
                        <path id="Path_51" data-name="Path 51" d="M23.545,8.146a2.185,2.185,0,0,0-.578-2.193A3.878,3.878,0,0,0,19.978,5H16.025a.609.609,0,0,0-.578.477L14,15.1c0,.191.1.381.289.381h2.6l.386-3.241,1.735-2.1Z" transform="translate(-14 -5)" fill="#003087"/>
                        <path id="Path_52" data-name="Path 52" d="M23.638,8.3l-.193.191c-.482,2.669-2.121,3.622-4.435,3.622H17.95a.609.609,0,0,0-.578.477l-.578,3.718-.193.953c0,.191.1.381.289.381h2.025a.44.44,0,0,0,.482-.381v-.1l.386-2.288v-.1c0-.191.289-.381.482-.381h.289c2.025,0,3.567-.763,3.953-3.05a2.582,2.582,0,0,0-.386-2.288A.962.962,0,0,0,23.638,8.3Z" transform="translate(-14.093 -5.13)" fill="#3086c8"/>
                        <path id="Path_53" data-name="Path 53" d="M23.088,8.086a.357.357,0,0,0-.289-.1.357.357,0,0,1-.289-.1,3.655,3.655,0,0,0-1.061-.1H18.557c-.1,0-.193,0-.193.1-.193.1-.289.191-.289.381L17.4,12.471v.1a.538.538,0,0,1,.578-.477h1.253c2.41,0,3.953-.953,4.435-3.622V8.277a.741.741,0,0,0-.482-.191Z" transform="translate(-14.122 -5.128)" fill="#012169"/>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                   <svg id="ideal-logo" xmlns="http://www.w3.org/2000/svg" width="16.905" height="14.733" viewBox="0 0 16.905 14.733">
                        <g id="Group_72" data-name="Group 72">
                            <path id="Path_58" data-name="Path 58" d="M0,1.092V13.64a1.1,1.1,0,0,0,1.1,1.092H8.687c5.733,0,8.218-3.173,8.218-7.383C16.905,3.162,14.42,0,8.687,0H1.1A1.1,1.1,0,0,0,0,1.092Z" fill="#fff"/>
                            <path id="Path_59" data-name="Path 59" d="M91.9,44.3v9.272h4.081c3.706,0,5.313-2.07,5.313-5,0-2.8-1.607-4.975-5.313-4.975H92.607A.7.7,0,0,0,91.9,44.3Z" transform="translate(-86.825 -41.219)" fill="#c06"/>
                            <g id="Group_71" data-name="Group 71" transform="translate(1.033 1.005)">
                            <g id="Group_70" data-name="Group 70">
                                <path id="Path_60" data-name="Path 60" d="M26.355,31.129H19.76A1.055,1.055,0,0,1,18.7,30.08V19.448A1.055,1.055,0,0,1,19.76,18.4h6.594c6.257,0,7.191,3.981,7.191,6.351C33.545,28.862,30.988,31.129,26.355,31.129ZM19.76,18.749a.7.7,0,0,0-.707.7V30.08a.7.7,0,0,0,.707.7h6.594c4.407,0,6.837-2.141,6.837-6.028,0-5.22-4.286-6-6.837-6Z" transform="translate(-18.7 -18.4)"/>
                            </g>
                            </g>
                        </g>
                        <g id="Group_73" data-name="Group 73" transform="translate(5.556 6.099)">
                            <path id="Path_61" data-name="Path 61" d="M101.555,111.705a1.223,1.223,0,0,1,.4.066.908.908,0,0,1,.326.2,1.115,1.115,0,0,1,.215.339,1.393,1.393,0,0,1,.077.481,1.627,1.627,0,0,1-.061.448,1.041,1.041,0,0,1-.188.355.911.911,0,0,1-.315.235,1.124,1.124,0,0,1-.447.087H100.6V111.7h.955Zm-.033,1.807a.7.7,0,0,0,.21-.033.412.412,0,0,0,.177-.115.635.635,0,0,0,.127-.208.857.857,0,0,0,.05-.311,1.252,1.252,0,0,0-.033-.3.594.594,0,0,0-.11-.229.5.5,0,0,0-.2-.147.821.821,0,0,0-.3-.049h-.353v1.4h.436Z" transform="translate(-100.6 -111.7)" fill="#fff"/>
                            <path id="Path_62" data-name="Path 62" d="M143.873,111.705v.41h-1.182v.475h1.088v.377h-1.088v.541h1.21v.41h-1.7V111.7h1.673Z" transform="translate(-139.903 -111.7)" fill="#fff"/>
                            <path id="Path_63" data-name="Path 63" d="M179.859,111.8l.839,2.217h-.514l-.171-.491h-.839l-.177.491h-.5l.845-2.217Zm.028,1.36-.282-.814H179.6l-.293.814Z" transform="translate(-174.198 -111.795)" fill="#fff"/>
                            <path id="Path_64" data-name="Path 64" d="M224.392,111.8v1.807h1.093v.41H223.9V111.8Z" transform="translate(-217.09 -111.795)" fill="#fff"/>
                        </g>
                        <g id="Group_74" data-name="Group 74" transform="translate(2.198 6.192)">
                            <ellipse id="Ellipse_22" data-name="Ellipse 22" cx="1.033" cy="1.021" rx="1.033" ry="1.021"/>
                        </g>
                        <path id="Path_65" data-name="Path 65" d="M45.863,165.128h0a1.553,1.553,0,0,1-1.563-1.545v-1.207a.779.779,0,0,1,.784-.775h0a.779.779,0,0,1,.784.775v2.752Z" transform="translate(-41.853 -152.776)"/>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                    <svg id="apple-pay-logo-svgrepo-com" xmlns="http://www.w3.org/2000/svg" width="21.784" height="9.217" viewBox="0 0 21.784 9.217">
                        <path id="Path_2" data-name="Path 2" d="M4.106,1.188A1.652,1.652,0,0,0,4.486,0a1.724,1.724,0,0,0-1.1.558,1.56,1.56,0,0,0-.4,1.134,1.3,1.3,0,0,0,1.122-.5m.38.612c-.616-.036-1.141.342-1.43.342s-.742-.324-1.231-.324a1.818,1.818,0,0,0-1.539.936A3.809,3.809,0,0,0,.757,6.481c.308.45.688.954,1.177.936.471-.018.652-.306,1.213-.306s.724.306,1.231.288.833-.45,1.141-.918a3.616,3.616,0,0,0,.507-1.044,1.627,1.627,0,0,1-.2-2.9A1.689,1.689,0,0,0,4.486,1.8" transform="translate(0.026)"/>
                        <g id="Group_5" data-name="Group 5" transform="translate(7.265 0.522)">
                            <path id="Path_3" data-name="Path 3" d="M42.671,2.9a2.147,2.147,0,0,1,2.263,2.232,2.171,2.171,0,0,1-2.3,2.25H41.168V9.7H40.1V2.9Zm-1.5,3.6h1.213A1.28,1.28,0,0,0,43.83,5.15,1.272,1.272,0,0,0,42.381,3.8H41.15V6.5Zm4.037,1.818c0-.864.67-1.4,1.865-1.476l1.376-.072V6.392c0-.558-.38-.882-1-.882a.954.954,0,0,0-1.05.72h-.978c.054-.9.833-1.566,2.064-1.566,1.213,0,1.991.63,1.991,1.638v3.42H48.5v-.81h-.018a1.776,1.776,0,0,1-1.575.9A1.53,1.53,0,0,1,45.205,8.319Zm3.241-.45v-.4l-1.231.072c-.616.036-.96.306-.96.738s.362.72.905.72A1.194,1.194,0,0,0,48.446,7.869Zm1.937,3.69v-.828a1.979,1.979,0,0,0,.326.018.836.836,0,0,0,.887-.7c0-.018.091-.306.091-.306l-1.81-4.969h1.1l1.267,4.05h.018l1.267-4.05H54.62l-1.865,5.239c-.434,1.206-.923,1.584-1.955,1.584C50.727,11.577,50.474,11.577,50.383,11.559Z" transform="translate(-40.1 -2.9)"/>
                        </g>
                    </svg>
                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.706" height="8.624" viewBox="0 0 21.706 8.624">
                        <defs>
                            <linearGradient id="linear-gradient" x1="0.202" y1="0.546" x2="0.934" y2="-0.13" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#005ab9"/>
                            <stop offset="1" stop-color="#1e3764"/>
                            </linearGradient>
                            <linearGradient id="linear-gradient-2" x1="0.061" y1="1.087" x2="0.837" y2="0.427" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#fba900"/>
                            <stop offset="1" stop-color="#ffd800"/>
                            </linearGradient>
                        </defs>
                        <g id="Group_82" data-name="Group 82" transform="translate(0 0)">
                            <path id="blue-symbol" d="M113.449,149.829c3.271,0,4.906-2.156,6.541-4.312H109.138v4.312Z" transform="translate(-109.138 -141.205)" fill="url(#linear-gradient)"/>
                            <path id="yellow-symbol" d="M206.214,109.138c-3.271,0-4.906,2.156-6.541,4.312h10.853v-4.312Z" transform="translate(-188.819 -109.138)" fill="url(#linear-gradient-2)"/>
                        </g>
                    </svg>

                </div>
                <div class="border-[#EDEDED] border-[1px] rounded-[4px] h-[23px] w-[36.64px] overflow-hidden flex justify-center items-center bg-[#286CB4]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.087" height="6.068" viewBox="0 0 24.087 6.068">
                        <path id="Path_953" data-name="Path 953" d="M154.481,187.2l.619,1.479h-1.239Zm12.908.063H165v.657h2.348v.981H165v.728h2.389v.585l1.665-1.772-1.665-1.851v.672ZM156.1,185.408h3.209l.716,1.527.659-1.535h8.324l.869.941.893-.941h3.82l-2.823,3.046,2.8,3.022h-3.884l-.869-.941-.9.941H155.333l-.394-.941h-.909l-.394.941H150.5l2.638-6.068h2.75Zm6.957.854h-1.8l-1.206,2.793-1.3-2.793h-1.785v3.8l-1.657-3.8h-1.6l-1.914,4.351h1.247l.394-.941h2.1l.394.941h2.188V187.5l1.407,3.109h.957l1.4-3.1v3.1h1.174l.008-4.351Zm7.5,2.184,2.035-2.184h-1.464l-1.287,1.361-1.247-1.361h-4.729v4.359h4.665l1.295-1.377,1.247,1.377h1.5l-2.019-2.176Z" transform="translate(-150.5 -185.4)" fill="#fff"/>
                    </svg>
                </div>
            </div>
            <hr class="border-[#DDDDDD] mt-[20px] mb-[30px]">
			<div class="w-full grid gap-[15px] mt-4">
                            <!-- USP'S -->
                <div class="flex items-start">
                    <div class="w-[37px] h-[28px] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.75" height="13.5" viewBox="0 0 18.75 13.5">
                            <path id="shipping-truck-svgrepo-com" d="M16.5,6H3V17.25H4.527a2.625,2.625,0,0,0,5.2,0h5.3a2.625,2.625,0,0,0,5.2,0H21.75V12.439L18.311,9H16.5Zm0,4.5v4A2.628,2.628,0,0,1,20,15.75h.253V13.061L17.689,10.5ZM15,15.75V7.5H4.5v8.25h.253a2.626,2.626,0,0,1,4.745,0ZM17.625,18a1.125,1.125,0,1,1,1.125-1.125A1.125,1.125,0,0,1,17.625,18ZM8.25,16.875A1.125,1.125,0,1,1,7.125,15.75,1.125,1.125,0,0,1,8.25,16.875Z" transform="translate(-3 -6)" fill="#2e2e2e" fill-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-[#3C3C3C] text-15 leading-25 xl:text-16 xl:leading-28 font-jost w-full tracking-[0.025em]">Free shipping*</p>
                </div>
                <div class="flex items-start">
                    <div class="w-[37px] h-[28px] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.939" height="13.214" viewBox="0 0 14.939 13.214">
                            <path id="love" d="M10.194,4A4.152,4.152,0,0,0,7.17,5.313,4.145,4.145,0,0,0,0,8.145c0,4.127,6.657,8.178,6.946,8.337a.448.448,0,0,0,.462,0c.276-.159,6.932-4.21,6.932-8.337A4.149,4.149,0,0,0,10.194,4ZM7.17,15.57C6.011,14.831.9,11.376.9,8.145A3.249,3.249,0,0,1,6.8,6.279a.448.448,0,0,0,.733,0,3.249,3.249,0,0,1,5.908,1.866C13.443,11.374,8.328,14.828,7.17,15.57Z" transform="translate(0.3 -3.641)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.6"/>
                        </svg>
                    </div>
                    <p class="text-[#3C3C3C] text-15 leading-25 xl:text-16 xl:leading-28 font-jost w-full tracking-[0.025em]">Handmade products made with love</p>
                </div>
                <div class="flex items-start">
                    <div class="w-[37px] h-[28px] flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.658" height="17.456" viewBox="0 0 16.658 17.456">
                            <path id="box2-svgrepo-com" d="M17.274,3.753,9.585.926,1.606,3.854V14.743l7.979,2.895,7.979-2.895V3.859l-.29-.106ZM9.289,16.9,2.2,14.328V4.491L9.289,7.064Zm.3-10.359L2.752,4.063,9.585,1.556l6.826,2.51L9.585,6.542Zm7.388,7.786L9.88,16.9V7.064L16.973,4.5Z" transform="translate(-1.256 -0.553)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.7"/>
                        </svg>
                    </div>
                    <p class="text-[#3C3C3C] text-15 leading-25 xl:text-16 xl:leading-28 font-jost w-full tracking-[0.025em]">Signature packaging</p>
                </div>
                        </div>
			<hr class="border-[#DDDDDD] my-[30px]">

	
		<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>


	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
