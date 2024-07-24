<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */


defined( 'ABSPATH' ) || exit;


get_header( 'shop' ); ?>

<main>
<?php do_action('woocommerce_before_shop_loop'); ?>
    <div class="container flex justify-between mt-[10px] mb-[20px] md:mt-[35px] md:mb-[38px] xl:mt-[40px] xl:mb-[45px]">
        <div class="">
            <p class="text-15 leading-23 xl:text-16 xl:leading-25 tracking-[0.15em] font-jost font-normal uppercase">Shop all</p>
        </div>
    </div>
    <div class="container grid grid-cols-2 lg:grid-cols-4 gap-x-[8px] md:gap-x-[20px] lg:gap-x-[30px] gap-y-[20px] lg:gap-y-[35px] mb-[90px] md:mb-[100px] lg:mb-[120px] xl:mb-[145px]">
     <?php
        // Aangepaste query om alle producten op te halen
        $args = array(
            'post_type' => 'product', // Het posttype van producten
            'posts_per_page' => -1,   // Toon alle producten
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

    <section class="mb-[90px]">
        <hr class="w-[194px] border-[#DDDDDD] mx-auto">
         <div class="h-[87px] lg:h-[112px] w-fit mx-auto mt-[50px] md:mt-[60px] lg:mt-[40px] xl:mt-[50px]">
            <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/SalGabriel-Smybol.png" alt="" class="w-[113px] h-[113px]">
        </div>

    </section>

</main>



<?php
get_footer( 'shop' ); ?>
