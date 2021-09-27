<?php
$ci_title = get_field('ci_title');
$ci_contact_info = get_field('ci_contact_info');
$ci_form = get_field('ci_form');
$ci_map_code = get_field('ci_map_code'); ?>

<?php if ($ci_title || $ci_contact_info || $ci_form || $ci_map_code) {
    wp_enqueue_style('contact_information_styles', get_template_directory_uri() . '/static/css/modules/contact_information/contact_information.css', '', '', 'all'); ?>

    <section class="contact-info-section">
        <div class="holder">
            <div class="container">
                <div class="section-holder">
                    <h5 class="wow fadeInUp"><?php the_title(); ?></h5>

                    <?php if ($ci_title) { ?>
                        <h3 class="wow fadeInUp"><?php echo $ci_title; ?></h3>
                    <?php }

                    if ($ci_contact_info || $ci_form) { ?>
                        <div class="cols wow fadeInUp">
                            <?php if ($ci_contact_info) { ?>
                                <div class="col info">
                                    <?php echo $ci_contact_info; ?>
                                </div>
                            <?php }
                            if ($ci_form) { ?>
                                <div class="col form">
                                    <?php echo do_shortcode('[gravityform id="' . $ci_form . '" title="false"]'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if ($ci_map_code) { ?>
            <div class="map wow fadeInUp">
                <?php echo $ci_map_code; ?>
            </div>
        <?php } ?>
    </section>
<?php } ?>
