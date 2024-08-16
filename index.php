<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<?php
	while ( have_posts() ) : the_post();
        the_content();
	endwhile;
?>
<script>
    jQuery(document).ready(function($) {
        var swiper = new Swiper(".mainSwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
        });
        var swiper = new Swiper(".secondMainSwiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
        });
        var swiper = new Swiper(".FirstSwiperMobile", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
        });
        var swiper = new Swiper(".firstSwiperDesktop", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 5000,
            },
        });
    })
</script>
<?
get_footer();
