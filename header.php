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
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 172.052 172.232">
                    <path id="Screenshot_2024-06-20_at_12.10.15" data-name="Screenshot 2024-06-20 at 12.10.15" d="M119.129,222.388a78.418,78.418,0,0,1-28.618-36.351,72.451,72.451,0,0,1-5.1-23.448c-1.24-30.634,11-54.492,36.408-71.47a73.013,73.013,0,0,1,31.334-11.5,79.959,79.959,0,0,1,21.865,0,77.519,77.519,0,0,1,43.745,21.15,76.314,76.314,0,0,1,22.967,42.2,77.571,77.571,0,0,1-9.239,54.055,68.987,68.987,0,0,1-8.437,11.885c-.315.352-.569.76-.925,1.241,2.936,2.674,5.811,5.3,8.694,7.918q12.207,11.082,24.418,22.159c1.5,1.36,1.487,1.37.135,2.8q-3.384,3.568-6.77,7.134a2.317,2.317,0,0,1-1.293.945c-2.152-1.959-4.392-3.992-6.626-6.032q-13.406-12.238-26.785-24.5c-1.148-1.059-1.853-1.089-3.118-.128a78,78,0,0,1-32.415,14.525,76.556,76.556,0,0,1-20.123,1.373,78.542,78.542,0,0,1-40.119-13.945m8.859-119.671a66.282,66.282,0,0,0-11.623,9.713Q95.377,135.185,98.92,165.939a60.421,60.421,0,0,0,13.051,31.643c16.639,20.567,38.223,28.816,64.326,24.576a59.783,59.783,0,0,0,30.18-14.345c18.529-16.257,26.162-36.71,22.437-61.092-2.467-16.146-10.451-29.41-23-39.764C191.593,95.141,174.973,90.49,156.575,92.37A63.7,63.7,0,0,0,127.988,102.717Z" transform="translate(-85.328 -78.867)"/>
                </svg>
            </button>
            <a href="/wishlist" class="hidden md:block hoveropacity">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 186.827 163.608">
                    <path id="Screenshot_2024-06-20_at_12.10.12" data-name="Screenshot 2024-06-20 at 12.10.12" d="M147.272,224.314a280.586,280.586,0,0,1-41.516-35.85,139.276,139.276,0,0,1-21.808-29.621c-4.452-8.35-7.66-17.14-8.383-26.613A54.315,54.315,0,0,1,119.1,74.757c15.234-3.1,29.31.173,42.1,9a60.756,60.756,0,0,1,7.565,6.474c1.265-1.157,2.435-2.273,3.653-3.335a52.386,52.386,0,0,1,27.544-12.583c15.528-2.2,29.665,1.561,41.931,11.4a53.032,53.032,0,0,1,18.526,28.652,52.3,52.3,0,0,1,1.547,18.595c-1,9.848-4.416,18.931-9.207,27.539a135.817,135.817,0,0,1-18.2,25.01c-17.923,19.812-38.853,35.961-61.274,50.3a7.549,7.549,0,0,1-8.622.123c-5.952-3.579-11.632-7.559-17.387-11.616m50.105-136.3c-.733.216-1.472.415-2.2.652A39.287,39.287,0,0,0,174.3,104.017c-2.586,3.773-8.405,3.822-10.877.175a33.979,33.979,0,0,0-5.555-6.367c-10.822-9.611-23.358-13.323-37.488-10.056-23.909,5.529-37.848,29.959-29.693,54.4,3.194,9.573,8.413,17.994,14.541,25.9a185.783,185.783,0,0,0,23.007,24.219,327.948,327.948,0,0,0,38.928,29.843,2.558,2.558,0,0,0,3.311-.035c6.824-4.522,13.512-9.228,20.005-14.216,14.19-10.9,27.625-22.613,39.109-36.412,6.362-7.645,11.953-15.8,15.737-25.065,3.562-8.728,5.1-17.727,3.014-27.051-2.689-12.019-9.326-21.3-20.086-27.369C218.63,86.56,208.338,85.344,197.378,88.01Z" transform="translate(-75.392 -73.612)"/>
                </svg>
            </a>
            <button class="sidecar hoveropacity">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.34" height="18.387" viewBox="0 0 20.34 18.387">
                        <path id="shopping-bag" d="M23.136,9.943a.693.693,0,0,0-.536-.256H19.044A5.308,5.308,0,0,0,13.841,5h-1.4a5.308,5.308,0,0,0-5.2,4.687H3.681a.692.692,0,0,0-.544.254.736.736,0,0,0-.156.594L4.858,21.458A2.3,2.3,0,0,0,7.1,23.387H19.177a2.3,2.3,0,0,0,2.246-1.932L23.3,10.534A.736.736,0,0,0,23.136,9.943Zm-10.7-3.5h1.4a3.886,3.886,0,0,1,3.787,3.245H8.652A3.886,3.886,0,0,1,12.439,6.442ZM20.046,21.2a.887.887,0,0,1-.869.743H7.1a.887.887,0,0,1-.865-.739L4.514,11.129H21.766Z" transform="translate(-2.969 -5)" fill="#121212"/>
                    </svg>
                        <?php  if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
                    <div class="absolute bottom-[12px] right-[-7px] bg-[#121212] h-[14px] w-[14px] rounded-full flex justify-center items-center text-8 font-jost font-medium text-white"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
                    <?php } ?>
                </div>
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
                <svg xmlns="http://www.w3.org/2000/svg" width="19.641" height="17.28" viewBox="0 0 19.641 17.28">
                    <path id="love" d="M13.892,4A5.658,5.658,0,0,0,9.77,5.789,5.648,5.648,0,0,0,0,9.648c0,5.624,9.071,11.144,9.465,11.361a.611.611,0,0,0,.629,0c.376-.217,9.447-5.737,9.447-11.361A5.655,5.655,0,0,0,13.892,4ZM9.77,19.767C8.192,18.759,1.221,14.051,1.221,9.648A4.427,4.427,0,0,1,9.27,7.105a.611.611,0,0,0,1,0,4.427,4.427,0,0,1,8.051,2.543C18.319,14.048,11.349,18.756,9.77,19.767Z" transform="translate(0.05 -3.875)" fill="#121212" stroke="#121212" stroke-width="0.1"/>
                </svg>
                <p class="font-jost font-normal text-18 leading-45 md:text-20 md:leading-60 text-[#121212]">My Favourites</p>
            </a>
            <button class="sidecar relative flex items-center space-x-[15px] w-fit mx-auto mt-[0px] md:mt-[0px]">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.34" height="18.387" viewBox="0 0 20.34 18.387">
                        <path id="shopping-bag" d="M23.136,9.943a.693.693,0,0,0-.536-.256H19.044A5.308,5.308,0,0,0,13.841,5h-1.4a5.308,5.308,0,0,0-5.2,4.687H3.681a.692.692,0,0,0-.544.254.736.736,0,0,0-.156.594L4.858,21.458A2.3,2.3,0,0,0,7.1,23.387H19.177a2.3,2.3,0,0,0,2.246-1.932L23.3,10.534A.736.736,0,0,0,23.136,9.943Zm-10.7-3.5h1.4a3.886,3.886,0,0,1,3.787,3.245H8.652A3.886,3.886,0,0,1,12.439,6.442ZM20.046,21.2a.887.887,0,0,1-.869.743H7.1a.887.887,0,0,1-.865-.739L4.514,11.129H21.766Z" transform="translate(-2.969 -5)" fill="#121212"/>
                    </svg>
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