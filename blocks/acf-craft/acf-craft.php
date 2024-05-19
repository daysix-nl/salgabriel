<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('image');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CRAFT -->
<section class="bg-white">
    <div class="container pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px] flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase md:hidden mb-[25px]"><?php the_title();?></h1>
        <div class="w-[345px] h-[340px] md:w-[287px] md:h-[490px] lg:w-[368px] lg:h-[522px] xl:h-[624px] xl:w-[404px] overflow-hidden">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        </div>
        <div class="w-full max-w-[360px] md:max-w-[unset] md:w-[359px] lg:w-[700px] xl:w-[768px]">
            <div class="w-full max-w-[360px] md:max-w-[unset] md:w-[338px] lg:w-[492px] xl:w-[492px]">
                <p class="hidden md:block font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase"><?php the_title();?></p>
                <div class="mt-[25px] md:mt-[35px] xl:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em] text-editor"><?php echo get_field('text');?></div>
            </div>
        </div>
    </div>
    <div class="w-[360px] md:w-[658px] lg:w-[784px] xl:w-[771px] mx-auto pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
                <?php include get_template_directory() . '/componenten/embleem.php'; ?>
         </div>
</section>
<?php endif; ?>
