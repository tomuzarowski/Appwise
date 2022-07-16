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
        $ver = $_ENV['MODE'] === 'development' ? time() : '1.0.0';

        wp_enqueue_style('appwise-main', get_template_directory_uri() . '/dist/css/main.css', [], $ver);

        wp_enqueue_style('appwise', get_stylesheet_uri());

        wp_enqueue_script('appwise-js', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), $ver, true);
    }
}

$appwise = new Appwise();
