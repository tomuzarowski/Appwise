<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="hfeed site">

        <a class="skip-link screen-reader-text" href="#content"><?php _e('Przejdź do treści', 'appwise'); ?></a>

        <header class="SiteHeader">
            <div class="Container">
                <button class="Hamburger" id="toggle">
                    <div class="Hamburger__container">
                        <span class="Hamburger__item"></span>
                        <span class="Hamburger__item"></span>
                        <span class="Hamburger__item"></span>
                    </div>
                </button>

                <div class="SiteHeader__logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Logo poliLab">
                    </a>
                </div>

                <nav class="MainNav">
                    <a href="#">O nas</a>
                    <a href="#">Realizacje</a>
                    <a href="#">Galeria</a>
                    <a href="#">Oferta</a>
                    <a href="#">Cennik</a>
                    <a href="#">Zespół</a>
                    <a href="#">Kontakt</a>
                </nav>
            </div>
        </header>

        <div id="content" class="site-content clearfix">