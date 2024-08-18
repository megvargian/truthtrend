<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
</div><!-- #content -->
<?php  get_template_part('template-parts/footer', 'before'); ?>
<?php
$getGeneralFields = get_fields('options');
$footer_fields = $getGeneralFields['footer_menu_items'];
$footer_logo = $getGeneralFields['footer_logo'];
?>
<footer>
    <div class="main_footer_section bg-black">
        <div class="container">
           <div class="row d-flex justify-content-center align-center py-4">
                <a class="fit-content" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo $footer_logo; ?>" alt="naqd-logo">
                </a>
           </div>
           <div class="row">
                <div class="white_seperator w-100"></div>
           </div>
           <div class="row py-4">
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 pb-lg-0 pb-3">
                            <ul class="fit-content first-section d-flex d-lg-block">
                                <?php foreach($footer_fields[0]['child_items'] as $items){ ?>
                                    <li>
                                        <a href="<?php echo $items['url']; ?>">
                                            <?php echo $items['label']; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12 pb-lg-0 pb-3">
                            <ul class="fit-content first-section d-flex d-lg-block">
                                <?php foreach($footer_fields[1]['child_items'] as $items){ ?>
                                    <li>
                                        <a href="<?php echo $items['url']; ?>">
                                            <?php echo $items['label']; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
           </div>
           <div class="row">
                <div class="white_seperator w-100"></div>
           </div>
           <div class="row py-4">
                <div class="col-md-8 col-sm-7 col-6">
                    <ul class="d-flex justify-content-start align-content-start second-section">
                        <?php foreach($footer_fields[2]['child_items'] as $items){ ?>
                            <li>
                                <a href="<?php echo $items['url']; ?>">
                                    <?php echo $items['label']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-5 col-6 d-flex justify-content-center align-items-center">
                    <a href="<?php echo 'https://truthtrend.me/' ?>" class="main_button d-flex justify-content-center align-items-center" target="_blank" style="font-size: 1rem;">
                        <?php echo 'للدعم المالي' ?>
                    </a>
                </div>
           </div>
           <div class="row">
                <div class="white_seperator w-100"></div>
           </div>
           <div class="row">

           </div>
        </div>
    </div>
    <?php  get_template_part('template-parts/footer', 'after'); ?>
</footer>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
        // $("body").queryLoader2({
		// 		onProgress: function(percentage, imagesLoaded, totalImages){
		// 			$('.progress-bar').css('width', percentage + '%');
		// 			$('.progress-bar').attr('aria-valuenow', percentage);
		// 			$(document).load().scrollTop(0);
		// 		},
		// 		onComplete: function(){
		// 			setTimeout(function(){
		// 				$('.page_loader').slideUp(700, function() {
		// 				});
		// 				$('.second_color').slideUp(900, function() {

		// 				});

		// 			}, 500);

		// 			setTimeout(function(){
		// 				if ($(window).width() > 991) {
		// 					$('.page_loader').remove();
		// 				}
		// 			}, 1200);
		// 			setTimeout(function(){
		// 				// home();
		// 				$('.animate_part_0').removeClass('animate_part_0_active');
		// 				$('.animate_part_0_2').removeClass('animate_part_0_2_active');
		// 				$('.animate_part_0_3').removeClass('animate_part_0_3_active');
		// 				$('.nav-bar').removeClass('nav-bar-slide');
		// 			}, 1400);
		// 			setTimeout(function(){
		// 				$('.nav-bar').css('transition', '0s');
		// 			}, 1700);

		// 		},
		// });
        // // if($('.first_section').visibale(true)) {
        // //     $('.animate_part_0').removeClass('animate_part_0_active');
        // // }
		// $('.mouse_icon').click(function(event) {
		// 	// Preventing default action of the event
		// 	event.preventDefault();
		// 	var n = $(document).height();
		// 	$('html, body').animate({ scrollTop: 800 }, 300);
		// });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>