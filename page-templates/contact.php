<?php
/**
 * Template name: Contact
 */


 get_header(); ?>

<main class="w-full">
    <!-- FEATURED ARTICLES -->
    <section>
        <div class="container pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px] lg:flex lg:justify-between pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
            <div class="lg:w-[330px] xl:w-[354px]">
                <h1 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase"><?php the_title();?></h1>
                <hr class="w-full border-[#DDDDDD] mt-[15px] mb-[30px]">
                <p class="font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em]">
                    Please contact us, we’d love to help you if you have any questions.
                    <br><br>
                    <b>Office</b><br>
                    Herengracht 352, 1016CG, Amsterdam<br><br>
                    <b>Email</b><br>
                    <a href="mailto:contact@salgabriel.com">contact@salgabriel.com</a><br><br>
                    <b>Collabortions</b><br>
                    We are always looking for new talents to collaborate with. Feel free to contact us on: <a href="mailto:collabs@salgabriel.com">collabs@salgabriel.com</a>
                </p>
            </div>
            <div class="lg:w-[750px] xl:w-[820px] mt-[55px] lg:mt-[unset]">
                <h2 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase">Drop us an email</h2>
                <hr class="w-full border-[#DDDDDD] mt-[15px] mb-[30px]">
                <div class="basis-form">
                    <?php echo do_shortcode('[gravityform id="9" title="false"]'); ?>
                </div>
            </div>
        </div>
    </section>
    
</main>
<?php get_footer('nofooter'); ?>



