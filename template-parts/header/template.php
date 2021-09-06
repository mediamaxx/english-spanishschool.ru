<?php
/*

Default call:

get_template_part('framework/template-parts/header/template');

*/


?>

<?php

// Массив данных шапки сайта

$arResult = [
    'header_desc' => carbon_get_theme_option( 'header_desc' ),
    'header_phone' => carbon_get_theme_option( 'header_phone' ),
    'header_link_text' => carbon_get_theme_option( 'header_link_text' ),
    'header_link_text_phone' => carbon_get_theme_option( 'header_link_text_phone' ),
    'header_link' => carbon_get_theme_option( 'header_link' ),
];

$image = [
    'full' => wp_get_attachment_image_url(carbon_get_theme_option( 'header_logo' ), 'full'),
    'alt' => get_post_meta(carbon_get_theme_option( 'header_logo' ), '_wp_attachment_image_alt', TRUE),
];
?>

<header class="page-header" <?php if(is_user_logged_in()) echo 'style="margin-top:32px;"' ?>>
    <div class="container">
        <?php if(!is_front_page()): ?>
            <?php if ( ($image['full']) || ($image['alt'])): ?>
                <a href="/" class="page-header__logo">
                    <img src="<?= $image['full'] ?>" alt="<?= $image['alt'] ?>">
                </a>
            <?php endif;?>
        <?php else: ?>
            <?php if ( ($image['full']) || ($image['alt'])): ?>
                <a href="" class="page-header__logo">
                    <img src="<?= $image['full'] ?>" alt="<?= $image['alt'] ?>">
                </a>
            <?php endif;?>
        <?php endif; ?>

        <?php if ($arResult['header_desc']):?>
            <div class="page-header__locality">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                    <path d="M8 0C4.00606 0 0.75676 3.2493 0.75676 7.2432C0.75676 12.1998 7.23875 19.4763 7.51473 19.7836C7.77395 20.0723 8.22653 20.0718 8.48528 19.7836C8.76125 19.4763 15.2432 12.1998 15.2432 7.2432C15.2432 3.2493 11.9939 0 8 0ZM8 10.8875C5.99055 10.8875 4.35578 9.25266 4.35578 7.2432C4.35578 5.23375 5.99059 3.59898 8 3.59898C10.0094 3.59898 11.6442 5.23379 11.6442 7.24324C11.6442 9.2527 10.0094 10.8875 8 10.8875Z" fill="#C31C22"/>
                </svg>
                <span><?= $arResult['header_desc'];?></span></div>
        <?php endif; ?>
        <?php if ($arResult['header_phone'] || $arResult['header_link'] || $arResult['header_link_text'] || $arResult['header_link_text_phone']): ?>
            <div class="page-header__contacts">

                <?php if($arResult['header_phone']): ?>
                    <?php foreach ($arResult['header_phone'] as $item):
                        $link = preg_replace( array( '/\s/', '/\(/', '/\)/', '/-/' ), '', $item['header_phone'] );
                        $text = $item['header_phone'];
                        ?>

                        <a href="tel:<?= $link; ?>" class="page-header__phone">

                            <span class="page-header__text"><?= $text; ?></span>
                        </a>

                    <?php endforeach; ?>
                <?php endif; ?>


                <?php if($arResult['header_phone']): ?>
                    <?php foreach ($arResult['header_phone'] as $item):
                        $link = preg_replace( array( '/\s/', '/\(/', '/\)/', '/-/' ), '', $item['header_phone'] );
                        $text = $item['header_phone'];
                        ?>

                        <a href="tel:<?= $link; ?>" class="page-header__phone page-header__phone--sm">
                            <span class="page-header__text"><?= $text; ?></span>
                            <svg>
                                <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-phone"></use>
                            </svg>
                        </a>

                    <?php endforeach; ?>
                <?php endif; ?>





                <a href="<?= $arResult['header_link'];?>" class="page-header__callback">
                    <span class="page-header__callback--xl"><?= $arResult['header_link_text'];?></span>
                    <span class="page-header__callback--md"><?= $arResult['header_link_text_phone'];?></span>
                </a>
            </div>
        <?php endif; ?>
        <div class="page-header__burger" aria-label="Меню">
            <span class="page-header__burger-line"></span>
        </div>
    </div>
    <nav class="page-header__nav">
        <div class="page-header__overlay">
        </div>
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'header_menu_1',
            'container'       => false,
            'menu_class'      => 'page-header__menu',
            'depth'           => 3,
            'walker'          => new walker_bem_header_menu_top('page-header__nav'),
        ) );
        ?>
    </nav>
</header>