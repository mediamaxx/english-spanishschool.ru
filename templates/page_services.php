<?php
//Template Name: Страница Услуг
get_header();

$arParams = carbon_get_the_post_meta( 'page_services' );
?>

    <main class="main">

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

        <?php
        foreach($arParams as $arItem):

            get_template_part('template-parts/'.$arItem['_type'], NULL, $arItem);

        endforeach;?>

    </main>



<?php

get_footer();

?>