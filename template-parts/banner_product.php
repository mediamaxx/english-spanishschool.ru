<?php

$arResult = [
    'banner_title' => $args['banner_title'],
    'banner_subtitle' => $args['banner_subtitle'],
    'tabs_top' => $args['tabs_top'],
    'tabs_bottom' => $args['tabs_bottom'],
];

?>

<?php if ($arResult['banner_title']||$arResult['banner_subtitle']||$arResult['tabs_top']||$arResult['tabs_bottom']):?>
<section class="products">
    <div class="container">
        <?php if ($arResult['banner_title']): ?>
        <div class="products__title section-title"><?= $arResult['banner_title']?></div>
        <?php endif; ?>
        <?php if ($arResult['banner_subtitle']): ?>
        <div class="products__subtitle"><?= $arResult['banner_subtitle']?></div>
        <?php endif; ?>

        <?php if ($arResult['tabs_top'] || $arResult['tabs_top']): ?>
        <div class="products__grid">

            <?php if ($arResult['tabs_top']): ?>
            <?php foreach ($arResult['tabs_top'] as $item):?>

                <?php if ($item['tabs_lang']): ?>
                <div class="products__item tabs__link active" data-tab="<?= $item['tabs_lang']?>">
                    <?php if ($item['tabs_link']): ?>
                    <div class="products__top">
                        <a href="<?= $item['tabs_link']?>" class="products__link" aria-label="<?= $item['tabs_lang']?>"></a>
                    </div>
                    <?php endif; ?>
                    <?php if ($item['tabs_lang']||$item['min_price']): ?>
                    <div class="products__bottom">
                        <?php if ($item['tabs_lang']): ?>
                        <div class="products__name"><?= $item['tabs_lang']?></div>
                        <?php endif; ?>
                        <?php if ($item['min_price']): ?>
                        <div class="products__price">от <?= $item['min_price']?> руб.</div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

            <?php endforeach; ?>
            <?php endif; ?>


            <?php if ($arResult['tabs_bottom']):?>
            <?php foreach ($arResult['tabs_bottom'] as $item):
                $image = [
                    'full' => wp_get_attachment_image_url($item['tabs_image'], 'full'),
                    'alt' => get_post_meta($item['tabs_image'], '_wp_attachment_image_alt', TRUE),
                ];
                ?>
                <?php if ($item['tabs_lang']): ?>
                <div class="products__banner tabs__item active" data-src="<?= $item['tabs_lang']?>">
                    <?php if ($item['tabs_link']||$image['full']||$item['tabs_lang']): ?>
                    <a href="<?= $item['tabs_link']?>"><img src="<?= $image['full']?>" alt="<?= $item['tabs_lang']?>" class="product_image"></a>
                    <?php endif;?>
                    <?php if ($item['tabs_age']): ?>
                    <span class="products__badge"><?= $item['tabs_age']?></span>
                    <?php endif;?>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
            <?php endif;?>

        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif;?>
