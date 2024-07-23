<?php
/**
 * Template name: Returns
 */


 get_header(); ?>

<main class="w-full">
    <!-- FEATURED ARTICLES -->
    <section>
        <div class="container pt-[25px] md:pt-[15px] lg:pt-[35px] xl:pt-[40px]">
            <div class="w-full max-w-[360px] md:max-w-[unset] md:w-[658px] lg:w-[820px] xl:w-[914px] pb-[65px] md:pb-[70px] lg:pb-[40px] xl:pb-[80px]">
                <div class="">
                    <h1 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase">Shipping</h1>
                    <div class="mt-[25px] md:mt-[35px] xl:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em] text-editor">Our items ship within 2-7 business days. Please contact customer care if you need your product faster. We offer free shipping to the Netherlands, Belgium, France, Luxembourg, Germany, Austria, Spain and Italy for orders above €85. Once your order has left our facilities we will update you by sending you the track and trace code of the shipment. <br><br>Every item is protected by a flannel cotton dust bag and by tissue paper and put into our signature Sal Gabriel box.</div>
                </div>
                <div class="mt-[25px] md:mt-[35px] xl:mt-[50px]">
                     <h2 class="font-syne text-15 leading-23 lg:text-15 md:leading-25 xl:text-16 xl:leading-25 tracking-[0.15em] text-[#000000] font-normal md:font-bold uppercase">Returns</h2>
                    <p class="mt-[25px] md:mt-[35px] xl:mt-[50px] font-jost font-normal text-15 leading-26 tracking-[0.02em] text-[#121212] xl:text-16 xl:leading-28 xl:tracking-[0.025em]">If you are not 100% satisfied with your online purchase you can return your goods, provided we get them back within 14 days of receipt and in perfect original condition, in the original packaging and with all tags attached. To start the return process, please complete the <a href="#form" class="underline">return form</a>. Once processed, further instructions will follow. <br><br>Refunds online will be made via the original payment method within 14 days of our receipt of returned item. You will be refunded equal to the amount paid for the item(s) returned. The original shipping cost will not be reimbursed. Due to being a small independent business, customers are responsible for return shipping charges for unwanted items. For your protection, please be sure to return your goods via recorded or registered post. <br><br>For returns queries, please contact us at returns@salgabriel.com. 
                </p>
                </div>
                <div id="form" class="basis-form mt-[40px] w-full md:w-[658px] lg:w-[684px] xl:w-[771px]">
                    <h2 class="font-jost font-semibold text-14 leading-24 xl:text-14 xl:leading-24 tracking-[0.05em] uppercase">Start return process</h2>
				    <hr class="border-[#DDDDDD] my-[10px]">
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                </div>
            </div>
          
        </div>
    </section>
    
</main>
<?php get_footer('nofooter'); ?>



