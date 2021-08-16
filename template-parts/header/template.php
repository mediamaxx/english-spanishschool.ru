<?php
/*

Default call:

get_template_part('framework/template-parts/header/template');

*/


?>

<?php

// Массив данных шапки сайта

$arResult = [

    'header_logo' => [
        'full' => wp_get_attachment_image_url(carbon_get_theme_option( 'header_logo' ), 'full'),
        'alt' => get_post_meta(carbon_get_theme_option( 'header_logo' ), '_wp_attachment_image_alt', TRUE),
    ],
    'header_desc' => carbon_get_theme_option( 'header_desc' ),
    'header_phone' => carbon_get_theme_option( 'header_phone' ),
    'header_link_text' => carbon_get_theme_option( 'header_link_text' ),
    'header_link_text_phone' => carbon_get_theme_option( 'header_link_text_phone' ),
    'header_link' => carbon_get_theme_option( 'header_link' ),
];
?>

<header class="page-header">
    <div class="container">
        <?php if ( ($arResult['header_logo']['full']) || ($arResult['header_logo']['full'])):?>
        <a href="/" class="page-header__logo">

            <img src="$arResult['header_logo']['full']" alt="$arResult['header_logo']['alt']">
        </a>
        <?php endif;?>
        <?php if ($arResult['header_desc']):?>
        <div class="page-header__locality">
            <svg>
                <use xlink:href="./spritemap.svg#sprite-local"></use>
            </svg>
            <span><?= $arResult['header_desc'];?></span></div>
        <?php endif; ?>
        <?php if ($arResult['header_phone'] || $arResult['header_link'] || $arResult['header_link_text'] || $arResult['header_link_text_phone']): ?>
        <div class="page-header__contacts">
            <a href="tel:<?= $arResult['header_phone'];?>" class="page-header__phone">
                <span class="page-header__text"><?= $arResult['header_phone'];?></span>
            </a>
            <a href="tel:<?= $arResult['header_phone'];?>" class="page-header__phone page-header__phone--sm">
                <span class="page-header__text"><?= $arResult['header_phone'];?></span>
                <svg>
                    <use xlink:href="./spritemap.svg#sprite-phone"></use>
                </svg>
            </a>
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
            'walker'          => new walker_bem_header_menu_top('menu'),
        ) );
        ?>


<!--        <ul class="page-header__menu">-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Главная</a></li>-->
<!--            <li class="page-header__menu-item menu-item menu-item-has-children">-->
<!--                <a href="#" class="page-header__link">Английский язык</a>-->
<!--                <ul class="sub-menu">-->
<!--                    <li class="menu-item"><a href="#">Для детей</a></li>-->
<!--                    <li class="menu-item"><a href="#">Для взрослых</a></li>-->
<!--                    <li class="menu-item"><a href="#">Английский для туризма</a></li>-->
<!--                    <li class="menu-item"><a href="#">Корпоративное изучение</a></li>-->
<!--                    <li class="menu-item"><a href="#">Международные экзамены</a></li>-->
<!--                    <li class="menu-item"><a href="#">Профессиональные курсы английского языка</a></li>-->
<!--                    <li class="menu-item"><a href="#">Онлайн уроки</a></li>-->
<!--                    <li class="menu-item"><a href="#">Летние курсы</a></li>-->
<!--                    <li class="menu-item"><a href="#">Индивидуальные занятия</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="page-header__menu-item menu-item">-->
<!--                <a href="#" class="page-header__link">Испанский язык</a>-->
<!--            </li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">О школе</a></li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Отзывы</a></li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Цены</a></li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Блог</a></li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Акции</a></li>-->
<!--            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Контакты</a></li>-->
<!--        </ul>-->
    </nav>
</header>