<?php
$post_id = get_sub_field('post');
$block_type = get_sub_field('block_type');

if ($post_id) {
    wp_enqueue_style('blog_post_styles', get_template_directory_uri() . '/static/css/modules/blog_post/blog_post.css', '', '', 'all'); ?>

    <section class="blog-post <?php echo $block_type; ?>">
        <div class="container">
            <div class="section-holder">
                <?php
                $title = get_the_title($post_id);
                $excerpt = get_the_excerpt($post_id);
                if ($title || $excerpt) { ?>
                    <div class="content wow fadeInUp">
                        <?php if ($title) { ?>
                            <h3><?php echo $title; ?></h3>
                        <?php }
                        if($excerpt) { ?>
                            <div class="excerpt">
                                <?php echo $excerpt; ?>
                            </div>
                        <?php } ?>
                        <a href="<?php echo get_the_permalink($post_id); ?>" class="primary-btn large">
                            <?php _e('Read Now', 'bluealliance'); ?>
                        </a>
                    </div>
                <?php }
                if(has_post_thumbnail($post_id)) { ?>
                    <div class="image wow fadeInUp">
                        <a href="<?php echo get_the_permalink($post_id); ?>">
                            <?php echo get_the_post_thumbnail($post_id, 'm_md'); ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
