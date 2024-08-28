<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */

defined( 'ABSPATH' ) || exit;

global $product;


get_header( 'notitle' ); ?>

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>

<main class="relative share-close">
    <div id="single-product" class="container">
        <div class="w-full grid grid-cols-1 md:grid-cols-2">
            <div class="w-full md:w-[307px] lg:w-[535px] xl:w-[600px]">
                <!-- PRODUCT AFBEELDING -->
                    <?php
                    global $product;
                    if ($product->get_gallery_image_ids()) { ?>
                        <div class="hidden md:grid grid-cols-1 lg:grid-cols-1 gap-[15px]">
                            <!-- PRODUCT AFBEELDING -->
                            <div class="aspect-square w-full bg-[#F9F9F9] overflow-hidden">
                                <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="min-w-full min-h-full object-cover object-center mix-blend-multiply">
                            </div>
                            <!-- PRODUCT GALERIJ -->
                            <?php
                                global $product;
                                if ( $product->get_gallery_image_ids() ) {
                                    $gallery_image_ids = $product->get_gallery_image_ids(); 
                                    foreach ( $gallery_image_ids as $image_id ) { 
                                        $image_url = wp_get_attachment_url($image_id); ?>
                                        <div class="aspect-square w-full bg-[#F9F9F9] overflow-hidden">
                                            <img src="<?php echo esc_url($image_url);?>" alt="" class="min-w-full min-h-full object-cover object-center mix-blend-multiply">
                                        </div>
                                    <?php
                                    }
                                }
                            ?>
                        </div>

                        <div class="md:hidden w-full pb-3">
                            <div class="swiper mySwiper-shop relative">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide aspect-[1/1] w-full bg-[#F9F9F9] flex justify-center">
                                            <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="min-w-full min-h-full object-cover object-center mix-blend-multiply">
                                        </div>
                                        <?php
                                            global $product;
                                            if ( $product->get_gallery_image_ids() ) {
                                                $gallery_image_ids = $product->get_gallery_image_ids(); 
                                                foreach ( $gallery_image_ids as $image_id ) { 
                                                    $image_url = wp_get_attachment_url($image_id); ?>
                                                    <div class="swiper-slide swiper-slide aspect-[1/1] w-full bg-[#F9F9F9] flex justify-center">
                                                        <img src="<?php echo esc_url($image_url);?>" alt="" class="min-w-full min-h-full object-cover object-center mix-blend-multiply">
                                                    </div>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination mb-[20px]"></div>
                                </div>
                        </div>
                    <?php
                    } else { ?>
                    <div class="grid grid-cols-1">
                        <!-- PRODUCT AFBEELDING -->
                        <div class="aspect-[1/1] w-full bg-[#F9F9F9] flex justify-center overflow-hidden">
                            <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="min-w-full min-h-full object-cover object-center mix-blend-multiply">
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                
            </div>

            <div class="h-auto relative">
                <div class="w-[360px] mx-auto md:mx-[unset] md:w-[359px] lg:w-[535px] xl:w-[605px]  sticky top-[108px] xl:top-[123px] lg:pl-[20px]">
                    <div class="md:min-h-[626px] lg:min-h-[535px] xl:min-h-[600px] flex flex-col justify-between">
                        <div class="">
                            <div class="flex items-start mt-[30px] md:mt-[25px] lg:mt-[60px] xl:mt-[75px] justify-between mb-[15px] md:mb-[35px] xl:mb-[40px]">
                                <!-- PRODUCT TITEL EN PRIJS -->
                                <div class="">
                                    <h1 class="font-jost font-semibold text-22 leading-25 text-[#000000] tracking-[0.05em]"><?php the_title();?></h1>
                                    <p class="font-jost font-normal text-15 leading-26 xl:text-17 xl:leading-30 text-[#000000] tracking-[0.02em] xl:tracking-[0.05em] mt-[7px]"><?php echo $product->get_price_html(); ?></p>
                                </div>
                                <?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                <button class="add-favorite h-[19.38px] w-[22.15px] mt-[5px] flex justify-center items-center rounded-[2px] xl:rounded-[3px] md:mr-[10px] xl:mr-15px md:hidden <?php echo str_contains($actual_link, 'wishlist') ? "close-button-favorite" : "" ?> " id-data="<?php echo $product->get_id(); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.917" height="16.551" viewBox="0 0 18.917 16.551">
                                        <path id="love" d="M13.449,4a5.477,5.477,0,0,0-3.99,1.732A5.468,5.468,0,0,0,0,9.468c0,5.445,8.782,10.789,9.163,11a.591.591,0,0,0,.609,0c.364-.21,9.145-5.554,9.145-11A5.474,5.474,0,0,0,13.449,4ZM9.458,19.264c-1.528-.975-8.276-5.533-8.276-9.8A4.286,4.286,0,0,1,8.974,7.006a.591.591,0,0,0,.967,0,4.286,4.286,0,0,1,7.794,2.462C17.735,13.727,10.987,18.285,9.458,19.264Z" transform="translate(0 -4)" fill="#2e2e2e"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18.917" width="16.551" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/ fill="#2E2E2E"></svg>
                                </button>
                            </div>
                            <?php
                                // Controleer of WooCommerce actief is
                                if (class_exists('WooCommerce')) {
                                    // Haal de product-ID op
                                    $product_id = get_the_ID(); // Haal de ID van het huidige product op

                                    // Haal het productobject op
                                    $product = wc_get_product($product_id);

                                    // Controleer of het product een variabel product is
                                    if ($product->is_type('variable')) {
                                        // Haal alle variaties van het product op
                                        $variations = $product->get_available_variations();

                                        // Controleer de voorraad van elke variatie
                                        $out_of_stock = true;
                                        foreach ($variations as $variation) {
                                            // Haal de voorraad van de variatie op
                                            $variation_id = $variation['variation_id'];
                                            $variation_product = new WC_Product_Variation($variation_id);
                                            $variation_stock = $variation_product->get_stock_quantity();

                                            // Als een van de variaties voorraad heeft, markeer dan niet als uit voorraad
                                            if ($variation_stock > 0) {
                                                $out_of_stock = false;
                                                break;
                                            }
                                        }

                                        // Als alle variaties uit voorraad zijn, toon dan een bericht
                                        if ($out_of_stock) { ?>
                                        <!-- TEKST VOOR ALS VARIABEL PRODUCT IS UITVERKOCHT -->
                                        <?php
                                        } else { ?>
                                        <!-- TEKST VOOR ALS VARIABEL PRODUCT IS OP VOORRAAD -->
                                        <?php
                                            }
                                        } else {
                                            // Voor niet-variabele producten, controleer voorraad op dezelfde manier als eerder
                                            $voorraad = $product->get_stock_quantity();
                                            if ($voorraad <= 0) {?>
                                        <!-- TEKST VOOR ALS STANDAARD PRODUCT IS UITVERKOCHT -->
                                        <p class="font-syne text-17 leading-30 text-[#000000] font-bold uppercase tracking-[0.05em]">Coming soon</p>
                                        <?php
                                        } else { ?>
                                        <!-- TEKST VOOR ALS STANDAARD PRODUCT IS OP VOORRAAD -->
                                        <?php
                                                }
                                            }
                                } else { ?>
                                <!-- TEKST VOOR ALS ALLE GEVALLEN NIET VAN TOEPASSING ZIJN -->
                                <?php
                                }
                            ?>
                            <?php if (get_the_excerpt()): ?>
                                <div class="">
                                    <div class="font-jost font-normal text-17 leading-30 text-[#000000] tracking-[0.05em]"><?php the_excerpt();?></div>
                                </div>
                            <?php endif; ?>
                            <hr class="border-[#DDDDDD] my-[30px] md:my-[40px] lg:my-[20px]">
                            <p class="mb-[10px] font-jost text-14 tracking-[0.025em] text-[#7C7C7C]">Current colour: <span class="lowercase"><?php the_field('colour_name');?></span></p>
                            <div class="grid grid-cols-7 w-[350px] items-center">
                                <div class="h-[28px] w-[28px] rounded-full bg-white border-[1px] border-[#000] flex justify-center items-center">
                                    <div class="h-[24px] w-[24px] rounded-full block relative overflow-hidden" style="background:<?php the_field('colour', get_the_ID());?>;">
                                        <div class="absolute top-0 left-0 right-0 bottom-0 mix-blend-darken overflow-hidden opacity-[0.2]">
                                            <img src="/wp-content/themes/salgabriel/img/local/leather-v2.png" alt="" class="object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                                global $post;
                                // Haal de huidige productcategorieën op
                                $terms = wp_get_post_terms($post->ID, 'product_cat');
                                $category_ids = array();
                                foreach ($terms as $term) {
                                    $category_ids[] = $term->term_id;
                                }
                                // Huidige product uitsluiten
                                $current_product_id = $post->ID;
                                // De query voor gerelateerde producten
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => -1, // Aantal gerelateerde producten om weer te geven
                                    'post__not_in' => array($current_product_id), // Uitsluiten van het huidige product
                                    'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field' => 'id',
                                            'terms' => $category_ids,
                                            'operator' => 'IN',
                                        ),
                                    ),
                                );
                                $related_products = new WP_Query($args);
                                if ($related_products->have_posts()) :
                                    while ($related_products->have_posts()) : $related_products->the_post();  // Informatie over het product ophalen
                                            $product = wc_get_product( get_the_ID() ); ?>
                                            <a href="<?php the_permalink(); ?>" class="h-[24px] w-[24px] rounded-full block relative overflow-hidden" style="background:<?php the_field('colour', get_the_ID());?>;">
                                                <div class="absolute top-0 left-0 right-0 bottom-0 mix-blend-darken overflow-hidden opacity-[0.2]">
                                                    <img src="/wp-content/themes/salgabriel/img/local/leather-v2.png" alt="" class="object-cover object-center">
                                                </div>
                                            </a>
                                    <?php endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    
                        <div class="">
                            <?php
                                // Controleer of WooCommerce actief is
                                if (class_exists('WooCommerce')) {
                                    // Haal de product-ID op
                                    $product_id = get_the_ID(); // Haal de ID van het huidige product op

                                    // Haal het productobject op
                                    $product = wc_get_product($product_id);

                                    // Controleer of het product een variabel product is
                                    if ($product->is_type('variable')) {
                                        // Haal alle variaties van het product op
                                        $variations = $product->get_available_variations();

                                        // Controleer de voorraad van elke variatie
                                        $out_of_stock = true;
                                        foreach ($variations as $variation) {
                                            // Haal de voorraad van de variatie op
                                            $variation_id = $variation['variation_id'];
                                            $variation_product = new WC_Product_Variation($variation_id);
                                            $variation_stock = $variation_product->get_stock_quantity();

                                            // Als een van de variaties voorraad heeft, markeer dan niet als uit voorraad
                                            if ($variation_stock > 0) {
                                                $out_of_stock = false;
                                                break;
                                            }
                                        }

                                        // Als alle variaties uit voorraad zijn, toon dan een bericht
                                        if ($out_of_stock) { ?>
                                        <!-- TEKST VOOR ALS VARIABEL PRODUCT IS UITVERKOCHT -->
                                        <?php
                                        } else { ?>
                                        <!-- TEKST VOOR ALS VARIABEL PRODUCT IS OP VOORRAAD -->
                                        <!-- INFORMATIE -->
                                        <div class="w-full grid gap-[15px] mt-4">
                                            <!-- USP'S -->
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.75" height="13.5" viewBox="0 0 18.75 13.5">
                                                        <path id="shipping-truck-svgrepo-com" d="M16.5,6H3V17.25H4.527a2.625,2.625,0,0,0,5.2,0h5.3a2.625,2.625,0,0,0,5.2,0H21.75V12.439L18.311,9H16.5Zm0,4.5v4A2.628,2.628,0,0,1,20,15.75h.253V13.061L17.689,10.5ZM15,15.75V7.5H4.5v8.25h.253a2.626,2.626,0,0,1,4.745,0ZM17.625,18a1.125,1.125,0,1,1,1.125-1.125A1.125,1.125,0,0,1,17.625,18ZM8.25,16.875A1.125,1.125,0,1,1,7.125,15.75,1.125,1.125,0,0,1,8.25,16.875Z" transform="translate(-3 -6)" fill="#2e2e2e" fill-rule="evenodd"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Free shipping*</p>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.939" height="13.214" viewBox="0 0 14.939 13.214">
                                                        <path id="love" d="M10.194,4A4.152,4.152,0,0,0,7.17,5.313,4.145,4.145,0,0,0,0,8.145c0,4.127,6.657,8.178,6.946,8.337a.448.448,0,0,0,.462,0c.276-.159,6.932-4.21,6.932-8.337A4.149,4.149,0,0,0,10.194,4ZM7.17,15.57C6.011,14.831.9,11.376.9,8.145A3.249,3.249,0,0,1,6.8,6.279a.448.448,0,0,0,.733,0,3.249,3.249,0,0,1,5.908,1.866C13.443,11.374,8.328,14.828,7.17,15.57Z" transform="translate(0.3 -3.641)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.6"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Handmade products made with love</p>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.658" height="17.456" viewBox="0 0 16.658 17.456">
                                                        <path id="box2-svgrepo-com" d="M17.274,3.753,9.585.926,1.606,3.854V14.743l7.979,2.895,7.979-2.895V3.859l-.29-.106ZM9.289,16.9,2.2,14.328V4.491L9.289,7.064Zm.3-10.359L2.752,4.063,9.585,1.556l6.826,2.51L9.585,6.542Zm7.388,7.786L9.88,16.9V7.064L16.973,4.5Z" transform="translate(-1.256 -0.553)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.7"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Signature packaging</p>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        } else {
                                            // Voor niet-variabele producten, controleer voorraad op dezelfde manier als eerder
                                            $voorraad = $product->get_stock_quantity();
                                            if ($voorraad <= 0) {?>
                                        <!-- TEKST VOOR ALS STANDAARD PRODUCT IS UITVERKOCHT -->
                                        <?php
                                        } else { ?>
                                        <!-- TEKST VOOR ALS STANDAARD PRODUCT IS OP VOORRAAD -->
                                        <!-- INFORMATIE -->
                                        <div class="w-full grid gap-[15px] mt-4">
                                            <!-- USP'S -->
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.75" height="13.5" viewBox="0 0 18.75 13.5">
                                                        <path id="shipping-truck-svgrepo-com" d="M16.5,6H3V17.25H4.527a2.625,2.625,0,0,0,5.2,0h5.3a2.625,2.625,0,0,0,5.2,0H21.75V12.439L18.311,9H16.5Zm0,4.5v4A2.628,2.628,0,0,1,20,15.75h.253V13.061L17.689,10.5ZM15,15.75V7.5H4.5v8.25h.253a2.626,2.626,0,0,1,4.745,0ZM17.625,18a1.125,1.125,0,1,1,1.125-1.125A1.125,1.125,0,0,1,17.625,18ZM8.25,16.875A1.125,1.125,0,1,1,7.125,15.75,1.125,1.125,0,0,1,8.25,16.875Z" transform="translate(-3 -6)" fill="#2e2e2e" fill-rule="evenodd"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Free shipping*</p>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.939" height="13.214" viewBox="0 0 14.939 13.214">
                                                        <path id="love" d="M10.194,4A4.152,4.152,0,0,0,7.17,5.313,4.145,4.145,0,0,0,0,8.145c0,4.127,6.657,8.178,6.946,8.337a.448.448,0,0,0,.462,0c.276-.159,6.932-4.21,6.932-8.337A4.149,4.149,0,0,0,10.194,4ZM7.17,15.57C6.011,14.831.9,11.376.9,8.145A3.249,3.249,0,0,1,6.8,6.279a.448.448,0,0,0,.733,0,3.249,3.249,0,0,1,5.908,1.866C13.443,11.374,8.328,14.828,7.17,15.57Z" transform="translate(0.3 -3.641)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.6"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Handmade products made with love</p>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="w-[37px] h-[28px] flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.658" height="17.456" viewBox="0 0 16.658 17.456">
                                                        <path id="box2-svgrepo-com" d="M17.274,3.753,9.585.926,1.606,3.854V14.743l7.979,2.895,7.979-2.895V3.859l-.29-.106ZM9.289,16.9,2.2,14.328V4.491L9.289,7.064Zm.3-10.359L2.752,4.063,9.585,1.556l6.826,2.51L9.585,6.542Zm7.388,7.786L9.88,16.9V7.064L16.973,4.5Z" transform="translate(-1.256 -0.553)" fill="#2e2e2e" stroke="#2e2e2e" stroke-width="0.7"/>
                                                    </svg>
                                                </div>
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Signature packaging</p>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            }
                                } else { ?>
                                <!-- TEKST VOOR ALS ALLE GEVALLEN NIET VAN TOEPASSING ZIJN -->
                                <?php
                                }
                            ?>
                        

                            <!-- PRODUCT TOEVOEGEN -->
                            <div class="pt-3 flex flex-col lg:flex-row w-full lg:items-end">
                                <?php
                                    // Controleer of WooCommerce actief is
                                    if (class_exists('WooCommerce')) {
                                        // Haal de product-ID op
                                        $product_id = get_the_ID(); // Haal de ID van het huidige product op

                                        // Haal het productobject op
                                        $product = wc_get_product($product_id);

                                        // Controleer of het product een variabel product is
                                        if ($product->is_type('variable')) {
                                            // Haal alle variaties van het product op
                                            $variations = $product->get_available_variations();

                                            // Controleer de voorraad van elke variatie
                                            $out_of_stock = true;
                                            foreach ($variations as $variation) {
                                                // Haal de voorraad van de variatie op
                                                $variation_id = $variation['variation_id'];
                                                $variation_product = new WC_Product_Variation($variation_id);
                                                $variation_stock = $variation_product->get_stock_quantity();

                                                // Als een van de variaties voorraad heeft, markeer dan niet als uit voorraad
                                                if ($variation_stock > 0) {
                                                    $out_of_stock = false;
                                                    break;
                                                }
                                            }

                                            // Als alle variaties uit voorraad zijn, toon dan een bericht
                                            if ($out_of_stock) { ?>
                                            <!-- TEKST VOOR ALS VARIABEL PRODUCT IS UITVERKOCHT -->
                                            <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                                            <?php
                                            } else { ?>
                                            <!-- TEKST VOOR ALS VARIABEL PRODUCT IS OP VOORRAAD -->
                                            <?php
                                            global $product;
                                            if ($product->is_type('variable')) { ?>
                                                <div class="product-add-single lg:mr-[10px] xl:mr-[15px order-2 lg:order-1">
                                                    <?php woocommerce_template_single_add_to_cart(); ?>
                                                </div>
                                            <?php
                                            } else { ?>
                                                <div class="simple lg:mr-[10px] xl:mr-[15px] order-2 lg:order-1">
                                                    <?php woocommerce_template_single_add_to_cart(); ?>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                                }
                                            } else {
                                                // Voor niet-variabele producten, controleer voorraad op dezelfde manier als eerder
                                                $voorraad = $product->get_stock_quantity();
                                                if ($voorraad <= 0) {?>
                                            <!-- TEKST VOOR ALS STANDAARD PRODUCT IS UITVERKOCHT -->
                                            <div class="product-out-of-stock lg:mr-[10px] xl:mr-[15px order-2 lg:order-1  w-[360px] md:w-[359px] lg:w-[420px] xl:w-[475px]">
                                                <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                                            </div>
                                            <?php
                                            } else { ?>
                                            <!-- TEKST VOOR ALS STANDAARD PRODUCT IS OP VOORRAAD -->
                                            <?php
                                                global $product;
                                                if ($product->is_type('variable')) { ?>
                                                    <div class="product-add-single lg:mr-[10px] xl:mr-[15px order-2 lg:order-1 ">
                                                        <?php woocommerce_template_single_add_to_cart(); ?>
                                                    </div>
                                                <?php
                                                } else { ?>
                                                    <div class="simple lg:mr-[10px] xl:mr-[15px] order-2 lg:order-1">
                                                        <?php woocommerce_template_single_add_to_cart(); ?>
                                                    </div>
                                                <?php
                                                }
                                            ?>
                                            <?php
                                                    }
                                                }
                                    } else { ?>
                                    <!-- TEKST VOOR ALS ALLE GEVALLEN NIET VAN TOEPASSING ZIJN -->
                                    <?php
                                    }
                                ?>
                                <div class="hidden md:flex order-1 lg:order-2 mb-[15px] lg:mb-[unset]">
                                    <button class="add-favorite h-[47px] w-[47px] xl:h-[52px] xl:w-[52px] border-[1px] border-[#8D8D8D] md:hover:bg-[#f8f8f8] duration-300 flex justify-center items-center rounded-[2px] xl:rounded-[3px] md:mr-[10px] xl:mr-15px <?php echo str_contains($actual_link, 'wishlist') ? "close-button-favorite" : "" ?> " id-data="<?php echo $product->get_id(); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.917" height="16.551" viewBox="0 0 18.917 16.551">
                                            <path id="love" d="M13.449,4a5.477,5.477,0,0,0-3.99,1.732A5.468,5.468,0,0,0,0,9.468c0,5.445,8.782,10.789,9.163,11a.591.591,0,0,0,.609,0c.364-.21,9.145-5.554,9.145-11A5.474,5.474,0,0,0,13.449,4ZM9.458,19.264c-1.528-.975-8.276-5.533-8.276-9.8A4.286,4.286,0,0,1,8.974,7.006a.591.591,0,0,0,.967,0,4.286,4.286,0,0,1,7.794,2.462C17.735,13.727,10.987,18.285,9.458,19.264Z" transform="translate(0 -4)" fill="#2e2e2e"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.504" height="16.951" viewBox="0 0 19.504 16.951">
                                            <path id="Path_592" data-name="Path 592" d="M-11314.768-14707.125l-1.353-1.451-2.273-.832-2.089.131-1.46.7-1.46,1.172-1.092,2.137.166,2.663,1.045,2.448,2.65,3.053,5.159,4.194.706.363,3.294-2.229,2.932-2.633,2.824-3.62.728-2.6-.231-2.114-.922-1.666-1.845-1.45-2.5-.643-2.43.643Z" transform="translate(11324.494 14709.497)" fill="#2e2e2e"/>
                                        </svg>
                                    </button>
                                    <button id="share-button" class="h-[47px] w-[47px] xl:h-[52px] xl:w-[52px] border-[1px] border-[#8D8D8D] md:hover:bg-[#f8f8f8] duration-300 flex justify-center items-center rounded-[2px] xl:rounded-[3px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.789" height="13.339" viewBox="0 0 16.789 13.339">
                                            <path id="Vector" d="M8.765,11.747l2.9-2.9m0,0,2.9,2.9m-2.9-2.9V14.65M4,14.65v5.962H19.489V14.65" transform="translate(-3.35 -7.924)" fill="none" stroke="#2e2e2e" stroke-linecap="round" stroke-width="1.3"/>
                                        </svg>
                                    </button>
                                </div>
                                <p id="share-button-mobile" class="cursor-pointer w-full text-center order-3 md:hidden mt-[20px] font-jost text-14 leading-24 tracking-[0.05em] font-normal underline text-[#B7B7B7]">Share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mt-[80px] lg:flex lg:justify-between">
            <div class="w-full lg:w-[410px]">
                <div class="w-[306px]">
                    <h2 class="text-[#121212] font-jost font-bold text-21 leading-25 md:text-24 md:leading-30 xl:text-26 xl:leading-30 uppercase tracking-[0.07em] mt-[8px]">Product <br><span class="font-syne">information</span></h2>
                </div>
            </div>
            <div class="w-full lg:w-[840px] mt-[20px] lg:mt-[unset]">
                <?php
                if( have_rows('tabs') ):
                    while( have_rows('tabs') ) : the_row(); ?>
                    <div class="accordion-item"> 
                        <button class="accordion text-black text-15 leading-26 lg:text-16 lg:leading-28 tracking-[0.025em] font-jost pr-2 md:pr-3 lg:pr-4 py-2">
                            <span class="pr-4"><?php echo get_sub_field('title');?></span>
                        </button>
                        <div class="panel">
                            <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4 grid gap-[20px] h-fit">
                                <?php if (get_sub_field('text')): ?>   
                                <div class="text-black text-15 leading-26 lg:text-16 lg:leading-28 tracking-[0.025em] font-jost w-full text-editor"><?php echo get_sub_field('text');?></div>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </section>

    <section>
        <hr class="border-[#DDDDDD] my-[80px]">
        <div class="container text-center mb-[40px]">
            <h2 class="font-jost font-semibold text-18 leading-25 lg:text-22 lg:leading-25 text-[#000000] tracking-[0.025em]">Shop more</h2>
        </div>
         <div class="container grid grid-cols-2 lg:grid-cols-4 gap-x-[8px] md:gap-x-[20px] lg:gap-x-[30px] gap-y-[20px] lg:gap-y-[35px] mb-[90px] md:mb-[100px] lg:mb-[120px] xl:mb-[145px]">
         <?php
         // Huidige product uitsluiten
            $current_product_id = $post->ID;
            // Aangepaste query om alle producten op te halen
            $args = array(
                'post_type' => 'product', // Het posttype van producten
                'posts_per_page' => 4,
                    'post__not_in' => array($current_product_id), // Uitsluiten van het huidige product
                'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
            );
            $products_query = new WP_Query($args);
            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : $products_query->the_post();
            // Informatie over het product ophalen
            $product = wc_get_product(get_the_ID());
            ?>
                <?php include get_template_directory() . '/componenten/product-item.php'; ?>
            <?php
            endwhile;
            // Herstel de oorspronkelijke query
            wp_reset_postdata();
        else :
            echo 'Geen producten gevonden';
        endif;
        ?>
    </div>
    </section>




    <section class="mb-[90px] mt-[180px]">
        <hr class="w-[194px] border-[#DDDDDD] mx-auto">
        <div class="h-[87px] lg:h-[112px] w-fit mx-auto mt-[50px] md:mt-[60px] lg:mt-[40px] xl:mt-[50px]">
            <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/SalGabriel-Smybol.png" alt="" class="h-[87px] lg:h-[112px] w-[87px] lg:w-[112px]"> 
        </div>

    </section>
     <a href="?add-to-cart=<?php echo esc_html( get_the_ID() ); ?>" id="off-screen-add-to-cart" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="hide fixed bottom-2 right-2 h-[55px] md:h-[47px] xl:h-[52px] bg-[#2E2E2E] rounded-[2px] xl:rounded-[3px] font-jost font-normal text-white text-15 xl:text-16 tracking-[0.02em] xl:tracking-[0.025em] w-[360px] md:w-[359px] lg:w-[420px] xl:w-[475px] flex items-center justify-center">
        <svg class="mr-[15px]" xmlns="http://www.w3.org/2000/svg" width="13.244" height="12.125" viewBox="0 0 13.244 12.125">
            <path id="shopping-bag" d="M16.1,8.26a.449.449,0,0,0-.349-.169H13.436A3.473,3.473,0,0,0,10.048,5H9.136A3.473,3.473,0,0,0,5.748,8.091H3.432a.449.449,0,0,0-.355.167.49.49,0,0,0-.1.391l1.223,7.2a1.5,1.5,0,0,0,1.462,1.272h7.861a1.5,1.5,0,0,0,1.462-1.274l1.223-7.2A.489.489,0,0,0,16.1,8.26ZM9.136,5.951h.913a2.54,2.54,0,0,1,2.466,2.14H6.669A2.54,2.54,0,0,1,9.136,5.951Zm4.953,9.734a.579.579,0,0,1-.566.49H5.661a.579.579,0,0,1-.563-.487L3.975,9.042H15.208Z" transform="translate(-2.969 -5)" fill="#fff"/>
        </svg>
        Add to bag</a>
    


     <div id="share-section" class="top-0 left-0 right-0 bottom-0 bg-[#0a1f1654] justify-center items-center z-[9999]">
        <div class="w-[360px] md:w-[686px] lg:w-[686px] xl:w-[715px] bg-white">
            <div class="w-full flex justify-end pt-[20px] pr-[20px]">
                <button id="share-close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.999" height="13.999" viewBox="0 0 13.999 13.999">
                            <g id="close-svgrepo-com" transform="translate(-6.439 -6.439)">
                                <path id="Path_18" data-name="Path 18" d="M7.5,7.5,19.378,19.378" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"></path>
                                <path id="Path_19" data-name="Path 19" d="M19.378,7.5,7.5,19.378" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"></path>
                            </g>
                        </svg>
                </button>
            </div>
            <div class="px-[20px] lg:px-[50px] pt-[30px] pb-[50px]">
                <h2 class="font-jost text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.05em] text-[#000000] font-normal md:font-bold uppercase">Share this</h2>
                <p class="font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em] mt-[15px]">Link:</p>
                <div class="flex mt-[8px]">
                    <!-- Inputveld voor de volledige URL -->
                    <input class="w-[calc(100%-52px)] h-[52px] flex items-center bg-[#f3f3f3] px-[15px]" type="text" id="urlInput" value="<?php echo htmlspecialchars("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>" readonly>
                    <!-- Knop om de URL naar klembord te kopiëren -->
                    <button class="flex justify-center items-center h-[52px] w-[52px] bg-[#f3f3f3]" onclick="copyToClipboard()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.7" height="20" viewBox="0 0 25.7 20">
                            <path id="link-solid" d="M41.723,31.342A6.149,6.149,0,0,0,33.8,21.991l-.068.047a1.359,1.359,0,1,0,1.582,2.211l.068-.047A3.427,3.427,0,0,1,39.8,29.416L35.025,34.2a3.427,3.427,0,0,1-5.214-4.414l.047-.068a1.359,1.359,0,0,0-2.211-1.582L27.6,28.2a6.146,6.146,0,0,0,9.347,7.918Zm-22.1-1A6.149,6.149,0,0,0,27.549,39.7l.068-.047a1.359,1.359,0,1,0-1.582-2.211l-.068.047a3.429,3.429,0,0,1-4.414-5.218l4.771-4.776a3.429,3.429,0,0,1,5.214,4.418l-.047.068A1.359,1.359,0,1,0,33.7,33.562l.047-.068A6.147,6.147,0,0,0,24.4,25.572Z" transform="translate(-17.825 -20.845)"/>
                        </svg>
                    </button>
                </div>         
            </div>
        </div>
    </div>
</main>


<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var addToCartButton = document.querySelector('.single_add_to_cart_button');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            var variationSelects = document.querySelectorAll('.variations select');
            variationSelects.forEach(function(select) {
                select.value = '';  // Leeg maken van de selectie
            });
        });
    }
});
</script>

 <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Functie om classes te toggelen
            function toggleClasses() {
                var addToCartButton = document.getElementById('add-to-cart');
                var offScreenAddToCartButton = document.getElementById('off-screen-add-to-cart');

                // Controleer of de add-to-cart button buiten het scherm is
                var isOffScreen = (addToCartButton.getBoundingClientRect().top < 60);

                // Toggle de classes based op de positie van de add-to-cart button
                if (isOffScreen) {
                    offScreenAddToCartButton.classList.add('show');
                    offScreenAddToCartButton.classList.remove('hide');
                } else {
                    offScreenAddToCartButton.classList.remove('show');
                    offScreenAddToCartButton.classList.add('hide');
                }
            }

            // Voeg een event listener toe voor het scrollen om de classes te updaten
            window.addEventListener('scroll', toggleClasses);

            // Roep de functie ook een keer aan bij het laden van de pagina
            toggleClasses();
        });
    </script>

    <script>
function copyToClipboard() {
    // Selecteer het inputveld
    var input = document.getElementById("urlInput");
    // Selecteer de tekst in het inputveld
    input.select();
    // Kopieer de geselecteerde tekst naar het klembord
    document.execCommand("copy");
    // Geef feedback dat de URL is gekopieerd
    alert("URL has been copied to clipboard: " + input.value);
}
</script>


<script>
document.getElementById("share-button").addEventListener("click", function() {
    // Toggle de klassen in het hoofdelement
    document.querySelector("main").classList.toggle("share-open");
    document.querySelector("main").classList.toggle("share-close");
});

document.getElementById("share-close-button").addEventListener("click", function() {
    // Toggle de klassen in het hoofdelement
    document.querySelector("main").classList.toggle("share-open");
    document.querySelector("main").classList.toggle("share-close");
});
document.getElementById("share-button-mobile").addEventListener("click", function() {
    // Toggle de klassen in het hoofdelement
    document.querySelector("main").classList.toggle("share-open");
    document.querySelector("main").classList.toggle("share-close");
});
</script>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
