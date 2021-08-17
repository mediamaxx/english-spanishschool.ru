
<?php

$arResult = [
    'lessons_title' => $args['lessons_title'],
    'lessons_image' => $args['lessons_image'],
    'lessons_text' => $args['lessons_text'],
    'lessons_link_sertificates' => $args['lessons_link_sertificates'],
    'lessons_text_sertificates' => $args['lessons_text_sertificates'],
    'lessons_link_about' => $args['lessons_link_about'],
    'lessons_text_about' => $args['lessons_text_about'],
    'lessons_text_socials' => $args['lessons_text_socials'],
    'lessons_inst_link' => $args['lessons_inst_link'],
    'lessons_vk_link' => $args['lessons_vk_link'],
    'lessons_gallery' => $args['lessons_gallery'],
    'lessons_text_mobile' => $args['lessons_text_mobile'],
];

?>
<section class="lessons">
    <div class="container">
        <div class="lessons__title section-title"><?= $arResult['lessons_title']?></div>
        <div class="lessons__wrapper">
            <div class="lessons__content">
                <div class="lessons__text">
                    <?php
                    $imaged = [
                        'full' => wp_get_attachment_image_url($arResult['lessons_image'], 'full'),
                    ];
                    ?>
                    <a href="<?= $imaged['full']?>" class="lessons__media">
                        <img src="<?= $imaged['full']?>" alt="Как проходят наши уроки">
                        <span class="play" aria-label="Посмотреть видео"></span>
                    </a>
                    <p><?= $arResult['lessons_text']?></p>
                </div>
                <div class="lessons__bottom">
                    <a href="<?= $arResult['lessons_link_sertificates']?>" class="lessons__link link"><?= $arResult['lessons_text_sertificates']?></a>
                    <a href="<?= $arResult['lessons_link_about']?>" class="lessons__link link"><?= $arResult['lessons_text_about']?></a>
                    <div class="lessons__socials">
                        <span class="lessons__socials-title"><?= $arResult['lessons_text_socials']?> </span>
                        <a href="<?= $arResult['lessons_inst_link']?>" class="lessons__socials-link socials-link">
                            <svg>
                                <use xlink:href="./spritemap.svg#sprite-inst"></use>
                            </svg>
                        </a>
                        <a href="<?= $arResult['lessons_vk_link']?>" class="lessons__socials-link socials-link">
                            <svg>
                                <use xlink:href="./spritemap.svg#sprite-vk"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="gallery__inner">
            <div class="container">
                <div class="gallery__arrows carousel-arrows__container">
                    <div class="gallery__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-ar-prev"></use>
                        </svg>
                    </div>
                    <div class="gallery__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-ar-next"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="gallery__list list-reset">
                <?php foreach ($arResult['lessons_gallery'] as $item):
                    $image = [
                        'full' => wp_get_attachment_image_url($item['gallery_image'], 'full'),
                        'alt' => get_post_meta($item['gallery_image'], '_wp_attachment_image_alt', TRUE),
                    ];
                    ?>
                    <a href="<?= $image['full']?>" class="gallery__item"><img src="<?= $image['full']?>" alt="<?= $image['alt']?>" class="gallery__img"></a>
                <?php endforeach; ?>
                </div>
            <div class="gallery__description visible-xs">
                <div class="container">
                    <p><?= $arResult['lessons_text_mobile']?></p>
                </div>
            </div>
        </div>
    </div>
</section>