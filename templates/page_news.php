<?php

//Template Name: Новости

get_header();


$arResult = [
    'title' => [
        'status' => carbon_get_the_post_meta('title_status'),
        'text'  => carbon_get_the_post_meta('title_text'),
    ],

];

$post_amount = 0;

?>

    <main class="page-main">
        <div class="breadcrumbs">
            <div class="container">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<ul class="breadcrumbs__list"><li class="breadcrumbs__item">','</li></ul>' );
                }
                ?>
            </div>
        </div>
        <section class="archive-news">
            <div class="container">
                <div class="archive-news__title section-title">Наши новости</div>

                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $stati_children = new WP_Query(array(
                        'post_type' => 'page',
                        'post_parent' => get_the_ID(),
                        'posts_per_page' => 9,
                        'paged' => $paged,
                    )
                );
                ?>

                <?php if($stati_children->have_posts()): ?>

                <div class="grid">

                <?php while($stati_children->have_posts()): $stati_children->the_post(); ?>

                    <?php

                    $arItem = [
                        'image' => [
                            'blur' => get_the_post_thumbnail_url(get_the_ID(), 'blur'),
                            'middle' => get_the_post_thumbnail_url(get_the_ID(), 'middle'),
                            'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)
                        ],
                        'anons' => carbon_get_the_post_meta('anons'),
                        'anons_text_2' => carbon_get_the_post_meta('anons_text_2'),
                    ];

                    ?>

                    <article class="grid__item">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?=  $arItem['image']['middle'] ?>" alt="<?=  $arItem['image']['alt'] ?>" class="grid__cover">
                        </a>
                        <span class="grid__tag"><?php single_cat_title(); ?></span>
                        <a href="<?php the_permalink(); ?>" class="grid__title">
                            <?php if( $arItem['anons']): ?>
                                <span><?= $arItem['anons'] ?></span>
                            <?php endif; ?>
                        </a>
                        <?php if( $arItem['anons_text_2']): ?>
                            <div class="grid__excerpt"><?= $arItem['anons_text_2'] ?>
                        <?php endif; ?>
                    </article>
                    <?php $post_amount++ ;?>

                <?php endwhile; ?>
                </div>
                    <?php if ($post_amount>9):?>
                        <button class="btn btn-secondary grid__load-btn">Загрузить еще новости</button>
                    <?php endif;?>

                <?php endif; ?>

                <?php wp_reset_query(); ?>
            </div>
        </section>


    </main>




<?php

get_footer();