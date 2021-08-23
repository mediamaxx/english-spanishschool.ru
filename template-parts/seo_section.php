<?php

$arResult = [
    'seo_title' => $args['seo_title'],
    'seo_text' => $args['seo_text'],
];

?>

<?php if ($arResult['seo_title']||$arResult['seo_text']):?>
    <div class="seo">
        <div class="container">
            <?php if ($arResult['seo_title']):?>
                <div class="seo__title section-title"><?= $arResult['seo_title']?></div>
            <?php endif;?>
            <?php if ($arResult['seo_text']):?>
                <div class="seo__content">
                    <p><?= $arResult['seo_text']?></p>
                </div>
            <?php endif;?>
        </div>
    </div>
<?php endif;?>