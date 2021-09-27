<?php
$general_inquiries_title = get_field('general_inquiries_title');
$general_inquiries_description = get_field('general_inquiries_description');
if ($general_inquiries_title || $general_inquiries_description || have_rows('general_inquiries_buttons')) {
    wp_enqueue_style('general_inquiries_styles', get_template_directory_uri() . '/static/css/modules/general_inquiries/general_inquiries.css', '', '', 'all'); ?>

    <section class="general-inquiries">
        <div class="container">
            <div class="section-holder">
                <h5 class="wow fadeInUp"><?php the_title(); ?></h5>
                <?php if ($general_inquiries_title) { ?>
                    <h3 class="wow fadeInUp">
                        <?php echo $general_inquiries_title; ?>
                    </h3>
                <?php }
                if ($general_inquiries_description) { ?>
                    <div class="description wow fadeInUp">
                        <?php echo $general_inquiries_description; ?>
                    </div>
                <?php }
                if (have_rows('general_inquiries_buttons')) { ?>
                    <div class="btns-holder wow fadeInUp">
                        <?php $i = 1;
                        while (have_rows('general_inquiries_buttons')) : the_row();
                            $button = get_sub_field('button'); ?>
                            <a href="<?php echo $button['url']; ?>"
                               target="<?php echo $button['target']; ?>"
                            <?php echo $i == 1 ? 'class="primary-btn darkblue"' : 'class="primary-btn orange"'; ?>
                            ><?php echo $button['title']; ?></a>
                        <?php $i++; endwhile; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
