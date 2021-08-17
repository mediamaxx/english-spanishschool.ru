<?php

$arResult = [
    'serv_title' => $args['serv_title'],
    'serv_content' => $args['serv_content'],
];


?>

<section class="services">
    <div class="container">
        <div class="services__title section-title"><?= $arResult['serv_title'] ?></div>
        <div class="grid grid--services">

            <?php foreach ($arResult['serv_content'] as $item):
                $image = [
                    'full' => wp_get_attachment_image_url($item['service_background_image'], 'full'),
                ];
                ?>

                <div class="grid__item">
                    <a href="<?= $item['serv_link'] ?>" class="grid__cover grid__cover--services">
                        <img src="<?= $image['full'] ?>>" alt="<?= $item['serv_point'] ?>">
                    </a>
                    <a href="<?= $item['serv_link'] ?>" class="grid__title grid__title--services"><?= $item['serv_point'] ?></a>
                </div>

            <?php endforeach; ?>



        </div>
    </div>
</section>
