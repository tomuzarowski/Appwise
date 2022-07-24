<?php
$heading = get_field('hero_heading');
$subheading = get_field('hero_subheading');
$btn_text = get_field('hero_btn_text');
$btn_url = get_field('hero_btn_url');
?>
<section class="Hero">
    <div class="Container">

        <div class="Hero__headings-wrapper">
            <?php if ($heading) : ?>
                <h1><?= $heading; ?></h1>
            <?php endif; ?>

            <?php if ($subheading) : ?>
                <p><?= $subheading; ?></p>
            <?php endif; ?>
        </div>

        <?php if ($btn_text) : ?>
            <div class="Hero__button-wrapper">
                <a href="#" class="Button"><?= $btn_text; ?></a>
            </div>
        <?php endif; ?>

    </div>
</section>