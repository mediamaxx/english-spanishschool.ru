<?php

$arResult = [
    'form_title' => $args['form_title'],
    'form_subtitle' => $args['form_subtitle'],
    'form_item' => $args['form_item'],
];

?>
<?php if ($arResult['form_title']||$arResult['form_subtitle']||$arResult['form_item']):?>
    <section class="record record--main">
        <div class="container">
            <div class="record__container record__container--main">
                <div class="record__cell record__cell--left">
                    <?php if ($arResult['form_title']):?>
                        <div class="record__title record__title--main section-title"><?= $arResult['form_title']?></div>
                    <?php endif;?>
                    <?php if ($arResult['form_subtitle']):?>
                        <div class="record__subtitle record__subtitle--main"><?= $arResult['form_subtitle']?></div>
                    <?php endif;?>
                    <?php if ($arResult['form_item']):?>
                        <ul class="record__descr list-reset">
                            <?php foreach ($arResult['form_item'] as $item):
                                $image = [
                                    'full' => wp_get_attachment_image_url($item['form_icon'], 'full'),
                                ];
                                ?>

                                <li class="record__descr-item">
                                    <span class="icon" style="background-image: url(<?= $image['full']?>);"></span>
                                    <span><?= $item['form_text']?></span>
                                </li>

                            <?php endforeach; ?>

                        </ul>
                    <?php endif;?>
                </div>


                <div class="record__cell record__cell--right">
                    <div class="record__cell record__cell--right">
                        <?= do_shortcode('[contact-form-7 id="259" title="Пробное занятие" html_class="form form__main"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>