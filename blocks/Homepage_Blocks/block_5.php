<?php
/**
 * Block5 Block Template
 */
$block5_fields = get_fields();
$post_custom_fields = get_fields($block5_fields['post'] -> ID);
?>
<section class="pb-0 block-5">
    <div class="container">
        <div class="row text-center pb-3 mb-2 pb-lg-5 mb-lg-4">
            <h2>ملف الأسبوع</h2>
        </div>
    </div>
    <div class="container-fluid gx-0">
        <!-- <div class="row gx-0">
            <div class="col-md-6 col-12">
                <img class="w-100 h-100 d-none d-lg-block " src="<?php //echo $post_custom_fields['images']['desktop_image']; ?>">
                <img class="w-100 h-100 d-none d-sm-block d-lg-none" src="<?php //echo $post_custom_fields['images']['tablet_image']; ?>" alt="">
                <img class="w-100 h-100 d-block d-sm-none" src="<?php //echo $post_custom_fields['images']['mobile_image']; ?>" alt="">
            </div>
            <div class="col-md-6 col-12 bg-black">
                <div class="p-5">
                    <a href="<?php //echo get_permalink( $block5_fields['post'] -> ID ); ?>">
                        <h3><?php //echo $block5_fields['post'] -> post_title; ?></h3>
                    </a>
                    <p class="text-white" style="max-width: 30rem;">
                    <?php //echo $block5_fields['post'] -> post_excerpt; ?>
                    </p>
                    <a class="text-white" href="<?php //echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                        <?php //echo get_the_title($post_custom_fields['author'] -> ID); ?>
                    </a>
                </div>
            </div>
        </div> -->
        <div class="row gx-0">
            <div class="position-relative cusotm-header-position">
                <div class="middle-section">
                    <a href="<?php echo get_permalink($block5_fields['post'] -> ID ); ?>">
                        <h2 class="pb-3"><?php echo $block5_fields['post'] -> post_title; ?></h2>
                    </a>
                    <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                        <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                    </a>
                </div>
                <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $post_custom_fields['images']['tablet_image'] ?>" alt="">
                <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $post_custom_fields['images']['mobile_image'] ?>" alt="">
            </div>
        </div>
    </div>
</section>