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
                <svg>
                    <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-local"></use>
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
        <ul class="page-header__menu">
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Главная</a></li>
            <li class="page-header__menu-item menu-item menu-item-has-children">
                <a href="#" class="page-header__link">Английский язык</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="#">Для детей</a></li>
                    <li class="menu-item"><a href="#">Для взрослых</a></li>
                    <li class="menu-item"><a href="#">Английский для туризма</a></li>
                    <li class="menu-item"><a href="#">Корпоративное изучение</a></li>
                    <li class="menu-item"><a href="#">Международные экзамены</a></li>
                    <li class="menu-item"><a href="#">Профессиональные курсы английского языка</a></li>
                    <li class="menu-item"><a href="#">Онлайн уроки</a></li>
                    <li class="menu-item"><a href="#">Летние курсы</a></li>
                    <li class="menu-item"><a href="#">Индивидуальные занятия</a></li>
                </ul>
            </li>
            <li class="page-header__menu-item menu-item">
                <a href="#" class="page-header__link">Испанский язык</a>
            </li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">О школе</a></li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Отзывы</a></li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Цены</a></li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Блог</a></li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Акции</a></li>
            <li class="page-header__menu-item menu-item"><a href="#" class="page-header__link">Контакты</a></li>
        </ul>
    </nav>
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
    fsdfdsf
</header>