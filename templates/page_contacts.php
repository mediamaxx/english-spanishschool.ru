<?php
//Template Name: Контакты

$arResult = [
    'title' => carbon_get_the_post_meta('title'),
    'hidden_subtitle' => carbon_get_the_post_meta('hiden_subtitle'),
    'subtitle' => carbon_get_the_post_meta('subtitle'),
    'index' => carbon_get_the_post_meta('index'),
    'country' => carbon_get_the_post_meta('country'),
    'city' => carbon_get_the_post_meta('city'),
    'street' => carbon_get_the_post_meta('street'),
    'address' => carbon_get_the_post_meta('address'),
    'email' => carbon_get_the_post_meta('email'),
    'phone' => carbon_get_the_post_meta('phone'),
    'rec_text' => carbon_get_the_post_meta('rec_text'),
    'rec_link' => carbon_get_the_post_meta('rec_link'),
    'inst_link' => carbon_get_the_post_meta('inst_link'),
    'vk_link' => carbon_get_the_post_meta('vk_link'),
    'whatsapp_link' => carbon_get_the_post_meta('whatsapp_link'),
    'tg_link' => carbon_get_the_post_meta('tg_link'),
    'viber_link' => carbon_get_the_post_meta('viber_link'),
    'look_link' => carbon_get_the_post_meta('look_link'),
    'look_text' => carbon_get_the_post_meta('look_text'),
];

?>

<?php get_header(); ?>


<main class="page-main page-contacts">
    <div class="breadcrumbs">
        <div class="container">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<ul class="breadcrumbs__list"><li class="breadcrumbs__item">','</li></ul>' );
            }
            ?>
        </div>
    </div>

    <section class="main-block">
        <div class="container">
            <?php if ($arResult['title']): ?>
            <div class="main-block__title section-title"><?= $arResult['title'];?></div>
            <?php endif; ?>
            <div class="main-block__inner">
                <div class="main-block__list list-reset">
                    <div class="main-block__item">
                        <div id="YaMaps">
                            <script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aadab3e1191e34cdf8f1c4e2c53704cb308511db9379cb9eeb65f9c39f2ff2b62&amp;width=100%25&amp;height=516&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="main-block__card vcard">
                            <div class="main-block__card-inner">
                                <?php if ($arResult['hidden_subtitle']): ?>
                                <div class="fn org hidden visually-hidden"><?= $arResult['hidden_subtitle'];?></div>
                                <?php endif; ?>
                                <?php if ($arResult['subtitle']):?>
                                <div class="main-block__subtitle"><?= $arResult['subtitle'];?></div>
                                <?php endif;?>
                                <?php if ($arResult['index']||$arResult['country']||$arResult['city']||$arResult['street']||$arResult['address']||$arResult['email']): ?>
                                <div class="adr">
                                    <span class="index"><?= $arResult['index'];?></span>
                                    <span class="country"><?= $arResult['country'];?></span>
                                    <span class="locality"><?= $arResult['city'];?></span>, <span class="street-address"><?= $arResult['street'];?></span>,
                                    <span class="extended-address"><?= $arResult['address'];?></span>
                                    <a href="mailto:<?= $arResult['email'];?>" class="email email-link"><?= $arResult['email'];?></a>
                                </div>
                                <?php endif;?>
                                <?php if ($arResult['phone']):?>
                                <div class="main-block__subtitle">Номер телефона:</div>
                                <a href="tel:<?= $arResult['phone'];?>" class="phone tel"><?= $arResult['phone'];?></a>
                                <?php endif;?>
                                <?php if ($arResult['rec_link']||$arResult['rec_text']):?>
                                <a href="<?= $arResult['rec_link'];?>" class="link"><?= $arResult['rec_text'];?></a>
                                <?php endif;?>
                                <?php if ($arResult['inst_link']||$arResult['vk_link']||$arResult['whatsapp_link']||$arResult['tg_link']||$arResult['viber_link']):?>
                                <div class="main-block__subtitle">Мы в соцсетях:</div>
                                <div class="main-block__socials list-reset">
                                    <a href="<?= $arResult['inst_link'];?>" class="main-block__socials-link socials-link" aria-label="Напишите нам в Instagram">
                                        <svg>
                                            <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-inst"></use>
                                        </svg>
                                    </a>
                                    <a href="<?= $arResult['vk_link'];?>" class="main-block__socials-link socials-link" aria-label="Напишите нам в Вконтакте">
                                        <svg>
                                            <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-vk"></use>
                                        </svg>
                                    </a>
                                    <a href="<?= $arResult['whatsapp_link'];?>" class="main-block__socials-link socials-link" aria-label="Напишите нам в WhatsApp">
                                        <svg>
                                            <use xlink:href="./spritemap.svg#sprite-wapp"></use>
                                        </svg>
                                    </a>
                                    <a href="<?= $arResult['tg_link'];?>" class="main-block__socials-link socials-link" aria-label="Напишите нам в Telegram">
                                        <svg>
                                            <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-tg"></use>
                                        </svg>
                                    </a>
                                    <a href="<?= $arResult['viber_link'];?>" class="main-block__socials-link socials-link" aria-label="Напишите нам в Viber">
                                        <svg>
                                            <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-viber"></use>
                                        </svg>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($arResult['look_link']||$arResult['look_text']):?>
                <a href="<?= $arResult['look_link'];?>" class="main-block__link"><?= $arResult['look_text'];?></a>
                <?php endif;?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
