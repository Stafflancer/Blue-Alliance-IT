<?php get_header(); ?>

    <main class="main">
        <?php
        get_template_part('modules/post_content/post_content');

        if (have_rows('modules')):
            while (have_rows('modules')) : the_row();
                if (get_row_layout() == 'get_in_touch') :
                    get_template_part('modules/get_in_touch/get_in_touch');
                elseif (get_row_layout() == 'value') :
                    get_template_part('modules/value/value');
                endif;
            endwhile;
        endif; ?>
    </main>

<?php get_footer(); ?>