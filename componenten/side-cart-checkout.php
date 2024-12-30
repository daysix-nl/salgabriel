   <div class="bg-white w-full lg:max-w-[448px]">
                <div class="w-full max-w-[360px] md:max-w-[718px] lg:max-w-[337px] xl:max-w-[381px] mx-auto">
                    <div class="flex items-center justify-between w-full">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.995" height="19.315" viewBox="0 0 19.995 19.315">
                                <path id="shopping-bag" d="M22.294,10.058a.649.649,0,0,0-.514-.262H18.373A5.222,5.222,0,0,0,13.387,5H12.044A5.222,5.222,0,0,0,7.059,9.8H3.651a.647.647,0,0,0-.522.26.791.791,0,0,0-.15.607l1.8,11.178a2.253,2.253,0,0,0,2.152,1.974H18.5a2.254,2.254,0,0,0,2.152-1.977l1.8-11.175A.789.789,0,0,0,22.294,10.058ZM12.044,6.476h1.343A3.806,3.806,0,0,1,17.017,9.8h-8.6A3.806,3.806,0,0,1,12.044,6.476Zm7.289,15.1a.868.868,0,0,1-.833.76H6.931a.868.868,0,0,1-.829-.756L4.45,11.272H20.982Z" transform="translate(-2.717 -4.75)" stroke="#000" stroke-width="0.5"/>
                            </svg>
                            <h3 class="font-jost font-semibold text-15 leading-20 xl:text-17 xl:leading-25 tracking-[0.05em] text-[#000000] uppercase ml-[15px]">Order summary</h3>
                        </div>
                    </div>
                    <hr class="border-[#DDDDDD] mt-[20px]">
                </div>
            
                <div class="w-full max-w-[360px] md:max-w-[718px] lg:max-w-[337px] xl:max-w-[381px] mx-auto">
                    <div class="h-full">
                        <div class="">
                            <!-- WINKELWAGEN ITEM -->
                            <?php
                            // Haal de inhoud van de winkelwagen op
                            $cart = WC()->cart->get_cart();

                            if (!empty($cart)) {
                                foreach ($cart as $cart_item_key => $cart_item) {
                                    $product = $cart_item['data'];
                                    $product_id = $product->is_type('variation') ? $product->get_parent_id() : $product->get_id();

                                    // Haal de productafbeelding op
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'full'); ?>
                                    <div class="flex items-center w-full justify-between mt-[20px]">
                                        <!-- AFBEELDING -->
                                        <a href="<?php the_permalink($product->get_id());?>" class="w-[81px] h-[81px] xl:w-[90px] xl:h-[90px] overflow-hidden">
                                            <?php
                                            if ($product_image) {
                                            echo '<img class="min-h-full min-w-full object-cover object-center mix-blend-multiply" src="' . esc_url($product_image[0]) . '" alt="' . esc_attr($product->get_name()) . '"/>';
                                            }
                                            ?>
                                        </a>
                                        <!-- INFORMATIE -->
                                        <div class="w-[calc(100%-100px)] md:w-[calc(100%-115px)] xl:w-[calc(100%-130px)]">
                                            <div class="flex flex-col justify-between h-full"> 
                                                <div class="w-full">
                                                    <div class="flex justify-between items-start">
                                                        <div class="w-auto">
                                                            <a href="<?php the_permalink($product->get_id());?>" class="font-jost font-semibold text-16 leading-20 xl:text-18 xl:leading-20 tracking-[0.05em]"><?php echo esc_html($product->get_name()); ?></a>
                                                            <p class="font-jost font-normal text-15 leading-25 xl:text-16 xl:leading-28 tracking-[0.025em] text-[#000]"><?php echo $cart_item['quantity'];?> x <?php echo wc_price($product->get_price());?></p>
                                                        </div>
                                                        <?php echo '<a class="remove-item" href="' . esc_url(WC()->cart->get_remove_url($cart_item_key)) . '">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16.1" viewBox="0 0 14 16.1">
                                                            <g id="bin-delete-recycle-svgrepo-com" transform="translate(-4 -1)">
                                                                <path id="Path_496" data-name="Path 496" d="M17.3,1.7H12.4a.7.7,0,0,0-.7-.7H10.3a.7.7,0,0,0-.7.7H4.7a.7.7,0,0,0,0,1.4H17.3a.7.7,0,1,0,0-1.4Z" fill="#acacac"/>
                                                                <path id="Path_497" data-name="Path 497" d="M17.5,9.7V20.9H8.4V9.7H7V21.6a.7.7,0,0,0,.7.7H18.2a.7.7,0,0,0,.7-.7V9.7Z" transform="translate(-1.95 -5.2)" fill="#acacac"/>
                                                                <path id="Path_498" data-name="Path 498" d="M18.4,24.7v-7H17v7Z" transform="translate(-8.45 -11.1)" fill="#acacac"/>
                                                                <path id="Path_499" data-name="Path 499" d="M28.4,24.7v-7H27v7Z" transform="translate(-14.95 -11.1)" fill="#acacac"/>
                                                            </g>
                                                        </svg>
                                                        </a>';?>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    
                            <?php
                                }
                            } else {
                                echo 'Je winkelwagen is leeg.';
                            }
                            ?>
                            <hr class="border-[#DDDDDD] my-[20px]">
                            <?php
                            if (WC()->cart->get_cart_contents_count() > 0) { ?>
                             
                            
                            <div class="flex justify-between">
                                <h4 class="font-jost font-medium text-15 leading-25 text-[#000]">Subtotal</h4>
                                <p class="font-jost font-medium text-15 leading-25 text-[#000]">
                                    <?php wc_cart_totals_subtotal_html(); ?>
                                </p>
                            </div>
                            <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                                <div class="flex justify-between lg:mt-[8px]">
                                <h4 class="font-jost font-medium text-15 leading-25 text-[#000]"><?php wc_cart_totals_coupon_label( $coupon ); ?></h4>
                                <p class="font-jost font-medium text-15 leading-25 text-[#000]">
                                    <?php wc_cart_totals_coupon_html( $coupon ); ?>
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
                                <h4 class="font-jost font-bold text-15 leading-25 xl:text-16 xl:leading-25 text-[#000]">Total</h4>
                                <p class="font-jost font-bold text-15 leading-25 xl:text-16 xl:leading-25 text-[#000]">
                                    <?php
                                    $total_bedrag = WC()->cart->total;
                                    echo '' . wc_price($total_bedrag);
                                    ?>
                                </p>
                            </div>
                           <hr class="border-[#DDDDDD] my-[20px]">
                            <a href="/cart/" class="text-center underline font-jost font-normal text-15 leading-25 xl:text-16 xl:leading-25 text-[#000] w-full flex items-center justify-center mt-[8px]">Edit cart</a>

                            <?php
                            } else {
                            }
                            ?>
                        
                        </div>
                    </div>
                </div>
                <!-- HOLIDAY MESSAGE
                <div class="w-full bg-[#F4F4F4] mt-[20px] text-black text-15 leading-26 lg:text-16 lg:leading-28 tracking-[0.025em] font-jost px-2 md:pr-3 lg:px-4 pt-[30px] pb-[35px]">
                    <p>Want to make sure you have your package in time for Christmas? After placing your order, you can arrange local pick-up in Amsterdam & Rotterdam. Just email us at <a href="mailto:contact@salgabriel.com" class="font-bold">contact@salgabriel.com</a>, and we’ll set it up! <br><br>Happy Holidays! 🎄</p>
                </div> -->
            </div>

