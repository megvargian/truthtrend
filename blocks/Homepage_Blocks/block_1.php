<?php
/**
 * Block1 Block Template
 */
$block1_fields = get_fields();
?>
<section class="py-4 bg-custom-blue">
    <div class="container">
        <div class="row">
            <div class="swiper firstSwiperDesktop">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($block1_fields['main_posts'] as $main_post) {
                        $post_custom_fields = get_fields($main_post['main_post'] -> ID);
                        $isYoutube = $post_custom_fields['youtube_url'] ? true : false;
                    ?>
                        <div class="swiper-slide">
                            <?php if($isYoutube){ ?>
                                <a class="position-relative" href="<?php echo $post_custom_fields['youtube_url']; ?>">
                                    <div class="position-relative cusotm-header-position">
                                        <div class="middle-section">
                                            <h2 class="pb-3"><?php echo $main_post['main_post'] -> post_title; ?></h2>
                                            <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                                <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                            </a>
                                        </div>
                                        <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $post_custom_fields['images']['tablet_image'] ?>" alt="">
                                        <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $post_custom_fields['images']['mobile_image'] ?>" alt="">
                                        <img class="play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/play-48.ico" alt="play">
                                    </div>
                                </a>
                            <?php }else{?>
                                <a class="position-relative" href="<?php echo get_permalink($main_post['main_post'] -> ID) ?>">
                                    <div class="position-relative cusotm-header-position">
                                        <div class="middle-section">
                                            <h2 class="pb-3"><?php echo $main_post['main_post'] -> post_title; ?></h2>
                                            <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                                <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                            </a>
                                        </div>
                                        <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $post_custom_fields['images']['tablet_image'] ?>" alt="<?php echo $main_post['main_post'] -> post_title; ?>">
                                        <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $post_custom_fields['images']['mobile_image'] ?>" alt="<?php echo $main_post['main_post'] -> post_title; ?>">
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>