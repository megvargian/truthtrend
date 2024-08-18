<?php
/**
 * Block8 Block Template
 */
$block8_fields = get_fields();
$posts = $block8_fields['posts'];
$swiper_posts = $block2_fields['swiper_posts'];
$all_posts = array_merge($swiper_posts, $posts);
?>
<section class="pt-0">
    <div class="container">
        <div class="row pb-3 mb-2 pb-lg-5 mb-lg-4">
            <div class="col-12">
                <a href="<?php echo $block8_fields['title_url']; ?>">
                    <h2 class="text-center"><?php echo $block8_fields['title']; ?></h2>
                </a>
            </div>
        </div>
        <div class="row gx-5 d-none d-lg-flex">
            <div class="col-4">
                <div class="row text-right pb-3">
                    <a href="<?php echo $block8_fields['sub_title_url']; ?>">
                        <h4><?php echo $block8_fields['sub_title']; ?></h4>
                    </a>
                </div>
                <div class="row gx-5">
                    <?php foreach ($posts as $post) {
                      $post_custom_fields = get_fields($post['post'] -> ID);
                    ?>
                        <div class="col-12 mb-4 horizontal-saperator-right-side d-flex">
                            <img class="h-auto" style="width: 100px;" src="<?php echo $post_custom_fields['images']['desktop_image']; ?>" alt="<?php echo $post['post'] -> post_title; ?>">
                            <div style="padding-right: 10px;">
                                <a href="<?php echo get_permalink($post['post'] -> ID); ?>">
                                    <h5 class="mt-2"><?php echo $post['post'] -> post_title; ?></h5>
                                </a>
                                <a class="mt-2" href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>" style="font-size: 1rem;">
                                    <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-8">
                <div class="swiper SecondIndexSwiper">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($swiper_posts as $post) {
                            $post_custom_fields = get_fields($post['post'] -> ID);
                        ?>
                                <div class="swiper-slide">
                                    <img class="w-100 custom-height-second-index" src="<?php echo $post_custom_fields['images']['desktop_image']; ?>" alt="<?php echo $post['post'] -> post_title; ?>">
                                    <a href="<?php echo get_permalink($post['post'] -> ID); ?>">
                                        <h2 class="mt-3"><?php echo $post['post'] -> post_title; ?></h2>
                                    </a>
                                    <p><?php echo $post['post'] -> post_excerpt; ?></p>
                                    <a class="mt-4" href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                        <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                    </a>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-block d-lg-none">
            <div class="swiper ThirdSwiperMobile">
                <div class="swiper-wrapper">
                    <?php foreach($all_posts as $post){
                        $get_field = get_fields($post['post'] -> ID);
                    ?>
                        <div class="swiper-slide">
                            <div>
                                <a href="<?php echo get_permalink($post['post'] -> ID); ?>">
                                    <img class="w-100 h-100 d-none d-sm-block d-lg-none" src="<?php echo $get_field['images']['tablet_image']; ?>" alt="<?php echo $post['post'] -> post_title; ?>">
                                    <img class="w-100 h-100 d-block d-sm-none" src="<?php echo $get_field['images']['mobile_image']; ?>" alt="<?php echo $post['post'] -> post_title; ?>">
                                    <h5 class="mb-3"><?php echo $post['post'] -> post_title; ?></h5>
                                </a>
                                <a href="<?php echo get_permalink($get_field['author'] -> ID); ?>">
                                    <?php echo get_the_title($get_field['author'] -> ID); ?>
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