<?php
/**
 * Template name: Returns
 */


 get_header(); ?>

<main class="w-full">
    <!-- FEATURED ARTICLES -->
    <section>
        <div class="container pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px]">
            <div class="w-full max-w-[360px] md:max-w-[unset] md:w-[658px] lg:w-[820px] xl:w-[914px] pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
                <h1 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase"><?php the_title();?></h1>
                <div class="mt-[25px] md:mt-[35px] xl:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em] text-editor">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita.</div>
                <div class="basis-form mt-[40px] w-full md:w-[658px] lg:w-[684px] xl:w-[771px]">
                    <h2 class="font-jost font-semibold text-14 leading-24 xl:text-14 xl:leading-24 tracking-[0.05em] uppercase">Please fill in</h2>
				    <hr class="border-[#DDDDDD] my-[10px]">
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                </div>
            </div>
          
        </div>
    </section>
    
</main>
<?php get_footer('nofooter'); ?>



