<?php
/**
 * Template name: Learn
 */


 get_header(); ?>

<main class="w-full">
    <!-- FEATURED ARTICLES -->
    <section>
        <div class="mb-[90px] lg:mb-[100px] xl:mb-[110px] pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px]">
            <div class="container">
                <h1 class="text-[#121212] font-syne font-bold text-18 leading-25 md:text-19 md:leading-25 xl:text-20 xl:leading-25 uppercase tracking-[0.02em] mt-[3px]"><?php the_title();?></h1>
            </div>
            <div class="container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[15px] md:gap-[20px] lg:gap-[25px] xl:gap-[30px] mt-[20px] md::mt-[30px] lg:mt-[20px] xl:mt-[20px]">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();  $thumbnail_url = get_the_post_thumbnail_url();
                $thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
                 <a href="<?php echo get_permalink();?>" class="col-span-1">
                    <div class="w-full h-[248px] md:h-[325px] lg:h-[373px] xl:h-[420px] flex items-center justify-center overflow-hidden">
                        <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $thumbnail_alt ); ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                    <h3 class="text-[#121212] font-jost text-15 leading-28 md:text-15 md:leading-25 xl:text-16 xl:leading-25 font-semibold mt-[10px] xl:mt-[10px] tracking-[0.025em] flex"><?php the_title(); ?> <span class="mt-[1px] ml-[8px]">→</span></h3>
                    <div class="text-[#8D8D8D] font-jost text-14 leading-20 md:text-15 md:leading-25 xl:text-16 xl:leading-25 font-normal tracking-[0.025em] line-clamp-2"><?php the_excerpt();?></div>
                </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    
</main>
<?php get_footer('nofooter'); ?>



