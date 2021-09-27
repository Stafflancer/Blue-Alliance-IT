<?php $title = get_sub_field('title'); ?>
<?php $text = get_sub_field('text'); ?>
<?php $button = get_sub_field('button'); ?>

<?php if ($title || $text || $button) {
    wp_enqueue_style('green_block_styles', get_template_directory_uri() . '/static/css/modules/green_block/green_block.css', '', '', 'all'); ?>

    <section class="green-block">
        <div class="container">
            <div class="section-holder">
                <?php if ($title) { ?>
                    <h3 class="wow fadeInUp"><?php echo $title; ?></h3>
                <?php }
                if ($text) { ?>
                    <div class="text wow fadeInUp">
                        <?php echo $text; ?>
                    </div>
                <?php }
                if ($button) { ?>
                    <a href="<?php echo $button['url']; ?>" class="primary-btn large wow fadeInUp" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>