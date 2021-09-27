<?php
$title = get_sub_field('title');
$text = get_sub_field('text');

if ($title || $text || have_rows( 'statistics' )) {
    wp_enqueue_style('value_section_styles', get_template_directory_uri() . '/static/css/modules/value/value.css', '', '', 'all'); ?>

    <section class="value-section">
        <div class="container">
            <div class="section-holder">
                <?php if($title) { ?>
                    <h3 class="wow fadeInUp">
                        <?php echo $title; ?>
                    </h3>
                <?php }
                if($text) { ?>
                <div class="text wow fadeInUp"><?php echo $text; ?></div>
                <?php }
                if(have_rows( 'statistics' )) { ?>
                    <div class="statistics">
                        <?php while ( have_rows( 'statistics' ) ) : the_row(); ?>
                            <div class="item wow fadeInUp">
                                <div class="number">
                                    <?php the_sub_field( 'number' ); ?>
                                </div>
                                <div class="description">
                                    <?php the_sub_field( 'description' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
