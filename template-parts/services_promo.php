<?php

$arResult = [
    'promo_title' => $args['promo_title'],
    'promo_background_image' => $args['promo_background_image'],
    'promo_subtitle' => $args['promo_subtitle'],
    'promo_text' => $args['promo_text'],
    'promo_adv' => $args['promo_adv'],
];

$image = [
    'full' => wp_get_attachment_image_url($arResult['promo_background_image'], 'full'),
];


?>

<section class="promo">
    <div class="container">
        <div class="promo__title section-title"><?= $arResult['promo_title'] ?></div>
        <div class="promo__wrap">
            <div class="promo__content">
                <div class="promo__cover">
                    <img src="<?= $image['full'] ?>" alt="<?= $arResult['promo_title'] ?>" class="promo__img alignright">
                </div>
                <div class="promo__subtitle"><?= $arResult['promo_subtitle'] ?></div>
                <div class="promo__text">
                    <p><?= $arResult['promo_text'] ?></p>
                    <ul class="promo__list list-reset">

                        <?php foreach ($arResult['promo_adv'] as $item):
                            $imaged = [
                                'full' => wp_get_attachment_image_url($item['promo_icon'], 'full'),
                            ];
                            ?>

                            <li class="promo__item">
                                <span class="icon" style="background-image: url(<?= $imaged['full'] ?>);"></span><?= $item['promo_advantages'] ?><span></span>
                            </li>

                        <?php endforeach; ?>




                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
