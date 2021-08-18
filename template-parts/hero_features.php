<?php

$arResult = [
    'title' => $args['title'],
    'title_text' => $args['title_text'],
    'list' => $args['list'],
    'title_mobile' => $args['title_mobile'],
    'title_image' => $args['title_image'],
    'title_image_mobile' => $args['title_image_mobile'],
];

?>


<section class="hero" style="background-image: url(<?= _assets(); ?>/img/hero-bg.png);">
    <div class="container">
        <div class="hero__content">
            <div class="hero__title"><?= $arResult['title']?></div>
            <div class="hero__text"><?= $arResult['title_text']?></div>
            <div class="hero__features-container">
                <div class="hero__features list-reset">
                    <?php foreach ($arResult['list'] as $item):
                        $image = [
                            'full' => wp_get_attachment_image_url($item['list'], 'full'),
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
    </div>
    <div class="hero__front-image">
        <div class="container">
            <div class="hero__mobile-title"><?= $arResult['title_mobile']?></div>
        </div>
        <?php $image = [
            'full' => wp_get_attachment_image_url($arResult['title_image'], 'full'),
            'alt' => get_post_meta($arResult['title_image'], '_wp_attachment_image_alt', TRUE),
        ];
        $image_mobile = [
            'full' => wp_get_attachment_image_url($arResult['title_image_mobile'], 'full'),
            'alt' => get_post_meta($arResult['title_image_mobile'], '_wp_attachment_image_alt', TRUE),
        ];?>
        <img class="hero__front-image--md" src="<?= $image['full']?>" alt="<?= $image_mobile['alt']?>">
        <img class="hero__front-image--xs" src="<?= $image_mobile['full']?>" alt="<?= $image_mobile['alt']?>">

    </div>
</section>

