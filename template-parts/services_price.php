<?php

$arResult = [
    'price_title' => $args['price_title'],
    'price_subtitle' => $args['price_subtitle'],
    'price_item' => $args['price_item'],
];
?>

<?php if ($arResult['price_title']||$arResult['price_subtitle']||$arResult['price_item']):?>
    <section class="price">
        <div class="container">
            <?php if ($arResult['price_title']):?>
                <div class="price__title section-title"><?= $arResult['promo_title'] ?></div>
            <?php endif;?>
            <?php if ($arResult['price_subtitle']):?>
                <div class="price__subtitle"><?= $arResult['promo_subtitle'] ?></div>
            <?php endif;?>
            <?php if ($arResult['price_item']):?>
                <div class="price__grid">


                    <?php foreach ($arResult['price_item'] as $item):?>

                        <div class="price__item">
                            <div class="price__subject"><?= $item['price_item_title'] ?></div>
                            <div class="price__desc">
            <span class="price__time">
              <svg>
                  <use xlink:href="./spritemap.svg#sprite-clock"></use>
              </svg>
              <span class="price__time-value"><?= $item['price_item_minutes'] ?> минут</span>
            </span>
                                <span class="price__lessons">
              <svg>
                  <use xlink:href="./spritemap.svg#sprite-clndr"></use>
              </svg>
              <span class="price__lessons-value"><?= $item['price_item_lessons'] ?> занятие в месяц</span>
            </span>
                            </div>
                            <div class="price__value"><?= $item['price_item_value'] ?></div>
                            <button class="btn btn-primary price__btn"><?= $item['price_item_btn_text'] ?></button>
                        </div>

                    <?php endforeach; ?>

                </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>