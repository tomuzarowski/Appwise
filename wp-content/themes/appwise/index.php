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
            <h2 class="TwoWeights"><?php _e('Tworzymy <span>uśmiech</span> na lata!', 'appwise'); ?></h2>
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

<section class="HowWeWork">
    <div class="Container">
        <figure class="HowWeWork__image">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/howwework_img.png" alt="How we work">
        </figure>

        <div class="HowWeWork__info">
            <h2 class="TwoWeights"><?php _e('Zobacz jak <span>działamy</span>', 'appwise'); ?></h2>

            <p><?php _e('Uczestnicząc w licznych szkoleniach i kongresach, zarówno w kraju jak i za granicą, gwarantujemy Państwu optymalne rozwiązania protetyczne. Technika i nowoczesne technologie pozwalają na mnogość rozwiązań estetycznych, a przede wszystkim funkcjonalnych, najlepszych dla pacjenta. Wysoce estetyczne prace pełnoceramiczne oraz praca na wszystkich systemach implantologicznych, to obszary techniki dentystycznej na których skupiamy się najbardziej.', 'appwise'); ?></p>
            <p><?php _e('Nasze laboratorium posiada prestiżowy Znak Jakości Biomet 3i. Ścisła współpraca z lekarzem jak i z samym pacjentem jest dla nas kluczem do osiągnięcia pożądanego efektu końcowego. Dokładamy wszelkich starań, aby sprostać każdemu zleceniu, by efekt końcowy stał się wizytówką naszego laboratorium oraz gabinetów, które obsługujemy. Zawsze stawiamy na najwyższą jakość opartą o nowoczesne technologie, estetykę oraz funkcjonalność prac które tworzymy.', 'appwise'); ?></p>
        </div>
    </div>
</section>

<section class="CTABanner">
    <h3 class="CTABanner__heading"><?php _e('Masz pytania? Zadzwoń!', 'appwise'); ?></h3>

    <a href="tel:728380638" class="CTABanner__button">728 380 638</a>
</section>

<section class="OurTeam">
    <div class="Container">
        <h2 class="OurTeam__heading TwoWeights HeadingWithBg"><?php _e('Zespół naszych <span>specjalistów</span>', 'appwise'); ?></h2>

        <p class="OurTeam__subheading"><?php _e('Nasz zespół tworzą kreatywni,profesjonalni technicy dentystyczni, którzy latami zbierali doświadczenie w renomowanych pracowniach i ciągle są nastawieni rozwój swoich umiejętności.
', 'appwise'); ?></p>

        <div class="OurTeam__cards">
            <div class="OurTeam__card">
                <figure>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/team-placeholder.png" alt="Person"></a>
                </figure>

                <a href="#">
                    <h3 class="OurTeam__name">dr. Jan <span>Kowalski</span></h3>
                </a>

                <p class="OurTeam__position">Dyrektor placówki</p>
            </div>
            <div class="OurTeam__card">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team-placeholder.png" alt="Person">
                </figure>

                <h3 class="OurTeam__name">dr. Jan <span>Kowalski</span></h3>

                <p class="OurTeam__position">Dyrektor placówki</p>
            </div>
            <div class="OurTeam__card">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team-placeholder.png" alt="Person">
                </figure>

                <h3 class="OurTeam__name">dr. Jan <span>Kowalski</span></h3>

                <p class="OurTeam__position">Dyrektor placówki</p>
            </div>
            <div class="OurTeam__card">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/team-placeholder.png" alt="Person">
                </figure>

                <h3 class="OurTeam__name">dr. Jan <span>Kowalski</span></h3>

                <p class="OurTeam__position">Dyrektor placówki</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>