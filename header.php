<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XLNX0E8YTL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XLNX0E8YTL');
</script>
<body <?php body_class(); ?>>
<?php
$getGeneralFields = get_fields('options');
$header_fields = $getGeneralFields['menu_items'];
$current_language = apply_filters('wpml_current_language', NULL);
// global $post;
// $category_term = get_queried_object();
// if(is_category()){
//     $post_slug = 'category/' . $category_term -> slug;
// }else{
//     $post_slug = $post->post_name;
// }
?>
<div id="page" class="site main_page_wrapper">
    <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: transparent;">
                <form action="/<?php echo $current_language == 'ar' ? '' : $current_language; ?>" method="post">
                    <div class="modal-body" style="border-radius: 30px;">
                        <input type="text" class="mb-0 w-100" style="border: 1px solid black; border-radius: 30px; text-align: <?php echo ($current_language == 'en') ? 'left' : 'right';?>" placeholder="Search" required name="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
	<header id="masthead" class="header-container" role="banner">
		<nav class="w-100">
			<div class="container d-none d-lg-block">
                <div class="row">
                    <ul class="w-100 d-flex justify-content-start align-center">
                        <li style="margin-bottom: 0; height: fit-content;">
                            <svg class="cusrsor-pointer" data-bs-toggle="modal" data-bs-target="#search" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                                <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                            </svg>
                        </li>
                        <?php
                            foreach($header_fields as $key => $menu_item){
                                if($menu_item['general_image'] != ''){
                                    $save_for_mobile_logo = $menu_item['general_image'];
                        ?>
                            <li id="logo-main">
                                <a style="height: fit-content; display: block;" href="<?php echo $menu_item['url']; ?>">
                                    <img class="logo" src="<?php echo $menu_item['general_image']; ?>" alt="truthtrend">
                                </a>
                            </li>
                        <?php } else if ($menu_item['has_child']){ ?>
                            <li class="menu-item-has-child">
                                <?php if($menu_item['url']){ ?>
                                    <a href="<?php echo $menu_item['url']; ?>">
                                        <?php echo $menu_item['label']; ?>
                                    </a>
                                <?php } else { ?>
                                    <button class="button-no-redirect">
                                        <?php echo $menu_item['label']; ?>
                                    </button>
                                <?php } ?>
                                <div class="sub-full-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="sub-div">
                                                    <!-- <div class="sub-label mb-3">
                                                        <h5><?php // echo $single_menu['sub_menu_section']['left_side_menu_label'] ?></h5>
                                                    </div> -->
                                                    <ul class="sub-menu-list">
                                                        <?php
                                                            $first_four_sub_items = array_splice($menu_item['sub_items'], 0, 4);
                                                            foreach($first_four_sub_items as $sub_menu_items){ ?>
                                                            <li class="sub-menu-link">
                                                                <a href="<?php echo $sub_menu_items['sub_item_url']; ?>">
                                                                    <?php echo $sub_menu_items['sub_item_text']; ?>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <ul class="sub-menu-list">
                                                        <?php
                                                            foreach($menu_item['sub_items'] as $sub_menu_items){ ?>
                                                            <li class="sub-menu-link">
                                                                <a href="<?php echo $sub_menu_items['sub_item_url']; ?>">
                                                                    <?php echo $sub_menu_items['sub_item_text']; ?>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        <?php } else {?>
                            <li>
                                <a href="<?php echo $menu_item['url'] ?>"><?php echo $menu_item['label']; ?></a>
                            </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
           <div class="container d-block d-lg-none">
                <div class="row justify-content-start">
                    <div class="col-3">
                        <button class="hamburger hamburger--collapse" type="button">
                            <div class="menu_mobile_nav">
                                <div class="hamburger_menu_icon">
                                    <div class="line"></div>
                                    <div class="line middle_line"></div>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <a href="<?php echo home_url(); ?>">
                            <img class="mobile_logo" src="<?php echo $save_for_mobile_logo; ?>" alt="truthtrend-logo">
                        </a>
                    </div>
                    <div class="col-3 text-<?php echo ($current_language == 'en') ? 'right' : 'left'; ?>">
                        <svg class="cusrsor-pointer" data-bs-toggle="modal" data-bs-target="#search" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                            <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
                        </svg>
                    </div>
                </div>
           </div>
            <div id="menu_mobile" class="menu_on_mobile d-block d-lg-none">
                <div class="menu_on_mobile_wrapper">
                    <div class="menu_on_mobile_inner_wrapper" style="position: relative;">
                        <div>
                            <?php foreach($header_fields as $key => $menu_item){
                                    if($menu_item['general_image'] == '' && $menu_item['has_child'] == false){?>
                                        <a class="d-block my-3 page_font animated_menu_el" href="<?php echo $menu_item['url'] ?>">
                                            <div class="menu_item <?php if(is_page(6) || is_page(1612)){ echo 'active_page';  }else{ echo 'line_animation' ; } ?>">
                                                <?php echo $menu_item['label']?>
                                            </div>
                                        </a>
                            <?php } else if($menu_item['has_child']){
                                    $count++;
                            ?>
                                <div class="accordion" id="accordionExample-header">
                                    <div class="accordion-item" style="border: none;">
                                        <h2 class="accordion-header mt-0"
                                            id="headingOne-header-<?php echo $count;?>">
                                            <button
                                                class="accordion-button accordion-custom-button text-center d-block mb-3 page_font animated_menu_el collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-header-<?php echo $count; ?>"
                                                aria-expanded="true"
                                                aria-controls="collapseOne-header-<?php echo $count; ?>">
                                                <?php echo $menu_item['label']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne-header-<?php echo $count; ?>"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingOne-header-<?php echo $count;?>"
                                            data-bs-parent="#accordionExample-header">
                                            <div class="accordion-body">
                                                <ul class="sub-menus-header">
                                                    <?php foreach($menu_item['sub_items'] as $sub_menu_items){ ?>
                                                        <li class="mb-3">
                                                            <a
                                                                href="<?php echo $sub_menu_items['sub_item_url']; ?>">
                                                                <?php echo $sub_menu_items['sub_item_text']; ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                            <a href="<?php echo 'https://truthtrend.me/' ?>" class="main_button text-white d-flex justify-content-center align-items-center mb-2 mb-lg-5" target="_blank">
                                <?php echo 'للدعم المالي' ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
		</nav>
	</header>
</div>
<?php if(is_singular( 'post' )){ ?>
    <div id="progress-container">
        <div id="progress-bar"></div>
    </div>
<?php } ?>
<script>
    jQuery(document).ready(function($) {
        $('.menu_mobile_nav').click(function(event) {
            $(this).toggleClass('active');
            $('html, body').toggleClass('hide_scroll');
            $('.menu_on_mobile').toggleClass('active');
            $('.display_background_of_the_page').toggleClass('mobile_active');
            $('#progress-container').toggleClass('d-none');
        });
        $(window).scroll(function() {
            var currentScreenPosition = $(document).scrollTop();
            if (currentScreenPosition > 250) {
                $(".header-container").addClass("active");
            } else {
                $(".header-container").removeClass("active");

            }
        });
    });
</script>
<div class="site-content">
