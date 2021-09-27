<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $bg_image = get_sub_field('bg_image'); ?>

<?php if ($title || $text || $bg_image) {
    wp_enqueue_style('hero_styles', get_template_directory_uri() . '/static/css/modules/hero/hero.css', '', '', 'all');

    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/static/js/parallax.min.js', '', '', true);
    wp_enqueue_script('hero_js', get_template_directory_uri() . '/static/js/modules/hero/hero.js', '', '', true); ?>

    <section class="hero" <?php echo !empty($bg_image) ? 'data-image="'.$bg_image.'"' : ""; ?>>
        <div class="container">
            <div class="section-holder">
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
        </div>
    </section>
<?php } ?>