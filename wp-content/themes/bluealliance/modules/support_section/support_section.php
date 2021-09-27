<?php
$title = get_sub_field('title');
$button = get_sub_field('button');

if ($title || $button || have_rows('blocks')) {
    wp_enqueue_style('support_section_styles', get_template_directory_uri() . '/static/css/modules/support_section/support_section.css', '', '', 'all'); ?>
    <section class="support-section">
        <div class="container">
            <div class="section-holder">
                <?php if ($title) { ?>
                    <h3 class="wow fadeInUp"><?php echo $title; ?></h3>
                <?php } ?>

                <?php if (have_rows('blocks')) { ?>
                    <div class="blocks">
                        <?php while (have_rows('blocks')) : the_row(); ?>
                            <div class="block wow fadeInUp">
                                <div class="holder">
                                    <?php $icon = get_sub_field('icon'); ?>
                                    <?php if ($icon) { ?>
                                        <div class="icon">
                                            <?php echo wp_get_attachment_image($icon, 'full'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="text"><?php the_sub_field('text'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>

                <?php $button = get_sub_field('button'); ?>
                <?php if ($button) { ?>
                    <div class="btn-holder wow fadeInUp">
                        <a href="<?php echo $button['url']; ?>" class="primary-btn orange large"
                           target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
