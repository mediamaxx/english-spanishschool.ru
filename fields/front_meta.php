<?php

  use Carbon_Fields\Container;
  use Carbon_Fields\Field;

  $lang = array(
    'english'  => 'Английский язык',
    'spanish'    => 'Испанский язык',
  );

  $age = array(
    'adult'    => 'Для взрослых',
    'child'    => 'Для детей',
  );

  Container::make( 'post_meta', 'Настройки страницы' )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->or_where( 'post_template', '=', 'front-page.php' )
        ->or_where( 'post_template', '=', 'templates/single-simple.php' )
        ->or_where( 'post_template', '=', 'singular.php' )
        ->or_where( 'post_template', '=', 'page.php' )
        ->add_fields( array(
            Field::make( 'complex', 'front_page', ' ' )
                ->setup_labels( array(
                    'plural_name' => 'Секции',
                    'singular_name' => 'секцию',
                ))
                ->add_fields('hero_features', 'Баннер', array(

                    Field::make( 'text', 'title', 'Заголовок' )
                        ->set_default_value('Языковая школа <br>в Калининграде')
                        ->set_width(100),

                    Field::make( 'rich_text', 'title_text', 'Предаголовок' )
                        ->set_default_value('Преподаем английский и испанский языки уже <span>более 5 лет</span>')
                        ->set_width(100),

                    Field::make('complex', 'list', 'Преимущества')
                        ->set_max(3)
                        ->add_fields(array(
                            Field::make('image', 'icon', 'Иконка')
                                ->set_width(40),
                            Field::make('textarea', 'text', 'Описание')
                                ->set_default_value('Дипломированные преподаватели лингвисты с международными сертификатами')
                                ->set_width(60)
                        )),

                    Field::make( 'text', 'title_mobile', 'Заголовок (для телефонов)' )
                        ->set_default_value('Обучение английскому и испанскому языку в Калининграде')
                        ->set_width(100),

                    Field::make( 'image', 'title_image', 'Фото на бэкграунде' )
                        ->set_width(50),

                    Field::make( 'image', 'title_image_mobile', 'Фото на бэкграунде (для телефонов)' )
                        ->set_width(50),
                   
                ))


                ->add_fields('banner_product', 'Секция с продукцией', array(

                    Field::make( 'text', 'banner_title', 'Заголовок' )
                        ->set_default_value('Какой язык вы будете изучать ?')
                        ->set_width(100),

                    Field::make( 'rich_text', 'banner_subtitle', 'Заголовок' )
                        ->set_default_value('Лишь реплицированные с зарубежных источников, современные исследования набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы. Лишь реплицированные с зарубежных источников, современные исследования ограничены исключительно образом мышления')
                        ->set_width(100),

                    Field::make('complex', 'tabs_top', 'Языки (верх)')
                        ->set_max(3)
                        ->add_fields(array(
                            Field::make( 'select', 'tabs_lang', 'Язык' )
                                ->set_width(10)
                                ->set_options( $lang )
                                ->set_default_value( 'english' ),

                            Field::make( 'text', 'min_price', 'Минимальная цена' )
                                ->set_default_value('4 500')
                                ->set_width(90),

                            Field::make( 'text', 'tabs_link', 'Ссылка' )
                                ->set_default_value('#')
                                ->set_width(100),


                        )),

                    Field::make('complex', 'tabs_bottom', 'Языки (низ)')
                        ->set_max(3)
                        ->add_fields(array(
                            Field::make( 'select', 'tabs_lang', 'Язык' )
                                ->set_width(10)
                                ->set_options( $lang )
                                ->set_default_value( 'english' ),

                            Field::make( 'image', 'tabs_image', 'Изображение' )
                                ->set_width(90),

                            Field::make( 'text', 'tabs_link', 'Ссылка' )
                                ->set_default_value('#')
                                ->set_width(90),

                            Field::make( 'select', 'tabs_age', 'Возраст' )
                                ->set_width(10)
                                ->set_options( $age )
                                ->set_default_value( 'child' ),


                        )),




                ))


                ->add_fields('section_teachers', 'Слайдер с преподавателями', array(

                    Field::make( 'text', 'teachers_title', 'Заголовок' )
                        ->set_default_value('Какой язык вы будете изучать ?')
                        ->set_width(100),


                    Field::make('complex', 'teachers', 'Языки (низ)')
                        ->set_max(3)
                        ->add_fields(array(
                            Field::make( 'image', 'teach_image', 'Фотография преподавателя' )
                                ->set_width(100),

                            Field::make( 'text', 'teach_surname', 'Фамилия' )
                                ->set_default_value('Ткач')
                                ->set_width(100),

                            Field::make( 'text', 'teach_name', 'Имя и Отчество' )
                                ->set_default_value('Дина Игоревна')
                                ->set_width(100),

                            Field::make( 'rich_text', 'teach_desc', 'Небольше описание' )
                                ->set_default_value('Разнообразный и богатый опыт говорит нам, что современная методология разработки позволяет выполнить важные задания по разработке первоочередных требований. Идейные соображения высшего порядка, а также сложившаяся структура организации создаёт предпосылки для первоочередных требований. Внезапно, действия представителей оппозиции лишь добавляют фракционных разногласий и ассоциативно распределены по отраслям.')
                                ->set_width(100),

                        )),




                ))

        ));
