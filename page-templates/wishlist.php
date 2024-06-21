<?php
/**
 * Template name: Wishlist
 */


 get_header(); ?>

<main>
    <div class="container flex justify-between mt-[10px] mb-[20px] md:mt-[35px] md:mb-[38px] xl:mt-[40px] xl:mb-[45px]">
        <div class="">
            <p class="text-15 leading-23 xl:text-16 xl:leading-25 tracking-[0.15em] font-jost font-normal uppercase">My favourites</p>
        </div>
    </div>
    <div class="container grid grid-cols-2 lg:grid-cols-4 gap-x-[8px] md:gap-x-[20px] lg:gap-x-[30px] gap-y-[20px] lg:gap-y-[35px] mb-[90px] md:mb-[100px] lg:mb-[120px] xl:mb-[145px] relative">
        <?php

        if (isset($_COOKIE['favoriteProducts']) && !empty($_COOKIE['favoriteProducts'])) {

            $favoriteProductIds = json_decode(stripslashes($_COOKIE['favoriteProducts']), true);

            if (is_array($favoriteProductIds)) {

                $validProductIds = [];

                foreach ($favoriteProductIds as $productId) {
                    if (wc_get_product($productId) !== false) {
                        $validProductIds[] = $productId;
                    }
                }


                if (!empty($validProductIds)) {

                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'post__in' => $validProductIds,
                        'orderby' => 'post__in'
                    );

                    $products_query = new WP_Query($args);

                    if ($products_query->have_posts()) :
                        while ($products_query->have_posts()) : $products_query->the_post();

                            $product = wc_get_product(get_the_ID());
                            include get_template_directory() . '/componenten/product-item.php';

                        endwhile;

                        wp_reset_postdata();
                    else : ?>
                        <p class="font-jost font-normal text-17 leading-30 text-[#000000] tracking-[0.05em] absolute top-0 left-[15px] md:left-0 right-0">You haven't liked any products yet. Click <a href="/shop" class="underline">here</a> to continue shopping.</p>'
                        <?php
                    endif;
                } else { ?>
                        <p class="font-jost font-normal text-17 leading-30 text-[#000000] tracking-[0.05em] absolute top-0 left-[15px] md:left-0 right-0">You haven't liked any products yet. Click <a href="/shop" class="underline">here</a> to continue shopping.</p></p>
                        <?php
                }
            } else {
                echo 'Error decoding favorite products';
            }
        } else { ?>
            <p class="font-jost font-normal text-17 leading-30 text-[#000000] tracking-[0.05em] absolute top-0 left-[15px] md:left-0 right-0">You haven't liked any products yet. Click <a href="/shop" class="underline">here</a> to continue shopping.</p></p>
        <?php
        }
        ?>
    </div>



 
</main>
<?php get_footer('nofooter'); ?>



