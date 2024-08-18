<?php
/**
 * Block14 Block Template
 */
$block14_fields = get_fields();
$posts = $block14_fields['posts'];
?>
<section>
    <div class="container">
        <div class="row pb-3 mb-2 pb-lg-5 mb-lg-4">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="<?=$block14_fields['title_url'] ?>">
                    <h2 class="text-center"><?php echo $block14_fields['title'] ?></h2>
                </a>
                <img class="cup" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/cup.png" alt="cup">
            </div>
        </div>
        <div class="row d-none d-lg-flex">
            <?php
                foreach($posts as $post){
                    $post_custom_fields = get_fields($post['post'] -> ID);
            ?>
                <div class="col-4">
                    <div>
                        <a href="<?php echo get_permalink($post['post'] -> ID) ?>">
                            <img class="w-100 h-100" src="<?php echo $post_custom_fields['images']['desktop_image']; ?>" alt="">
                            <h5 class="mb-3"><?php echo $post['post'] -> post_title; ?></h5>
                        </a>
                        <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                           <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row d-block d-lg-none">
            <div class="swiper FirstSwiperMobile">
                <div class="swiper-wrapper">
                    <?php
                        foreach($posts as $post){
                            $post_custom_fields = get_fields($post['post'] -> ID);
                    ?>
                    <div class="swiper-slide">
                        <div>
                            <a href="<?php echo get_permalink($post['post'] -> ID) ?>">
                                <img class="w-100 h-100 d-none d-sm-block d-lg-none " src="<?php echo $post_custom_fields['images']['tablet_image'] ?>" alt="">
                                <img class="w-100 h-100 d-block d-sm-none" src="<?php echo $post_custom_fields['images']['mobile_image'] ?>" alt="">
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