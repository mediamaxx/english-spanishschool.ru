<?php

$arResult = [
    'serv_title' => $args['serv_title'],
];


?>
<?php if ($arResult['serv_title']):?>
    <section class="services">
        <div class="container">
            <?php if ($arResult['serv_title']):?>
                <div class="services__title section-title"><?= $arResult['serv_title'] ?></div>
            <?php endif;?>
            <div class="grid grid--services">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $stati_children = new WP_Query(array(
                        'post_type' => 'page',
                        'post_parent' => get_the_ID(),
                        'post__in' => array( 264, 281, 359, 353, 357, 363 ),
                        'posts_per_page' => 6,
                        'paged' => $paged,
                    )
                );
                ?>

                <?php if($stati_children->have_posts()): ?>

                <?php while($stati_children->have_posts()): $stati_children->the_post(); ?>

                    <?php

                    $arItem = [
                        'image' => [
                            'full' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                            'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)
                        ],
                        'anons' => carbon_get_the_post_meta('anons'),
                        'date' => carbon_get_the_post_meta('date')
                    ];

                    ?>

                    <div class="grid__item">
                        <a href="<?php the_permalink(); ?>" class="grid__cover grid__cover--services">
                            <img src="<?=  $arItem['image']['full'] ?>" alt="<?=  $arItem['image']['alt'] ?>">
                        </a>
                        <a href="<?php the_permalink(); ?>" class="grid__title grid__title--services"><?php the_title(); ?></a>
                    </div>



                <?php endwhile; ?>

            </div>
        <?php endif;?>
        </div>
    </section>
<?php endif;?>
