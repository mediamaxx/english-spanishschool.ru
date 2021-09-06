<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Header/Footer')
    ->add_tab('Шапка сайта', array(

            Field::make('image', 'header_logo', 'Логотип - основной')
                ->set_width(50),

            Field::make('textarea', 'header_desc', 'Слоган')
                ->set_attribute( 'placeholder', 'Слоган компании' )
                ->set_width(50),


            Field::make('complex', 'header_phone', 'Характеристики')
                ->set_width(50)
                ->add_fields(array(
                    Field::make('text', 'header_phone', 'Телефон')
                        ->set_attribute( 'placeholder', '+7 (***) ***-****' )
                        ->set_width(25),
                )),

            Field::make('text', 'header_link_text', 'Текст ссылки на запись')
                ->set_default_value( 'Записаться в школу' )
                ->set_width(30),

            Field::make('text', 'header_link_text_phone', 'Текст ссылки на запись для телефонов')
                ->set_default_value( 'Записаться' )
                ->set_width(30),

            Field::make('text', 'header_link', 'Ссылка на заявку')
                ->set_default_value( '#modal-record' )
                ->set_width(30),
        )
    )




    ->add_tab('Подвал сайта', array(
        Field::make('image', 'footer_logo_first', 'Логотип - основной')
            ->set_width(50),

        Field::make('text', 'footer_phone', 'Телефон')
            ->set_attribute( 'placeholder', '+79001111111' )
            ->set_default_value( '+78005679800' )
            ->set_width(50),

        Field::make('text', 'footer_title', 'Заголовок')
            ->set_attribute( 'placeholder', 'Впишите Ваш заголовок сюда' )
            ->set_default_value( 'Языковая школа в Калининграде' )
            ->set_width(50),


        Field::make('complex', 'footer_socials', 'Социальные сети (max: 6)')
            ->set_width(50)
            ->set_max(6)
            ->add_fields(array(
                Field::make( 'text', 'socials_link', 'Ссылка' )->set_width(50),
                Field::make( 'select', 'socials_name', 'Название соцсети' )
                    ->set_width(50)
                    ->set_options( array(
                        'inst' => 'instagram',
                        'wapp' => 'whatsapp',
                        'tg' => 'Telegram',
                        'vk' => 'Вконтакте',
                        'viber' => 'Viber',
                    ) ),
            )),




        Field::make('text', 'footer_mail', 'E-mail')
            ->set_attribute( 'placeholder', 'example@mail.com' )
            ->set_default_value( 'dinatkatch@mail.ru' )
            ->set_width(50),

        Field::make('text', 'footer_city', 'Город')
            ->set_attribute( 'placeholder', 'Калининград' )
            ->set_default_value( 'Калининград' )
            ->set_width(25),

        Field::make('text', 'footer_street', 'Улица')
            ->set_attribute( 'placeholder', 'example@mail.com' )
            ->set_default_value( 'Советский проспeкт' )
            ->set_width(25),

        Field::make('text', 'footer_house', 'Дом')
            ->set_attribute( 'placeholder', 'д. 777, корпус 69' )
            ->set_default_value( 'д.45, корпус 5' )
            ->set_width(25),

        Field::make('text', 'footer_worktime', 'Рабочее время')
            ->set_default_value( 'вс-пн выходные' )
            ->set_width(25),


        Field::make('text', 'footer_company_name', 'Название компании')
            ->set_default_value( 'English Spanish School' )
            ->set_width(25),

        Field::make('rich_text', 'footer_copyright', 'Копирайт')
            ->set_default_value( 'Все материалы данного сайта являются объектами авторского права (в том числе дизайн). Запрещается копирование, распространение
(в том числе путем копирования на другие сайты и ресурсы в Интернете) или любое иное использование информации и объектов без предварительного согласия правообладателя' )
            ->set_width(75),
    ))


    ->add_tab('Техническая Информация', array(
            Field::make('textarea', 'addones', 'Дополнительный код')
                ->set_width(100),

        )
    )



;
