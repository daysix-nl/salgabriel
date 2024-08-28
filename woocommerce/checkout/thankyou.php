<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;

?>



	<?php
	if ( $order ) :

		
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<?php 
				$order_id = isset( $order_id ) ? $order_id : get_query_var( 'order-received' );
				$order = wc_get_order( $order_id );
				$order_number = $order->get_order_number();
				$customer_first_name = $order->get_billing_first_name();
				$billing_address = $order->get_formatted_billing_address();
				$shipping_address = $order->get_formatted_shipping_address();
				$customer_email = $order->get_billing_email();
			?>
			<div class="w-full container">

				<div class="custom-afrekenen md:mt-[10px] lg:mt-[60px] xl:mt-[70px] mb-[60px] lg:mb-[200px] xl:mb-[132px]">
					<div class="container lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]">
						<div class="w-full lg:max-w-[651px] xl:max-w-[736px]">
							<h1 class="font-jost font-semibold text-15 leading-25 xl:text-17 xl:leading-25 tracking-[0.05em] uppercase">Order confirmation #<?php echo $order_number;?></h1>
							<hr class="border-[#DDDDDD] my-[10px]">
							<p class="font-jost text-16 leading-28 mt-[20px]"><?php echo $customer_first_name;?>, thank you for your oder!<br>We’ve successfully received your order #<?php echo $order_number;?>. You can find your purchase information below:</p>
							<div class="grid md:grid-cols-2 mt-[30px] gap-[25px]">
								<div class="">
									<h3 class="font-jost text-16 leading-28 font-semibold">Details</h3>
									<p class="font-jost text-16 leading-28 font-normal">
										<?php echo $billing_address; ?><br>
										<?php echo $customer_email;?>
									</p>
								</div>
								<div class="">
									<h3 class="font-jost text-16 leading-28 font-semibold">Shipping Address</h3>
									<p class="font-jost text-16 leading-28 font-normal">
										<?php echo $shipping_address; ?>
									</p>
								</div>
							</div>
						</div>
						<div class="w-full lg:max-w-[337px] xl:max-w-[381px] h-auto ">
							<div class="sticky mt-[50px] md:mt-[50px] lg:mt-[unset] ">
								<div class="flex items-center justify-between w-full">
									<div class="flex items-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="19.995" height="19.315" viewBox="0 0 19.995 19.315">
											<path id="shopping-bag" d="M22.294,10.058a.649.649,0,0,0-.514-.262H18.373A5.222,5.222,0,0,0,13.387,5H12.044A5.222,5.222,0,0,0,7.059,9.8H3.651a.647.647,0,0,0-.522.26.791.791,0,0,0-.15.607l1.8,11.178a2.253,2.253,0,0,0,2.152,1.974H18.5a2.254,2.254,0,0,0,2.152-1.977l1.8-11.175A.789.789,0,0,0,22.294,10.058ZM12.044,6.476h1.343A3.806,3.806,0,0,1,17.017,9.8h-8.6A3.806,3.806,0,0,1,12.044,6.476Zm7.289,15.1a.868.868,0,0,1-.833.76H6.931a.868.868,0,0,1-.829-.756L4.45,11.272H20.982Z" transform="translate(-2.717 -4.75)" stroke="#000" stroke-width="0.5"/>
										</svg>
										<h3 class="font-jost font-semibold text-15 leading-20 xl:text-17 xl:leading-25 tracking-[0.05em] text-[#000000] uppercase ml-[15px]">Order summary</h3>
									</div>
								</div>
								<hr class="border-[#DDDDDD] my-[20px]">
								<!-- HIER KOMT DE INHOUD VAN WINKELWAGEN -->
								<?php
									foreach ( $order->get_items() as $item_id => $item ) {
									$product = $item->get_product();
									$product_name = $item->get_name();
									$product_quantity = $item->get_quantity();
									
									$product_total = $item->get_total();
									$product_image = wp_get_attachment_image_src( $product->get_image_id(), 'thumbnail' ); ?>

										<div class="flex items-center w-full justify-between mt-[20px]">
											<!-- AFBEELDING -->
											<div class="w-[81px] h-[81px] xl:w-[90px] xl:h-[90px] overflow-hidden">
												<?php
												if ($product_image) {
												echo '<img class="min-h-full min-w-full object-cover object-center mix-blend-multiply" src="' . esc_url($product_image[0]) . '" alt="' . esc_attr($product->get_name()) . '"/>';
												}
												?>
											</div>
											<!-- INFORMATIE -->
											<div class="w-[calc(100%-100px)] md:w-[calc(100%-115px)] xl:w-[calc(100%-130px)]">
												<div class="flex flex-col justify-between h-full"> 
													<div class="w-full">
														<div class="flex justify-between items-start">
															<div class="w-auto">
																<p class="font-jost font-semibold text-16 leading-20 xl:text-18 xl:leading-20 tracking-[0.05em]"><?php echo $product_name; ?></p>
																<p class="font-jost font-normal text-15 leading-25 xl:text-16 xl:leading-28 tracking-[0.025em] text-[#000]"><?php echo wc_price( $product_total );?></p>
															</div>
															<div class="">
																<p class="font-jost font-semibold text-15 leading-20 xl:text-16 xl:leading-20 tracking-[0.05em]"><?php echo $product_quantity;?> x</p>
															</div>
												
														</div>
													</div>  
												</div>
											</div>
										</div>
										<hr class="border-[#DDDDDD] my-[20px]">
									<?php
								}
								?>
							
								<div class="flex justify-between">
									<h4 class="font-jost font-medium text-15 leading-25 text-[#000]">Subtotal</h4>
									<p class="font-jost font-medium text-15 leading-25 text-[#000]">
										<?php echo wc_price( $order->get_subtotal() ); ?>
									</p>
								</div>
								<?php foreach ( $order->get_coupon_codes() as $code ) : ?>
									<?php $coupon = new WC_Coupon( $code ); ?>
									<div class="flex justify-between lg:mt-[8px]">
										<h4 class="font-jost font-medium text-15 leading-25 text-[#000]">
											Coupon: <?php echo esc_html( $coupon->get_code() ); // Coupon code ?>
										</h4>
										<p class="font-jost font-medium text-15 leading-25 text-[#000]">
											<?php echo wc_price( $order->get_discount_total() ); // Coupon discount amount ?>
										</p>
									</div>
								<?php endforeach; ?>
							
		
								<div class="flex justify-between lg:mt-[8px]">
									<h4 class="font-jost font-medium text-15 leading-25 text-[#000]">Shipping</h4>
									<p class="font-jost font-medium text-15 leading-25 text-[#000]">
										<?php
										$verzendkosten = WC()->cart->shipping_total;

										if ($verzendkosten >= 1) {
											echo '' . wc_price($verzendkosten);
										} else {
											echo '<span class="text-[#000]">Free</span>';
										}
										?>
									</p>
								</div>
								<div class="flex justify-between lg:mt-[8px]">
									<h4 class="font-jost font-medium text-15 leading-25 text-[#000]">VAT</h4>
									<p class="font-jost font-medium text-15 leading-25 text-[#000]">
										<?php echo wc_price( $order->get_total_tax() ); ?>
									</p>
								</div>
								<div class="flex justify-between lg:mt-[8px]">
									<h4 class="font-jost font-bold text-15 leading-25 xl:text-16 xl:leading-25 text-[#000]">Total</h4>
									<p class="font-jost font-bold text-15 leading-25 xl:text-16 xl:leading-25 text-[#000]">
										<?php echo wc_price( $order->get_total() ); ?>
									</p>
								</div>
							<hr class="border-[#DDDDDD] my-[20px]">
							</div>
						</div>
					</div>
				</div>
			</div>

			 <section class="mb-[90px]">
				<hr class="w-[194px] border-[#DDDDDD] mx-auto">
				<div class="h-[87px] lg:h-[112px] w-fit mx-auto mt-[50px] md:mt-[60px] lg:mt-[40px] xl:mt-[50px]">
					<img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/SalGabriel-Smybol.png" alt="" class="h-[87px] lg:h-[112px] w-[87px] lg:w-[112px]">
					
				</div>

			</section>
			

		<?php endif; ?>

		

	<?php else : ?>

		

	<?php endif; ?>


