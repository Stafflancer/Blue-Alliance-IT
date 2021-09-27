<?php
$text = get_sub_field('text');

if ($text) {
    wp_enqueue_style('quote_styles', get_template_directory_uri() . '/static/css/modules/quote/quote.css', '', '', 'all'); ?>
    <section class="quote-section wow fadeInUp">
        <div class="container">
            <div class="quote">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/quote.jpg" alt="quote">
                <p><?php echo $text; ?></p>
            </div>
        </div>
    </section>
<?php } ?>
