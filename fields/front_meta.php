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
                        ->set_default_value('Талантливые преподаватели')
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

                            Field::make( 'text', 'teach_position', 'Должность' )
                                ->set_default_value('Директор, преподаватель английского и испанского')
                                ->set_width(100),

                            Field::make( 'text', 'teach_exp', 'Стаж' )
                                ->set_default_value('5 лет')
                                ->set_attribute( 'placeholder', '4 года // 7 лет и т.д.' )
                                ->set_width(100),

                            Field::make( 'rich_text', 'teach_desc', 'Небольшое описание' )
                                ->set_default_value('Разнообразный и богатый опыт говорит нам, что современная методология разработки позволяет выполнить важные задания по разработке первоочередных требований. Идейные соображения высшего порядка, а также сложившаяся структура организации создаёт предпосылки для первоочередных требований. Внезапно, действия представителей оппозиции лишь добавляют фракционных разногласий и ассоциативно распределены по отраслям.')
                                ->set_width(100),

                        )),




                ))


                ->add_fields('section_record', 'Форма записи', array(

                    Field::make( 'rich_text', 'form_title', 'Заголовок' )
                        ->set_default_value('Запишитесь на <span>бесплатное пробное занятие</span> с директором')
                        ->set_width(100),

                    Field::make( 'rich_text', 'form_subtitle', 'Заголовок' )
                        ->set_default_value('На занятиях мы познакомимся и покажем как происходят занятия.
                    Вы узнаете свой уровень языка и получите скидку')
                        ->set_width(100),


                    Field::make('complex', 'form_item', 'Языки (низ)')
                        ->set_max(3)
                        ->add_fields(array(
                            Field::make( 'image', 'form_icon', 'Иконка' )
                                ->set_width(100),

                            Field::make( 'textarea', 'form_text', 'Текст' )
                                ->set_default_value('Обучение:
                Skype или очно')
                                ->set_width(100),

                        )),




                ))


                ->add_fields('section_record_mobile', 'Форма записи (для телефонов))', array(

                    Field::make( 'rich_text', 'form_title_mobile', 'Заголовок' )
                        ->set_default_value('Пройдите <strong>бесплатный</strong> вводный урок с директором')
                        ->set_width(100),

                    Field::make( 'rich_text', 'form_subtitle_mobile', 'Заголовок' )
                        ->set_default_value('Мы готовы ответить на все ваши вопросы по обучению. Мы можем встретиться с вами онлайн или вживую, как вам удобно')
                        ->set_width(100),

                    Field::make( 'rich_text', 'form_btn_text', 'Текст кнопки' )
                        ->set_default_value('Записаться')
                        ->set_width(50),

                    Field::make( 'text', 'form_btn_link', 'Ссылка кнопки' )
                        ->set_default_value('#modal-record')
                        ->set_width(50),




                ))


                ->add_fields('section_lessons', 'Секция Уроки', array(

                    Field::make( 'text', 'lessons_title', 'Заголовок' )
                        ->set_default_value('Как проходят наши уроки')
                        ->set_width(100),

                    Field::make( 'image', 'lessons_image', 'Картинка' )
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_text', 'Текст' )
                        ->set_default_value('Предварительные выводы неутешительны: высокое качество позиционных исследований создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса соответствующих условий активизации. Как уже неоднократно упомянуто, сделанные на базе интернет-аналитики выводы, вне зависимости от их уровня, должны быть призваны к ответу. Но высокое качество позиционных исследований требует определения и уточнения существующих финансовых и административных условий. С другой стороны, социально-экономическое развитие обеспечивает актуальность кластеризации усилий. Повседневная практика показывает, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании ')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_link_sertificates', 'Ссылка на сертификаты' )
                        ->set_default_value('#')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_text_sertificates', 'Ссылка на сертификаты' )
                        ->set_default_value('Сертификаты')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_link_about', 'Ссылка на подробности о компании' )
                        ->set_default_value('#')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_text_about', 'Ссылка на подробности о компании' )
                        ->set_default_value('Подробнее о компании')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_text_socials', 'Подпись для соцсетей' )
                        ->set_default_value('Подписывайтесь на соцсети: ')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_inst_link', 'Ссылка Instagram' )
                        ->set_default_value('#')
                        ->set_width(100),

                    Field::make( 'rich_text', 'lessons_vk_link', 'Ссылка VK' )
                        ->set_default_value('#')
                        ->set_width(100),


                    Field::make('complex', 'lessons_gallery', 'Галлерея')
                        ->add_fields(array(
                            Field::make( 'image', 'gallery_image', 'Изображение' )
                                ->set_width(100),

                        )),

                    Field::make( 'rich_text', 'lessons_text_mobile', 'Текст (для телефонов)' )
                        ->set_default_value('В процессе обучения всегда участвует команда, состоящая из преподавателя и ученика. Именно командный подход приносит наилучшие результаты')
                        ->set_width(100),


                ))


                ->add_fields('section_reviews', 'Секция отзывов', array(

                    Field::make( 'text', 'review_title', 'Заголовок' )
                        ->set_default_value('Отзывы учеников')
                        ->set_width(100),


                    Field::make('complex', 'reviews', 'Отзывы')
                        ->add_fields(array(
                            Field::make( 'image', 'review_image', 'Фото' )
                                ->set_width(100),

                            Field::make( 'text', 'review_name', 'Фамилия и Имя отзыва' )
                                ->set_default_value('Екатерина Макарова')
                                ->set_width(100),

                            Field::make('complex', 'review_item', 'Достижения')
                                ->add_fields(array(
                                    Field::make( 'text', 'review_achievement', 'Достижение' )
                                        ->set_default_value('Окончила курс В1 (испанский язык)')
                                        ->set_width(100),

                                )),

                            Field::make( 'rich_text', 'review_text', 'Текст отзыва' )
                                ->set_default_value('Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически')
                                ->set_width(100),

                        )),






                    Field::make( 'text', 'review_btn_text', 'Кнопка "Все Отзывы"' )
                        ->set_default_value('Читать все отзывы')
                        ->set_width(100),

                    Field::make( 'text', 'review_btn_link', 'Ссылка на все отзывы' )
                        ->set_default_value('#')
                        ->set_width(100),


                    Field::make( 'text', 'comment_btn_text', 'Кнопка "Оставить отзыв"' )
                        ->set_default_value('Оставить свой отзыв')
                        ->set_width(100),

                    Field::make( 'text', 'comment_btn_link', 'Ссылка на комментарий' )
                        ->set_default_value('#')
                        ->set_width(100),


                ))


                ->add_fields('section_information', 'Секция с информацией', array(

                    Field::make( 'text', 'info_title', 'Заголовок' )
                        ->set_default_value('Узнайте подробнее о каждом направлении школы')
                        ->set_width(100),

                    Field::make( 'rich_text', 'info_desc', 'Заголовок' )
                        ->set_default_value('Лишь реплицированные с зарубежных источников, современные исследования набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы. Лишь реплицированные с зарубежных источников, современные исследования ограничены исключительно образом мышления')
                        ->set_width(100),

                    Field::make( 'rich_text', 'info_desc_mobile', 'Заголовок' )
                        ->set_default_value('Разнообразный и богатый опыт говорит нам, что современная методология разработки позволяет выполнить важные задания по разработке первоочередных требований')
                        ->set_width(100),

                    Field::make('complex', 'info_item', 'Информация о курсах')
                        ->add_fields(array(
                            Field::make( 'image', 'info_image', 'Фото' )
                                ->set_width(100),

                            Field::make( 'image', 'info_image_mobile', 'Фото (для телефонов)' )
                                ->set_width(100),

                            Field::make( 'text', 'info_link', 'Ссылка на информацию' )
                                ->set_default_value('#')
                                ->set_width(100),

                            Field::make( 'select', 'info_lang', 'Язык' )
                                ->set_width(10)
                                ->set_options( $lang )
                                ->set_default_value( 'english' ),

                            Field::make( 'text', 'info_min_price', 'Минимальная цена' )
                                ->set_default_value('4 500')
                                ->set_width(100),

                        )),

                ))


                ->add_fields('section_form', 'Секция с формой', array(

                    Field::make( 'rich_text', 'form_title', 'Заголовок' )
                        ->set_default_value('Запишитесь на <span>бесплатное</span> <br>пробное занятие с директором')
                        ->set_width(100),

                    Field::make('complex', 'form_list', 'Список для новичков')
                        ->add_fields(array(
                            Field::make( 'text', 'form_list_item', 'Ссылка на информацию' )
                                ->set_default_value('#')
                                ->set_width(100),
                        )),

                    Field::make( 'text', 'form_link', 'Ссылка на форму' )
                        ->set_default_value('#modal-record')
                        ->set_width(100),

                    Field::make( 'select', 'form_lang', 'Язык' )
                        ->set_width(10)
                        ->set_options( $lang )
                        ->set_default_value( 'english' ),

                    Field::make( 'image', 'form_lang_image', 'Иконка флага (английский/испанский)' )
                        ->set_width(100),

                    Field::make( 'rich_text', 'form_politics', 'Политика (для телефонов)' )
                        ->set_default_value('Записываясь, вы подтверждаете что ознакомлены с <a href="#">политикой конфиденциальности</a> и согласны на обработку персональных данных')
                        ->set_width(100),
                ))


                ->add_fields('seo_section', 'Секция с СЕО', array(

                    Field::make( 'text', 'seo_title', 'Заголовок' )
                        ->set_default_value('СЕО БЛОК')
                        ->set_width(100),

                    Field::make( 'rich_text', 'seo_text', 'СЕО текст' )
                        ->set_default_value('Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически.
                <br>
                <br>
                Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь')
                        ->set_width(100),


                ))

        ));
