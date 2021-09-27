<?php
$title = get_sub_field('title');
$post_objects = get_sub_field('resources');

if ($title || !empty($post_objects)) {
    wp_enqueue_style('resources_section_styles', get_template_directory_uri() . '/static/css/modules/resources/resources.css', '', '', 'all'); ?>

    <section class="resources-section">
        <div class="container">
            <div class="section-holder">
                <?php if ($title) { ?>
                    <h3 class="wow fadeInUp"><?php echo $title; ?></h3>
                <?php }
                if (!empty($post_objects)) { ?>
                    <div class="posts">
                        <?php foreach ($post_objects as $post):
                            setup_postdata($post);
                            $categories = get_the_category($post->ID); ?>

                            <div class="item wow fadeInUp">
                                <div class="holder">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php } ?>

                                    <div class="info-holder">
                                        <?php if (!empty($categories)) { ?>
                                            <div class="category">
                                                <?php echo $categories[0]->name; ?>
                                            </div>
                                        <?php } ?>

                                        <div class="title">
                                            <?php the_title(); ?>
                                        </div>

                                        <a href="<?php the_permalink(); ?>"
                                           class="primary-btn orange"><?php _e("Read Now", 'bluealliance'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
