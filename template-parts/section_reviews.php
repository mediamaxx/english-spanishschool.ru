<?php

$arResult = [
    'review_title' => $args['review_title'],
    'reviews' => $args['reviews'],
    'review_btn_text' => $args['review_btn_text'],
    'review_btn_link' => $args['review_btn_link'],
    'comment_btn_text' => $args['comment_btn_text'],
    'comment_btn_link' => $args['comment_btn_link'],
];

?>
<?php if ($arResult['review_title']||$arResult['reviews']||$arResult['review_btn_text']||$arResult['review_btn_link']||$arResult['comment_btn_text']||$arResult['comment_btn_link']):?>
<section class="reviews">
    <div class="container">
        <?php if ($arResult['review_title']):?>
        <div class="reviews__title section-title"><?= $arResult['review_title']?></div>
        <?php endif;?>
        <div class="reviews__container">
            <?php if ($arResult['reviews']):?>
            <div class="reviews__list list-reset">

                <?php foreach ($arResult['reviews'] as $item):
                    $image = [
                        'full' => wp_get_attachment_image_url($item['review_image'], 'full'),
                        'alt' => get_post_meta($item['review_image'], '_wp_attachment_image_alt', TRUE),
                    ];
                    ?>
                    <div class="reviews__item">
                        <a href="<?= $image['full']?>" class="reviews__img">
                            <img src="<?= $image['full']?>" alt="<?= $image['alt']?>">
                        </a>
                        <div class="reviews__content">
                            <div class="reviews__name"><?= $item['review_name']?></div>
                            <ul class="reviews__features">

                                <?php foreach ($item['review_item'] as $it):?>
                                    <li class="reviews__features-item"><?= $it['review_achievement'] ?></li>
                                <?php endforeach; ?>



                            </ul>
                            <div class="reviews__body">
                                <p><?= $item['review_text']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif;?>

            <div class="reviews__arrows carousel-arrows__container">
                <div class="reviews__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                    <svg>
                        <use xlink:href="./spritemap.svg#sprite-ar-prev"></use>
                    </svg>
                </div>
                <div class="reviews__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                    <svg>
                        <use xlink:href="./spritemap.svg#sprite-ar-next"></use>
                    </svg>
                </div>
            </div>
        </div>

        <div class="reviews__link-wrapper">
            <?php if ($arResult['review_btn_text']||$arResult['review_btn_link']):?>
            <a href="<?= $arResult['review_btn_link']?>" class="btn btn-primary btn-reset reviews__btn"><?= $arResult['review_btn_text']?></a>
            <?php endif;?>
            <?php if ($arResult['comment_btn_text']||$arResult['comment_btn_link']):?>
            <a href="<?= $arResult['comment_btn_link']?>" class="btn btn-secondary btn-reset reviews__btn"><?= $arResult['comment_btn_text']?></a>
            <?php endif;?>
        </div>
    </div>
</section>
<?php endif;?>
