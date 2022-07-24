<?php
$q = new WP_Query([
    'post_type' => 'team-members',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
]);

if ($q->have_posts()) :
?>
    <section class="OurTeam">
        <div class="Container">

            <h2 class="OurTeam__heading TwoWeights HeadingWithBg"><?php _e('Zespół naszych <span>specjalistów</span>', 'appwise'); ?></h2>

            <p class="OurTeam__subheading"><?php _e('Nasz zespół tworzą kreatywni,profesjonalni technicy dentystyczni, którzy latami zbierali doświadczenie w renomowanych pracowniach i ciągle są nastawieni rozwój swoich umiejętności.
    ', 'appwise'); ?></p>

            <div class="OurTeam__cards">

                <?php while ($q->have_posts()) : $q->the_post(); ?>

                    <div class="OurTeam__card">
                        <figure>
                            <a href="<?= get_post_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
                        </figure>

                        <a href="<?= get_post_permalink(); ?>">
                            <?php
                            $title = get_field('title');
                            $fname = get_field('first_name');
                            $lname = get_field('last_name');
                            $position = get_field('position');
                            ?>
                            <h3 class="OurTeam__name"><?= $title; ?> <?= $fname; ?> <span><?= $lname; ?></span></h3>
                        </a>

                        <?php if ($position) : ?>
                            <p class="OurTeam__position"><?= $position; ?></p>
                        <?php endif; ?>
                    </div>

                <?php endwhile; ?>
            </div>

        </div>
    </section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>