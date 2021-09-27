<?php wp_enqueue_style('single_leadership_styles', get_template_directory_uri() . '/static/css/modules/single_leadership/single_leadership.css', '', '', 'all'); ?>

<section class="single-leadership-section">
    <div class="container">
        <div class="section-holder">
            <div class="breadcrumbs wow fadeInUp">
                <?php $parent_page_link = get_permalink(get_page_by_title('Our Leadership')); ?>
                <a href="<?php echo $parent_page_link; ?>"><?php _e('Our Leadership', 'bluealliance'); ?></a>
                / <span><?php the_title(); ?></span>
            </div>

            <div class="cols">
                <div class="col photo-col wow fadeInUp">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="photo">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php } ?>
                    <?php $linkedin_link = get_field('linkedin_link'); ?>
                    <?php if ($linkedin_link) { ?>
                        <div class="social">
                            <a href="<?php echo $linkedin_link; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 2389"><path d="M0 277.5c0-80.4 28.2-146.8 84.5-199.1C140.8 26.1 214 0 304.1 0c88.5 0 160.1 25.7 214.8 77.2 56.3 53.1 84.5 122.3 84.5 207.5 0 77.2-27.3 141.6-82 193.1-56.3 53.1-130.3 79.6-222 79.6H297c-88.5 0-160.1-26.5-214.8-79.6S0 357.9 0 277.5zM31.4 2389V777h535.7v1612H31.4zm832.5 0h535.7v-900.1c0-56.3 6.4-99.7 19.3-130.3 22.5-54.7 56.7-101 102.6-138.8 45.8-37.8 103.4-56.7 172.5-56.7 180.2 0 270.3 121.5 270.3 364.4V2389H2500v-924.2c0-238.1-56.3-418.7-168.9-541.7-112.6-123.1-261.4-184.6-446.4-184.6-207.5 0-369.2 89.3-485 267.9v4.8h-2.4l2.4-4.8V777H863.9c3.2 51.5 4.8 211.5 4.8 480.2s-1.6 646-4.8 1131.8z" fill="#b1b3b6"/></svg>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="col info-col wow fadeInUp">
                    <h3><?php the_title(); ?></h3>
                    <?php $leadership_position = get_field('leadership_position');
                    if ($leadership_position) { ?>
                        <div class="position">
                            <h4><?php echo $leadership_position; ?></h4>
                        </div>
                    <?php } ?>
                    <?php $text_single_page = get_field('text_single_page');
                    if ($text_single_page) { ?>
                        <div class="text">
                            <?php echo $text_single_page; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>