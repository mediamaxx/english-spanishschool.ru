<?php
$arResult = [
    'news_content' => carbon_get_the_post_meta('news_content'),
    'news_list' => carbon_get_the_post_meta('news_list'),
    'news_quote' => carbon_get_the_post_meta('news_quote'),
    'news_table' => carbon_get_the_post_meta('news_table'),
];

?>

<?php get_header(); ?>

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
    <div class="container">
        < class="format-text">

            <?php foreach ($arResult['news_content'] as $item):?>

            <<?= $item['news_status'] ?>>
                <?php if ($item['news_image']):
                    $image = [
                        'full' => wp_get_attachment_image_url($item['news_image'], 'full'),
                        'alt' => get_post_meta($item['news_image'], '_wp_attachment_image_alt', TRUE),
                    ];?>
                <a href="<?= $image['full'] ?>" class="alignleft"><img src="<?= $image['full'] ?>" alt="<?= $image['alt'] ?>" title="Title"></a>
                <?php endif; ?>
            <?= $item['news_text'] ?></<?= $item['news_status'] ?>>

            <?php endforeach; ?>


            <?php foreach ($arResult['news_list'] as $it):?>

                <<?= $it['news_list_status'] ?>>
                    <?php foreach ($it['news_list_status'] as $it_element):?>

                        <li><?= $it_element['news_list_item_text'] ?></li>

                    <?php endforeach; ?>
                 </<?= $it['news_list_status'] ?>>

            <?php endforeach; ?>


            <blockquote><?= $arResult['news_quote'] ?></blockquote>

            <table>
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($arResult['news_table'] as $table):?>

                    <tr>
                        <td><?= $table['news_column_service']; ?></td>
                        <td><?= $table['news_column_price']; ?> руб.</td>
                    </tr>

                <?php endforeach; ?>


                </tbody>
            </table>

        </div>
    </div>
</main>

<?php get_footer(); ?>
