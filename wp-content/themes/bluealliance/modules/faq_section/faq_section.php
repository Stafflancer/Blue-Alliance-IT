<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
if ($title || $description || have_rows('questions')) {
    wp_enqueue_style('faq_section_styles', get_template_directory_uri() . '/static/css/modules/faq_section/faq_section.css', '', '', 'all');

    wp_enqueue_script('faq_section_js', get_template_directory_uri() . '/static/js/modules/faq_section/faq_section.js', '', '', true); ?>

    <section class="faq-section">
        <div class="container">
            <div class="section-holder">
                <div class="content-holder wow fadeInUp">
                    <h5><?php the_title(); ?></h5>
                    <?php if ($title) { ?>
                        <h3><?php echo $title; ?></h3>
                    <?php }
                    if ($description) { ?>
                        <div class="description">
                            <?php echo $description; ?>
                        </div>
                    <?php } ?>
                </div>
                <?php if (have_rows('questions')) { ?>
                    <div class="questions">
                        <?php while (have_rows('questions')) : the_row(); ?>
                            <div class="question wow fadeInUp">
                                <div class="q">
                                    <span></span>
                                    <?php the_sub_field('question'); ?></div>
                                <div class="a"><?php the_sub_field('answer'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
