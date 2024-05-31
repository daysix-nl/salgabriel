<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php  $post_id = get_the_ID();
$thumbnail_url = get_the_post_thumbnail_url();
               $thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
               ?>
<!-- POST -->
<section class="bg-white pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
    <div class="container md:flex md:justify-between">
        <div class="w-full md:w-[267px] lg:w-[403px] h-auto">
            <div class="sticky top-[123px] xl:top-[123px]">
                <a href="/learn" class="flex text-[#919191] font-jost text-14 mb-[30px] md:mb-[40px]">← Go back to overview</a>
                <?php
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo implode(', ', array_map(function($category) {
                            return '<h2 class="font-syne text-15 leading-25 md:text-22 md:leading-25 tracking-[0.07em] font-bold uppercase mb-[10px] lg:mb-[12px]">' . esc_html( $category->name ) . '</h2>';
                        }, $categories));
                    } else {
                        
                    }
                ?>
                <h1 class="font-jost text-26 leading-28 md:text-29 md:leading-33 tracking-[0.07em] font-bold uppercase pr-[50px] md:pr-[unset] lg:pr-[60px]"><?php the_title();?></h1>
                <div class="w-full h-[186px] md:h-[291px] lg:h-[420px] xl:h-[420px] bg-black mt-[15px] md:mt-[25px] lg:mt-[35px] overflow-hidden">
                    <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="" class="h-full min-h-full min-w-full object-cover object-center">
                </div>
            </div>
        </div>
        <div class="w-full md:w-[411px] lg:w-[680px] xl:w-[738px] grid gap-[28px] mt-[28px] md:mt-[70px] xl:mt-[52px]">
            <?php
                // Check value exists.
                if( have_rows('content') ):

                    // Loop through rows.
                    while ( have_rows('content') ) : the_row();

                        // Case: TEXT.
                        if( get_row_layout() == 'content_text' ):  ?>
                         <div class="font-jost text-16 leading-28 tracking-[0.025em] text-editor"><?php echo get_sub_field('content_text_text'); ?></div>
                        <?php
                        // Case: TEXT IMAGE.
                        elseif( get_row_layout() == 'content_text_image' ): ?>
                        <?php
                        $image = get_sub_field('content_text_image_image');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                         <div class="lg:flex justify-between">
                            <div class="w-full lg:w-[367px] xl:w-[396px]">
                                <div class="font-jost text-16 leading-28 tracking-[0.025em] text-editor"><?php echo get_sub_field('content_text_image_text'); ?></div>
                            </div>
                            <div class="w-full h-[449px] md:h-[308px] lg:w-[261px] xl:w-[290px] lg:h-[361px] xl:h-[371px] overflow-hidden mt-[28px] lg:mt-[unset]">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                            </div>
                         </div>
                        <?php
                        // Case: TABS.
                        elseif( get_row_layout() == 'download' ): ?>
                         <div class=""><?php echo get_sub_field('content_text_text'); ?></div>
                        <?php

                        endif;

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;
                ?>
        </div>
    </div>
   
</section>
<?php endif; ?>
