<?php
/**
 * Block2 Block Template
 */
$block2_fields = get_fields();
$posts = $block2_fields['posts'];
?>
<section class="py-0 d-none d-lg-block">
    <div class="container">
        <div class="row saperator_black"></div>
    </div>
</section>
<section class="pt-5">
    <div class="container">
        <!-- <div class="row pb-3 mb-2 pb-lg-5 mb-lg-4">
            <div class="col-12">
                <a href="<?php //$block2_fields['title_url'] ?>">
                    <h2 class="text-center"><?php //echo $block2_fields['title'] ?></h2>
                </a>
            </div>
        </div> -->
        <div class="row">
            <div class="swiper FirstSwiperMobile">
                <div class="swiper-wrapper">
                    <?php
                        foreach($posts as $post){
                            $post_custom_fields = get_fields($post['post'] -> ID);
                    ?>
                    <div class="swiper-slide">
                        <div>
                            <a href="<?php echo get_permalink($post['post'] -> ID) ?>">
                                <h5 class="mb-3"><?php echo $post['post'] -> post_title ?></h5>
                            </a>
                            <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>