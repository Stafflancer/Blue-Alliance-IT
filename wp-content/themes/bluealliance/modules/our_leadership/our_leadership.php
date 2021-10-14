<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $leadership = get_sub_field('leadership'); ?>

<?php if ($title || $text || !empty($leadership)) {
    wp_enqueue_style('our_leadership_styles', get_template_directory_uri() . '/static/css/modules/our_leadership/our_leadership.css', '', '', 'all'); ?>

    <section class="our-leadership position-relative overflow-hidden">
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

                <?php
                if (!empty($leadership)):
                    $delay = 0;
                    ?>
                    <div class="leadership-holder position-relative overflow-hidden">
                        <?php foreach ($leadership as $id): ?>
                            <a class="card wow fadeInUp <?php echo get_field('text_single_page', $id) ? 'hoverable' : '' ?>"
                               href="<?php the_permalink($id); ?>" data-wow-delay="<?php echo $delay; ?>s">
                                <?php $photo = get_post_thumbnail_id($id); ?>
                                <?php if ($photo): ?>
                                    <div class="photo">
                                        <?php echo wp_get_attachment_image($photo, 'full');

                                        $hover_text = get_field('hover_text', $id);
                                        $text_single_page = get_field('text_single_page', $id);

                                        if (!empty($hover_text) && !empty($text_single_page)) { ?>
                                            <div class="hover-block">
                                                <span><?php echo $hover_text; ?></span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>
                                <h5><?php echo get_the_title($id); ?></h5>
                                <?php
                                $leadership_position = get_field('leadership_position', $id);
                                if ($leadership_position): ?>
                                    <div class="position">
                                        <?php echo $leadership_position; ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <?php $delay += 0.15; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php } ?>