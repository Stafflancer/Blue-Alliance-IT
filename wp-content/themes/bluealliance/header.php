<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueAlliance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'dash-tech'), max($paged, $page));
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
    <header class="wow fadeInDown">
        <div class="container wide">
            <div class="section-holder">
                <?php $h_logo = get_field('h_logo', 'option'); ?>
                <?php if ($h_logo) { ?>
                    <div class="h-logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <?php echo wp_get_attachment_image($h_logo, 'full'); ?>
                        </a>
                    </div>
                <?php } ?>

                <button class="h-burger-btn">
                    <svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
                </button>

                <?php $h_button = get_field('h_button', 'option'); ?>
                <?php if (has_nav_menu('header_menu') || $h_button) { ?>
                    <div class="right-block">
                        <?php if (has_nav_menu('header_menu')) { ?>
                            <div class="h-menu">
                                <?php wp_nav_menu(['theme_location' => 'header_menu', 'container' => '']); ?>
                            </div>
                        <?php } ?>

                        <?php if ($h_button) { ?>
                            <div class="h-btn">
                                <a href="<?php echo $h_button['url']; ?>" target="<?php echo $h_button['target']; ?>"
                                   class="primary-btn"><?php echo $h_button['title']; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>

