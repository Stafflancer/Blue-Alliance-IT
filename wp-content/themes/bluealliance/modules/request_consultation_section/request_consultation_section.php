<?php
$request_page_title = get_field('request_page_title');
$request_page_form = get_field('request_page_form');

if ($request_page_title || $request_page_form) {
    wp_enqueue_style('request_consultation_section_styles', get_template_directory_uri() . '/static/css/modules/request_consultation_section/request_consultation_section.css', '', '', 'all'); ?>

    <section class="request-consultation-section">
        <div class="container">
            <div class="section-holder">
                <div class="subtitle wow fadeInUp">
                    <h5><?php the_title(); ?></h5>
                </div>

                <?php if ($request_page_title) { ?>
                    <h3 class="wow fadeInUp"><?php echo $request_page_title; ?></h3>
                <?php }
                if ($request_page_form) { ?>
                    <div class="form wow fadeInUp">
                        <?php echo do_shortcode('[gravityform id="' . $request_page_form . '" title="false"]'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
