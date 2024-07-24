<?php
/**
 * Template name: Home
 */


 get_header(); ?>

<main class="w-full">
    <!-- HEADER -->
    <section class="bg-[#EBE8E2] h-[calc(100dvh-109px)] md:h-[calc(100dvh-114px)] xl:h-[calc(100dvh-123px)] min-h-[520px] max-h-[544px] md:min-h-[520px] md:max-h-[577px] lg:min-h-[530px] lg:max-h-[700px] w-full flex flex-col items-center justify-center overflow-hidden">
        <div class="w-[508px] md:w-full max-w-[508px] md:max-w-[610px] lg:max-w-[726px] xl:max-w-[892px] grid grid-cols-3 md:grid-cols-4 gap-[20px] xl:gap-[25px] md:mt-[30px]">
            <div class="w-full hidden md:block order-1">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammon-SalGabriel-Orange.png" alt="">
            </div>
            <div class="w-full order-3 md:order-2">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammon-SalGabriel-Beige.png" alt="">
            </div>
            <div class="w-full order-1 md:order-3">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammon-SalGabriel-Skyblue.png" alt="">
            </div>
            <div class="w-full order-2 md:order-4">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammon-SalGabriel-Navy.png" alt="">
            </div>
        </div>
        <div class="w-full md:max-w-[553px]">
            <h1 class="text-[#121212] font-pinyon md:font-jost lg:font-pinyon font-normal text-45 leading-45 md:text-18 md:leading-28 lg:text-56 lg:leading-56 xl:text-60 xl:leading-60 text-center mt-[35px] md:mt-[45px] lg:mt-[40px] tracking-[0.05em] ">Let's play.</h1>
            <h2 class="text-[#121212] max-w-[262px] md:max-w-[unset] mx-auto font-syne md:font-jost lg:font-syne font-bold md:font-normal lg:font-bold text-17 leading-28 md:text-18 md:leading-28 lg:text-18 ld:leading-24 xl:text-20 xl:leading-28 text-center uppercase md:normal-case lg:uppercase mt-[15px] md:mt-0 lg:mt-[25px] tracking-[0.05em]">Luxury design meets traditional art.</h2>
            <p class="text-[#121212] max-w-[315px] mx-auto md:max-w-[unset] font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 text-center tracking-[0.02em] xl:tracking-[0.025em] mt-[10px] lg:mt-[10px]">Our passion for preserving the traditional art of gaming has led us to create a stunning range of luxurious leather games.</p>
            <a href="/shop" class="text-[#121212] block w-fit mx-auto font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 text-center tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline">Discover now</a>
        </div>
    </section>

    <!-- BESTSELLERS -->
    <section class="border-b-[1px] border-[#DDDDDD]">
        <div class="container md:px-[30px] lg:px-[unset] pb-[40px] md:pt-[60px] md:pb-[100px] lg:pt-[180px] lg:pb-[70px] xl:pt-[100px] xl:pb-[100px] grid grid-cols-2 lg:grid-cols-4 gap-[15px] md:gap-[40px] lg:gap-[30px]">
            <div class="col-span-2 md:col-span-1 h-full flex items-center">
                <div class="text-center w-fit mx-auto md:mx-[unset] md:text-left mt-[50px] md:mt-[unset] mb-[30px] md:mb-[unset]">
                    <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-[#121212]">What's hot</h3>
                    <h2 class="text-[#121212] font-jost font-bold text-21 leading-25 md:text-24 md:leading-30 xl:text-26 xl:leading-30 uppercase tracking-[0.07em] mt-[8px]">Shop our <br><span class="font-syne">bestsellers</span></h2>
                    <a href="/shop" class="text-[#121212] font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline block md:hidden">See more</a>
                    <a href="/shop" class="text-[#121212] font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline hidden md:block">Discover more</a>
                </div> 
            </div>
            <?php
                // Aangepaste query om alle producten op te halen
                $args = array(
                    'post_type' => 'product', // Het posttype van producten
                    'posts_per_page' => 4,   // Toon alle producten
                    'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
                );
                $products_query = new WP_Query($args);
                if ($products_query->have_posts()) :
                    while ($products_query->have_posts()) : $products_query->the_post();
                // Informatie over het product ophalen
                $product = wc_get_product(get_the_ID());
                ?>
                   <div class="md:last-of-type:hidden">
                        <?php include get_template_directory() . '/componenten/product-item.php'; ?>
                    </div>
                <?php
                endwhile;
                // Herstel de oorspronkelijke query
                wp_reset_postdata();
            else :
                echo 'Geen producten gevonden';
            endif;
            ?>
        </div>
    </section>

    <!-- GET YOUR GAME ON -->
    <section class="border-b-[1px] border-[#DDDDDD]">
        <div class="my-[90px] lg:my-[100px] xl:my-[110px] w-full max-w-[335px] md:max-w-[624px] lg:max-w-[665px] xl:max-w-[706px] mx-auto">
            <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-[#121212] text-center">Let's go</h3>
            <h2 class="text-[#121212] font-syne font-bold text-18 leading-25 md:text-19 md:leading-25 xl:text-20 xl:leading-25 uppercase tracking-[0.02em] mt-[3px] text-center">Get your game on</h2>
            <p class="text-[#121212] font-jost font-normal text-15 leading-26 lg:text-16 lg:leading-28 xl:text-17 xl:leading-30 text-center traking-[0.05em] md:traking-[0.02em] lg:tracking-[0.05em] mt-[45px] md:mt-[50px] lg:mt-[30px] xl:mt-[40px]">Whether you’re a seasoned backgammon enthusiast or a newcomer to the game, we invite you to explore the world of Sal Gabriel. Unearth the beauty of our handmade creations and rediscover the thrill of the game. Join us in reviving the game.</p>        
            <a href="/shop" class="flex items-center w-fit mx-auto mt-[40px] md:mt-[60px] lg:mt-[40px] xl:mt-[30px]">
                <p class="font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28 tracking-[0.1em] correction">Explore</p>
                <div class="mt-[2px] arrow-link font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28">→</div>
            </a>
        </div>
    </section>

    <!-- CRAFTMANSHIP -->
    <section class="border-b-[1px] border-[#DDDDDD]">
        <div class="container mt-[75px] mb-[65px] md:mt-[90px] md:mb-[100px] lg:mt-[80px] lg:mb-[80px] xl:mt-[160px] xl:mb-[100px] flex flex-col md:flex-row items-center justify-between">
            <div class="w-full max-w-[360px] md:max-w-[320px] lg:max-w-[395px] xl:max-w-[397px] lg:ml-[41px] xl:ml-[39px] order-2 md:order-1 mt-[15px] md:mt-[unset]">
                <div class="h-[87px] lg:h-[112px] w-fit">
                   <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/SalGabriel-Smybol.png" alt="" class="h-full">
                </div>
                <h3 class="text-[#121212] font-syne font-bold text-18 leading-25 md:text-20 md:leading-25 lg:text-20 lg:leading-25 uppercase tracking-[0.02em] mt-[40px] lg:mt-[55px]">Craftsmanship</h3>
                <h2 class="font-garamond font-medium text-50 leading-55 lg:text-55 lg:leading-55 xl:text-60 xl:leading-55 uppercase tracking-[0.07em] mt-[10px] lg:mt-[40px] xl:mt-[15px]">R<i>e</i>vi<i>vi</i>ng <br>the game</h2>
                <p class="text-[#121212] font-jost font-normal text-15 leading-26 lg:text-16 lg:leading-28 xl:text-17 xl:leading-30 traking-[0.05em] md:traking-[0.02em] lg:tracking-[0.05em] mt-[20px] md:mt-[20px] lg:mt-[20px] xl:mt-[40px]">Our love for the game has driven us to create a product which becomes a cherished family treasure for generations. </p>
                <a href="/craft/" class="flex items-center w-fit mt-[40px] md:mt-[60px] lg:mt-[40px] xl:mt-[30px]">
                    <p class="font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28 tracking-[0.1em]">Read more</p>
                    <div class="mt-[2px] arrow-link font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28">→</div>
                </a>
            </div>
            <div class="w-full max-w-[360px] md:max-w-[340px] lg:max-w-[586px] xl:max-w-[588px] xl:mr-[93px] order-1 md:order-2">
                <div class="relative h-[431px] md:h-[435px] lg:h-[689px] xl:h-[692px] w-full">
                    <div class="w-[262px] h-[344px] md:w-[243px] md:h-[323px] lg:w-[424px] lg:h-[633px] xl:w-[426px] xl:h-[636px] bg-black absolute top-0 left-0 overflow-hidden">
                        <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/IMG_5129-scaled-e1721642796415.jpg" alt="" class="min-h-full min-w-full object-cover object-center">
                    </div>
                    <div class="w-[167px] h-[249px] md:w-[193px] md:h-[288px] lg:w-[285px] lg:h-[427px] xl:w-[287px] xl:h-[429px] bg-black absolute right-[13px] md:right-0 bottom-0 overflow-hidden">
                        <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/IMG_5124-scaled.jpg" alt="" class="min-h-full min-w-full object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AS SEEN IN -->
    <!-- <section class="border-b-[1px] border-[#DDDDDD]">
         <div class="my-[90px] lg:my-[90px] xl:my-[90px]">
            <h2 class="text-[#121212] font-syne font-bold text-18 leading-25 md:text-19 md:leading-25 xl:text-20 xl:leading-25 uppercase tracking-[0.02em] text-center w-full max-w-[335px] md:max-w-[624px] lg:max-w-[665px] xl:max-w-[706px] mx-auto">As seen in</h2>
            <div class="w-screen relative overflow-x-hidden swiper swiperhero mt-[55px] md::mt-[50px] xl:mt-[65px]">
                <div id="scroll-text" class="flex w-full swiper-wrapper">
                    <div class="flex items-center space-x-[15px] w-max swiper-slide">
                        <p class="font-jost font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titl jost bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-garamond italic text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond italic</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-syne font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titel syne bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-garamond text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                    </div>
                </div>
            </div>
            <div dir="rtl" class="w-screen relative overflow-x-hidden swiper swiperhero">
                <div id="scroll-text" class="flex w-full swiper-wrapper">
                    <div class="flex items-center space-x-[15px] w-max swiper-slide">
                        <p class="font-jost font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titl jost bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-garamond italic text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond italic</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-syne font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titel syne bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-garamond text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                    </div>
                </div>
            </div>
            <div class="w-screen relative overflow-x-hidden swiper swiperhero">
                <div id="scroll-text" class="flex w-full swiper-wrapper">
                    <div class="flex items-center space-x-[15px] w-max swiper-slide">
                        <p class="font-garamond text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-jost font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titl jost bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-garamond italic text-35 leading-41 md:text-40 md:eading-47 w-max uppercase">Titel garamond italic</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                        <p class="font-syne font-bold text-29 leading-17 md:text-33 md:leading-47 w-max uppercase">Titel syne bold</p>
                        <p class="font-syne font-bold text-16 leading-20 px-[30px] md:px-[40px]">-</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section> -->

     <!-- FEATURED ARTICLES -->
    <section class="border-b-[1px] md:border-b-[0px] lg:border-b-[1px] border-[#DDDDDD]">
        <div class="my-[90px] lg:my-[100px] xl:my-[110px]">
            <div class="w-full max-w-[335px] md:max-w-[624px] lg:max-w-[665px] xl:max-w-[706px] mx-auto">
                <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-[#121212] text-center">Inform yourself</h3>
                <h2 class="text-[#121212] font-syne font-bold text-18 leading-25 md:text-19 md:leading-25 xl:text-20 xl:leading-25 uppercase tracking-[0.02em] mt-[3px] text-center">Featured articles</h2>
            </div>
            <div class="container md:px-[30px] lg:px-[unset] grid grid-cols-2 lg:grid-cols-4 gap-[15px] md:gap-[40px] lg:gap-[30px] mt-[40px] md::mt-[40px] lg:mt-[55px] xl:mt-[75px]">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();   $thumbnail_url = get_the_post_thumbnail_url();
                $thumbnail_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
                 <a href="<?php echo get_permalink();?>" class="col-span-1">
                    <div class="w-full aspect-[1/1] bg-[#F9F9F9] flex items-center justify-center overflow-hidden">
                        <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $thumbnail_alt ); ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                    <h3 class="text-[#121212] font-jost text-15 leading-28 md:text-15 md:leading-25 xl:text-16 xl:leading-25 font-semibold mt-[10px] xl:mt-[20px] tracking-[0.025em] flex"><?php the_title(); ?> <span class="mt-[1px] ml-[8px]">→</span></h3> 
                    <div class="text-[#8D8D8D] font-jost text-14 leading-20 md:text-15 md:leading-25 xl:text-16 xl:leading-25 font-normal tracking-[0.025em] line-clamp-2"><?php the_excerpt();?></div>
                </a>
                <?php endwhile; wp_reset_query(); ?>
                 <div class="col-span-1 h-full">
                    <div class="w-full aspect-[1/1] flex items-center justify-center">
                         <div class="w-fit text-left">
                            <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-[#121212]">Learn</h3>
                            <h2 class="text-[#121212] font-jost font-bold text-21 leading-25 md:text-24 md:leading-30 xl:text-26 xl:leading-30 uppercase tracking-[0.07em] mt-[8px]">View more <br><span class="font-syne">articles</span></h2>
                            <a href="/learn/" class="text-[#121212] font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline block md:hidden">See more</a>
                            <a href="/learn/" class="text-[#121212] font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline hidden md:block">Discover more</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- IN THE SPOTLIGHT -->
    <section class="bg-[#D3E7EA] block md:hidden lg:block overflow-hidden">
        <div class="container grid grid-cols-1 md:grid-cols-2 py-[75px] lg:py-[80px] xl:py-[90px] items-center">
            <div class="flex justify-center md:justify-end">
                <div class="w-full lg:max-w-[376px] xl:max-w-[405px] lg:mr-[65px] xl:mr-[35px] relative">
                    <div class="h-[343px] lg:h-[427px] xl:h-[458px] rotate-[15deg] lg:rotate-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 386.04 458.646">
                            <path id="Path_600" data-name="Path 600" d="M317.171,23.059c23.622,3.384,55.8,11.8,74.075,27.684,51.129,44.441,64.379,134.247,27.634,232.078C369.09,415.383,271.021,493.977,164.446,478.836S33.67,354.5,68.77,238.676,227.01,10.143,317.171,23.059Z" transform="translate(-53.74 -22.045)" fill="#fff"/>
                        </svg>
                    </div>
                    <div class="absolute top-0 right-[30px] lg:right-0 lg:left-0 bottom-0">
                        <div class="w-full h-full flex items-center">
                            <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammon-SalGabriel-Navy.png" alt="" class="w-full max-w-[268px] lg:max-w-[356px] xl:max-w-[382px] ml-[60px] lg::ml-[30px] xl:ml-[35px]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex lg:justify-center mt-[50px] lg:mt-[unset]">
                <div class="w-full max-w-[300px] lg:max-w-[365px] xl:max-w-[395px]">
                    <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-[#121212]">In the spotlight</h3>
                    <h2 class="text-[#121212] font-jost font-bold text-21 leading-25 md:text-24 md:leading-30 xl:text-26 xl:leading-30 uppercase tracking-[0.07em] mt-[8px]">Traditional<br><span class="font-syne">colour combination</span></h2>
                    <p class="text-[#121212] font-jost font-normal text-15 leading-26 lg:text-16 lg:leading-28 xl:text-17 xl:leading-30 traking-[0.05em] md:traking-[0.02em] lg:tracking-[0.05em] mt-[20px] md:mt-[20px] lg:mt-[20px] xl:mt-[40px] w-full max-w-[270px] lg:max-w-[302px] xl:max-w-[321px]">Our backgammon sets are designed for the modern individual who appreciates the fusion of heritage and style. It is designed to become a cherished family treasure for generations. </p>
                    <a href="/product/backgammon-navy/" class="flex items-center w-fit mt-[40px] md:mt-[60px] lg:mt-[40px] xl:mt-[30px]">
                        <p class="font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28 tracking-[0.1em]">Shop now</p>
                        <div class="mt-[2px] arrow-link font-syne font-bold uppercase text-14 leading-25 lg:text-15 lg:leading-28 xl:text-16 xl:leading-28">→</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOLLOW US -->
    <section class="h-full lg:h-[418px] xl:h-[470px] bg-[#DE562E] grid md:hidden lg:flex justify-end relative overflow-hidden">
        <div class="h-full w-screen lg:w-[calc(50%-345px)] xl:w-[calc(50%-390px)] bg-black relative overflow-hidden order-2">
            <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammonbw.jpg" alt="" class="min-h-full min-w-full object-cover ocject-center-top">
        </div>
        <div class="lg:absolute top-0 left-0 right-0 bottom-0 order-1 z-[2]">
            <div class="w-full h-full flex items-center">
                <div class="container h-[592px] lg:h-[202px] xl:h-[228px]">
                    <div class="w-full lg:max-w-[956px] xl:max-w-[1080px] h-full lg:ml-[45px] xl:ml-[50px] flex flex-col lg:flex-row items-center justify-between">
                        <div class="h-full w-full lg:w-[288px] xl:w-[329px] flex items-center order-2 lg:order-1">
                            <div class="">
                                <h3 class="font-jost italic text-16 leading-28 uppercase tracking-[0.1em] text-white">@SALGABRIELCO</h3>
                                <h2 class="text-white font-jost font-bold text-21 leading-25 md:text-24 md:leading-30 xl:text-26 xl:leading-30 uppercase tracking-[0.07em] mt-[8px]">Follow us <br><span class="font-syne">on Instagram</span></h2>
                                <a href="https://www.instagram.com/SALGABRIELCO/" class="text-white font-jost font-normal text-15 leading-26 xl:text-16 xl:leading-28 tracking-[0.1em] mt-[15px] lg:mt-[25px] underline hover:no-underline block" target="_blank">Instagram</a>
                            </div>
                        </div>
                        <div class="h-full flex lg:w-full lg:max-w-[652px] xl:max-w-[733px] justify-between order-1 lg:order-2 pt-[80px] lg:pt-[unset]">
                            <div class="h-full aspect-[1/1] w-[228px] lg:w-[202px] xl:w-[228px] bg-black overflow-hidden mr-[30px] lg:mr-[unset]">
                                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammonblue.jpg" alt="" class="min-h-full min-w-full object-cover ocject-center">
                            </div>
                            <div class="h-full aspect-[1/1] w-[228px] lg:w-[202px] xl:w-[228px] bg-black overflow-hidden mr-[30px] lg:mr-[unset]">
                                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Backgammonorange.jpg" alt="" class="min-h-full min-w-full object-cover ocject-center">
                            </div>
                            <div class="h-full aspect-[1/1] w-[228px] lg:w-[202px] xl:w-[228px] bg-black overflow-hidden">
                                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Kaarten.jpg" alt="" class="min-h-full min-w-full object-cover ocject-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GO TO TOP -->
    <section class="md:hidden h-[55px] w-full bg-[#2E2E2E] flex items-center justify-center">
        <a href="#" class="flex items-center"> 
            <div class="mr-[15px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="9.502" height="5.486" viewBox="0 0 9.502 5.486">
                    <g id="Group_199" data-name="Group 199" transform="translate(16.287 15.04) rotate(180)">
                        <line id="Line_4" data-name="Line 4" y1="4.085" x2="4.072" transform="translate(7.492 14.333) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"/>
                        <line id="Line_5" data-name="Line 5" x1="4.072" y1="4.085" transform="translate(11.495 14.333) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1"/>
                    </g>
                </svg>
            </div>
            <p class="font-jost text-14 leading-28 text-white tracking-[0.1em] underline">Go to top</p>
        </a>
    </section>
    
</main>
<?php get_footer('nofooter'); ?>



