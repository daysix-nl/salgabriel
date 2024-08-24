<?php
/**
 * Template name: Cart
 */


 get_header(); ?>

 
<main class="custom-checkout">

  
    <!-- cart -->
    <div class="pt-[30px] md:pt-[10px] lg:pt-[60px] xl:pt-[70px] pb-[70px] lg:pb-[90px] xl:pb-[100px]">
        <div class="container">
            <div class="w-full">
                <?php echo do_shortcode( '[woocommerce_cart]' ); ?>
            </div>
        </div>
    </div>

</main>




<?php get_footer(); ?>



