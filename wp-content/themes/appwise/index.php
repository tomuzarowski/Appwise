<?php get_header(); ?>

<section class="Hero">
    <div class="Container">

        <div class="Hero__headings-wrapper">
            <h1><span>Uśmiech :)</span> szyty na miarę</h1>
            <p>PoliLab - laboratorium protetyczne</p>
        </div>

        <div class="Hero__button-wrapper">
            <a href="#" class="Button">Zobacz ofertę</a>
        </div>

    </div>
</section>

<section class="GreenTiles">
    <div class="Container">
        <div class="GreenTiles__item">
            <h3><?php _e('Kim jesteśmy', 'appwise'); ?></h3>
            <div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/teeth.svg" alt="Ikona ząb">
                </figure>

                <div>
                    <strong><?php _e('Profesjonalne', 'awppwise'); ?></strong>
                    <p><?php _e('Laboratorium', 'awppwise'); ?></p>
                    <p><?php _e('Protetyczne', 'awppwise'); ?></p>
                </div>
            </div>
        </div>

        <div class="GreenTiles__item">
            <h3><?php _e('Gdzie nas znajdziesz', 'appwise'); ?></h3>
            <div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/pin.svg" alt="Ikona lokalizacja">
                </figure>

                <div>
                    <strong>PoliLab</strong>
                    <p><?php _e('ul. Piwna 17B,', 'appwise'); ?></p>
                    <p><?php _e('50-353 Wrocław', 'appwise'); ?></p>
                    <p><?php _e('tel: 728 380 638', 'appwise'); ?></p>
                </div>
            </div>
        </div>

        <div class="GreenTiles__item">
            <h3><?php _e('Godziny otwarcia', 'appwise'); ?></h3>
            <div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/clock.svg" alt="Ikona zegar">
                </figure>

                <div>
                    <strong><?php _e('Poniedziałek - Piątek', 'appwise'); ?>:</strong>
                    <p>8:00 - 18:00</p>
                    <strong><?php _e('Sobota-Niedziela', 'appwise'); ?>:</strong>
                    <p><?php _e('nieczynne', 'appwise'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="About">
    <div class="Container">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Logo PoliLab">
        <div>
            <h2><?php _e('Tworzymy <span>uśmiech</span> na lata!', 'appwise'); ?></h2>
            <p><?php _e('Polilab to nowoczesne laboratorium protetyczne działające we Wrocławiu od roku 2011. Właścicieli Michała Klarzaka i Macieja Potoczka, połączyła pasja do techniki dentystycznej oraz kreowania naturalnych uśmiechów, zarówno dla wymagających pacjetów jak i lekarzy stomatologów. Dzięki temu powstało na mapie Wrocławia niepowtarzalne miejsce, jakim jest laboratorium przy ulicy Piwnej 17b.', 'appwise'); ?></p>
        </div>
    </div>
</section>

<section class="CompanyInNumbers">
    <div class="CompanyInNumbers__wrapper">
        <div class="CompanyInNumbers__tile">
            <p class="CompanyInNumbers__number">9</p>
            <p class="CompanyInNumbers__info"><?php _e('lat doświadczenia<br />na rynku', 'appwise'); ?></p>
        </div>

        <div class="CompanyInNumbers__tile">
            <p class="CompanyInNumbers__number">20</p>
            <p class="CompanyInNumbers__info"><?php _e('Specjalistów<br />i techników', 'appwise'); ?></p>
        </div>

        <div class="CompanyInNumbers__tile">
            <p class="CompanyInNumbers__number">2115</p>
            <p class="CompanyInNumbers__info"><?php _e('Wykonanych<br />projektów', 'appwise'); ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>