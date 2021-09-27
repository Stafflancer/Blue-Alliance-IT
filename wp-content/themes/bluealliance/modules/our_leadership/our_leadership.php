<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $leadership = get_sub_field('leadership'); ?>

<?php if ($title || $text || !empty($leadership)) {
    wp_enqueue_style('our_leadership_styles', get_template_directory_uri() . '/static/css/modules/our_leadership/our_leadership.css', '', '', 'all'); ?>

    <section class="our-leadership">
        <div class="container">
            <div class="section-holder">
                <div class="top-holder">
                    <div class="title wow fadeInUp">
                        <?php the_title(); ?>
                    </div>
                    <?php if ($title) { ?>
                        <h3 class="wow fadeInUp"><?php echo $title; ?></h3>
                    <?php }
                    if ($text) { ?>
                        <div class="text wow fadeInUp">
                            <?php echo $text; ?>
                        </div>
                    <?php } ?>
                </div>

                <?php if (!empty($leadership)) { ?>
                    <div class="leadership-holder wow fadeInUp">
                        <?php foreach ($leadership as $id) { ?>
                            <a class="card" href="<?php echo get_the_permalink($id); ?>">
                                <?php $photo = get_post_thumbnail_id($id); ?>
                                <?php if ($photo) { ?>
                                    <div class="photo">
                                        <?php echo wp_get_attachment_image($photo, 'full'); ?>
                                    </div>
                                <?php } ?>
                                <h5><?php echo get_the_title($id); ?></h5>
                                <?php $leadership_position = get_field('leadership_position', $id);
                                if ($leadership_position) { ?>
                                    <div class="position">
                                        <?php echo $leadership_position; ?>
                                    </div>
                                <?php } ?>
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>