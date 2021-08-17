<?php
//Template Name: Страница Услуг
get_header();

$arParams = carbon_get_the_post_meta( 'page_services' );
?>

    <main class="main">

    <main class="page-main">
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a href="/" class="breadcrumbs__link">Главная</a></li>
                    <li class="breadcrumbs__item"><span class="breadcrumbs__text">Испанский язык</span></li>
                </ul>
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