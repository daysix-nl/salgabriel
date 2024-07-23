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

<main class="relative">
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
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Free shipping on orders above €85</p>
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
                                                <p class="text-[#3C3C3C] text-16 leading-28 font-jost w-full tracking-[0.025em]">Free shipping on orders above €85</p>
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
                                    <button id="shareButton" class="h-[47px] w-[47px] xl:h-[52px] xl:w-[52px] border-[1px] border-[#8D8D8D] md:hover:bg-[#f8f8f8] duration-300 flex justify-center items-center rounded-[2px] xl:rounded-[3px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.789" height="13.339" viewBox="0 0 16.789 13.339">
                                            <path id="Vector" d="M8.765,11.747l2.9-2.9m0,0,2.9,2.9m-2.9-2.9V14.65M4,14.65v5.962H19.489V14.65" transform="translate(-3.35 -7.924)" fill="none" stroke="#2e2e2e" stroke-linecap="round" stroke-width="1.3"/>
                                        </svg>
                                    </button>
                                </div>
                                <p class="w-full text-center order-3 md:hidden mt-[20px] font-jost text-14 leading-24 tracking-[0.05em] font-normal underline text-[#B7B7B7]">Share</p>
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
                                <div class="text-black text-15 leading-26 lg:text-16 lg:leading-28 tracking-[0.025em] font-jost lg:max-w-[685px] md:max-w-[604px] max-w-[246px] text-editor"><?php echo get_sub_field('text');?></div>
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




    <section class="mb-[90px] mt-[180px]">
        <hr class="w-[194px] border-[#DDDDDD] mx-auto">
         <div class="h-[87px] lg:h-[112px] w-fit mx-auto mt-[50px] md:mt-[60px] lg:mt-[40px] xl:mt-[50px]">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="auto" height="100%" viewBox="0 0 113.265 113.264">
                <defs>
                    <clipPath id="clip-path">
                    <rect id="Rectangle_481" data-name="Rectangle 481" width="40.662" height="35.763" fill="none" stroke="#000" stroke-width="0.5"/>
                    </clipPath>
                </defs>
                <g id="Group_335" data-name="Group 335" transform="translate(-292.311 -3392.75)">
                    <g id="Group_242" data-name="Group 242" transform="translate(292.562 3393)">
                    <g id="Group_240" data-name="Group 240" transform="translate(0 0)">
                        <path id="Path_547" data-name="Path 547" d="M62.083,5.586A56.382,56.382,0,1,1,5.7,61.968,56.382,56.382,0,0,1,62.083,5.586Z" transform="translate(-5.701 -5.586)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_548" data-name="Path 548" d="M451.973,65.05l.1-.039,43.16,103.683-.1.039Z" transform="translate(-417.27 -60.335)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_549" data-name="Path 549" d="M519.184,41.183l.1-.03L551.863,148.6l-.1.03Z" transform="translate(-479.192 -38.354)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_550" data-name="Path 550" d="M585.69,24.642l.1-.02L607.9,134.68l-.1.02Z" transform="translate(-540.466 -23.124)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_551" data-name="Path 551" d="M657.635,14.108l.1-.01,10.789,111.724-.1.01Z" transform="translate(-606.75 -13.428)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_552" data-name="Path 552" d="M726.182,10.885h.1v112.24h-.1Z" transform="translate(-669.903 -10.468)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_553" data-name="Path 553" d="M666.112,14.364l.1.01L654.994,126.056l-.1-.01Z" transform="translate(-604.222 -13.673)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_554" data-name="Path 554" d="M610.05,24.1l.1.02L588.459,134.259l-.1-.02Z" transform="translate(-542.923 -22.641)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_555" data-name="Path 555" d="M549.684,41.9l.1.03L516.814,149.257l-.1-.03Z" transform="translate(-476.918 -39.041)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_556" data-name="Path 556" d="M493.862,65.635l.1.039-43.4,103.585-.1-.039Z" transform="translate(-415.879 -60.91)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_557" data-name="Path 557" d="M440.616,95.529l.091.048L387.36,194.449l-.091-.048Z" transform="translate(-357.657 -88.452)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_558" data-name="Path 558" d="M387.671,132.7l.085.057L325.49,225.766l-.085-.057Z" transform="translate(-300.25 -122.694)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_559" data-name="Path 559" d="M340.914,173.983l.079.065-71.005,86.509-.079-.065Z" transform="translate(-249.12 -160.733)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_560" data-name="Path 560" d="M299.1,218.808l.072.072-78.821,79.448-.072-.072Z" transform="translate(-203.4 -202.031)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_561" data-name="Path 561" d="M258.162,272.129l.065.079-86.476,71.05-.065-.079Z" transform="translate(-158.626 -251.157)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_562" data-name="Path 562" d="M223.281,327.706l.057.085-93,62.3-.057-.085Z" transform="translate(-120.479 -302.361)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_563" data-name="Path 563" d="M192.289,388.794l.048.091-98.8,53.421-.048-.091Z" transform="translate(-86.583 -359.015)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_564" data-name="Path 564" d="M166.685,452.906l.039.1L63.134,496.329l-.039-.1Z" transform="translate(-58.579 -418.082)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_565" data-name="Path 565" d="M146.49,519.959l.03.1L39.147,552.83l-.03-.1Z" transform="translate(-36.488 -479.859)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_566" data-name="Path 566" d="M132.2,587.884l.02.1L22.165,610.066l-.02-.1Z" transform="translate(-20.851 -542.439)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_567" data-name="Path 567" d="M123.653,656.024l.01.1L12,667.483l-.01-.1Z" transform="translate(-11.497 -605.218)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_568" data-name="Path 568" d="M120.653,728.124v.1l-112.234.01v-.1Z" transform="translate(-8.205 -671.645)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_569" data-name="Path 569" d="M123.6,667.965l-.01.1L11.922,656.821l.01-.1Z" transform="translate(-11.433 -605.857)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_570" data-name="Path 570" d="M132.2,610.063l-.02.1L22.122,588.1l.02-.1Z" transform="translate(-20.83 -542.546)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_571" data-name="Path 571" d="M146.448,552.967l-.03.1L39.032,520.338l.03-.1Z" transform="translate(-36.409 -480.117)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_572" data-name="Path 572" d="M166.557,496.639l-.039.1L62.9,453.482l.039-.1Z" transform="translate(-58.396 -418.525)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_573" data-name="Path 573" d="M192.311,442.264l-.048.091-98.8-53.412.048-.091Z" transform="translate(-86.555 -359.068)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_574" data-name="Path 574" d="M222.238,391.646l-.057.085-93.205-61.992.057-.085Z" transform="translate(-119.276 -304.155)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_575" data-name="Path 575" d="M257.975,343.485l-.065.079-86.523-70.993.065-.079Z" transform="translate(-158.35 -251.491)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_576" data-name="Path 576" d="M297.711,299.714l-.072.072-79.095-79.175.072-.072Z" transform="translate(-201.797 -203.626)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_577" data-name="Path 577" d="M340.811,260.641l-.079.065-71.039-86.481.079-.065Z" transform="translate(-248.921 -160.896)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_578" data-name="Path 578" d="M389.245,224.712l-.085.057-61.988-93.2.085-.057Z" transform="translate(-301.878 -121.604)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_579" data-name="Path 579" d="M439.346,195.13l-.091.049-53.6-98.735.091-.049Z" transform="translate(-356.169 -89.25)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_580" data-name="Path 580" d="M108.147,55.213A52.787,52.787,0,1,1,55.362,108,52.786,52.786,0,0,1,108.147,55.213Z" transform="translate(-51.455 -51.308)" fill="#fff" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                        <path id="Path_581" data-name="Path 581" d="M329.543,299.478a33.671,33.671,0,1,1-33.653,33.671A33.662,33.662,0,0,1,329.543,299.478Z" transform="translate(-273.057 -276.354)" fill="none" stroke="#000" stroke-width="0.5" fill-rule="evenodd"/>
                    </g>
                    <path id="Path_582" data-name="Path 582" d="M210.046,153.2l.817,4.306-.775.147-.973-5.126,10.426-1.98.156.819Zm6.548-9.447-2.123-4.381-3.247,1.575,1.991,4.108-.709.344-1.991-4.108-4.174,2.025,2.123,4.381-.709.344-2.123-4.381h0l-.364-.751,9.549-4.632.364.751h0l2.123,4.381Zm-14.621-5.416,8.3-6.617.52.652-8.3,6.617ZM204,129.3a2.833,2.833,0,0,1-3.072,1.017,4.182,4.182,0,0,1-1.08-.474l-.323,5.53-.8-.648.393-5.415-1.082-.875-2.8,3.469-.649-.524,6.669-8.258.649.524,1.238,1a4.456,4.456,0,0,1,1.2,1.441,3.02,3.02,0,0,1,.339,1.62A2.872,2.872,0,0,1,204,129.3Zm-.391-2.968a3.517,3.517,0,0,0-.937-1.108l-1.238-1-2.934,3.634,1.238,1a3.656,3.656,0,0,0,1.281.694,2.139,2.139,0,0,0,1.256,0,2.258,2.258,0,0,0,1.076-.778,2.189,2.189,0,0,0,.523-1.215A2.268,2.268,0,0,0,203.608,126.331Zm-11.048-3.884a2.346,2.346,0,0,1-1.29.315,3.56,3.56,0,0,1-.469-.045c.084.058.167.119.247.183a3.6,3.6,0,0,1,.826.913,2.619,2.619,0,0,1,.385,1.123,2.592,2.592,0,0,1-.216,1.283,3.054,3.054,0,0,1-1.087,1.419,2.73,2.73,0,0,1-1.546.454,4.69,4.69,0,0,1-1.814-.4l-2.266-.948,4.1-9.794,2.126.89a4.258,4.258,0,0,1,1.406.9,2.323,2.323,0,0,1,.655,1.2,2.505,2.505,0,0,1-.2,1.455A2.121,2.121,0,0,1,192.56,122.447Zm-6.173,3.935,1.5.626a3.407,3.407,0,0,0,1.406.293,2.112,2.112,0,0,0,1.174-.372,2.4,2.4,0,0,0,.814-1.082,2.228,2.228,0,0,0,.188-1,2.072,2.072,0,0,0-.265-.9,2.718,2.718,0,0,0-.618-.743,3.365,3.365,0,0,0-.886-.535l-1.5-.626Zm6.207-6.765a2.554,2.554,0,0,0-1.327-1.09l-1.357-.568-1.422,3.4,1.357.568a3.158,3.158,0,0,0,1.125.257,1.8,1.8,0,0,0,.986-.237,1.856,1.856,0,0,0,.638-2.331ZM187.619,199.6a6.247,6.247,0,0,1,1.112,4.224,5.054,5.054,0,0,1-1.977,3.478,5.4,5.4,0,0,1-1.928.924,5.607,5.607,0,0,1-1.807.194,4.711,4.711,0,0,1-1.6-.386,4.963,4.963,0,0,1-1.366-.9l.451-.668a4.031,4.031,0,0,0,1.8,1,4.443,4.443,0,0,0,2.309-.044,4.3,4.3,0,0,0,3.138-3.117,5.2,5.2,0,0,0-1.218-4.627,4.266,4.266,0,0,0-4.267-1.173,4.065,4.065,0,0,0-1.477.7,3.808,3.808,0,0,0-.982,1.122,4.314,4.314,0,0,0-.5,1.388,4.447,4.447,0,0,0-.011,1.508l3.68-.97.2.763-4.559,1.2a6.329,6.329,0,0,1-.2-2.072,5.224,5.224,0,0,1,.511-1.93,4.738,4.738,0,0,1,1.22-1.56,4.812,4.812,0,0,1,1.911-.958,5.4,5.4,0,0,1,2.133-.146,5.05,5.05,0,0,1,3.433,2.052Zm-7.918-77.8-4.551-.4-1.765,3.422-.936-.083,5.639-10.57,3.693,11.4-.936-.083Zm-1.783-5.716-2.361,4.557,3.895.345Zm-3.426,83.193L168.945,209.9l-3.792-11.365.937.075,1.176,3.67,4.555.364,1.735-3.437Zm-6.97,3.81,1.577,4.888,2.321-4.577Zm.5-79.322a4.735,4.735,0,0,1-1.233,1.55,4.812,4.812,0,0,1-1.919.942,5.4,5.4,0,0,1-2.134.128,5.051,5.051,0,0,1-3.415-2.081,6.247,6.247,0,0,1-1.076-4.233,5.053,5.053,0,0,1,2.007-3.46,5.4,5.4,0,0,1,1.936-.907,5.607,5.607,0,0,1,1.808-.178,3.968,3.968,0,0,1,1.526.4,4.413,4.413,0,0,1,1.428.914l-.457.664a4.032,4.032,0,0,0-1.791-1.015,4.444,4.444,0,0,0-2.309.024,4.3,4.3,0,0,0-3.164,3.09,5.2,5.2,0,0,0,1.179,4.638,4.266,4.266,0,0,0,4.257,1.21,4.065,4.065,0,0,0,1.483-.69,3.808,3.808,0,0,0,.992-1.113,4.313,4.313,0,0,0,.517-1.383,4.445,4.445,0,0,0,.023-1.508L164,121.7l-.194-.764,4.569-1.162a6.327,6.327,0,0,1,.183,2.074A5.225,5.225,0,0,1,168.026,123.772Zm-6.434,73.622-4.009,9.83-2.134-.871a4.26,4.26,0,0,1-1.414-.889,2.323,2.323,0,0,1-.666-1.2,2.505,2.505,0,0,1,.185-1.456,2.122,2.122,0,0,1,.848-1.055,2.347,2.347,0,0,1,1.287-.326,3.567,3.567,0,0,1,.47.041c-.085-.057-.168-.117-.249-.18a3.6,3.6,0,0,1-.834-.906,2.529,2.529,0,0,1-.19-2.4,3.055,3.055,0,0,1,1.074-1.429,2.731,2.731,0,0,1,1.542-.468,4.69,4.69,0,0,1,1.817.382Zm-5.6,4.611a1.805,1.805,0,0,0-.984.245,1.857,1.857,0,0,0-.617,2.336,2.554,2.554,0,0,0,1.337,1.078l1.362.556,1.392-3.412-1.362-.556A3.156,3.156,0,0,0,156,202.006Zm1.634-5.132a2.111,2.111,0,0,0-1.171.382,2.4,2.4,0,0,0-.8,1.089,2.228,2.228,0,0,0-.179,1,2.072,2.072,0,0,0,.273.9,2.717,2.717,0,0,0,.624.738,3.369,3.369,0,0,0,.89.527l1.5.613,1.775-4.353-1.5-.613A3.405,3.405,0,0,0,157.629,196.874Zm-12.272,4.011h0L143.8,199.65a4.459,4.459,0,0,1-1.216-1.431,3.019,3.019,0,0,1-.353-1.617,2.871,2.871,0,0,1,.669-1.6,2.832,2.832,0,0,1,3.063-1.043,4.179,4.179,0,0,1,1.084.464l.276-5.532.807.641-.346,5.418,1.09.865,2.771-3.493.653.519-6.6,8.316Zm1.809-5.476a3.656,3.656,0,0,0-1.287-.683,2.14,2.14,0,0,0-1.256.01,2.258,2.258,0,0,0-1.07.787,2.19,2.19,0,0,0-.513,1.219,2.268,2.268,0,0,0,.276,1.226,3.515,3.515,0,0,0,.947,1.1l1.247.99,2.9-3.659Zm-7.062-67.1.616-.562,6.618,7.263,3.238-2.953.531.583-3.854,3.515Zm4,11.274-3.8-.641-2.416,3.88,2.254,3.121-.5.8-6.877-9.809,11.831,1.854Zm-9.7-1.633,3,4.166,2.068-3.32Zm-.72,11.343a2.9,2.9,0,0,1,1-.382,2.775,2.775,0,0,1,1.227.078,2.89,2.89,0,0,1,1.081.533,2.763,2.763,0,0,1,.717.867,2.869,2.869,0,0,1,.318,1.1,3.516,3.516,0,0,1-.116,1.225,3.348,3.348,0,0,1-.786,1.469,3.522,3.522,0,0,1-1.283.865,5.147,5.147,0,0,1-1.521.346l-.233-.769a5.947,5.947,0,0,0,1.334-.294,2.9,2.9,0,0,0,1.079-.661,2.5,2.5,0,0,0,.652-1.176,2.218,2.218,0,0,0-.131-1.707,1.935,1.935,0,0,0-1.247-.939,2.036,2.036,0,0,0-1.291.015,2.674,2.674,0,0,0-.973.673,9.68,9.68,0,0,0-.805.985q-.279.4-.633.812a4.658,4.658,0,0,1-.794.737,2.719,2.719,0,0,1-.977.453,2.4,2.4,0,0,1-1.2-.046,2.425,2.425,0,0,1-1.818-1.916,3.247,3.247,0,0,1,.066-1.505,3.143,3.143,0,0,1,.686-1.331,3.319,3.319,0,0,1,1.041-.781,3.812,3.812,0,0,1,1.127-.342l.207.809a3.347,3.347,0,0,0-.9.253,2.626,2.626,0,0,0-.839.584,2.35,2.35,0,0,0-.558,1.059,1.984,1.984,0,0,0,.093,1.5,1.578,1.578,0,0,0,1.02.792,1.763,1.763,0,0,0,1.056-.015,2.645,2.645,0,0,0,.963-.637,8.283,8.283,0,0,0,.991-1.21,8.857,8.857,0,0,1,.631-.773A3.768,3.768,0,0,1,133.688,149.291Zm2.1,17.568.773-.154,1.017,5.117-10.409,2.07-.163-.818,9.635-1.916Zm-5.612,13.8,2.161,4.362,3.233-1.6-2.027-4.09.706-.35,2.027,4.09,4.156-2.061-2.161-4.362.706-.35,2.161,4.362h0l.37.747-9.508,4.715-.37-.747h0l-2.161-4.362Zm14.667,5.287-8.24,6.69-.525-.648,8.24-6.69Zm61.956,9.5-.611.567-6.679-7.207-3.213,2.98-.536-.578,3.824-3.547Zm-4.1-11.241,3.8.609,2.383-3.9-2.28-3.1.49-.8,6.959,9.75-11.847-1.754Zm9.714,1.551-3.031-4.141-2.04,3.338Zm.623-11.347a2.9,2.9,0,0,1-1,.391,2.775,2.775,0,0,1-1.228-.067,2.889,2.889,0,0,1-1.086-.524,2.764,2.764,0,0,1-.725-.861,2.869,2.869,0,0,1-.327-1.1,3.514,3.514,0,0,1,.106-1.226,3.347,3.347,0,0,1,.773-1.476,3.522,3.522,0,0,1,1.276-.876,5.15,5.15,0,0,1,1.518-.359l.24.767a5.951,5.951,0,0,0-1.332.305,2.9,2.9,0,0,0-1.074.67,2.5,2.5,0,0,0-.642,1.181,2.218,2.218,0,0,0,.146,1.706,1.935,1.935,0,0,0,1.255.928,2.037,2.037,0,0,0,1.291-.026,2.673,2.673,0,0,0,.967-.682,9.66,9.66,0,0,0,.8-.992q.275-.4.626-.817a4.653,4.653,0,0,1,.787-.744,2.723,2.723,0,0,1,.973-.461,2.4,2.4,0,0,1,1.2.036,2.426,2.426,0,0,1,1.834,1.9,3.245,3.245,0,0,1-.053,1.506,3.143,3.143,0,0,1-.675,1.337,3.318,3.318,0,0,1-1.034.79,3.807,3.807,0,0,1-1.124.351l-.214-.807a3.344,3.344,0,0,0,.9-.261,2.625,2.625,0,0,0,.834-.591,2.35,2.35,0,0,0,.549-1.064,1.984,1.984,0,0,0-.105-1.5,1.578,1.578,0,0,0-1.027-.783,1.764,1.764,0,0,0-1.055.024,2.644,2.644,0,0,0-.958.645,8.288,8.288,0,0,0-.981,1.219,8.845,8.845,0,0,1-.624.778A3.769,3.769,0,0,1,213.042,174.408Z" transform="translate(-116.605 -105.161)" fill-rule="evenodd"/>
                    </g>
                </g>
                <g id="Group_336" data-name="Group 336" transform="translate(36.301 38.75)">
                    <g id="Group_325" data-name="Group 325" clip-path="url(#clip-path)">
                    <path id="Path_604" data-name="Path 604" d="M20.32,34.723a.008.008,0,0,0,.011,0l0,0q.1-.308.185-.586c.1-.34.235-.651.354-.982q.075-.208.176-.422l.557-1.175a7.074,7.074,0,0,1,1.335-1.929A7.474,7.474,0,0,1,24.468,28.5a6.043,6.043,0,0,1,2.293-.827,2.958,2.958,0,0,1,.4-.031h.38c.127,0,.239.033.362.039a1.109,1.109,0,0,1,.147.018,9.852,9.852,0,0,1,2.245.716q.362.167.953.511a10.381,10.381,0,0,1,1.238.865q.442.355.846.725.625.574,1.361,1.282a2.821,2.821,0,0,1,.281.315A4.1,4.1,0,0,0,37,33.656a2.082,2.082,0,0,0,1.255-.009,2.293,2.293,0,0,0,1.5-1.742,2.741,2.741,0,0,0,.034-1.094A3.979,3.979,0,0,0,38.457,28.6a14.777,14.777,0,0,0-1.36-1.108q-.291-.214-.6-.47c-.289-.239-.595-.477-.892-.717q-.687-.555-1.427-1.137c-.144-.113-.277-.234-.418-.349a.066.066,0,0,0-.081,0,4.179,4.179,0,0,1-1.325.645,8.24,8.24,0,0,1-1.3.276l-.457.059a3.4,3.4,0,0,1-.348.029c-.159,0-.3.039-.467.041a11.122,11.122,0,0,1-1.218-.026c-.2-.021-.4-.015-.609-.039l-.384-.043q-.207-.022-.383-.052-.617-.105-1.107-.217a6.109,6.109,0,0,1-1.127-.39,9.536,9.536,0,0,1-2.6-1.737,3.241,3.241,0,0,1-.5-.581,7.843,7.843,0,0,1-.408-.7,5.705,5.705,0,0,1-.378-.887q-.134-.417-.242-.909a1.313,1.313,0,0,1-.028-.2c-.007-.1-.041-.194-.04-.3,0-.208-.044-.408-.042-.617a5.133,5.133,0,0,1,.019-.615,3,3,0,0,0,.024-.368c0-.131.036-.253.043-.386a1.651,1.651,0,0,1,.021-.193q.017-.1.031-.2a6.564,6.564,0,0,1,.194-.9q.164-.573.384-1.133a5.644,5.644,0,0,1,.379-.781,11.6,11.6,0,0,1,.826-1.247,23.658,23.658,0,0,1,1.856-2.117,7.96,7.96,0,0,1,1.129-.946q.592-.41,1.166-.74,1.394-.8,2.615-1.373.378-.177.774-.346a11.24,11.24,0,0,0,1.282-.649q.525-.309,1.072-.611a7.85,7.85,0,0,0,.716-.442A7.712,7.712,0,0,0,34.755,4.8a3.139,3.139,0,0,0,.683-1.377,2.009,2.009,0,0,0,.053-.7,6.186,6.186,0,0,0-.134-.689,2.04,2.04,0,0,0-1.919-1.5,2.29,2.29,0,0,0-.475.017,3.242,3.242,0,0,0-1.18.392q-.18.1-.372.2c-.3.156-.561.337-.842.518a8.985,8.985,0,0,0-1.02.792,12.233,12.233,0,0,0-1.369,1.5q-.272.334-.526.659a8.788,8.788,0,0,1-1.486,1.54,4.434,4.434,0,0,1-3.82,1.026,1.741,1.741,0,0,1-.717-.411,1,1,0,0,1-.318-.565,1.586,1.586,0,0,1,.007-.6,1.523,1.523,0,0,1,.183-.443,1.394,1.394,0,0,1,.912-.617,1.48,1.48,0,0,1,.392-.048,10.713,10.713,0,0,0,1.28-.022q.287-.035.453-.066a3.059,3.059,0,0,0,1.481-.721,8.216,8.216,0,0,0,.716-.717q.432-.488.85-.948a5.7,5.7,0,0,1,.6-.578,6.909,6.909,0,0,1,.586-.423,5.978,5.978,0,0,1,.619-.358A6.508,6.508,0,0,1,31.032.1L31.145.08A1.126,1.126,0,0,1,31.33.058c.114,0,.222-.034.335-.04Q32.011,0,32.392,0A4.606,4.606,0,0,1,34.135.37,2.459,2.459,0,0,1,35.7,2.345q.034.267.041.362a3.558,3.558,0,0,1-.006.684c-.015.114-.021.233-.04.347a4.991,4.991,0,0,1-1.177,2.47A9.246,9.246,0,0,1,33.012,7.6q-.231.168-.45.34a5.49,5.49,0,0,1-.455.322q-.331.209-.654.443-.346.25-.649.448-.5.327-.939.623-.1.066-.193.138t-.17.142q-.76.7-1.5,1.39a14.676,14.676,0,0,0-1.752,1.925q-.561.75-1.194,1.609a6.733,6.733,0,0,0-.455.688,11.213,11.213,0,0,0-.533,1.089,15.865,15.865,0,0,0-.606,1.577q-.21.7-.373,1.419a6.026,6.026,0,0,0-.131.809c-.011.121-.03.233-.037.35a7.393,7.393,0,0,0,0,1.013,3.68,3.68,0,0,0,2.121,2.91,4.176,4.176,0,0,0,1.715.346,5.055,5.055,0,0,0,1.5-.342,12.243,12.243,0,0,0,1.351-.615l.581-.327a6.085,6.085,0,0,0,.536-.334l.546-.387c.134-.1.07-.22-.037-.3a7.859,7.859,0,0,1-.955-.864,7.047,7.047,0,0,1-1.02-1.307,3.2,3.2,0,0,1-.206-.407q-.089-.215-.186-.441a5.012,5.012,0,0,1-.272-.788q-.054-.218-.115-.45a7.762,7.762,0,0,1-.154-.807q-.026-.172-.036-.338-.033-.506-.018-1.017a4.939,4.939,0,0,1,.054-.615q.022-.139.042-.288a8.593,8.593,0,0,1,.581-2.056,6.733,6.733,0,0,1,.36-.75,13.738,13.738,0,0,1,1.142-1.754,7.493,7.493,0,0,1,1.363-1.326,8.244,8.244,0,0,1,1.719-1.016A6.15,6.15,0,0,1,35.069,8.2c.106-.016.218-.025.327-.038a1.913,1.913,0,0,1,.464,0,8.834,8.834,0,0,1,1.037.151,5.3,5.3,0,0,1,1.387.59,2.385,2.385,0,0,1,.321.227,5.044,5.044,0,0,1,1.508,2.036,8.408,8.408,0,0,1,.486,1.846c.032.216.038.427.052.643a4.182,4.182,0,0,1-.01.709c-.015.146-.008.285-.023.431q-.05.5-.078.665-.1.582-.278,1.372a10.607,10.607,0,0,1-.534,1.7,13.127,13.127,0,0,1-.616,1.245q-.222.4-.446.732a13.537,13.537,0,0,1-1.543,1.884,7.659,7.659,0,0,1-1.065.9.015.015,0,0,0,0,.021l0,0c.37.376.85.806,1.263,1.216q.238.237.436.467A13.876,13.876,0,0,1,39.725,28a6.694,6.694,0,0,1,.579,1.745,6.057,6.057,0,0,1,.056.609,4.555,4.555,0,0,1-.038.86,3.827,3.827,0,0,1-.205.8,4.632,4.632,0,0,1-.889,1.5,3.9,3.9,0,0,1-.781.692q-.133.086-.367.22a2.341,2.341,0,0,1-.381.17,2.052,2.052,0,0,1-.409.112,5.9,5.9,0,0,1-1.066.037q-.153-.014-.307-.031a6.8,6.8,0,0,1-.884-.158,5.433,5.433,0,0,1-.766-.269c-.662-.28-1.27-.577-1.935-.925-.641-.336-1.353-.664-1.919-1.012q-.776-.475-1.061-.632a6.785,6.785,0,0,0-1.752-.675,5.412,5.412,0,0,0-.817-.114.018.018,0,0,1-.013-.006.035.035,0,0,0-.025-.011q-.293-.005-.576-.03a6.205,6.205,0,0,0-.705.025,1.7,1.7,0,0,0-.212.02l-.221.033a5.163,5.163,0,0,0-1.174.3,5.848,5.848,0,0,0-.95.49,4.075,4.075,0,0,0-1.221,1.2q-.407.607-.951,1.623a3.149,3.149,0,0,0-.135.3,4.9,4.9,0,0,0-.218.77q-.053.24-.109,0t-.11-.455a3.057,3.057,0,0,0-.277-.675q-.458-.862-.893-1.529a4.943,4.943,0,0,0-.442-.562,4.044,4.044,0,0,0-.891-.731,5.129,5.129,0,0,0-2.132-.745c-.095-.011-.191-.036-.283-.038a6.946,6.946,0,0,0-.773-.025q-.266.023-.565.029a.027.027,0,0,0-.02.009.04.04,0,0,1-.027.012,4.927,4.927,0,0,0-.8.106,6.988,6.988,0,0,0-2.087.869q-.923.582-1.6.92-.652.325-1.207.617-.935.492-1.915.9a4.3,4.3,0,0,1-.641.212,7.283,7.283,0,0,1-.858.158,4.99,4.99,0,0,1-.827.043q-.263-.014-.521-.047a2.279,2.279,0,0,1-.707-.221,4.023,4.023,0,0,1-1.29-1,4.716,4.716,0,0,1-.929-1.652,3.405,3.405,0,0,1-.141-.609,4.467,4.467,0,0,1-.033-1q.012-.117.017-.241A1.737,1.737,0,0,1,.35,29.77a6.963,6.963,0,0,1,.642-1.894,13.936,13.936,0,0,1,1.921-2.881q.2-.236.426-.457c.414-.411.88-.83,1.264-1.216a.015.015,0,0,0,0-.022l0,0a8.274,8.274,0,0,1-1.13-.969,13.574,13.574,0,0,1-1.509-1.865q-.217-.323-.434-.722-.289-.529-.544-1.081-.095-.2-.17-.416A13.127,13.127,0,0,1,.38,16.764c-.117-.525-.222-1.028-.3-1.548-.012-.081,0-.16-.015-.24-.041-.207-.028-.415-.048-.621a6.363,6.363,0,0,1,.012-1.042q.011-.172.038-.345a8.367,8.367,0,0,1,.482-1.8,4.489,4.489,0,0,1,.483-.923A4.985,4.985,0,0,1,2.3,8.952a5.325,5.325,0,0,1,.8-.413A4.162,4.162,0,0,1,4.414,8.2q.181-.017.345-.037a1.967,1.967,0,0,1,.389-.011,5.751,5.751,0,0,1,1.762.406,7.988,7.988,0,0,1,1.53.816,7.787,7.787,0,0,1,2.06,2.014,11.225,11.225,0,0,1,1.26,2.239,9.061,9.061,0,0,1,.438,1.415,8.686,8.686,0,0,1,.163,1.049,8.587,8.587,0,0,1,0,1.377,6.087,6.087,0,0,1-.145.964c-.084.332-.156.674-.267.983a9.621,9.621,0,0,1-.466,1.125,6.014,6.014,0,0,1-.575.865c-.152.2-.328.379-.5.561a8.392,8.392,0,0,1-1.052.954.147.147,0,0,0,0,.227c.188.153.395.285.6.427q.189.132.393.25.389.225.78.435a11.962,11.962,0,0,0,1.242.562,4.062,4.062,0,0,0,2.309.288,6.072,6.072,0,0,0,1.1-.35,2.576,2.576,0,0,0,.821-.553,4.114,4.114,0,0,0,.746-1.033,4.332,4.332,0,0,0,.229-.52,2.591,2.591,0,0,0,.115-.445q.012-.073.027-.148a1.1,1.1,0,0,0,.019-.145,7.3,7.3,0,0,0-.008-1.092q-.013-.143-.028-.289a6.142,6.142,0,0,0-.127-.77,17.027,17.027,0,0,0-.475-1.736q-.206-.578-.556-1.4a.042.042,0,0,0-.007-.011.04.04,0,0,1-.008-.012q-.25-.564-.481-.97a7.61,7.61,0,0,0-.473-.706q-.52-.706-1.048-1.418-.353-.475-.647-.811-.383-.436-.71-.772-.294-.3-.716-.689-.615-.564-1.22-1.128a3.683,3.683,0,0,0-.493-.391Q9.9,9.185,9.348,8.8q-.361-.256-.7-.478c-.367-.241-.684-.49-1.029-.746A9.831,9.831,0,0,1,6.437,6.532,6.686,6.686,0,0,1,5.816,5.8a4.824,4.824,0,0,1-.576-1.067,4.57,4.57,0,0,1-.3-2.229,2.833,2.833,0,0,1,.213-.837A2.46,2.46,0,0,1,6.263.5,4.509,4.509,0,0,1,7.448.089,4.345,4.345,0,0,1,8.227,0a7.225,7.225,0,0,1,.834.026l.217.021q.113.011.222.029a6.556,6.556,0,0,1,1.723.561A6.008,6.008,0,0,1,11.865,1a5.434,5.434,0,0,1,1.117.917q.48.528,1.028,1.144a3.99,3.99,0,0,0,1.756,1.256,4.9,4.9,0,0,0,.5.114,1.64,1.64,0,0,0,.191.026c.154.012.306.042.462.042l.909-.006a1.617,1.617,0,0,1,.475.063,2.38,2.38,0,0,1,.354.137,1.273,1.273,0,0,1,.638.736,1.464,1.464,0,0,1,.076.589.973.973,0,0,1-.206.594,1.69,1.69,0,0,1-.946.589,4.889,4.889,0,0,1-4.4-1.654,11.963,11.963,0,0,1-.8-.926q-.439-.555-.536-.672a12.445,12.445,0,0,0-1.33-1.465A10.186,10.186,0,0,0,9.478,1.272q-.235-.137-.523-.295A4.036,4.036,0,0,0,8.408.724a3.153,3.153,0,0,0-.951-.2,2.617,2.617,0,0,0-.516.038A2.147,2.147,0,0,0,6.448.7,2.034,2.034,0,0,0,5.3,2.056a5.079,5.079,0,0,0-.128.7,1.527,1.527,0,0,0,0,.361,3.082,3.082,0,0,0,.575,1.474,6.814,6.814,0,0,0,1.6,1.484,6.236,6.236,0,0,0,.7.443c.436.234.864.488,1.292.737a10.536,10.536,0,0,0,.989.5c.4.177.805.349,1.2.541q.751.367,1.3.662.5.268,1.115.625a10.319,10.319,0,0,1,2.173,1.59,23.745,23.745,0,0,1,1.762,1.979,12.013,12.013,0,0,1,.97,1.43,5.942,5.942,0,0,1,.374.761,8.685,8.685,0,0,1,.632,2.375q.014.137.033.266c.027.183.019.359.041.542a3.06,3.06,0,0,1,.022.376,4.646,4.646,0,0,1-.014.51c-.028.258-.033.526-.081.774a6.8,6.8,0,0,1-.518,1.654,7.422,7.422,0,0,1-.537.951,2.959,2.959,0,0,1-.5.576c-.172.152-.33.308-.514.45s-.367.281-.552.414q-.245.176-.618.393a7.65,7.65,0,0,1-2,.851,14.4,14.4,0,0,1-1.84.315q-.24.027-.467.033c-.2.006-.393.038-.592.039q-.4,0-.792,0a2.05,2.05,0,0,1-.286-.02c-.185-.026-.362-.022-.547-.046l-.247-.031a5.859,5.859,0,0,1-2.86-.954.069.069,0,0,0-.087,0q-.264.234-.548.457c-.293.229-.569.451-.844.67q-.281.223-.575.461-.268.216-.554.44c-.246.193-.473.4-.736.589a13.8,13.8,0,0,0-1.5,1.227,5.19,5.19,0,0,0-.542.6,3.4,3.4,0,0,0-.725,1.594,2.8,2.8,0,0,0,.37,1.866,2.065,2.065,0,0,0,.728.726,2.446,2.446,0,0,0,2.909-.466,5.611,5.611,0,0,0,.773-.818,3.315,3.315,0,0,1,.311-.355q.709-.684,1.371-1.293.524-.482,1.195-.99a10.491,10.491,0,0,1,1.83-1.1,9.869,9.869,0,0,1,2.07-.687.54.54,0,0,1,.108-.013c.058,0,.1-.036.159-.037a1.305,1.305,0,0,0,.172-.016q.091-.015.18-.021a4.425,4.425,0,0,1,1.167.075,6.127,6.127,0,0,1,1.887.721,11.5,11.5,0,0,1,1.123.74,4.3,4.3,0,0,1,.606.553,6.924,6.924,0,0,1,1.04,1.45q.3.587.7,1.439c.176.378.311.752.451,1.128q.112.3.242.753a.867.867,0,0,1,.032.152.111.111,0,0,0,.032.064M7.374,9.71a3.311,3.311,0,0,0-1.216-.9,2.789,2.789,0,0,0-.839-.222,3.545,3.545,0,0,0-1.706.2,4.527,4.527,0,0,0-.758.415,1.988,1.988,0,0,0-.307.255,3.929,3.929,0,0,0-1.046,1.8,3.059,3.059,0,0,0-.073,1.189,9.018,9.018,0,0,0,1.065,3.28q.555.97,1.094,1.829a15.15,15.15,0,0,0,1.518,2.019,11.459,11.459,0,0,0,1.71,1.6.023.023,0,0,0,.034,0l.664-.718q.234-.254.454-.525.242-.3.429-.555a6.874,6.874,0,0,0,.513-.838,9.638,9.638,0,0,0,.465-1,6.331,6.331,0,0,0,.243-.783,4.172,4.172,0,0,0,.1-.635,3.816,3.816,0,0,0,.007-.651q-.044-.5-.186-1.251a7.353,7.353,0,0,0-.193-.795,9.352,9.352,0,0,0-.36-.977,5.018,5.018,0,0,0-.239-.474,5.157,5.157,0,0,1-.238-.473A7.227,7.227,0,0,0,7.374,9.71m25.947-.043a7.133,7.133,0,0,0-1.133,1.752q-.129.283-.263.526a7.571,7.571,0,0,0-.725,1.9,12.447,12.447,0,0,0-.237,1.35,3.875,3.875,0,0,0-.031.733q.012.173.026.34a2.574,2.574,0,0,0,.053.344,6.377,6.377,0,0,0,.371,1.154,8.569,8.569,0,0,0,.887,1.608,17.461,17.461,0,0,0,1.547,1.8.022.022,0,0,0,.033,0,13.535,13.535,0,0,0,2.5-2.559q.218-.284.422-.591t.385-.6q.422-.678.938-1.568.249-.43.394-.749a7.889,7.889,0,0,0,.5-1.41q.049-.2.188-.876c.012-.059.008-.13.02-.184a2.463,2.463,0,0,0,.06-.753q-.008-.1-.036-.3a3.825,3.825,0,0,0-1.031-2.052A3.419,3.419,0,0,0,36.64,8.65a4.049,4.049,0,0,0-1.228-.073,2.769,2.769,0,0,0-.835.2,3.247,3.247,0,0,0-1.255.891" transform="translate(0 0)" fill="none" stroke="#000" stroke-width="0.5"/>
                    </g>
                </g>
            </svg>
        </div>

    </section>
     <a href="?add-to-cart=<?php echo esc_html( get_the_ID() ); ?>" id="off-screen-add-to-cart" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="hide fixed bottom-2 right-2 h-[55px] md:h-[47px] xl:h-[52px] bg-[#2E2E2E] rounded-[2px] xl:rounded-[3px] font-jost font-normal text-white text-15 xl:text-16 tracking-[0.02em] xl:tracking-[0.025em] w-[360px] md:w-[359px] lg:w-[420px] xl:w-[475px] flex items-center justify-center">
        <svg class="mr-[15px]" xmlns="http://www.w3.org/2000/svg" width="13.244" height="12.125" viewBox="0 0 13.244 12.125">
            <path id="shopping-bag" d="M16.1,8.26a.449.449,0,0,0-.349-.169H13.436A3.473,3.473,0,0,0,10.048,5H9.136A3.473,3.473,0,0,0,5.748,8.091H3.432a.449.449,0,0,0-.355.167.49.49,0,0,0-.1.391l1.223,7.2a1.5,1.5,0,0,0,1.462,1.272h7.861a1.5,1.5,0,0,0,1.462-1.274l1.223-7.2A.489.489,0,0,0,16.1,8.26ZM9.136,5.951h.913a2.54,2.54,0,0,1,2.466,2.14H6.669A2.54,2.54,0,0,1,9.136,5.951Zm4.953,9.734a.579.579,0,0,1-.566.49H5.661a.579.579,0,0,1-.563-.487L3.975,9.042H15.208Z" transform="translate(-2.969 -5)" fill="#fff"/>
        </svg>
        Add to bag</a>

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


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
