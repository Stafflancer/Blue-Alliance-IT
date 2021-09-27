<?php get_header(); ?>

    <main class="main">

        <?php
        while (have_posts()) :
            the_post();
            get_template_part('modules/post_content/post_content');
        endwhile;

        get_template_part('modules/related_posts/related_posts');

        if (have_rows('modules')): ?>
            <?php while (have_rows('modules')) : the_row();
                if (get_row_layout() == 'newsletter') :
                    get_template_part('modules/newsletter/newsletter');
                endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </main>

<?php get_footer(); ?>