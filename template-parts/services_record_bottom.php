<?php

$arResult = [
    'record_title' => $args['record_title'],
    'record_subtitle' => $args['record_subtitle'],
    'record_subtitle_mobile' => $args['record_subtitle_mobile'],
    'record_socials_title' => $args['record_socials_title'],
    'record_socials_whatsapp' => $args['record_socials_whatsapp'],
    'record_socials_tg' => $args['record_socials_tg'],
    'record_socials_viber' => $args['record_socials_viber'],
    'record_btn' => $args['record_btn'],
];

?>

<div class="record-bottom record-bottom--services">
    <div class="container">
        <div class="record-bottom__inner">
            <div class="record-bottom__content record-bottom__content--services">
                <div class="record-bottom__title"><?= $arResult['record_title'] ?></div>
                <div class="record-bottom__subtitle record-bottom__subtitle--xl"><?= $arResult['record_subtitle'] ?></div>
                <div class="record-bottom__subtitle record-bottom__subtitle--xs"><?= $arResult['record_subtitle_mobile'] ?></div>
                <div class="record-bottom__socials"><?= $arResult['record_socials_title'] ?>
                    <a href="<?= $arResult['record_socials_whatsapp'] ?>" class="record-bottom__social" aria-label="Напишите нам WhatsApp">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-wapp"></use>
                        </svg>
                    </a>
                    <a href="<?= $arResult['record_socials_tg'] ?>" class="record-bottom__social" aria-label="Напишите нам Telegram">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-tg"></use>
                        </svg>
                    </a>
                    <a href="<?= $arResult['record_socials_viber'] ?>" class="record-bottom__social" aria-label="Напишите нам Viber">
                        <svg>
                            <use xlink:href="./spritemap.svg#sprite-viber"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="record-bottom__cb-inner">
                <?php foreach ($arResult['record_btn'] as $item):?>
                    <a href="<?= $item['btn_link'] ?>" class="record__cb btn btn-secondary"><?= $item['btn_text'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
