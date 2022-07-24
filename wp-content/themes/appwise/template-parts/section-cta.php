<?php
$cta_heading = get_field('cta_heading');
$cta_phone_no = get_field('cta_phone_number');
?>

<section class="CTABanner">
    <?php if ($cta_heading) : ?>
        <h3 class="CTABanner__heading"><?= $cta_heading; ?></h3>
    <?php endif; ?>

    <?php if ($cta_phone_no) : ?>
        <a href="tel:<?= $cta_phone_no; ?>" class="CTABanner__button"><?= $cta_phone_no; ?></a>
    <?php endif; ?>
</section>