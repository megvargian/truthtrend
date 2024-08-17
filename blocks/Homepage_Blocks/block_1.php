<?php
/**
 * Block1 Block Template
 */
$block1_fields = get_fields();
$customFields_main_post = get_fields($block1_fields['main_post'] -> ID);
$post_custom_fields = get_fields($block1_fields['main_post'] -> ID);
if($customFields_main_post['youtube_url']){
    $isYoutube = true;
} else{
    $isYoutube = false;
}
?>
<section class="pt-0 pb-2">
    <div class="container">
        <div class="row">
            <div class="swiper firstSwiperDesktop">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php if($isYoutube){ ?>
                            <a class="position-relative" href="<?php echo $customFields_main_post['youtube_url']; ?>">
                                <div class="position-relative cusotm-header-position">
                                    <div class="middle-section">
                                        <h2 class="pb-3"><?php echo $block1_fields['main_post'] -> post_title; ?></h2>
                                        <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                            <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                        </a>
                                    </div>
                                    <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $customFields_main_post['images']['tablet_image'] ?>" alt="">
                                    <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $customFields_main_post['images']['mobile_image'] ?>" alt="">
                                    <img class="play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/play-48.ico" alt="play">
                                </div>
                            </a>
                        <?php }else{?>
                            <a class="position-relative" href="<?php echo get_permalink($block1_fields['main_post'] -> ID) ?>">
                                <div class="position-relative cusotm-header-position">
                                    <h2><?php echo $block1_fields['main_post'] -> post_title; ?></h2>
                                    <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $customFields_main_post['images']['tablet_image'] ?>" alt="">
                                    <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $customFields_main_post['images']['mobile_image'] ?>" alt="">
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="swiper-slide">
                        <?php if($isYoutube){ ?>
                            <a class="position-relative" href="<?php echo $customFields_main_post['youtube_url']; ?>">
                                <div class="position-relative cusotm-header-position">
                                    <h2><?php echo $block1_fields['main_post'] -> post_title; ?></h2>
                                    <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $customFields_main_post['images']['tablet_image'] ?>" alt="">
                                    <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $customFields_main_post['images']['mobile_image'] ?>" alt="">
                                    <img class="play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/play-48.ico" alt="play">
                                </div>
                            </a>
                        <?php }else{?>
                            <a class="position-relative" href="<?php echo get_permalink($block1_fields['main_post'] -> ID) ?>">
                                <div class="position-relative cusotm-header-position">
                                    <h2><?php echo $block1_fields['main_post'] -> post_title; ?></h2>
                                    <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $customFields_main_post['images']['tablet_image'] ?>" alt="">
                                    <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $customFields_main_post['images']['mobile_image'] ?>" alt="">
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>