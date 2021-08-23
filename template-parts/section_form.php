<?php

$arResult = [
    'form_title' => $args['form_title'],
    'form_list' => $args['form_list'],
    'form_link' => $args['form_link'],
    'form_lang' => $args['form_lang'],
    'form_lang_image' => $args['form_lang_image'],
    'form_politics' => $args['form_politics'],


];

$image = [
    'full' => wp_get_attachment_image_url($arResult['form_lang_image_eng'], 'full'),
    'fulled' => wp_get_attachment_image_url($arResult['form_lang_image_spn'], 'full'),
];

?>
<?php if ($arResult['form_title']||$arResult['form_list']||$arResult['form_link']||$arResult['form_lang']||$arResult['form_lang_image']||$arResult['form_politics']):?>
    <div class="record-bottom">
        <div class="container">
            <div class="record-bottom__inner">
                <?php if ($arResult['form_title']||$arResult['form_list']):?>
                    <div class="record-bottom__content">
                        <?php if ($arResult['form_title']):?>
                            <div class="record-bottom__title"><?= $arResult['form_title']?></div>
                        <?php endif;?>
                        <?php if ($arResult['form_list']):?>
                            <ul class="record-bottom__list">
                                <?php foreach ($arResult['form_list'] as $item):?>
                                    <li><?= $item['form_list_item']?></li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <?php if ($arResult['form_link']||$arResult['form_lang']||$arResult['form_lang_image']||$arResult['form_politics']):?>
                    <div class="record-bottom__btns">
                        <a href="<?= $arResult['form_link']?>" class="record-bottom__btn record-bottom__btn--english">
                            <span class="flag" style="background-image: url(<?= $image['full']?>);"></span>
                            <span><?= $arResult['form_lang']?></span>
                        </a>
                        <a href="<?= $arResult['form_link']?>" class="record-bottom__btn record-bottom__btn--spanish">
                            <span class="flag" style="background-image: url(<?= $image['fulled']?>);"></span>
                            <span><?= $arResult['form_lang']?></span>
                        </a>
                        <div class="record-bottom__politics"><?= $arResult['form_politics']?></div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>