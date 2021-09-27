<?php if (have_rows('our_partners')) {
    wp_enqueue_style('partners_styles', get_template_directory_uri() . '/static/css/modules/partners/partners.css', '', '', 'all'); ?>

    <section class="partners-section">
        <div class="container">
            <div class="partners-holder">
                <?php while (have_rows('our_partners')) : the_row(); ?>
                    <div class="partner wow fadeInUp">
                        <div class="holder">
                            <?php $logo = get_sub_field('logo'); ?>
                            <?php if ($logo) { ?>
                                <div class="logo">
                                    <?php echo wp_get_attachment_image($logo, 'full'); ?>
                                </div>
                            <?php } ?>
                            <h4>
                                <?php the_sub_field('title'); ?>
                            </h4>
                            <div class="description">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php $button = get_sub_field('button'); ?>
            <?php if ($button) { ?>
                <div class="bottom-btn-holder wow fadeInUp">
                    <a href="<?php echo $button['url']; ?>" class="primary-btn large orange"
                       target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>