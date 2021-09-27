<?php wp_enqueue_style('post_content_styles', get_template_directory_uri() . '/static/css/modules/post_content/post_content.css', '', '', 'all'); ?>

<section class="post-content">
    <div class="container">
        <?php $blog_page_link = get_permalink( get_page_by_title( 'What’s New, What’s Next' ) )?>
        <?php if (is_singular('post')) { ?>
            <div class="breadcrumbs wow fadeInUp">
                <a href="<?php echo $blog_page_link; ?>">
                    <?php _e('Resources', 'bluealliance'); ?>
                </a> / <span><?php _e('Blog', 'bluealliance'); ?></span>
            </div>
        <?php } else { ?>
            <div class="breadcrumbs wow fadeInUp">
                <a href="<?php echo $blog_page_link; ?>">
                    <?php _e('Resources', 'bluealliance'); ?>
                </a> / <span><?php the_title(); ?></span>
            </div>
        <?php } ?>

        <div class="title-holder wow fadeInUp">
            <h1><?php the_title(); ?></h1>

            <?php if (is_singular('post')) { ?>
                <div class="date">
                    <?php the_author(); ?> | <?php the_date('m.d.y'); ?>
                </div>
            <?php } ?>
        </div>

        <?php if (has_post_thumbnail()) {
            $case_study_logo = get_field('case_study_logo'); ?>
            <div class="thumbnail wow fadeInUp">
                <?php the_post_thumbnail(); ?>

                <?php if($case_study_logo) { ?>
                    <div class="logo">
                        <?php echo wp_get_attachment_image($case_study_logo, 'full'); ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <div class="content wow fadeInUp">
            <?php the_content(); ?>
        </div>
    </div>
</section>