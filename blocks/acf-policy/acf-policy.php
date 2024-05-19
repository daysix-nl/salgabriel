<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- POLICY -->
<section class="bg-white md:bg-[#F7F7F7] md:pt-[25px] md:pb-[25px] lg:pt-[60px] lg:pb-[60px] xl:pt-[70px] xl:pb-[80px]">
    <div class="w-full md:w-[718px] lg:w-[1110px] xl:w-[1130px] bg-white mx-auto">
        <div class="w-[360px] md:w-[617px] lg:w-[795px] xl:w-[852px] mx-auto pt-[25px] md:pt-[60px] lg:pt-[90px] xl:pt-[70px] pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
            <h1 class="md:text-center font-syne text-15 leading-23 tracking-[0.15em] md:text-20 md:leading-25 xl:text-22 xl:leading-25 md:tracking-[0.07em] text-[#000000] font-normal md:font-bold uppercase"><?php the_title();?></h1>
            <div class="mt-[25px] md:mt-[35px] lg:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em]"><?php echo get_field('text');?></div>
            <?php include get_template_directory() . '/componenten/embleem.php'; ?>
        </div>
    </div>
</section>
<?php endif; ?>
