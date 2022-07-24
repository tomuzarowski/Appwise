<?php
$tabs = get_field('accordion');
if (!empty($tabs));
?>

<section class="WhatWeDo">
    <div class="Container">
        <h2 class="WhatWeDo__heading TwoWeights HeadingWithBorder"><?php _e('Co możemy <span>dla Ciebie</span> zrobić', 'appwise'); ?></h2>
    </div>

    <div class="WhatWeDo__desktop-tabs">
        <div class="Container">

            <div class="WhatWeDo__desktop-tabs-wrapper">

                <?php foreach ($tabs as $key => $tab) : ?>
                    <div class="WhatWeDo__tab <?= $key == 0 ? 'WhatWeDo__tab--active' : '' ?>">
                        <figure><?= $tab['icon_code'] ?></figure>
                        <h4 class="WhatWeDo__tab-heading"><?= $tab['heading']; ?></h4>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>


        <div class="WhatWeDo__tabs-content">

            <div class="Container">

                <?php foreach ($tabs as $key => $tab) : ?>

                    <div class="WhatWeDo__content <?= $key == 0 ? 'WhatWeDo__content--active' : '' ?>">

                        <ul>

                            <?php foreach ($tab['content'] as $item) : ?>

                                <li><?= $item['point']; ?></li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

    <div class="WhatWeDo__mobile-tabs">
        <div class="Container">
            <?php foreach ($tabs as $key => $tab) : ?>
                <div class="WhatWeDo__tab <?= $key == 0 ? 'WhatWeDo__tab--active' : '' ?>">
                    <figure><?= $tab['icon_code'] ?></figure>
                    <h4 class="WhatWeDo__tab-heading"><?= $tab['heading']; ?></h4>
                </div>

                <div class="WhatWeDo__content <?= $key == 0 ? 'WhatWeDo__content--active' : '' ?>">

                    <ul>

                        <?php foreach ($tab['content'] as $item) : ?>

                            <li><?= $item['point']; ?></li>

                        <?php endforeach; ?>

                    </ul>

                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>