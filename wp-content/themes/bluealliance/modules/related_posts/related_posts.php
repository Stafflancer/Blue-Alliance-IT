<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => array(get_the_ID())
);
$posts = new WP_Query($args);
if ($posts->have_posts()) {
    wp_enqueue_style('related_posts_styles', get_template_directory_uri() . '/static/css/modules/related_posts/related_posts.css', '', '', 'all'); ?>

    <div class="related-posts">
        <div class="container">
            <div class="title-holder wow fadeInUp">
                <h3>
                    <?php _e('Related Insights', 'dash-tech'); ?>
                </h3>
            </div>
            <div class="posts">
                <?php foreach ($posts->posts as $post) {
                    $post_id = $post->ID;
                    $categories = get_the_category($post_id);
                    $thumbnail = get_the_post_thumbnail($post_id, 'wp_post_thumbnail'); ?>

                    <a href="<?php the_permalink($post_id); ?>" class="item wow fadeInUp">
                        <div class="holder">
                            <?php if (has_post_thumbnail($post_id)) { ?>
                                <div class="thumbnail">
                                    <?php echo $thumbnail; ?>
                                </div>
                            <?php } ?>

                            <div class="info-holder">
                                <?php if (!empty($categories)) { ?>
                                    <div class="category">
                                        <?php echo $categories[0]->name; ?>
                                    </div>
                                <?php } ?>

                                <div class="title">
                                    <?php echo get_the_title($post_id); ?>
                                </div>

                                <button class="primary-btn orange"><?php _e("Read Now", 'bluealliance'); ?></button>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }
wp_reset_postdata(); ?>