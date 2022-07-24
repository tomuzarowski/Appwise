<?php
$tiles = get_field('green_tiles');
if (!empty($tiles)) :
?>

    <section class="GreenTiles">
        <div class="Container">

            <?php foreach ($tiles as $tile) : ?>

                <div class="GreenTiles__item">
                    <?php if ($tile['heading']) : ?>
                        <h3><?= $tile['heading']; ?></h3>
                    <?php endif; ?>

                    <div>
                        <?php if ($tile['icon']['url']) : ?>
                            <figure>
                                <img src="<?= $tile['icon']['url']; ?>" alt="Ikona">
                            </figure>
                        <?php endif; ?>

                        <?php if ($tile['content']) : ?>
                            <div>
                                <?= $tile['content']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </section>

<?php endif; ?>