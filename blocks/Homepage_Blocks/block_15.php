<?php
/**
 * Block15 Block Template
 */
$block15_fields = get_fields();
// Query to get the top 5 most viewed posts
$args = array(
    'post_type' => 'post', // Change to your custom post type if needed
    'posts_per_page' => 5,
    'order' => 'DESC', // Get the highest viewed posts first
);
$most_viewed_query = new WP_Query($args);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 text-right">
                <h2 class="text-black mb-md-5 mb-2 border-right-custom">
                    <?php echo $block15_fields['most_readbles']['title'] ?>
                </h2>
                <ol id="order-list-podcast">
                    <?php if ($most_viewed_query->have_posts()) {
                        // Loop through the posts
                        while ($most_viewed_query->have_posts()) {
                            $most_viewed_query->the_post();

                            $get_custom_feilds = get_fields(get_the_ID());
                    ?>
                        <li>
                            <a class="mt-2 text-black a-h3" href="<?php echo get_permalink(get_the_ID()); ?>">
                                <?php echo get_the_title(get_the_ID());?>
                            </a>
                            <a class="mt-2" href="<?php echo get_permalink($get_custom_feilds['author'] -> ID); ?>" style="font-size: 1rem; line-height: 4">
                                <?php echo get_the_title($get_custom_feilds['author'] -> ID); ?>
                            </a>
                        </li>
                    <?php } } ?>
                </ol>
            </div>
        </div>
    </div>
</section>