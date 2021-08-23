<?php

$arResult = [
    'form_title_mobile' => $args['form_title_mobile'],
    'form_subtitle_mobile' => $args['form_subtitle_mobile'],
    'form_btn_text' => $args['form_btn_text'],
    'form_btn_link' => $args['form_btn_link'],
];

?>
<?php if ($arResult['form_title_mobile']||$arResult['form_subtitle_mobile']||$arResult['form_btn_text']||$arResult['form_btn_link']):?>
    <div class="record record-mobile">
        <div class="container">
            <div class="record__container record-mobile__container">
                <?php if ($arResult['form_title_mobile']):?>
                    <div class="record-mobile__title"><?= $arResult['form_title_mobile']?></div>
                <?php endif;?>
                <?php if ($arResult['form_subtitle_mobile']):?>
                    <div class="record-mobile__subtitle"><?= $arResult['form_subtitle_mobile']?></div>
                <?php endif;?>
                <?php if ($arResult['form_btn_text']||$arResult['form_btn_link']):?>
                    <a href="<?= $arResult['form_btn_link']?>" class="record-mobile__link btn btn-secondary"><?= $arResult['form_btn_text']?></a>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>