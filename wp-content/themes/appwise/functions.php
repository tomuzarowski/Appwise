<?php

class Appwise
{
    function __construct()
    {
        add_action('after_setup_theme', [$this, 'themeSetup']);
        add_action('wp_enqueue_scripts', [$this, 'themeScripts']);
    }

    public function themeSetup()
    {
        load_theme_textdomain('appwise', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        register_nav_menus(
            [
                'primary' => __('Menu główne', 'appwise'),
            ]
        );
    }

    public function themeScripts()
    {
        $ver = defined('WP_DEBUG') && true === WP_DEBUG ? '?' . time() : null;

        wp_enqueue_style('appwise-main', get_template_directory_uri() . '/dist/css/main.css' . $ver, [], $ver);

        wp_enqueue_style('appwise', get_stylesheet_uri());

        wp_enqueue_script('bundle-js', get_template_directory_uri() . '/dist/js/main.js' . $ver, array('jquery'), $ver, true);
    }
}

$appwise = new Appwise();
