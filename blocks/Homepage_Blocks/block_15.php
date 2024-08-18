<?php
/**
 * Block15 Block Template
 */
$block15_fields = get_fields();
// Query to get the top 5 most viewed posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'meta_key'  => 'post_views_count',
    'orderby'   => 'meta_value_num',
    'order' => 'DESC',
);
$most_viewed_query = new WP_Query($args);
$second_args = array(
    'post_type'      => 'post',         // Specify post type, 'post' for blog posts
    'posts_per_page' => 4,             // Number of posts to display
    'orderby'        => 'date',         // Order by date
    'order'          => 'DESC',         // Newest first
    'category__in'   => [32, 33, 34],      // Array of category IDs (replace with your category IDs)
);
$query = new WP_Query($second_args);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 text-right">
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
                            <a class="mt-2 text-black a-h3" style="font-size: 2rem;" href="<?php echo get_permalink(get_the_ID()); ?>">
                                <?php echo get_the_title(get_the_ID());?>
                            </a>
                            <a class="mt-2" href="<?php echo get_permalink($get_custom_feilds['author'] -> ID); ?>" style="font-size: 1rem; line-height: 4">
                                <?php echo get_the_title($get_custom_feilds['author'] -> ID); ?>
                            </a>
                        </li>
                    <?php } } ?>
                </ol>
            </div>
            <div class="col-md-4 col-12">
                <?php
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            // Your loop code here, such as displaying the post title and date
                            the_title('<h2>', '</h2>');
                            echo '<p>' . get_the_date() . '</p>';
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No posts found';
                    }
                ?>
            </div>
        </div>
    </div>
</section>