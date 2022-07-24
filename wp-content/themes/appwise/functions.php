<?php

class Appwise
{
    function __construct()
    {
        add_action('init', [$this, 'appwisePostTypes']);
        add_action('after_setup_theme', [$this, 'themeSetup']);
        add_action('wp_enqueue_scripts', [$this, 'themeScripts']);
    }

    public function appwisePostTypes()
    {
        register_post_type('appwise_post', [
            'labels' => [
                'name' => 'Zespół',
                'singular_name' => 'Osoba',
                'add_new_item' => 'Dodaj osobę',
                'add_new' => 'Dodaj osobę',
                'all_items' => 'Wszystkie osoby',
                'edit_item' => 'Edytuj osobę',
                'new_item' => 'Nowa osoba',
                'view_item' => 'Zobacz osobę',
                'search_items' => 'Szukaj osób',
                'not_found' => 'Brak osób',
                'not_found_in_trash' => 'Brak osób w koszu'
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'zespol'],
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => 'dashicons-groups'
        ]);
    }

    public function themeSetup()
    {
        load_theme_textdomain('appwise', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        if (function_exists('register_nav_menus')) {
            register_nav_menus(
                [
                    'primary' => __('Menu główne', 'appwise'),
                ]
            );
        }

        if (function_exists('acf_add_options_page')) {
            acf_add_options_page([
                'page_title' => 'Ustawienia motywu',
                'menu_title' => 'Ust. motywu',
                'menu_slug'  => 'theme-settings',
                'capability' => 'edit_posts',
                'redirect'   => false,
            ]);
        }
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
