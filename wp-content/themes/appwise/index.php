<?php get_header(); ?>

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

<?php get_footer(); ?>