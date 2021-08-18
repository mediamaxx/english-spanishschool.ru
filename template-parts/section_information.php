<?php

$arResult = [
    'info_title' => $args['info_title'],
    'info_desc' => $args['info_desc'],
    'info_desc_mobile' => $args['info_desc_mobile'],
    'info_item' => $args['info_item'],
];

?>

<section class="information">
    <div class="container">
        <div class="information__title section-title"><?= $arResult['info_title']?></div>
        <div class="information__description information__description--xl">
            <p><?= $arResult['info_desc']?></p>
        </div>
        <div class="information__description information__description--xs">
            <p><?= $arResult['info_desc_mobile']?></p>
        </div>
        <ul class="information__list list-reset">

            <?php foreach ($arResult['info_item'] as $item):
            $image = [
                'full' => wp_get_attachment_image_url($item['info_image'], 'full'),
                'full_mobile' => wp_get_attachment_image_url($item['info_image_mobile'], 'full'),
            ];
            ?>

            <li class="information__item">
                <a href="<?= $item['info_link']?>" class="information__link"><img src="<?= $image['full']?>" alt="<?= $item['info_lang']?>" class="information__img information__img--xl"></a>
                <a href="<?= $item['info_link']?>" class="information__link information__link--xs"><img src="<?= $image['full_mobile']?>" alt="<?= $item['info_lang']?>" class="information__img information__img--xs"></a>
                <a href="<?= $item['info_link']?>" class="information__link-title"><span class="information__item-title"><?= $item['info_lang']?></span></a>
                <div class="information__price">от <?= $item['info_min_price']?> руб.</div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>
