<?php
/**
 * Block13 Block Template
 */
$block13_fields = get_fields();
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 text-right">
                <h2 class="text-black mb-md-5 mb-2 border-right-custom">
                    <?php echo $block13_fields['most_readbles']['title'] ?>
                </h2>
                <ol id="order-list-podcast">
                    <?php foreach($block13_fields['most_readbles']['posts'] as $post){
                        $get_custom_feilds = get_fields($post['post'] -> ID);
                    ?>
                        <li>
                            <a class="mt-2 text-black a-h3" href="<?php echo get_permalink($post['post'] -> ID); ?>">
                                <?php echo $post['post'] -> post_title ?>
                            </a>
                            <a class="mt-2" href="<?php echo get_permalink($get_custom_feilds['author'] -> ID); ?>" style="font-size: 1rem; line-height: 4">
                                <?php echo get_the_title($get_custom_feilds['author'] -> ID); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ol>
            </div>
            <div class="col-md-6 col-12 text-left pt-4 pt-sm-0">
                <h2 class="text-black mb-md-5 mb-2 border-left-custom">
                    <?php echo $block13_fields['podcast']['title']; ?>
                </h2>
                <?php echo $block13_fields['podcast']['spotify']; ?>
            </div>
        </div>
    </div>
</section>