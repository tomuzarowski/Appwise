<?php
$hww_heading = get_field('hww_heading');
$hww_content = get_field('hww_content');
?>

<section class="HowWeWork">
    <div class="Container">

        <figure class="HowWeWork__image">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/howwework_img.png" alt="How we work">
        </figure>

        <div class="HowWeWork__info">
            <?php if ($hww_heading) : ?>
                <h2 class="TwoWeights"><?= $hww_heading; ?></h2>
            <?php endif; ?>

            <?php if ($hww_content) : ?>
                <?= $hww_content; ?>
            <?php endif; ?>
        </div>

    </div>
</section>