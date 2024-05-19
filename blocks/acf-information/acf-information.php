<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- INFORMATION -->
<section class="bg-white">
    <div class="container pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px]">
        <div class="w-full max-w-[360px] md:max-w-[unset] md:w-[658px] lg:w-[684px] xl:w-[771px]">
            <h1 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase"><?php the_title();?></h1>
            <div class="mt-[25px] md:mt-[35px] xl:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em] text-editor"><?php echo get_field('text');?></div>
        </div>
        <div class="w-[360px] md:w-[658px] lg:w-[784px] xl:w-[771px] mx-auto pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
                <?php include get_template_directory() . '/componenten/embleem.php'; ?>
         </div>
    </div>
</section>
<?php endif; ?>
