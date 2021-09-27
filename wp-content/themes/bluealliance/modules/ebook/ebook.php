<?php
$ebook_title = get_field('ebook_title');
$ebook_description = get_field('ebook_description');
$ebook_image = get_field('ebook_image');
$ebook_form = get_field('ebook_form');

if ($ebook_title || $ebook_description || $ebook_image || $ebook_form) {
    wp_enqueue_style('ebook_styles', get_template_directory_uri() . '/static/css/modules/ebook/ebook.css', '', '', 'all'); ?>

    <section class="ebook-section">
        <div class="container">
            <div class="section-holder">
                <div class="breadcrumbs wow fadeInUp">
                    <a href="<?php echo get_post_type_archive_link('post'); ?>">
                        <?php _e('Resources', 'bluealliance'); ?>
                    </a> / <span><?php the_title(); ?></span>
                </div>

                <?php if ($ebook_title) { ?>
                    <h3 class="wow fadeInUp"><?php echo $ebook_title; ?></h3>
                <?php } ?>

                <div class="cols">
                    <?php if ($ebook_image) { ?>
                        <div class="image-col wow fadeInUp">
                            <?php echo wp_get_attachment_image($ebook_image, 'm_md_r'); ?>
                        </div>
                    <?php }
                    if ($ebook_description || $ebook_form) { ?>
                        <div class="text-col wow fadeInUp">
                            <?php echo do_shortcode('[Sassy_Social_Share type="floating"]');
                            if ($ebook_description) { ?>
                                <div class="description">
                                    <?php echo $ebook_description; ?>
                                </div>
                            <?php }
                            if ($ebook_form) { ?>
                                <div class="form">
                                    <?php echo do_shortcode('[gravityform id="' . $ebook_form . '" title="false"]'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>