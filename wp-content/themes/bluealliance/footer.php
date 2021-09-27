<footer class="wow fadeIn">
    <div class="container wide">
        <div class="top-holder">
            <?php if (has_nav_menu('footer_menu')) { ?>
                <div class="f-menu">
                    <?php wp_nav_menu(['theme_location' => 'footer_menu', 'container' => '']); ?>
                </div>
            <?php } ?>

            <?php if (have_rows('f_socials', 'option')) : ?>
                <div class="f-socials">
                    <?php while (have_rows('f_socials', 'option')) : the_row(); ?>
                        <?php $icon = get_sub_field('icon'); ?>
                        <a href="<?php the_sub_field('link'); ?>">
                            <?php echo wp_get_attachment_image($icon, 'full'); ?>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="bottom-holder">
            <?php $f_logo = get_field('f_logo', 'option'); ?>
            <?php if ($f_logo) { ?>
                <div class="f-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <?php echo wp_get_attachment_image($f_logo, 'full'); ?>
                    </a>
                </div>
            <?php } ?>

            <?php $f_bottom_text = get_field('f_bottom_text', 'option'); ?>
            <?php if ($f_bottom_text) { ?>
                <div class="bottom-text">
                    <?php echo $f_bottom_text; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
