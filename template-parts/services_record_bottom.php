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
<?php if ($arResult['record_title']||$arResult['record_subtitle_mobile']||$arResult['record_subtitle']||$arResult['record_socials_title']||$arResult['record_socials_whatsapp']||$arResult['record_socials_tg']||$arResult['record_socials_viber']||$arResult['record_btn']):?>
    <div class="record-bottom record-bottom--services">
        <div class="container">
            <div class="record-bottom__inner">
                <div class="record-bottom__content record-bottom__content--services">
                    <?php if ($arResult['record_title']):?>
                        <div class="record-bottom__title"><?= $arResult['record_title'] ?></div>
                    <?php endif;?>
                    <?php if ($arResult['record_subtitle']):?>
                        <div class="record-bottom__subtitle record-bottom__subtitle--xl"><?= $arResult['record_subtitle'] ?></div>
                    <?php endif;?>
                    <?php if ($arResult['record_subtitle_mobile']):?>
                        <div class="record-bottom__subtitle record-bottom__subtitle--xs"><?= $arResult['record_subtitle_mobile'] ?></div>
                    <?php endif;?>
                    <?php if ($arResult['record_socials_title']):?>
                    <div class="record-bottom__socials"><?= $arResult['record_socials_title'] ?>
                        <?php endif;?>
                        <?php if ($arResult['record_socials_whatsapp']):?>
                            <a href="<?= $arResult['record_socials_whatsapp'] ?>" class="record-bottom__social" aria-label="Напишите нам WhatsApp">
                                <svg>
                                    <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-wapp"></use>
                                </svg>
                            </a>
                        <?php endif;?>
                        <?php if ($arResult['record_socials_tg']):?>
                            <a href="<?= $arResult['record_socials_tg'] ?>" class="record-bottom__social" aria-label="Напишите нам Telegram">
                                <svg>
                                    <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-tg"></use>
                                </svg>
                            </a>
                        <?php endif;?>
                        <?php if ($arResult['record_socials_viber']):?>
                            <a href="<?= $arResult['record_socials_viber'] ?>" class="record-bottom__social" aria-label="Напишите нам Viber">
                                <svg>
                                    <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-viber"></use>
                                </svg>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                <?php if ($arResult['record_btn']):?>
                    <div class="record-bottom__cb-inner">
                        <?php foreach ($arResult['record_btn'] as $item):?>
                            <a href="<?= $item['btn_link'] ?>" class="record__cb btn btn-secondary"><?= $item['btn_text'] ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>