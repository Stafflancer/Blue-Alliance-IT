<?php
$title = get_sub_field('title');
$description = get_sub_field('description');

if ($title || $description) {
    wp_enqueue_style('blog_grid_styles', get_template_directory_uri() . '/static/css/modules/blog_grid/blog_grid.css', '', '', 'all'); ?>

    <section class="blog-grid">
        <div class="container">
            <div class="section-holder">

                <?php if ($title || $description) { ?>
                    <div class="info-block">
                        <div class="subtitle wow fadeInUp">
                            <?php echo get_the_title() ?>
                        </div>
                        <?php if ($title) { ?>
                            <h3 class="wow fadeInUp"><?php echo $title; ?></h3>
                        <?php }
                        if ($description) { ?>
                            <div class="description wow fadeInUp">
                                <?php echo $description; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <div class="filters-holder wow fadeInUp">
                    <?php echo do_shortcode('[searchandfilter id="516"]'); ?>
                </div>

                <?php echo do_shortcode('[searchandfilter id="516" show="results"]'); ?>
            </div>
        </div>
    </section>
<?php } ?>
