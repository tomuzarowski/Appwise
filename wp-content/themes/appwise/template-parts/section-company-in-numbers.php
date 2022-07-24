<?php
$in_numbers = get_field('in_numbers');
if (!empty($in_numbers)) :
?>

    <section class="CompanyInNumbers">
        <div class="CompanyInNumbers__wrapper">

            <?php foreach ($in_numbers as $item) : ?>

                <div class="CompanyInNumbers__tile">

                    <?php if ($item['number']) : ?>
                        <p class="CompanyInNumbers__number"><?= $item['number']; ?></p>
                    <?php endif; ?>

                    <?php if ($item['description']) : ?>
                        <p class="CompanyInNumbers__info"><?= $item['description']; ?></p>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>

        </div>
    </section>

<?php endif; ?>