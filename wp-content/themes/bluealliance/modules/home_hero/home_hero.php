<?php
$bg_image = get_sub_field('bg_image');
$title = get_sub_field('title');
$content = get_sub_field('content');
$button = get_sub_field('button');

wp_enqueue_style('home_hero_styles', get_template_directory_uri() . '/static/css/modules/home_hero/home_hero.css', '', '', 'all');

if ($title || $content) { ?>
    <section class="home-hero" <?php echo !empty($bg_image) ? 'style="background-image:url(' . $bg_image . ')"' : ''; ?>>
        <div class="container">
            <div class="section-holder">
                <?php if ($title) { ?>
                    <h1 class="wow fadeInUp"><?php echo $title; ?></h1>
                <?php } ?>
                <?php if ($content) { ?>
                    <div class="content wow fadeInUp"><?php echo $content; ?></div>
                <?php } ?>
                <?php if ($button) { ?>
                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"
                       class="primary-btn large orange wow fadeInUp"><?php echo $button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>