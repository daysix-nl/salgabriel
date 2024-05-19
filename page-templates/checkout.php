<?php
/**
 * Template name: Checkout
 */


 get_header(); ?>


 
<main class="custom-checkout">

    <!-- CHECKOUT -->
    <div class="custom-afrekenen md:mt-[10px] lg:mt-[60px] xl:mt-[70px] mb-[60px] lg:mb-[200px] xl:mb-[132px]">
        <div class="container lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]]">
            <div class="w-full lg:max-w-[651px] xl:max-w-[736px]">
                <div class="lg:hidden pb-[20px]">
                    <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
                </div>
                <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
            </div>
            <div class="w-full lg:max-w-[337px] xl:max-w-[381px] hidden lg:block h-auto">
                <div class="sticky top-[168px] xl:top-[193px]">
                    <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden md:block">
         <?php include get_template_directory() . '/componenten/extra-footer.php'; ?>
    </div>
  


</main>




<?php get_footer(); ?>