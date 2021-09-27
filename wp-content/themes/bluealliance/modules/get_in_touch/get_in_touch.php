<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $form_object = get_sub_field('form'); ?>
<?php if ($title || $text || $form_object) {
    wp_enqueue_style('get_in_touch_styles', get_template_directory_uri() . '/static/css/modules/get_in_touch/get_in_touch.css', '', '', 'all'); ?>

    <section class="get-in-touch">
        <div class="container">
            <div class="section-holder">
                <?php if ($title || $text) { ?>
                    <div class="content wow fadeInUp">
                        <?php if ($title) { ?>
                            <h2><?php echo $title; ?></h2>
                        <?php }
                        if ($text) { ?>
                            <div class="text">
                                <?php echo $text; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }
                if ($form_object) { ?>
                    <div class="form wow fadeInUp">
                        <?php echo do_shortcode('[gravityform id="'.$form_object['id'].'" title="false"]'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
