<?php

$arResult = [
    'serv_title' => $args['serv_title'],
    'serv_content' => $args['serv_content'],
];


?>
<?php if ($arResult['serv_title']||$arResult['serv_content']):?>
    <section class="services">
        <div class="container">
            <?php if ($arResult['serv_title']):?>
                <div class="services__title section-title"><?= $arResult['serv_title'] ?></div>
            <?php endif;?>
            <?php if ($arResult['serv_content']):?>
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
            <?php endif;?>
        </div>
    </section>
<?php endif;?>