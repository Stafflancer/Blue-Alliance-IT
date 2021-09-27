<?php
$title = get_sub_field('title');

if ($title || have_rows('blocks')) {
    wp_enqueue_style('icons_block_styles', get_template_directory_uri() . '/static/css/modules/icons_block/icons_block.css', '', '', 'all'); ?>
    <section class="icons-section">
        <div class="container">
            <?php if ($title) { ?>
                <h3 class="wow fadeInUp">
                    <?php echo $title; ?>
                </h3>
            <?php }
            if (have_rows('blocks')) { ?>
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
                                <div class="title"><?php the_sub_field('title'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>
