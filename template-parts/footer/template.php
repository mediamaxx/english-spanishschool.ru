<?php

$arResult = [
    'footer_logo_first' => [
        'full' => wp_get_attachment_image_url(carbon_get_theme_option( 'footer_logo_first' ), 'full'),
        'alt' => get_post_meta(carbon_get_theme_option( 'footer_logo_first' ), '_wp_attachment_image_alt', TRUE),
    ],
    'footer_phone' => carbon_get_theme_option( 'footer_phone' ),
    'footer_title' => carbon_get_theme_option( 'footer_title' ),
    'footer_mail' => carbon_get_theme_option( 'footer_mail' ),
    'footer_city' => carbon_get_theme_option( 'footer_city' ),
    'footer_street' => carbon_get_theme_option( 'footer_street' ),
    'footer_house' => carbon_get_theme_option( 'footer_house' ),
    'footer_worktime' => carbon_get_theme_option( 'footer_worktime' ),
    'footer_company_name' => carbon_get_theme_option( 'footer_company_name' ),
    'footer_copyright' => carbon_get_theme_option( 'footer_copyright' ),
];

?>

<footer class="page-footer">
    <div class="container">
        <div class="page-footer__top">
            <div class="page-footer__logo logo" aria-label="<?= $arResult['footer_logo_first']['alt']?>" style="background-image: url('<?= $arResult['footer_logo_first']['full']?>');"></div>
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'footer_menu_1',
                'container'       => false,
                'menu_class'      => 'page-footer__nav menu list-reset',
                'depth'           => 3,
                'walker'          => new walker_bem_footer_menu_top('menu'),
            ) );
            ?>
            <?php if ($arResult['footer_phone']):
                $link = preg_replace( array( '/\s/', '/\(/', '/\)/', '/-/' ), '', $arResult['footer_phone'] );
                $text = $arResult['footer_phone'];
                ?>
                <a href="tel:<?= $link; ?>" class="page-footer__phone phone"><?= $text; ?></a>
            <?php endif; ?>
        </div>
        <div class="page-footer__middle">
            <div class="page-footer__middle-left">
                <div class="page-footer__socials-title"><?= $arResult['footer_title'] ?></div>
                <div class="page-footer__socials list-reset">
                    <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Instagram">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-inst"></use>
                        </svg>
                    </a>
                    <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Вконтакте">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-vk"></use>
                        </svg>
                    </a>
                    <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в WhatsApp">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-wapp"></use>
                        </svg>
                    </a>
                    <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Telegram">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-tg"></use>
                        </svg>
                    </a>
                    <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Viber">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-viber"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="page-footer__middle-center">
                <div class="page-footer__menu-wrapper footer-menu__left">
                    <a href="#"><span class="page-footer__menu-title">Английский язык</span></a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'footer_menu_2',
                        'container'       => false,
                        'menu_class'      => 'page-footer__menu--left list-reset',
                        'depth'           => 3,
                        'walker'          => new walker_bem_footer_menu_bottom('menu'),
                    ) );
                    ?>
                </div>
                <div class="page-footer__menu-wrapper footer-menu__right">
                    <a href=""><span class="page-footer__menu-title">Испанский язык</span></a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'footer_menu_2',
                        'container'       => false,
                        'menu_class'      => 'page-footer__menu--right list-reset',
                        'depth'           => 3,
                        'walker'          => new walker_bem_footer_menu_bottom('menu'),
                    ) );
                    ?>
                </div>
            </div>
            <div class="page-footer__middle-right vcard">
                <div class="fn org hidden visually-hidden">English & Spanish School</div>
                <a href="mailto:dinatkatch@mail.ru" class="page-footer__email email"><?= $arResult['footer_mail']; ?></a>
                <div class="page-footer__adr adr">
                    <div class="page-footer__adr-title">Адрес:</div>
                    <address><span class="locality"><?= $arResult['footer_city']; ?></span>, <span class="street-address"><?= $arResult['footer_street']; ?></span>, <span class="extended-address"><?= $arResult['footer_house']; ?></span></address>
                    <div class="page-footer__adr-title">Режимы работы:</div>
                    <div class="worktime">
                        <?= $arResult['footer_worktime']; ?></div>
                </div>
            </div>
        </div>
        <div class="page-footer__bottom">
            <div class="page-footer__copyright">
                <div class="page-footer__copy-date"><?=date('Y');?>  <?= $arResult['footer_company_name']; ?>l</div>
                <div class="page-footer__copy-text"><?= $arResult['footer_copyright']; ?></div>
            </div>
            <a href="http://mtsite.ru" class="page-footer__powered dev-link" rel=”nofollow”>
                <span class="dev-link__text">Сделано в веб-студии "Мультисайт" Разработка и продвижение сайтов</span>
                <span class="dev-link__img">
            <img src="<?= _assets(); ?>/img/mtsite.png" alt="Сделано в веб-студии Мультисайт">
          </span>
            </a>
        </div>
    </div>
</footer>


	


