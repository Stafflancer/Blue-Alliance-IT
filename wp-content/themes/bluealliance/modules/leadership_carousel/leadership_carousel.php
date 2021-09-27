<?php
$leadership = get_sub_field('leadership');
if (!empty($leadership)) {
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/static/css/slick.min.css', '', '', 'all');
    wp_enqueue_style('leadership_carousel_styles', get_template_directory_uri() . '/static/css/modules/leadership_carousel/leadership_carousel.css', '', '', 'all');

    wp_enqueue_script('slick-js', get_template_directory_uri() . '/static/js/slick.min.js', array('jquery'), '', true);
    wp_enqueue_script('leadership_carousel_js', get_template_directory_uri() . '/static/js/modules/leadership_carousel/leadership_carousel.js', array('slick-js'), '', true); ?>

    <section class="leadership-carousel">
        <div class="container">
            <div class="section-holder">
                <div class="carousel leadership-carousel-slider">
                    <?php foreach ($leadership as $id) { ?>
                        <div class="slide">
                            <?php $photo = get_post_thumbnail_id($id); ?>
                            <?php if ($photo) { ?>
                                <div class="photo wow fadeInUp">
                                    <?php echo wp_get_attachment_image($photo, 'full'); ?>
                                </div>
                            <?php } ?>
                            <div class="bg">
                                <?php $leadership_text = get_field('leadership_text', $id);
                                if ($leadership_text) { ?>
                                    <div class="text wow fadeInUp">
                                        <?php echo $leadership_text; ?>
                                    </div>
                                <?php }
                                $leadership_position = get_field('leadership_position', $id);
                                if ($leadership_position) { ?>
                                    <div class="position wow fadeInUp">
                                        - <?php echo get_the_title($id) . ', ' . $leadership_position; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>