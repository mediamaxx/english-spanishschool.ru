<?php

$arResult = [
    'hero_banner' => $args['hero_banner'],
];

?>

<?php if ($arResult['hero_banner']):?>
    <section class="hero" style="background-image: url(<?= _assets(); ?>/img/hero-bg.png);">
        <?php foreach ($arResult['hero_banner'] as $result):?>
            <?php if ($result['title']||$result['title_text']||$result['list']):?>
                <div class="container">
                    <div class="hero__content">
                        <?php if ($result['title']): ?>
                        <<?= $result['title_status']; ?> class="hero__title"><?= $result['title']?></<?= $result['title_status']; ?>>
                    <?php endif;?>
                    <?php if ($result['title_text']): ?>
                        <div class="hero__text"><?= $result['title_text']?></div>
                    <?php endif;?>
                    <div class="hero__features-container">
                        <div class="hero__features list-reset">
                            <?php foreach ($result['list'] as $item):
                                $image = [
                                    'full' => wp_get_attachment_image_url($item['icon'], 'full'),
                                ];
                                ?>

                                <div class="hero__features-item">
                                    <span class="icon" style="background-image: url(<?= $image['full'] ?>);"></span>
                                    <span><?= $item['text']?></span>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                </div>
            <?php endif;?>
            <?php if ($result['title_mobile']||$result['title_image']||$result['title_image_mobile']): ?>
                <div class="hero__front-image">
                    <?php if ($result['title_mobile']): ?>
                        <div class="container">
                            <div class="hero__mobile-title"><?= $result['title_mobile']?></div>
                        </div>
                    <?php endif;?>
                    <?php $image = [
                        'full' => wp_get_attachment_image_url($result['title_image'], 'full'),
                        'alt' => get_post_meta($result['title_image'], '_wp_attachment_image_alt', TRUE),
                    ];
                    $image_mobile = [
                        'full' => wp_get_attachment_image_url($result['title_image_mobile'], 'full'),
                        'alt' => get_post_meta($result['title_image_mobile'], '_wp_attachment_image_alt', TRUE),
                    ];?>
                    <?php if ($image['full']||$image_mobile['alt']): ?>
                        <img class="hero__front-image--md" src="<?= $image['full']?>" alt="<?= $image_mobile['alt']?>">
                    <?php endif;?>
                    <?php if ($image_mobile['full']||$image_mobile['alt']): ?>
                        <img class="hero__front-image--xs" src="<?= $image_mobile['full']?>" alt="<?= $image_mobile['alt']?>">
                    <?php endif;?>
                </div>
            <?php endif;?>
        <?php endforeach;?>

    </section>
<?php endif;?>