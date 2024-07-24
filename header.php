<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Jost:ital,wght@0,400;0,600;1,400;1,600&family=Pinyon+Script&family=Syne:wght@700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block relative menu-non-active search-nonactive' ); ?>>
<header class="fixed top-0 left-0 right-0 bg-white z-[9999]">

<section class="h-[30px] md:h-[35px] bg-black w-full items-center justify-center flex">
    <p class="font-jost font-normal text-12 leading-12 xl:text-13 xl:leading-13 text-white hidden md:block">Free shipping on orders above €85*</p>
    <p class="font-jost font-normal text-12 leading-12 xl:text-13 xl:leading-13 text-white md:hidden">Free shipping on orders above €85*</p>
</section>
<section id="navbar" class="h-[78px] xl:h-[88px] w-full flex items-center justify-between px-[15px] md:px-[25px] lg:px-[55px] max-w-[1500px] mx-auto top-0 bg-white">
    <div class="w-[65px] md:w-[167px] lg:w-[320px]">
        <div class="menuhover flex justify-between items-center w-[105px] lg:w-[259px]">
            <button id="menu" class="h-[40px] w-[42px] lg:hidden flex flex-col justify-center items-center relative md:mr-[25px]">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="/shop/" class="font-jost font-normal text-black text-15 leading-30 xl:text-17 xl:leading-30 hidden md:block tracking-[0.05em]">Shop</a>
            <a href="/craft/" class="font-jost font-normal text-black text-15 leading-30 xl:text-17 xl:leading-30 hidden lg:block tracking-[0.05em]">Craft</a>
            <a href="/learn/" class="font-jost font-normal text-black text-15 leading-30 xl:text-17 xl:leading-30 hidden lg:block tracking-[0.05em]">Learn</a>
        </div>
    </div>
    <a href="/" class="flex justify-center w-[268.17px] h-[9.59px] md:h-[12.63px] xl:h-[13.82px]">
        <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/SalGabriel.svg" alt="" class="h-full">
        
    </a>
    <div class="flex justify-end w-[65px] md:w-[167px] lg:w-[320px]">
        <div class="w-full max-w-[65px] lg:max-w-[120px] flex justify-end md:justify-between h-[18px]">
            <button id="searchlink" class="hidden lg:block hoveropacity">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Search.png" alt="" class="h-full">
            </button>
            <a href="/wishlist" class="hidden md:block hoveropacity">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Heart.png" alt="" class="h-full">
            </a>
            <button class="sidecar hoveropacity">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Cart.png" alt="" class="h-full">
            </button>
        </div>
    </div>
</section>
</header>
<div class="h-[calc(78px+30px)] xl:h-[calc(88px+35px)] bg-white"></div>

<div class="menu fixed h-[calc(100dvh-108px)] xl:h-[calc(100dvh-123px)] w-full top-[108px] xl:top-[123px] bottom-0 bg-white z-[999] lg:hidden min-h-[650px] overflow-y-auto">
    <div class="h-full flex flex-col justify-between w-[390px] px-[20px] md:w-[768px] md:px-[40px] mx-auto">
        <div class="mt-[25px]">
            <div class="w-full flex">
                <form action="/" method="get" class="w-full flex justify-between items-end">
                    <input type="text" class="bg-[transparent] w-full font-jost font-medium text-[#2C2C2C] text-15 placeholder:text-[#ACACAC]" id="search" name="s" placeholder="Search for">
                    <button type="submit" class="flex justify-center items-center font-jost font-medium text-15 text-[#2C2C2C]">Search</button>
                </form>
            </div>
            <hr class="border-[#1F1F1F] mt-[15px]">
        </div>
        <div class="flex flex-col justify-center md:text-center">
            <a href="/shop/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Shop</a>
            <a href="/craft/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Craft</a>
            <a href="/learn/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Learn</a>
            <a href="/faq/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">FAQ</a>
            <a href="/care/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Care</a>
            <a href="/shipping-and-returns/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Shipping & Returns</a>
            <a href="/contact/" class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Contact</a>
        </div>
        <div class="mb-[60px]">
            <hr class="border-[#DDDDDD] mb-[60px] md:hidden">
            <a href="/wishlist/" class="flex items-center space-x-[15px] w-fit mx-auto mt-[0px] md:mt-[0px]">
                <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Heart.png" alt="" class="max-h-[19px]">
                <p class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">My Favourites</p>
            </a>
            <button class="sidecar relative flex items-center space-x-[15px] w-fit mx-auto mt-[0px] md:mt-[0px]">
                <div class="relative">
                    <img src="https://staging.salgabriel.com/wp-content/uploads/2024/07/Cart.png" alt="" class="max-h-[18px]">
                        <?php  if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
                    <div class="absolute bottom-[12px] right-[-7px] bg-[#121212] h-[14px] w-[14px] rounded-full flex justify-center items-center text-8 font-jost font-medium text-white"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
                    <?php } ?>
                </div>
                <p class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">Shopping bag</p>
            </button>
        </div>
    </div>
</div>


<?php include get_template_directory() . '/componenten/search.php'; ?>