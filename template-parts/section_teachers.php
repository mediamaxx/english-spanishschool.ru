<?php

$arResult = [
    'teachers_title' => $args['teachers_title'],
    'teachers' => $args['teachers'],
];

?>
<?php if ($arResult['teachers_title']||$arResult['teachers']):?>
    <section class="teachers">
        <div class="container">
            <?php if ($arResult['teachers_title']):?>
                <div class="teachers__title section-title"><?= $arResult['teachers_title']?></div>
            <?php endif;?>
            <?php if ($arResult['teachers']):?>
                <div class="teachers__inner">
                    <div class="teachers__list list-reset">

                        <?php foreach ($arResult['teachers'] as $item):
                            $image = [
                                'full' => wp_get_attachment_image_url($item['teach_image'], 'full'),
                            ];
                            ?>

                            <div class="teachers__item">
                                <a href="<?= $image['full']?>"><img src="<?= $image['full']?>" alt="<?= $item['teach_surname']?> <?= $arResult['teach_name']?>" class="teachers__photo"></a>
                                <div class="teachers__card">
                                    <div class="teachers__name"><?= $item['teach_surname']?>
                                        <span><?= $item['teach_name']?></span>
                                    </div>
                                    <span class="teachers__job"><?= $item['teach_position']?></span>
                                    <span class="teachers__exp">Опыт работы — <?= $item['teach_exp']?></span>
                                    <div class="teachers__description"><span class="highlight">“</span> <?= $item['teach_desc']?> <span class="highlight">“</span></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="teachers__link">Посмотреть всех преподавателей</a>
                    <div class="teachers__arrows carousel-arrows__container">
                        <div class="teachers__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                            <svg>
                                <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-ar-prev"></use>
                            </svg>
                        </div>
                        <div class="teachers__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                            <svg>
                                <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-ar-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>