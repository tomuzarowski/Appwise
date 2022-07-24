<?php
$about_heading = get_field('about_heading');
$about_content = get_field('about_content');
?>

<section class="About">
    <div class="Container">

        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="Logo PoliLab">

        <div>
            <?php if ($about_heading) : ?>
                <h2 class="TwoWeights"><?= $about_heading; ?></h2>
            <?php endif; ?>

            <?php if ($about_content) : ?>
                <p><?= $about_content; ?></p>
            <?php endif; ?>
        </div>

    </div>
</section>