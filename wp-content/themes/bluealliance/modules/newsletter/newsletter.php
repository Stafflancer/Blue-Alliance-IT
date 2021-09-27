<?php
$title = get_sub_field('title');
$form = get_sub_field('form');

if ($title || $form) {
    wp_enqueue_style('newsletter_styles', get_template_directory_uri() . '/static/css/modules/newsletter/newsletter.css', '', '', 'all'); ?>

    <section class="newsletter-section">
        <div class="container">
            <div class="section-holder wow fadeInUp">
                <?php if ($title) { ?>
                    <h3><?php echo $title; ?></h3>
                <?php }
                if ($form) {
                    echo do_shortcode('[gravityform id="' . $form['id'] . '" title="false" description="false"]');
                } ?>
            </div>
        </div>
    </section>
<?php } ?>