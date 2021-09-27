<?php get_header(); ?>

    <main class="main">
        <?php
        get_template_part('modules/single_leadership/single_leadership');

        if (have_rows('modules')):
            while (have_rows('modules')) : the_row();
                if (get_row_layout() == 'get_in_touch') :
                    get_template_part('modules/get_in_touch/get_in_touch');
                endif;
            endwhile;
        endif; ?>
    </main>

<?php get_footer(); ?>