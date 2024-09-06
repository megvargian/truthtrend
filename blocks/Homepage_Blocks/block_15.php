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
$counter = 0;
?>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 text-right">
                <h2 class="mb-md-4 mb-2" style="font-size: 2rem">
                    <?php echo 'الأكثر قراءة'; ?>
                </h2>
                <ul>
                    <?php if ($most_viewed_query->have_posts()) {
                        while ($most_viewed_query->have_posts()) {
                            $most_viewed_query->the_post();
                            $get_custom_feilds = get_fields(get_the_ID());
                    ?>
                        <li>
                            <a class="mt-2 a-h3" href="<?php echo get_permalink(get_the_ID()); ?>">
                                <?php echo get_the_title(get_the_ID());?>
                            </a>
                            <a class="mt-2 cat-text" href="<?php echo get_permalink($get_custom_feilds['author'] -> ID); ?>" style="font-size: 1rem; line-height: 4">
                                <?php echo get_the_title($get_custom_feilds['author'] -> ID); ?>
                            </a>
                        </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="col-md-3 col-12">
                <ul>
                    <?php
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $counter++;
                                if($counter == 1){
                                    $first_post = get_the_ID();
                                } else {
                                    $categories = get_the_category();
                                    ?>
                                        <li>
                                            <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                                <?php the_title('<h2 style="font-size: 2rem;">', '</h2>'); ?>
                                            </a>
                                            <p>
                                                <?php
                                                    if (!empty($categories)) {
                                                        foreach ($categories as $category) {
                                                            ?>
                                                                <a style="margin-left: 10px; font-size: 1rem;" href="<?php echo get_category_link($category->term_id); ?>">
                                                                    <?php echo $category->name; ?>
                                                                </a>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </p>
                                            <p><?php echo get_the_date(); ?> </p>
                                        </li>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                        } else {
                            echo 'No posts found';
                        }
                    ?>
                </ul>
            </div>
            <div class="col-md-5 col-12">
                <div class="main-recent-post">
                    <?php
                        $post_custom_fields = get_fields($first_post);
                        $first_post_title = get_the_title($first_post);
                    ?>
                    <a class="position-relative" href="<?php echo get_permalink($first_post); ?>">
                        <div class="position-relative cusotm-header-position">
                            <div class="middle-section">
                                <h2 class="pb-3"><?php echo $first_post_title; ?></h2>
                                <a href="<?php echo get_permalink($post_custom_fields['author'] -> ID); ?>">
                                    <?php echo get_the_title($post_custom_fields['author'] -> ID); ?>
                                </a>
                            </div>
                            <img class="w-100 add-border-radius d-none d-sm-block image-darker" src="<?php echo $post_custom_fields['images']['tablet_image'] ?>" alt="<?php echo $first_post_title; ?>">
                            <img class="w-100 add-border-radius d-block d-sm-none image-darker" src="<?php echo $post_custom_fields['images']['mobile_image'] ?>" alt="<?php echo $first_post_title; ?>">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>