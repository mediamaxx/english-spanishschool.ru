<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?php the_title(); ?></title>

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <?php if(is_paged()): ?>
        <meta name='robots' content='noindex, nofollow' />
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= _assets(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= _assets(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= _assets(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= _assets(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?= _assets(); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if(is_paged()): ?>
        <meta name='robots' content='noindex, nofollow' />
    <?php endif; ?>

    <?php wp_head();?>
</head>
<body>

<?php
get_template_part('template-parts/header/template');
?>
