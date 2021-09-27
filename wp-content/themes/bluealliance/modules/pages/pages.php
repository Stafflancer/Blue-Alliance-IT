<?php $left_title = get_sub_field('left_title'); ?>
<?php $left_content = get_sub_field('left_content'); ?>
<?php $left_button = get_sub_field('left_button'); ?>

<?php $right_title = get_sub_field('right_title'); ?>
<?php $right_content = get_sub_field('right_content'); ?>
<?php $right_button = get_sub_field('right_button'); ?>

<?php if ($left_title || $left_content || $right_title || $right_content) {
    wp_enqueue_style('pages_styles', get_template_directory_uri() . '/static/css/modules/pages/pages.css', '', '', 'all'); ?>

    <section class="pages-section">
        <div class="container">
            <div class="section-holder">
                <?php if ($left_title || $left_content) { ?>
                    <div class="left-col">
                        <?php if($left_title) { ?>
                            <h3 class="wow fadeInUp"><?php echo $left_title; ?></h3>
                        <?php }
                        if($left_content) { ?>
                            <div class="content wow fadeInUp">
                                <?php echo $left_content; ?>
                            </div>
                        <?php }
                        if($left_button) { ?>
                            <a href="<?php echo $left_button['url']; ?>"
                               target="<?php echo $left_button['target']; ?>"
                            class="primary-btn large orange wow fadeInUp"><?php echo $left_button['title']; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if ($right_title || $right_content) { ?>
                    <div class="right-col">
                        <?php if($right_title) { ?>
                            <h3 class="wow fadeInUp"><?php echo $right_title; ?></h3>
                        <?php }
                        if($right_content) { ?>
                            <div class="content wow fadeInUp">
                                <?php echo $right_content; ?>
                            </div>
                        <?php }
                        if($right_button) { ?>
                            <a href="<?php echo $right_button['url']; ?>"
                               target="<?php echo $right_button['target']; ?>"
                               class="primary-btn large orange wow fadeInUp"><?php echo $right_button['title']; ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>