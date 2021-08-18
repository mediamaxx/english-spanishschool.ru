<?php

$arResult = [
    'banner_title' => $args['banner_title'],
    'banner_subtitle' => $args['banner_subtitle'],
    'tabs_top' => $args['tabs_top'],
    'tabs_bottom' => $args['tabs_bottom'],
];

?>


<section class="products">
    <div class="container">
        <div class="products__title section-title"><?= $arResult['banner_title']?></div>
        <div class="products__subtitle"><?= $arResult['banner_subtitle']?></div>
        <div class="products__grid">

            <?php foreach ($arResult['tabs_top'] as $item):?>

                <div class="products__item tabs__link active" data-tab="<?= $item['tabs_lang']?>">
                    <div class="products__top">
                        <a href="<?= $item['tabs_link']?>" class="products__link" aria-label="<?= $item['tabs_lang']?>"></a>
                    </div>
                    <div class="products__bottom">
                        <div class="products__name"><?= $item['tabs_lang']?></div>
                        <div class="products__price">от <?= $item['tabs_link']?> руб.</div>
                    </div>
                </div>

            <?php endforeach; ?>



            <?php foreach ($arResult['tabs_bottom'] as $item):
                $image = [
                    'full' => wp_get_attachment_image_url($item['tabs_image'], 'full'),
                    'alt' => get_post_meta($item['tabs_image'], '_wp_attachment_image_alt', TRUE),
                ];
                ?>

                <div class="products__banner tabs__item active" data-src="<?= $item['tabs_lang']?>">
                    <a href="<?= $item['tabs_link']?>"><img src="<?= $image['full']?>" alt="<?= $item['tabs_lang']?>" class="product_image"></a>
                    <span class="products__badge"><?= $item['tabs_age']?></span>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>

