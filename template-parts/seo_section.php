<?php

$arResult = [
    'seo_title' => $args['seo_title'],
    'seo_text' => $args['seo_text'],
];

?>


<div class="seo">
    <div class="container">
        <div class="seo__title section-title"><?= $arResult['seo_title']?></div>
        <div class="seo__content">
            <p><?= $arResult['seo_text']?></p>
        </div>
    </div>
</div>
