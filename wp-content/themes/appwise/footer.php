<footer class="PageFooter">
    <div class="Container">

        <figure class="PageFooter__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="PoliLab Logo">
        </figure>

        <?php
        $footer_boxes = get_field('footer_boxes', 'option');
        if (!empty($footer_boxes)) :
        ?>

            <div class="PageFooter__details">

                <?php foreach ($footer_boxes as $box) : ?>

                    <div class="PageFooter__box">
                        <?php if ($box['heading']) : ?>
                            <h5><?= $box['heading']; ?></h5>
                        <?php endif; ?>

                        <?php if ($box['content']) : ?>
                            <?= $box['content']; ?>
                        <?php endif; ?>
                    </div>

                <?php endforeach; ?>

            <?php endif; ?>

            <?php
            $social_media = get_field('social_media', 'option');
            if (!empty($social_media)) :
            ?>

                <div class="PageFooter__box">
                    <h5><?php _e('Social media', 'appwise'); ?></h5>

                    <?php foreach ($social_media as $site) : ?>

                        <a href="<?= $site['url'] ?>"><img src="<?= $site['icon']['url']; ?>" alt="Ikona"></a>

                    <?php endforeach; ?>
                </div>

            <?php endif; ?>

            </div>

    </div>

</footer>

</div>

</div>

<?php wp_footer(); ?>

</body>

</html>