<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

if ($query->have_posts()) { ?>
    <div class="posts">
        <?php while ($query->have_posts()) {
            $query->the_post();
            $post_type = get_post_type();
            $post_type_obj = get_post_type_object($post_type); ?>

            <a href="<?php the_permalink(); ?>" class="item wow fadeInUp">
                <div class="holder">
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php } ?>

                    <div class="info-holder">
                        <div class="category">
                            <?php
                            $name = $post_type_obj->labels->singular_name;
                            if($name == 'Post') {
                                echo 'BLOG';
                            } else {
                                echo $name;
                            } ?>
                        </div>

                        <div class="title">
                            <?php the_title(); ?>
                        </div>

                        <button class="primary-btn orange"><?php _e("Read Now", 'bluealliance'); ?></button>
                    </div>
                </div>
            </a>
            <?php
        } ?>
    </div>

    <div class="pagination-holder">
        <?php $total_pages = $query->max_num_pages;
        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));
            echo paginate_links(array(
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => '&#171;',
                'next_text' => '&#187;',
                'mid_size' => 1
            ));
        } ?>
    </div>
    <?php
} else {
    echo "No Results Found";
}
?>