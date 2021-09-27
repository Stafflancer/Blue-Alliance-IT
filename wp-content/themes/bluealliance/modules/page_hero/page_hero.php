<?php
$content = get_sub_field('content');
if ($content) {
    wp_enqueue_style('page_hero_styles', get_template_directory_uri() . '/static/css/modules/page_hero/page_hero.css', '', '', 'all'); ?>

    <section class="page-hero">
        <div class="container">
            <div class="section-holder">
                <div class="title wow fadeInUp">
                    <?php the_title(); ?>
                </div>

                <div class="content wow fadeInUp">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>