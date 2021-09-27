<?php echo get_header(); ?>

    <main class="main">
        <?php if (have_rows('modules')): ?>
            <?php while (have_rows('modules')) : the_row();
                if (get_row_layout() == 'home_hero') :
                    get_template_part('modules/home_hero/home_hero');
                elseif ( get_row_layout() == 'leadership_carousel' ) :
                    get_template_part('modules/leadership_carousel/leadership_carousel');
                elseif ( get_row_layout() == 'quote' ) :
                    get_template_part('modules/quote/quote');
                elseif ( get_row_layout() == 'pages' ) :
                    get_template_part('modules/pages/pages');
                elseif ( get_row_layout() == 'blog_post' ) :
                    get_template_part('modules/blog_post/blog_post');
                elseif ( get_row_layout() == 'get_in_touch' ) :
                    get_template_part('modules/get_in_touch/get_in_touch');
                elseif ( get_row_layout() == 'hero' ) :
                    get_template_part('modules/hero/hero');
                elseif ( get_row_layout() == 'text_block' ) :
                    get_template_part('modules/text_block/text_block');
                elseif ( get_row_layout() == 'green_block' ) :
                    get_template_part('modules/green_block/green_block');
                elseif (get_row_layout() == 'our_leadership') :
                    get_template_part('modules/our_leadership/our_leadership');
                elseif (get_row_layout() == 'partners') :
                    get_template_part('modules/partners/partners');
                elseif (get_row_layout() == 'page_hero') :
                    get_template_part('modules/page_hero/page_hero');
                elseif (get_row_layout() == 'icons_block') :
                    get_template_part('modules/icons_block/icons_block');
                elseif (get_row_layout() == 'support_section') :
                    get_template_part('modules/support_section/support_section');
                elseif (get_row_layout() == 'resources') :
                    get_template_part('modules/resources/resources');
                elseif (get_row_layout() == 'blog_grid') :
                    get_template_part('modules/blog_grid/blog_grid');
                elseif (get_row_layout() == 'newsletter') :
                    get_template_part('modules/newsletter/newsletter');
                elseif (get_row_layout() == 'value') :
                    get_template_part('modules/value/value');
                elseif (get_row_layout() == 'faq_section') :
                    get_template_part('modules/faq_section/faq_section');
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

<?php echo get_footer(); ?>