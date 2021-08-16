<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$tags = array(
    'span'  => 'span',
    'h1'    => 'h1',
    'h2'    => 'h2',
    'h3'    => 'h3',
    'h4'    => 'h4',
    'h5'    => 'h5',
    'p'     => 'p',
  );

//страница Карточка товара
Container::make('post_meta', 'Страница товара')
    ->where('post_type', '=', 'post')
    ->or_where( 'post_template', '=', 'templates/single-product.php' )
    ->add_fields(array(
        Field::make('select', 'title_status', 'Статус заголовка')
        ->set_options( $tags ) 
        ->set_default_value('h1') 
        ->set_width(20),
		Field::make('text', 'title_text', 'Текст заголовка')
        ->set_width(80),
        Field::make('image', 'image', 'Изображение')
        ->set_width(100),


        Field::make('rich_text', 'content_side', 'Текст под фото слева - без обтекания')
        ->set_width(50),

        Field::make('complex', 'chars', 'Характеристики')
        ->add_fields(array(
            Field::make( 'text', 'name', 'Название' )->set_width(50),
            Field::make( 'text', 'caption', 'Значение' )->set_width(50),
        ))
        ->set_width(50),

        Field::make('text', 'regular_price', 'Основная цена')
        ->set_width(50),
        Field::make('text', 'old_price', 'Старая цена')
        ->set_width(50),

        Field::make('rich_text', 'content', 'Контентная область под фото - на всю ширину')
        ->set_width(100),

        Field::make( 'media_gallery', 'gallery', 'Галерея' )
        ->set_type( array( 'image', 'image' ) )
        ->set_width(100),

        Field::make('checkbox', 'similiar', 'Скрыть похожие?')
        ->set_width(100),

        Field::make('rich_text', 'content_2', 'Контентная область')
        ->set_width(100),

));

// страница Контакты
Container::make('post_meta', 'Страница контакты')
    ->where( 'post_template', '=', 'templates/page_contacts.php' )
    ->add_fields(array(
        Field::make('text', 'title', 'Заголовок')
            ->set_default_value('Контакты школы')
            ->set_width(50),

        Field::make('text', 'hidden_subtitle', 'Скрытый подзаголовок')
            ->set_default_value('English & Spanish School')
            ->set_width(50),

        Field::make('text', 'subtitle', 'Подзаголовок')
            ->set_default_value('Наш адрес')
            ->set_width(50),

        Field::make('text', 'index', 'Индекс')
            ->set_default_value('Наш адрес')
            ->set_width(50),

        Field::make('text', 'country', 'Страна')
            ->set_default_value('Наш адрес')
            ->set_width(50),

        Field::make('text', 'city', 'Город')
            ->set_default_value('г. Калининград')
            ->set_width(50),

        Field::make('text', 'street', 'Город')
            ->set_default_value('г. Калининград')
            ->set_width(50),

        Field::make('text', 'address', 'Дом, корпус, этаж')
            ->set_default_value('д.45, корпус 5, 3 этаж')
            ->set_width(50),

        Field::make('text', 'email', 'E-mail')
            ->set_default_value('dinatkatch@mail.ru')
            ->set_width(50),

        Field::make('text', 'phone', 'Номер телефона')
            ->set_default_value('+78005679800')
            ->set_width(50),

        Field::make('text', 'rec_text', 'Номер телефона')
            ->set_default_value('Перезвоните мне')
            ->set_width(50),

        Field::make('text', 'rec_link', 'Номер телефона')
            ->set_default_value('#modal-record')
            ->set_width(50),


        Field::make('text', 'inst_link', 'Ссылка на Ваш Instagram')
            ->set_default_value('https://www.instagram.com/')
            ->set_width(50),

        Field::make('text', 'vk_link', 'Ссылка на Ваш VK')
            ->set_default_value('https://vk.com/')
            ->set_width(50),

        Field::make('text', 'whatsapp_link', 'Ссылка на Ваш Whatsapp')
            ->set_default_value('https://www.whatsapp.com/')
            ->set_width(50),

        Field::make('text', 'tg_link', 'Ссылка на Ваш Telegram')
            ->set_default_value('https://web.telegram.org/')
            ->set_width(50),

        Field::make('text', 'viber_link', 'Ссылка на Ваш Viber')
            ->set_default_value('https://www.viber.com/')
            ->set_width(50),

        Field::make('text', 'look_link', 'Ссылка на онлайн карту')
            ->set_default_value('https://yandex.ru/maps/22/kaliningrad/?from=api-maps&ll=20.485378%2C54.714219&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3Aadab3e1191e34cdf8f1c4e2c53704cb308511db9379cb9eeb65f9c39f2ff2b62&z=14')
            ->set_width(50),

        Field::make('text', 'look_text', 'Текст для ссылки на онлайн карту')
            ->set_default_value('Посмотреть на онлайн карте')
            ->set_width(50),
        ));







