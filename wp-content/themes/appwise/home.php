<?php

/**
 * Template name: Strona główna
 */
get_header();
?>

<?php get_template_part('/template-parts/section-hero'); ?>

<?php get_template_part('/template-parts/section-green-tiles'); ?>

<?php get_template_part('/template-parts/section-about'); ?>

<?php get_template_part('/template-parts/section-company-in-numbers'); ?>

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

<footer class="PageFooter">
    <div class="Container">

        <figure class="PageFooter__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="PoliLab Logo">
        </figure>

        <div class="PageFooter__details">
            <div class="PageFooter__box">
                <h5><?php _e('O nas', 'appwise'); ?></h5>
                <p>PoliLab</p>
                <p>Laboratorium</p>
                <p>Protetyczne</p>
            </div>

            <div class="PageFooter__box">
                <h5><?php _e('Adres', 'appwise'); ?></h5>
                <p>ul. Piwna 17B,</p>
                <p>50-353 Wrocław</p>
                <p>tel: 728 380 638</p>
            </div>

            <div class="PageFooter__box">
                <h5><?php _e('Godziny otwarcia', 'appwise'); ?></h5>
                <strong>Poniedziałek - Piątek:</strong>
                <p>8:00 - 18:00</p>
                <strong>Sobota - Niedziela:</strong>
                <p>nieczynne</p>
            </div>

            <div class="PageFooter__box">
                <h5><?php _e('Social media', 'appwise'); ?></h5>
                <a href="https://facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/fb.svg" alt="Ikona Facebook"></a>
            </div>
        </div>

    </div>
</footer>

<?php get_footer(); ?>