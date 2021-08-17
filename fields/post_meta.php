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

$lists = array(
    'ul'  => 'ul',
    'ol'  => 'ol',
);

//страница Одна новость
Container::make('post_meta', 'Страница одной новости')
    ->where('post_type', '=', 'post')
    ->or_where( 'post_template', '=', 'templates/single_news.php' )
    ->add_fields(array(

        Field::make('complex', 'news_content', 'Содержание статьи')
            ->add_fields(array(
                Field::make('select', 'news_status', 'Статус заголовка')
                    ->set_options( $tags )
                    ->set_default_value('h1')
                    ->set_width(20),
                Field::make('rich_text', 'news_text', 'Текст внутри заголовка')
                    ->set_width(80),
                Field::make('image', 'news_image', 'Изображение')
                    ->set_width(100),

            )),


        Field::make('complex', 'news_list', 'Список')
            ->add_fields(array(
                Field::make('select', 'news_list_status', 'Выберите тип списка: маркированный (точка) - ul, Нумерованный (порядковое число) - ol')
                    ->set_options( $lists )
                    ->set_width(20),

                Field::make('complex', 'news_list_item', 'Элемент списка')
                    ->add_fields(array(
                        Field::make('rich_text', 'news_list_item_text', 'Текст внутри списка')
                            ->set_width(50),

                    )),



            )),

        Field::make('rich_text', 'news_quote', 'Цитата')
            ->set_default_value('Задача организации, в особенности же разбавленное изрядной долей эмпатии, рациональное мышление влечет за собой процесс внедрения и модернизации позиций.')
            ->set_width(80),



        Field::make('complex', 'news_table', 'Таблица "Услуга - цена"')
            ->add_fields(array(
                Field::make('text', 'news_column_service', 'Название услуги')
                    ->set_width(50),

                Field::make('text', 'news_column_price', 'Цена (укажите только число)')
                    ->set_width(50),

            )),

    ));


//страница Услуги
Container::make('post_meta', 'Страница услуг')
    ->where('post_type', '=', 'post')
    ->or_where( 'post_template', '=', 'templates/page_services.php' )
    ->add_fields( array(
        Field::make( 'complex', 'page_services', ' ' )
            ->setup_labels( array(
                'plural_name' => 'Секции',
                'singular_name' => 'секцию',
            ))

            ->add_fields('hero_services', 'Баннер (Сервисы)', array(

                Field::make('image', 'service_background_image', 'Фоновая фотография')
                    ->set_width(50),

                Field::make( 'text', 'title', 'Заголовок' )
                    ->set_default_value('Испанский язык')
                    ->set_width(50),

                Field::make( 'text', 'subtitle', 'Подзаголовок' )
                    ->set_default_value('Осуществите свою мечту — выучите испанский язык с легкостью')
                    ->set_width(50),

                Field::make( 'text', 'min_price', 'Минимальная стоимость курса' )
                    ->set_default_value('4 500')
                    ->set_width(50),

                Field::make( 'rich_text', 'callback_title', 'Заголовок формы' )
                    ->set_default_value('Набираем вечерние группы испанского языка <strong>со скидкой 10%</strong>')
                    ->set_width(50),

                Field::make( 'rich_text', 'callback_subtitle', 'Подзаголовок формы' )
                    ->set_default_value('Запишитесь на <span class="highlight-xs">бесплатный</span> <span class="hidden-xl">вводный </span> урок:')
                    ->set_width(50),

                Field::make('image', 'service_front_image', 'Изображение спереди')
                    ->set_width(50),

                Field::make('image', 'service_front_image_mobile', 'Изображение спереди для телефонов')
                    ->set_width(50),

            ))


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







