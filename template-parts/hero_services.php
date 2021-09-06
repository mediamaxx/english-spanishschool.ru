<?php

$arResult = [
    'service_background_image' => $args['service_background_image'],
    'title' => $args['title'],
    'subtitle' => $args['subtitle'],
    'min_price' => $args['min_price'],
    'callback_title' => $args['callback_title'],
    'callback_subtitle' => $args['callback_subtitle'],
    'service_front_image' => $args['service_front_image'],
    'service_front_image_mobile' => $args['service_front_image_mobile'],


];

$image = [
    'full_background' => wp_get_attachment_image_url($arResult['service_background_image'], 'full'),
    'full' => wp_get_attachment_image_url($arResult['service_front_image'], 'full'),
    'full_mobile' => wp_get_attachment_image_url($arResult['service_front_image_mobile'], 'full'),
];

?>
<?php if ($arResult['title']||$arResult['service_background_image']||$arResult['min_price']||$arResult['callback_title']||$arResult['subtitle']||$arResult['callback_subtitle']||$arResult['service_front_image']||$arResult['service_front_image_mobile']):?>
    <section class="hero-services" style="background-image: url(<?= $image['full_background'] ?>);">
        <div class="container">
            <?php if ($arResult['title']||$arResult['subtitle']||$arResult['min_price']):?>
                <div class="hero-services__content">
                    <div class="hero-services__title"><?= $arResult['title'] ?></div>
                    <div class="hero-services__text"><?= $arResult['subtitle'] ?></div>
                    <div class="hero-services__price">от <?= $arResult['min_price'] ?> руб.</div>
                </div>
            <?php endif;?>
            <?php if ($arResult['callback_title']||$arResult['callback_subtitle']):?>
                <div class="hero-services__callback">
                    <?php if ($arResult['callback_title']):?>
                        <div class="hero-services__callback-title"><?= $arResult['callback_title'] ?></div>
                    <?php endif;?>
                    <div class="hero-services__mobile-container">
                        <?php if ($arResult['callback_subtitle']):?>
                            <div class="hero-services__callback-subtitle"><?= $arResult['callback_subtitle'] ?></div>
                        <?php endif;?>

                        <?= do_shortcode('[contact-form-7 id="407" title="Испанский Язык" html_class="form form__services-hero"]'); ?>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <?php if ($image['full']||$image['full_mobile']):?>
            <div class="hero-services__front-image">
                <?php if ($image['full']):?>
                    <img class="hero-services__front-image--md" src="<?= $image['full'] ?>" alt="Языковая школа в Калининграде">
                <?php endif;?>
                <?php if ($image['full_mobile']):?>
                    <img class="hero-services__front-image--xs" src="<?= $image['full_mobile'] ?>" alt="Языковая школа в Калининграде">
                <?php endif;?>
            </div>
        <?php endif;?>
    </section>
<?php endif;?>