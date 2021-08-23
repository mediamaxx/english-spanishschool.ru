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
<?php if ($arResult['promo_title']||$arResult['promo_background_image']||$arResult['promo_subtitle']||$arResult['promo_text']||$arResult['promo_adv']):?>
    <section class="promo">
        <div class="container">
            <?php if ($arResult['promo_title']):?>
                <div class="promo__title section-title"><?= $arResult['promo_title'] ?></div>
            <?php endif;?>
            <?php if ($arResult['promo_background_image']||$arResult['promo_subtitle']||$arResult['promo_text']||$arResult['promo_adv']):?>
                <div class="promo__wrap">
                    <div class="promo__content">
                        <?php if ($arResult['promo_background_image']):?>
                            <div class="promo__cover">
                                <img src="<?= $image['full'] ?>" alt="<?= $arResult['promo_title'] ?>" class="promo__img alignright">
                            </div>
                        <?php endif;?>
                        <?php if ($arResult['promo_subtitle']):?>
                            <div class="promo__subtitle"><?= $arResult['promo_subtitle'] ?></div>
                        <?php endif;?>
                        <?php if ($arResult['promo_text']||$arResult['promo_adv']):?>
                            <div class="promo__text">
                                <?php if ($arResult['promo_text']):?>
                                    <p><?= $arResult['promo_text'] ?></p>
                                <?php endif;?>
                                <?php if ($arResult['promo_adv']):?>
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
                                <?php endif;?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>