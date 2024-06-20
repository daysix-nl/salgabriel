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
    <p class="font-jost font-normal text-12 leading-12 xl:text-13 xl:leading-13 text-white hidden md:block">April promotion: free shipping & 15% discount on orders above €75 </p>
    <p class="font-jost font-normal text-12 leading-12 xl:text-13 xl:leading-13 text-white md:hidden">Free shipping on orders above €75</p>
</section>
<section id="navbar" class="h-[78px] xl:h-[88px] w-full flex items-center justify-between px-[15px] md:px-[25px] lg:px-[55px] max-w-[1500px] mx-auto top-0 bg-white">
    <div class="w-[65px] md:w-[167px] lg:w-[320px]">
        <div class="flex justify-between items-center w-[105px] lg:w-[259px]">
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
        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 427.355 22.116">
            <g id="Component_17_1" data-name="Component 17 – 1" transform="translate(0.05 0.05)">
                <g id="Group_359" data-name="Group 359" transform="translate(-0.087 -0.089)">
                <path id="Path_636" data-name="Path 636" d="M158.384,13.033h0v0a5.6,5.6,0,0,0-1.273-1.657,7.009,7.009,0,0,0-1.552-1.012,3.8,3.8,0,0,0-1.43-.4c-.1-.07-.1-.122,0-.174a5.481,5.481,0,0,0,2.18-1.709,4.611,4.611,0,0,0,1.1-3,4.259,4.259,0,0,0-.4-1.919,3.925,3.925,0,0,0-1.047-1.4,5.094,5.094,0,0,0-1.518-.89,8.829,8.829,0,0,0-1.762-.488,12.383,12.383,0,0,0-1.814-.14c-.7,0-1.552.017-2.564.035s-1.692.035-2.058.035c-.331,0-1.622-.052-3.837-.174a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.485,8.485,0,0,1,1.326.157c.576.087.872.209.924.366a11.125,11.125,0,0,1,.157,2.407V17.9a11.125,11.125,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a8.255,8.255,0,0,1-1.326.14.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471h7.483a10.977,10.977,0,0,0,6.82-1.762,5.977,5.977,0,0,0,2.2-4.814,4.642,4.642,0,0,0-.523-2.163ZM147.814,1.608c.087-.227.628-.331,1.622-.331a5.324,5.324,0,0,1,3.646,1.2,4.261,4.261,0,0,1,1.361,3.349,3.814,3.814,0,0,1-1.029,2.686,3.964,3.964,0,0,1-3.052,1.134H147.64V4.05a8.208,8.208,0,0,1,.174-2.442M150.5,20.725a8.6,8.6,0,0,1-1.64-.1,1.678,1.678,0,0,1-.924-.471,1.987,1.987,0,0,1-.227-.942,10.351,10.351,0,0,1-.07-1.273V10.87h1.988q6.044,0,6.053,5.076c0,3.192-1.727,4.779-5.181,4.779" transform="translate(105.909 0.106)" fill="#161615"/>
                <path id="Path_637" data-name="Path 637" d="M158.384,13.033h0v0a5.6,5.6,0,0,0-1.273-1.657,7.009,7.009,0,0,0-1.552-1.012,3.8,3.8,0,0,0-1.43-.4c-.1-.07-.1-.122,0-.174a5.481,5.481,0,0,0,2.18-1.709,4.611,4.611,0,0,0,1.1-3,4.259,4.259,0,0,0-.4-1.919,3.925,3.925,0,0,0-1.047-1.4,5.094,5.094,0,0,0-1.518-.89,8.829,8.829,0,0,0-1.762-.488,12.383,12.383,0,0,0-1.814-.14c-.7,0-1.552.017-2.564.035s-1.692.035-2.058.035c-.331,0-1.622-.052-3.837-.174a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.485,8.485,0,0,1,1.326.157c.576.087.872.209.924.366a11.125,11.125,0,0,1,.157,2.407V17.9a11.125,11.125,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a8.255,8.255,0,0,1-1.326.14.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471h7.483a10.977,10.977,0,0,0,6.82-1.762,5.977,5.977,0,0,0,2.2-4.814,4.642,4.642,0,0,0-.523-2.163ZM147.814,1.608c.087-.227.628-.331,1.622-.331a5.324,5.324,0,0,1,3.646,1.2,4.261,4.261,0,0,1,1.361,3.349,3.814,3.814,0,0,1-1.029,2.686,3.964,3.964,0,0,1-3.052,1.134H147.64V4.05A8.208,8.208,0,0,1,147.814,1.608ZM150.5,20.725a8.6,8.6,0,0,1-1.64-.1,1.678,1.678,0,0,1-.924-.471,1.987,1.987,0,0,1-.227-.942,10.351,10.351,0,0,1-.07-1.273V10.87h1.988q6.044,0,6.053,5.076C155.681,19.138,153.954,20.725,150.5,20.725Z" transform="translate(105.909 0.106)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_638" data-name="Path 638" d="M137.107,20.843a3.924,3.924,0,0,1-1.186-.3,1.761,1.761,0,0,1-1.029-.8c0-.052-.279-.767-.82-2.163L127.444.226a.308.308,0,0,1-.087-.07.248.248,0,0,0-.1-.035,1.443,1.443,0,0,0-.663.349,2.355,2.355,0,0,0-.576.593q-1.988,5.058-6.279,16.1a13.183,13.183,0,0,1-1.535,3.052,1.515,1.515,0,0,1-.872.454,4.491,4.491,0,0,1-1.064.174,1.363,1.363,0,0,0-.07.523v0a.7.7,0,0,0,.07.419c.366,0,.75-.035,1.169-.07s.785-.052,1.134-.07.733-.017,1.169-.017.785,0,1.116.017.645.052,1.012.07.715.052,1.029.07a1.237,1.237,0,0,0,.017-.506v0a.758.758,0,0,0-.087-.436c-.1,0-.262-.017-.471-.035a4.523,4.523,0,0,1-.733-.122,2.213,2.213,0,0,1-.733-.279.543.543,0,0,1-.3-.471,7.128,7.128,0,0,1,.454-2.318c.366-1.029.855-2.355,1.465-3.96l.157-.1c.977-.052,2.145-.087,3.506-.087,1.866,0,2.948,0,3.227.035a.214.214,0,0,1,.192.122l.558,1.361c.366.924.733,1.9,1.1,2.965a8.937,8.937,0,0,1,.558,2.022.636.636,0,0,1-.14.454,1.922,1.922,0,0,1-.82.3,4.656,4.656,0,0,1-.994.122l0,.005a.655.655,0,0,0-.138.464v0a.733.733,0,0,0,.1.471c.349,0,.767-.035,1.238-.07s.907-.052,1.291-.07.8-.017,1.256-.017c.209,0,1.413.052,3.576.157a4.371,4.371,0,0,0,.035-.454v0a.785.785,0,0,0-.1-.488m-8.128-8.878a.214.214,0,0,1-.017.1.11.11,0,0,1-.07.017c-1.012.07-1.919.1-2.739.1-.855,0-1.832-.017-2.965-.07-.035,0-.068-.035-.07-.122l3-7.935,2.861,7.867Z" transform="translate(86.475 0.091)" fill="#161615"/>
                <path id="Path_639" data-name="Path 639" d="M137.107,20.843a3.924,3.924,0,0,1-1.186-.3,1.761,1.761,0,0,1-1.029-.8c0-.052-.279-.767-.82-2.163L127.444.226a.308.308,0,0,1-.087-.07.248.248,0,0,0-.1-.035,1.443,1.443,0,0,0-.663.349,2.355,2.355,0,0,0-.576.593q-1.988,5.058-6.279,16.1a13.183,13.183,0,0,1-1.535,3.052,1.515,1.515,0,0,1-.872.454,4.491,4.491,0,0,1-1.064.174,1.363,1.363,0,0,0-.07.523v0a.7.7,0,0,0,.07.419c.366,0,.75-.035,1.169-.07s.785-.052,1.134-.07.733-.017,1.169-.017.785,0,1.116.017.645.052,1.012.07.715.052,1.029.07a1.237,1.237,0,0,0,.017-.506v0a.758.758,0,0,0-.087-.436c-.1,0-.262-.017-.471-.035a4.523,4.523,0,0,1-.733-.122,2.213,2.213,0,0,1-.733-.279.543.543,0,0,1-.3-.471,7.128,7.128,0,0,1,.454-2.318c.366-1.029.855-2.355,1.465-3.96l.157-.1c.977-.052,2.145-.087,3.506-.087,1.866,0,2.948,0,3.227.035a.214.214,0,0,1,.192.122l.558,1.361c.366.924.733,1.9,1.1,2.965a8.937,8.937,0,0,1,.558,2.022.636.636,0,0,1-.14.454,1.922,1.922,0,0,1-.82.3,4.656,4.656,0,0,1-.994.122l0,.005a.655.655,0,0,0-.138.464v0a.733.733,0,0,0,.1.471c.349,0,.767-.035,1.238-.07s.907-.052,1.291-.07.8-.017,1.256-.017c.209,0,1.413.052,3.576.157a4.371,4.371,0,0,0,.035-.454v0A.785.785,0,0,0,137.107,20.843Zm-8.128-8.878a.214.214,0,0,1-.017.1.11.11,0,0,1-.07.017c-1.012.07-1.919.1-2.739.1-.855,0-1.832-.017-2.965-.07-.035,0-.068-.035-.07-.122l3-7.935,2.861,7.867Z" transform="translate(86.475 0.091)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_640" data-name="Path 640" d="M186.338,20.83a5.333,5.333,0,0,1-2.128-.541,5.018,5.018,0,0,1-1.554-1.413,89.213,89.213,0,0,1-5.249-7.64,7.185,7.185,0,0,0,3.086-2.128,4.864,4.864,0,0,0,1.347-3.244,4.793,4.793,0,0,0-.612-2.425A5.053,5.053,0,0,0,179.64,1.66,8.08,8.08,0,0,0,177.512.614a7.254,7.254,0,0,0-2.285-.368c-.7,0-1.552.017-2.545.035s-1.711.035-2.076.035c-.333,0-1.6-.052-3.839-.174a.745.745,0,0,0-.1.471.854.854,0,0,0,.1.471,8.682,8.682,0,0,1,1.343.157c.56.087.855.209.907.366a11.349,11.349,0,0,1,.157,2.407l.019,13.9a12.37,12.37,0,0,1-.178,2.407c-.033.14-.345.262-.905.366a6.9,6.9,0,0,1-1.326.14.962.962,0,0,0-.122.471.649.649,0,0,0,.122.471c2.217-.1,3.489-.157,3.837-.157.316,0,1.568.052,3.8.157a.745.745,0,0,0,.1-.471,1.251,1.251,0,0,0-.1-.471,7.127,7.127,0,0,1-1.347-.14c-.556-.1-.853-.227-.905-.366a11.136,11.136,0,0,1-.157-2.407V11.864h1.729a1.068,1.068,0,0,1,.977.384c.94,1.465,1.95,3.018,3.068,4.675s1.812,2.651,2.093,3.035a5.281,5.281,0,0,0,.523.558,4.937,4.937,0,0,0,1.6.872,15.439,15.439,0,0,0,4.293.384,1.281,1.281,0,0,0,.085-.419.9.9,0,0,0-.052-.525Zm-9.833-10.719a5.24,5.24,0,0,1-2.744.741h-1.744L172,4.05a9.478,9.478,0,0,1,.173-2.442c.087-.227.628-.331,1.624-.331a4.944,4.944,0,0,1,3.785,1.308,5.064,5.064,0,0,1,.954,1.669,4.989,4.989,0,0,1,.263,1.906,4.188,4.188,0,0,1-.078.959,4.282,4.282,0,0,1-.774,1.725,4.193,4.193,0,0,1-.665.7,5.245,5.245,0,0,1-.778.567" transform="translate(124.039 0.106)" fill="#161615"/>
                <path id="Path_641" data-name="Path 641" d="M186.338,20.83a5.333,5.333,0,0,1-2.128-.541,5.018,5.018,0,0,1-1.554-1.413,89.213,89.213,0,0,1-5.249-7.64,7.185,7.185,0,0,0,3.086-2.128,4.864,4.864,0,0,0,1.347-3.244,4.793,4.793,0,0,0-.612-2.425A5.053,5.053,0,0,0,179.64,1.66,8.08,8.08,0,0,0,177.512.614a7.254,7.254,0,0,0-2.285-.368c-.7,0-1.552.017-2.545.035s-1.711.035-2.076.035c-.333,0-1.6-.052-3.839-.174a.745.745,0,0,0-.1.471.854.854,0,0,0,.1.471,8.682,8.682,0,0,1,1.343.157c.56.087.855.209.907.366a11.349,11.349,0,0,1,.157,2.407l.019,13.9a12.37,12.37,0,0,1-.178,2.407c-.033.14-.345.262-.905.366a6.9,6.9,0,0,1-1.326.14.962.962,0,0,0-.122.471.649.649,0,0,0,.122.471c2.217-.1,3.489-.157,3.837-.157.316,0,1.568.052,3.8.157a.745.745,0,0,0,.1-.471,1.251,1.251,0,0,0-.1-.471,7.127,7.127,0,0,1-1.347-.14c-.556-.1-.853-.227-.905-.366a11.136,11.136,0,0,1-.157-2.407V11.864h1.729a1.068,1.068,0,0,1,.977.384c.94,1.465,1.95,3.018,3.068,4.675s1.812,2.651,2.093,3.035a5.281,5.281,0,0,0,.523.558,4.937,4.937,0,0,0,1.6.872,15.439,15.439,0,0,0,4.293.384,1.281,1.281,0,0,0,.085-.419.9.9,0,0,0-.052-.525Zm-9.833-10.719a5.24,5.24,0,0,1-2.744.741h-1.744L172,4.05a9.478,9.478,0,0,1,.173-2.442c.087-.227.628-.331,1.624-.331a4.944,4.944,0,0,1,3.785,1.308,5.064,5.064,0,0,1,.954,1.669,4.989,4.989,0,0,1,.263,1.906,4.188,4.188,0,0,1-.078.959,4.282,4.282,0,0,1-.774,1.725,4.193,4.193,0,0,1-.665.7A5.245,5.245,0,0,1,176.505,10.111Z" transform="translate(124.039 0.106)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_642" data-name="Path 642" d="M41.326,20.546a1.669,1.669,0,0,1-1.012-.8c-.017-.052-.3-.767-.837-2.163L32.849.227c-.017-.017-.052-.035-.087-.07a.175.175,0,0,0-.1-.035,1.443,1.443,0,0,0-.663.349,2.355,2.355,0,0,0-.576.593c-1.326,3.366-3.4,8.739-6.279,16.1a13.123,13.123,0,0,1-1.518,3.052,1.574,1.574,0,0,1-.872.454,4.545,4.545,0,0,1-1.081.174,1.328,1.328,0,0,0-.052.523.679.679,0,0,0,.052.419c.366,0,.767-.035,1.169-.052s.8-.07,1.134-.087.733-.017,1.186-.017c.419,0,.785,0,1.1.017s.663.052,1.029.087.7.052,1.029.052a1.641,1.641,0,0,0,.017-.506.918.918,0,0,0-.087-.436,2.664,2.664,0,0,1-.471-.035,5.171,5.171,0,0,1-.75-.122,2.35,2.35,0,0,1-.733-.279.58.58,0,0,1-.3-.471,7.639,7.639,0,0,1,.454-2.32c.366-1.029.855-2.355,1.465-3.96l.157-.1c.977-.052,2.145-.087,3.523-.087,1.849,0,2.93,0,3.209.035a.214.214,0,0,1,.192.122l.558,1.361c.366.924.733,1.9,1.1,2.965a8.952,8.952,0,0,1,.558,2.023.636.636,0,0,1-.14.454,1.922,1.922,0,0,1-.82.3,4.656,4.656,0,0,1-.994.122.655.655,0,0,0-.14.471.734.734,0,0,0,.1.471c.349,0,.767-.035,1.238-.07s.907-.052,1.291-.07.8-.017,1.256-.017c.209,0,1.413.052,3.576.157a1.37,1.37,0,0,0,.035-.454.912.912,0,0,0-.087-.49,4.046,4.046,0,0,1-1.2-.3m-6.942-8.582a.248.248,0,0,1-.035.1.064.064,0,0,1-.052.017c-1.012.07-1.919.1-2.739.1-.855,0-1.831-.017-2.965-.07-.052,0-.07-.035-.07-.122l3-7.936,2.861,7.867Z" transform="translate(16.079 0.091)" fill="#161615"/>
                <path id="Path_643" data-name="Path 643" d="M41.326,20.546a1.669,1.669,0,0,1-1.012-.8c-.017-.052-.3-.767-.837-2.163L32.849.227c-.017-.017-.052-.035-.087-.07a.175.175,0,0,0-.1-.035,1.443,1.443,0,0,0-.663.349,2.355,2.355,0,0,0-.576.593c-1.326,3.366-3.4,8.739-6.279,16.1a13.123,13.123,0,0,1-1.518,3.052,1.574,1.574,0,0,1-.872.454,4.545,4.545,0,0,1-1.081.174,1.328,1.328,0,0,0-.052.523.679.679,0,0,0,.052.419c.366,0,.767-.035,1.169-.052s.8-.07,1.134-.087.733-.017,1.186-.017c.419,0,.785,0,1.1.017s.663.052,1.029.087.7.052,1.029.052a1.641,1.641,0,0,0,.017-.506.918.918,0,0,0-.087-.436,2.664,2.664,0,0,1-.471-.035,5.171,5.171,0,0,1-.75-.122,2.35,2.35,0,0,1-.733-.279.58.58,0,0,1-.3-.471,7.639,7.639,0,0,1,.454-2.32c.366-1.029.855-2.355,1.465-3.96l.157-.1c.977-.052,2.145-.087,3.523-.087,1.849,0,2.93,0,3.209.035a.214.214,0,0,1,.192.122l.558,1.361c.366.924.733,1.9,1.1,2.965a8.952,8.952,0,0,1,.558,2.023.636.636,0,0,1-.14.454,1.922,1.922,0,0,1-.82.3,4.656,4.656,0,0,1-.994.122.655.655,0,0,0-.14.471.734.734,0,0,0,.1.471c.349,0,.767-.035,1.238-.07s.907-.052,1.291-.07.8-.017,1.256-.017c.209,0,1.413.052,3.576.157a1.37,1.37,0,0,0,.035-.454.912.912,0,0,0-.087-.49A4.046,4.046,0,0,1,41.326,20.546Zm-6.942-8.582a.248.248,0,0,1-.035.1.064.064,0,0,1-.052.017c-1.012.07-1.919.1-2.739.1-.855,0-1.831-.017-2.965-.07-.052,0-.07-.035-.07-.122l3-7.936,2.861,7.867Z" transform="translate(16.079 0.091)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_644" data-name="Path 644" d="M12.818,13.981a4.34,4.34,0,0,0-.663-.907,8.335,8.335,0,0,0-.785-.785,9.139,9.139,0,0,0-.924-.715c-.366-.262-.68-.471-.924-.628l-.942-.593L7.725,9.83c-.192-.1-.454-.279-.8-.488s-.628-.384-.82-.506-.454-.3-.75-.506a7.356,7.356,0,0,1-.715-.558c-.174-.157-.366-.366-.576-.593a3.177,3.177,0,0,1-.488-.7A2.988,2.988,0,0,1,3.294,5.7a3.187,3.187,0,0,1-.122-.907A4.058,4.058,0,0,1,3.94,2.4a2.527,2.527,0,0,1,1.116-.89,3.843,3.843,0,0,1,1.657-.331,3.48,3.48,0,0,1,1.518.331,3.917,3.917,0,0,1,1.221.837,7.116,7.116,0,0,1,.924,1.134,6.286,6.286,0,0,1,.61,1.238,4.915,4.915,0,0,1,.279,1.116.539.539,0,0,0,.349.122,1.158,1.158,0,0,0,.471-.1c.157-.07.227-.157.227-.244C12.138,3.462,12,1.927,11.859.985c-.4-.087-.872-.192-1.378-.331L9.312.341A6.643,6.643,0,0,0,8.283.149,11.549,11.549,0,0,0,6.94.062,7.013,7.013,0,0,0,3.853.777,5.924,5.924,0,0,0,1.48,2.8a5.143,5.143,0,0,0-.907,3A4.314,4.314,0,0,0,.7,6.847a8.145,8.145,0,0,0,.3.924,3.28,3.28,0,0,0,.506.855c.244.314.436.558.593.75a4.775,4.775,0,0,0,.767.7c.366.3.628.488.785.61a9.5,9.5,0,0,0,.89.593q.654.419.837.523l.872.506c.209.122.471.279.82.454a8.785,8.785,0,0,1,.8.454,7.314,7.314,0,0,1,.715.436,4.67,4.67,0,0,1,.663.488,3.71,3.71,0,0,1,.523.523,2.7,2.7,0,0,1,.436.628,3.816,3.816,0,0,1,.244.767,4.128,4.128,0,0,1,.1.924,3.86,3.86,0,0,1-1.116,2.913,4.011,4.011,0,0,1-2.791,1.064,5.3,5.3,0,0,1-2.023-.4,5.435,5.435,0,0,1-1.5-.977,6.067,6.067,0,0,1-.977-1.326,8.368,8.368,0,0,1-.61-1.273,7.008,7.008,0,0,1-.279-.994V15.97a.35.35,0,0,0-.366-.279,1.118,1.118,0,0,0-.837.384c0,.262.07.959.209,2.076s.3,2.111.471,2.965c.227.052.645.14,1.238.279s1.1.244,1.483.331.89.14,1.483.227a12.894,12.894,0,0,0,1.64.1A7.663,7.663,0,0,0,9.1,21.639a7.191,7.191,0,0,0,2.18-1.2,5.525,5.525,0,0,0,1.535-1.884,5.346,5.346,0,0,0,.576-2.425,3.581,3.581,0,0,0-.174-1.151,4.1,4.1,0,0,0-.4-.994" transform="translate(0.037 0.047)" fill="#161615"/>
                <path id="Path_645" data-name="Path 645" d="M12.818,13.981a4.34,4.34,0,0,0-.663-.907,8.335,8.335,0,0,0-.785-.785,9.139,9.139,0,0,0-.924-.715c-.366-.262-.68-.471-.924-.628l-.942-.593L7.725,9.83c-.192-.1-.454-.279-.8-.488s-.628-.384-.82-.506-.454-.3-.75-.506a7.356,7.356,0,0,1-.715-.558c-.174-.157-.366-.366-.576-.593a3.177,3.177,0,0,1-.488-.7A2.988,2.988,0,0,1,3.294,5.7a3.187,3.187,0,0,1-.122-.907A4.058,4.058,0,0,1,3.94,2.4a2.527,2.527,0,0,1,1.116-.89,3.843,3.843,0,0,1,1.657-.331,3.48,3.48,0,0,1,1.518.331,3.917,3.917,0,0,1,1.221.837,7.116,7.116,0,0,1,.924,1.134,6.286,6.286,0,0,1,.61,1.238,4.915,4.915,0,0,1,.279,1.116.539.539,0,0,0,.349.122,1.158,1.158,0,0,0,.471-.1c.157-.07.227-.157.227-.244C12.138,3.462,12,1.927,11.859.985c-.4-.087-.872-.192-1.378-.331L9.312.341A6.643,6.643,0,0,0,8.283.149,11.549,11.549,0,0,0,6.94.062,7.013,7.013,0,0,0,3.853.777,5.924,5.924,0,0,0,1.48,2.8a5.143,5.143,0,0,0-.907,3A4.314,4.314,0,0,0,.7,6.847a8.145,8.145,0,0,0,.3.924,3.28,3.28,0,0,0,.506.855c.244.314.436.558.593.75a4.775,4.775,0,0,0,.767.7c.366.3.628.488.785.61a9.5,9.5,0,0,0,.89.593q.654.419.837.523l.872.506c.209.122.471.279.82.454a8.785,8.785,0,0,1,.8.454,7.314,7.314,0,0,1,.715.436,4.67,4.67,0,0,1,.663.488,3.71,3.71,0,0,1,.523.523,2.7,2.7,0,0,1,.436.628,3.816,3.816,0,0,1,.244.767,4.128,4.128,0,0,1,.1.924,3.86,3.86,0,0,1-1.116,2.913,4.011,4.011,0,0,1-2.791,1.064,5.3,5.3,0,0,1-2.023-.4,5.435,5.435,0,0,1-1.5-.977,6.067,6.067,0,0,1-.977-1.326,8.368,8.368,0,0,1-.61-1.273,7.008,7.008,0,0,1-.279-.994V15.97a.35.35,0,0,0-.366-.279,1.118,1.118,0,0,0-.837.384c0,.262.07.959.209,2.076s.3,2.111.471,2.965c.227.052.645.14,1.238.279s1.1.244,1.483.331.89.14,1.483.227a12.894,12.894,0,0,0,1.64.1A7.663,7.663,0,0,0,9.1,21.639a7.191,7.191,0,0,0,2.18-1.2,5.525,5.525,0,0,0,1.535-1.884,5.346,5.346,0,0,0,.576-2.425,3.581,3.581,0,0,0-.174-1.151A4.1,4.1,0,0,0,12.818,13.981Z" transform="translate(0.037 0.047)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_646" data-name="Path 646" d="M63.725,16.205c-.279,0-.419.07-.454.192a5.848,5.848,0,0,1-2.058,3.3,4.646,4.646,0,0,1-1.709.663,10.544,10.544,0,0,1-2.093.209H55.561c-.767,0-1.308-.017-1.587-.035a1.571,1.571,0,0,1-.733-.279A6.345,6.345,0,0,1,53.05,17.9V4.014a9.285,9.285,0,0,1,.157-2.407c.052-.157.349-.279.924-.366a8.486,8.486,0,0,1,1.326-.157.734.734,0,0,0,.1-.471.756.756,0,0,0-.1-.471c-2.215.122-3.489.174-3.8.174S50.032.264,47.817.142a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.924.366a11.126,11.126,0,0,1,.157,2.407V17.9a11.017,11.017,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a8.256,8.256,0,0,1-1.326.14.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471q.6,0,1.831-.052c.837-.017,1.5-.035,2.041-.035,1.5,0,3.454.017,5.843.052s4.134.07,5.25.07a9.763,9.763,0,0,1,.3-1.238c.14-.488.3-.924.419-1.308s.314-.89.558-1.5.384-1.081.488-1.361a1.246,1.246,0,0,0-.82-.192Z" transform="translate(35.508 0.106)" fill="#161615"/>
                <path id="Path_647" data-name="Path 647" d="M63.725,16.205c-.279,0-.419.07-.454.192a5.848,5.848,0,0,1-2.058,3.3,4.646,4.646,0,0,1-1.709.663,10.544,10.544,0,0,1-2.093.209H55.561c-.767,0-1.308-.017-1.587-.035a1.571,1.571,0,0,1-.733-.279A6.345,6.345,0,0,1,53.05,17.9V4.014a9.285,9.285,0,0,1,.157-2.407c.052-.157.349-.279.924-.366a8.486,8.486,0,0,1,1.326-.157.734.734,0,0,0,.1-.471.756.756,0,0,0-.1-.471c-2.215.122-3.489.174-3.8.174S50.032.264,47.817.142a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.924.366a11.126,11.126,0,0,1,.157,2.407V17.9a11.017,11.017,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a8.256,8.256,0,0,1-1.326.14.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471q.6,0,1.831-.052c.837-.017,1.5-.035,2.041-.035,1.5,0,3.454.017,5.843.052s4.134.07,5.25.07a9.763,9.763,0,0,1,.3-1.238c.14-.488.3-.924.419-1.308s.314-.89.558-1.5.384-1.081.488-1.361a1.246,1.246,0,0,0-.82-.192Z" transform="translate(35.508 0.106)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_648" data-name="Path 648" d="M107.938,12.349c-.314,0-1.587-.052-3.8-.174a.658.658,0,0,0-.122.471.862.862,0,0,0,.122.471,8.243,8.243,0,0,1,1.308.157c.558.087.855.227.89.366a10.22,10.22,0,0,1,.174,2.407v3.279a.53.53,0,0,1-.227.488,8.92,8.92,0,0,1-3.942,1.047,7.929,7.929,0,0,1-3.052-.593A7.311,7.311,0,0,1,96.9,18.7a9.842,9.842,0,0,1-1.675-2.3A11.6,11.6,0,0,1,94.211,13.6a13.513,13.513,0,0,1-.331-3.018,10.977,10.977,0,0,1,.959-4.465,9.251,9.251,0,0,1,2.808-3.576,6.676,6.676,0,0,1,4.169-1.43q5.442,0,6.384,4.762a.7.7,0,0,0,.384.087.984.984,0,0,0,.488-.14c.157-.087.244-.174.227-.279,0-.209-.244-1.814-.75-4.814a32.644,32.644,0,0,0-6.89-.68,10.972,10.972,0,0,0-7.9,3.314,11.655,11.655,0,0,0-3.087,7.9,10.914,10.914,0,0,0,3,7.5,10.751,10.751,0,0,0,3.454,2.32,11.231,11.231,0,0,0,4.413.855,18.862,18.862,0,0,0,3.558-.3,12.538,12.538,0,0,0,2.25-.593c.436-.192.994-.454,1.64-.8a2.6,2.6,0,0,0,.523-.331.371.371,0,0,0,.122-.262,2.429,2.429,0,0,0-.157-.506,2.1,2.1,0,0,1-.174-.785V16.048a10.129,10.129,0,0,1,.174-2.407c.035-.14.314-.279.837-.366a7.816,7.816,0,0,1,1.273-.157,1.05,1.05,0,0,0,.1-.471.759.759,0,0,0-.1-.473c-2.233.122-3.436.174-3.646.174" transform="translate(67.484 0.038)" fill="#161615"/>
                <path id="Path_649" data-name="Path 649" d="M107.938,12.349c-.314,0-1.587-.052-3.8-.174a.658.658,0,0,0-.122.471.862.862,0,0,0,.122.471,8.243,8.243,0,0,1,1.308.157c.558.087.855.227.89.366a10.22,10.22,0,0,1,.174,2.407v3.279a.53.53,0,0,1-.227.488,8.92,8.92,0,0,1-3.942,1.047,7.929,7.929,0,0,1-3.052-.593A7.311,7.311,0,0,1,96.9,18.7a9.842,9.842,0,0,1-1.675-2.3A11.6,11.6,0,0,1,94.211,13.6a13.513,13.513,0,0,1-.331-3.018,10.977,10.977,0,0,1,.959-4.465,9.251,9.251,0,0,1,2.808-3.576,6.676,6.676,0,0,1,4.169-1.43q5.442,0,6.384,4.762a.7.7,0,0,0,.384.087.984.984,0,0,0,.488-.14c.157-.087.244-.174.227-.279,0-.209-.244-1.814-.75-4.814a32.644,32.644,0,0,0-6.89-.68,10.972,10.972,0,0,0-7.9,3.314,11.655,11.655,0,0,0-3.087,7.9,10.914,10.914,0,0,0,3,7.5,10.751,10.751,0,0,0,3.454,2.32,11.231,11.231,0,0,0,4.413.855,18.862,18.862,0,0,0,3.558-.3,12.538,12.538,0,0,0,2.25-.593c.436-.192.994-.454,1.64-.8a2.6,2.6,0,0,0,.523-.331.371.371,0,0,0,.122-.262,2.429,2.429,0,0,0-.157-.506,2.1,2.1,0,0,1-.174-.785V16.048a10.129,10.129,0,0,1,.174-2.407c.035-.14.314-.279.837-.366a7.816,7.816,0,0,1,1.273-.157,1.05,1.05,0,0,0,.1-.471.759.759,0,0,0-.1-.473C109.351,12.3,108.148,12.349,107.938,12.349Z" transform="translate(67.484 0.038)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_650" data-name="Path 650" d="M251.781,16.231a1.2,1.2,0,0,0-.426-.024c-.263,0-.42.07-.455.192a5.838,5.838,0,0,1-2.058,3.3,4.668,4.668,0,0,1-1.708.663,10.434,10.434,0,0,1-2.095.209H243.19c-.767,0-1.289-.017-1.587-.035a1.5,1.5,0,0,1-.713-.279,6.318,6.318,0,0,1-.211-2.355V4.014a8.645,8.645,0,0,1,.174-2.407c.037-.157.349-.279.909-.366a8.439,8.439,0,0,1,1.324-.157.7.7,0,0,0,.1-.471.563.563,0,0,0-.1-.471c-2.215.122-3.471.174-3.8.174s-1.607-.052-3.839-.174a.756.756,0,0,0-.1.471.869.869,0,0,0,.1.471,8.682,8.682,0,0,1,1.343.157c.56.087.856.209.907.366a11.016,11.016,0,0,1,.157,2.407v13.9a11.023,11.023,0,0,1-.157,2.407c-.051.14-.347.262-.907.366a7.061,7.061,0,0,1-1.343.14.937.937,0,0,0-.1.471.744.744,0,0,0,.1.471c.4,0,1.031,0,1.851-.035s1.5-.052,2.022-.052c1.5,0,3.455,0,5.843.052s4.134.07,5.25.07a10.4,10.4,0,0,1,.3-1.238c.159-.488.314-.924.436-1.308s.314-.872.542-1.5.382-1.064.488-1.361a1.251,1.251,0,0,0-.394-.167" transform="translate(175.156 0.106)" fill="#161615"/>
                <path id="Path_651" data-name="Path 651" d="M251.781,16.231a1.2,1.2,0,0,0-.426-.024c-.263,0-.42.07-.455.192a5.838,5.838,0,0,1-2.058,3.3,4.668,4.668,0,0,1-1.708.663,10.434,10.434,0,0,1-2.095.209H243.19c-.767,0-1.289-.017-1.587-.035a1.5,1.5,0,0,1-.713-.279,6.318,6.318,0,0,1-.211-2.355V4.014a8.645,8.645,0,0,1,.174-2.407c.037-.157.349-.279.909-.366a8.439,8.439,0,0,1,1.324-.157.7.7,0,0,0,.1-.471.563.563,0,0,0-.1-.471c-2.215.122-3.471.174-3.8.174s-1.607-.052-3.839-.174a.756.756,0,0,0-.1.471.869.869,0,0,0,.1.471,8.682,8.682,0,0,1,1.343.157c.56.087.856.209.907.366a11.016,11.016,0,0,1,.157,2.407v13.9a11.023,11.023,0,0,1-.157,2.407c-.051.14-.347.262-.907.366a7.061,7.061,0,0,1-1.343.14.937.937,0,0,0-.1.471.744.744,0,0,0,.1.471c.4,0,1.031,0,1.851-.035s1.5-.052,2.022-.052c1.5,0,3.455,0,5.843.052s4.134.07,5.25.07a10.4,10.4,0,0,1,.3-1.238c.159-.488.314-.924.436-1.308s.314-.872.542-1.5.382-1.064.488-1.361A1.251,1.251,0,0,0,251.781,16.231Z" transform="translate(175.156 0.106)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_652" data-name="Path 652" d="M197.134,1.607c.035-.157.349-.279.907-.366a8.486,8.486,0,0,1,1.326-.157.756.756,0,0,0,.1-.471.583.583,0,0,0-.1-.471c-2.215.1-3.471.157-3.8.157s-1.6-.052-3.837-.157a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.924.366a11.125,11.125,0,0,1,.157,2.407V17.9a11.125,11.125,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a10.876,10.876,0,0,1-1.326.14,1.112,1.112,0,0,0,0,.942c2.215-.1,3.523-.157,3.837-.157s1.587.052,3.8.157a1.112,1.112,0,0,0,0-.942,10.876,10.876,0,0,1-1.326-.14c-.576-.1-.872-.227-.924-.384a11.127,11.127,0,0,1-.157-2.407V4.014a10.129,10.129,0,0,1,.174-2.407" transform="translate(142.617 0.106)" fill="#161615"/>
                <path id="Path_653" data-name="Path 653" d="M197.134,1.607c.035-.157.349-.279.907-.366a8.486,8.486,0,0,1,1.326-.157.756.756,0,0,0,.1-.471.583.583,0,0,0-.1-.471c-2.215.1-3.471.157-3.8.157s-1.6-.052-3.837-.157a.756.756,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.924.366a11.125,11.125,0,0,1,.157,2.407V17.9a11.125,11.125,0,0,1-.157,2.407c-.052.157-.349.279-.924.384a10.876,10.876,0,0,1-1.326.14,1.112,1.112,0,0,0,0,.942c2.215-.1,3.523-.157,3.837-.157s1.587.052,3.8.157a1.112,1.112,0,0,0,0-.942,10.876,10.876,0,0,1-1.326-.14c-.576-.1-.872-.227-.924-.384a11.127,11.127,0,0,1-.157-2.407V4.014A10.129,10.129,0,0,1,197.134,1.607Z" transform="translate(142.617 0.106)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                <path id="Path_654" data-name="Path 654" d="M226.61,16.421a15.319,15.319,0,0,1-.942,2.111,2.984,2.984,0,0,1-1.116,1.169,5.545,5.545,0,0,1-1.8.645,11.221,11.221,0,0,1-2.3.244h-1.57q-.8.013-1.587-.052a1.341,1.341,0,0,1-.715-.279c-.087-.07-.14-.366-.174-.89s-.035-.977-.035-1.361V11.834a.172.172,0,0,1,.1-.122,1.04,1.04,0,0,1,.314-.087l.4-.052c.14,0,.314-.017.523-.017h1.012a11.377,11.377,0,0,1,3.436.262,1.08,1.08,0,0,1,.419.506c.192.541.366,1.081.506,1.64q.1.262.523.262a.82.82,0,0,0,.523-.14V7.926a.8.8,0,0,0-.558-.157c-.3,0-.454.07-.488.227a1.72,1.72,0,0,0-.07.279c-.087.331-.157.593-.209.82a1.8,1.8,0,0,1-.262.558,1.367,1.367,0,0,1-.349.366,1.61,1.61,0,0,1-.576.209,4.525,4.525,0,0,1-.855.087c-.3.017-.715.017-1.256.017h-1.727a8.81,8.81,0,0,1-1.029-.035c-.262-.035-.384-.07-.366-.157V4.072a8.5,8.5,0,0,1,.157-2.3q.1-.366,2.25-.366h2.791a4.122,4.122,0,0,1,2.355.628,4.212,4.212,0,0,1,1.413,2.442c.035.14.192.227.454.227a.826.826,0,0,0,.593-.174c-.052-.262-.209-.907-.453-1.936s-.4-1.849-.488-2.477c-1.221,0-3.018.035-5.425.1s-4.082.122-5.058.122c-.349,0-1.622-.052-3.837-.174a.653.653,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.907.366a10.22,10.22,0,0,1,.174,2.407v13.9a10.22,10.22,0,0,1-.174,2.407c-.035.14-.331.262-.907.366a6.91,6.91,0,0,1-1.326.14.78.78,0,0,0-.1.471.637.637,0,0,0,.1.471c.4,0,1.012-.017,1.831-.035q1.23-.052,2.041-.052c1.5,0,3.436,0,5.826.052s4.151.07,5.268.07a9.767,9.767,0,0,1,.3-1.238q.209-.733.419-1.308c.14-.384.331-.907.558-1.518s.4-1.064.488-1.343a1.176,1.176,0,0,0-.8-.192c-.279,0-.436.07-.454.192" transform="translate(157.062 0.084)" fill="#161615"/>
                <path id="Path_655" data-name="Path 655" d="M226.61,16.421a15.319,15.319,0,0,1-.942,2.111,2.984,2.984,0,0,1-1.116,1.169,5.545,5.545,0,0,1-1.8.645,11.221,11.221,0,0,1-2.3.244h-1.57q-.8.013-1.587-.052a1.341,1.341,0,0,1-.715-.279c-.087-.07-.14-.366-.174-.89s-.035-.977-.035-1.361V11.834a.172.172,0,0,1,.1-.122,1.04,1.04,0,0,1,.314-.087l.4-.052c.14,0,.314-.017.523-.017h1.012a11.377,11.377,0,0,1,3.436.262,1.08,1.08,0,0,1,.419.506c.192.541.366,1.081.506,1.64q.1.262.523.262a.82.82,0,0,0,.523-.14V7.926a.8.8,0,0,0-.558-.157c-.3,0-.454.07-.488.227a1.72,1.72,0,0,0-.07.279c-.087.331-.157.593-.209.82a1.8,1.8,0,0,1-.262.558,1.367,1.367,0,0,1-.349.366,1.61,1.61,0,0,1-.576.209,4.525,4.525,0,0,1-.855.087c-.3.017-.715.017-1.256.017h-1.727a8.81,8.81,0,0,1-1.029-.035c-.262-.035-.384-.07-.366-.157V4.072a8.5,8.5,0,0,1,.157-2.3q.1-.366,2.25-.366h2.791a4.122,4.122,0,0,1,2.355.628,4.212,4.212,0,0,1,1.413,2.442c.035.14.192.227.454.227a.826.826,0,0,0,.593-.174c-.052-.262-.209-.907-.453-1.936s-.4-1.849-.488-2.477c-1.221,0-3.018.035-5.425.1s-4.082.122-5.058.122c-.349,0-1.622-.052-3.837-.174a.653.653,0,0,0-.1.471.734.734,0,0,0,.1.471,8.486,8.486,0,0,1,1.326.157c.576.087.872.209.907.366a10.22,10.22,0,0,1,.174,2.407v13.9a10.22,10.22,0,0,1-.174,2.407c-.035.14-.331.262-.907.366a6.91,6.91,0,0,1-1.326.14.78.78,0,0,0-.1.471.637.637,0,0,0,.1.471c.4,0,1.012-.017,1.831-.035q1.23-.052,2.041-.052c1.5,0,3.436,0,5.826.052s4.151.07,5.268.07a9.767,9.767,0,0,1,.3-1.238q.209-.733.419-1.308c.14-.384.331-.907.558-1.518s.4-1.064.488-1.343a1.176,1.176,0,0,0-.8-.192C226.785,16.229,226.628,16.3,226.61,16.421Z" transform="translate(157.062 0.084)" fill="none" stroke="#0d0d0d" stroke-width="0.1"/>
                </g>
            </g>
        </svg>

    </a>
    <div class="flex justify-end w-[65px] md:w-[167px] lg:w-[320px]">
        <div class="w-full max-w-[65px] lg:max-w-[120px] flex justify-end md:justify-between h-[18px]">
            <button id="searchlink" class="hidden lg:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 172.052 172.232">
                    <path id="Screenshot_2024-06-20_at_12.10.15" data-name="Screenshot 2024-06-20 at 12.10.15" d="M119.129,222.388a78.418,78.418,0,0,1-28.618-36.351,72.451,72.451,0,0,1-5.1-23.448c-1.24-30.634,11-54.492,36.408-71.47a73.013,73.013,0,0,1,31.334-11.5,79.959,79.959,0,0,1,21.865,0,77.519,77.519,0,0,1,43.745,21.15,76.314,76.314,0,0,1,22.967,42.2,77.571,77.571,0,0,1-9.239,54.055,68.987,68.987,0,0,1-8.437,11.885c-.315.352-.569.76-.925,1.241,2.936,2.674,5.811,5.3,8.694,7.918q12.207,11.082,24.418,22.159c1.5,1.36,1.487,1.37.135,2.8q-3.384,3.568-6.77,7.134a2.317,2.317,0,0,1-1.293.945c-2.152-1.959-4.392-3.992-6.626-6.032q-13.406-12.238-26.785-24.5c-1.148-1.059-1.853-1.089-3.118-.128a78,78,0,0,1-32.415,14.525,76.556,76.556,0,0,1-20.123,1.373,78.542,78.542,0,0,1-40.119-13.945m8.859-119.671a66.282,66.282,0,0,0-11.623,9.713Q95.377,135.185,98.92,165.939a60.421,60.421,0,0,0,13.051,31.643c16.639,20.567,38.223,28.816,64.326,24.576a59.783,59.783,0,0,0,30.18-14.345c18.529-16.257,26.162-36.71,22.437-61.092-2.467-16.146-10.451-29.41-23-39.764C191.593,95.141,174.973,90.49,156.575,92.37A63.7,63.7,0,0,0,127.988,102.717Z" transform="translate(-85.328 -78.867)"/>
                </svg>
            </button>
            <a href="/wishlist" class="hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="100%" viewBox="0 0 186.827 163.608">
                    <path id="Screenshot_2024-06-20_at_12.10.12" data-name="Screenshot 2024-06-20 at 12.10.12" d="M147.272,224.314a280.586,280.586,0,0,1-41.516-35.85,139.276,139.276,0,0,1-21.808-29.621c-4.452-8.35-7.66-17.14-8.383-26.613A54.315,54.315,0,0,1,119.1,74.757c15.234-3.1,29.31.173,42.1,9a60.756,60.756,0,0,1,7.565,6.474c1.265-1.157,2.435-2.273,3.653-3.335a52.386,52.386,0,0,1,27.544-12.583c15.528-2.2,29.665,1.561,41.931,11.4a53.032,53.032,0,0,1,18.526,28.652,52.3,52.3,0,0,1,1.547,18.595c-1,9.848-4.416,18.931-9.207,27.539a135.817,135.817,0,0,1-18.2,25.01c-17.923,19.812-38.853,35.961-61.274,50.3a7.549,7.549,0,0,1-8.622.123c-5.952-3.579-11.632-7.559-17.387-11.616m50.105-136.3c-.733.216-1.472.415-2.2.652A39.287,39.287,0,0,0,174.3,104.017c-2.586,3.773-8.405,3.822-10.877.175a33.979,33.979,0,0,0-5.555-6.367c-10.822-9.611-23.358-13.323-37.488-10.056-23.909,5.529-37.848,29.959-29.693,54.4,3.194,9.573,8.413,17.994,14.541,25.9a185.783,185.783,0,0,0,23.007,24.219,327.948,327.948,0,0,0,38.928,29.843,2.558,2.558,0,0,0,3.311-.035c6.824-4.522,13.512-9.228,20.005-14.216,14.19-10.9,27.625-22.613,39.109-36.412,6.362-7.645,11.953-15.8,15.737-25.065,3.562-8.728,5.1-17.727,3.014-27.051-2.689-12.019-9.326-21.3-20.086-27.369C218.63,86.56,208.338,85.344,197.378,88.01Z" transform="translate(-75.392 -73.612)"/>
                </svg>
            </a>
            <button class="sidecar">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.849" height="18" viewBox="0 0 19.849 18">
                    <defs>
                        <clipPath id="clip-path">
                        <rect id="Rectangle_511" data-name="Rectangle 511" width="19.849" height="18" fill="none"/>
                        </clipPath>
                    </defs>
                    <g id="Group_354" data-name="Group 354" clip-path="url(#clip-path)">
                        <path id="Path_632" data-name="Path 632" d="M13.756,88.2l.067,0c.993,0,1.987,0,2.98,0a2.973,2.973,0,0,1,1.882.632,2.909,2.909,0,0,1,1.12,1.9,3.824,3.824,0,0,1,.047.576q0,4.423,0,8.847a3.006,3.006,0,0,1-.664,1.959,2.908,2.908,0,0,1-1.877,1.083,4.122,4.122,0,0,1-.605.045q-6.82,0-13.639,0a2.951,2.951,0,0,1-2.632-1.462,2.847,2.847,0,0,1-.413-1.3c-.011-.134-.016-.27-.016-.4q0-4.405,0-8.81a2.98,2.98,0,0,1,.637-1.9,2.917,2.917,0,0,1,1.934-1.12,3.652,3.652,0,0,1,.5-.038c1,0,2.007,0,3.022,0l1.214,0,.027,0h5l.2,0h1.137c.028,0,.057,0,.085,0M1.217,92.45q0,3.858,0,7.716a2.1,2.1,0,0,0,.052.468,1.789,1.789,0,0,0,1.767,1.394H16.775a2.272,2.272,0,0,0,.342-.026,1.8,1.8,0,0,0,1.52-1.774V91.233a1.872,1.872,0,0,0-.1-.614,1.8,1.8,0,0,0-1.73-1.2l-13.743,0a1.94,1.94,0,0,0-.545.075,1.791,1.791,0,0,0-1.3,1.72c-.007.409,0,.819,0,1.241" transform="translate(-0.005 -85.243)" fill="#030405"/>
                        <path id="Path_633" data-name="Path 633" d="M183.194,2.928a.076.076,0,0,1-.026,0,.437.437,0,0,0-.075-.008h-1.13a3.637,3.637,0,0,1,.31-1.142,2.907,2.907,0,0,1,1.885-1.6,5.52,5.52,0,0,1,1.851-.2,5.43,5.43,0,0,1,1.236.177,3.325,3.325,0,0,1,1.41.749,2.992,2.992,0,0,1,.874,1.552,4.4,4.4,0,0,1,.074.46c-.409.005-.812,0-1.216,0l-.024-.113a1.9,1.9,0,0,0-.436-.911,1.925,1.925,0,0,0-.846-.52,3.916,3.916,0,0,0-1.042-.179,4.687,4.687,0,0,0-1.419.117,1.752,1.752,0,0,0-1.35,1.259c-.034.119-.052.242-.077.363" transform="translate(-175.863 0.077)" fill="#030405"/>
                        <path id="Path_634" data-name="Path 634" d="M373.638,87.965h1.214a.011.011,0,0,1,.01,0,.672.672,0,0,1-.085.006c-.377,0-.754,0-1.137,0a.005.005,0,0,1,0-.008" transform="translate(-361.112 -85.016)" fill="#212125"/>
                        <path id="Path_635" data-name="Path 635" d="M181.85,87.971c.379,0,.756,0,1.132,0a.341.341,0,0,1,.07.008c-.4,0-.795,0-1.2,0-.006,0,0-.006,0-.009" transform="translate(-175.753 -85.021)" fill="#202024"/>
                    </g>
                </svg>

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