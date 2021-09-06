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
    ->or_where( 'post_template', '=', 'templates/page_news.php' )
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


        Field::make('rich_text', 'anons', 'Текст для анонса записи')
            ->set_default_value('Задача организации, в особенности же разбавленное изрядной долей эмпатии, рациональное мышление влечет за собой процесс внедрения и модернизации позиций.')
            ->set_width(50),

        Field::make('rich_text', 'anons_text_2', 'Текст для анонса записи')
            ->set_default_value('Задача организации, в особенности же разбавленное изрядной долей эмпатии, рациональное мышление влечет за собой процесс внедрения и модернизации позиций.')
            ->set_width(50),


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


            ->add_fields('services', 'Перечень услуг', array(

                Field::make( 'text', 'serv_title', 'Заголовок' )
                    ->set_default_value('Мы предлагаем обучение у нас')
                    ->set_width(100),

            ))


            ->add_fields('services_promo', 'Промо текст', array(

                Field::make( 'text', 'promo_title', 'Заголовок' )
                    ->set_default_value('Испанский в нашей школе — это')
                    ->set_width(50),

                Field::make('image', 'promo_background_image', 'Фоновая фотография')
                    ->set_width(50),

                Field::make( 'text', 'promo_subtitle', 'Подзаголовок' )
                    ->set_default_value('Принимая во внимание показатели успешности, высокое качество позиционных исследований обеспечивает актуальность дальнейших направлений развития!')
                    ->set_width(50),

                Field::make( 'rich_text', 'promo_text', 'Текст' )
                    ->set_default_value('Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий.

                        Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещ. Таким образом, новая модель организационной деятельности прекрасно ')
                    ->set_width(50),

                Field::make('complex', 'promo_adv', 'Что вы получите')
                    ->set_max(4)
                    ->add_fields(array(

                        Field::make('image', 'promo_icon', 'Иконка')
                            ->set_width(50),

                        Field::make( 'text', 'promo_advantages', 'Преимущества' )
                            ->set_default_value('Улыбки и счатье')
                            ->set_width(50),

                    )),



            ))


            ->add_fields('services_price', 'Цены', array(

                Field::make( 'text', 'price_title', 'Заголовок' )
                    ->set_default_value('Стоимость обучения')
                    ->set_width(50),

                Field::make( 'rich_text', 'price_subtitle', 'Подзаголовок' )
                    ->set_default_value('Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает актуальность приоритизации разума над эмоциями. Банальные, но неопровержимые выводы, а также активно развивающиеся страны третьего мира, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут представлены в исключительно положительном свете. С другой стороны, начало повседневной работы по формированию позиции способствует повышению качества направлений прогрессивного развития.')
                    ->set_width(50),


                Field::make('complex', 'price_item', 'Услуга - цена')
                    ->set_max(4)
                    ->add_fields(array(

                        Field::make('text', 'price_item_title', 'Заголовок элемента')
                            ->set_default_value('бесплатный урок')
                            ->set_width(50),

                        Field::make( 'text', 'price_item_minutes', 'Количество минут' )
                            ->set_default_value('40')
                            ->set_width(50),

                        Field::make( 'text', 'price_item_lessons', 'Количество занятий в месяц' )
                            ->set_default_value('1')
                            ->set_width(50),

                        Field::make( 'text', 'price_item_value', 'Цена в месяц' )
                            ->set_default_value('4 500 руб./мес')
                            ->set_width(50),

                        Field::make( 'text', 'price_item_btn_text', 'Текст кнопки' )
                            ->set_default_value('Записаться')
                            ->set_width(50),

                    )),



            ))


            ->add_fields('services_progress', 'Прогресс', array(

                Field::make( 'text', 'progress_title', 'Заголовок' )
                    ->set_default_value('Ваш прогресс после курса')
                    ->set_width(50),

                Field::make( 'rich_text', 'progress_subtitle', 'Подзаголовок' )
                    ->set_default_value('Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров')
                    ->set_width(50),


                Field::make('complex', 'progress_item', 'Чему вы научитесь')
                    ->set_max(3)
                    ->add_fields(array(

                        Field::make('image', 'progress_image', 'Иконка')
                            ->set_width(50),

                        Field::make('text', 'progress_item_title', 'Преимущество')
                            ->set_default_value('Увеличите словарный запас не менее, чем на 4000 слов')
                            ->set_width(50),



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


            ->add_fields('services_record_bottom', 'Есть ли вопросы', array(

                Field::make( 'rich_text', 'record_title', 'Заголовок' )
                    ->set_default_value('У Вас есть <span class="highlight">вопросы</span> по обучению ?')
                    ->set_width(100),

                Field::make( 'rich_text', 'record_subtitle', 'Подзаголовок' )
                    ->set_default_value('Оставьте заявку и мы перезвоним Вам в блищайшее время!
                    Или оставте свой вопрос, нажав на кнопку “Оставить вопрос” и мы ответим в течение 12 часов. ')
                    ->set_width(100),

                Field::make( 'rich_text', 'record_subtitle_mobile', 'Заголовок' )
                    ->set_default_value('Оставьте заявку на <strong>бесплатный пробный урок</strong> английского языка
                    Мы видим все заявки и обязательно с вами свяжемся')
                    ->set_width(100),

                Field::make( 'text', 'record_socials_title', 'Заголовок для соцсетей' )
                    ->set_default_value('Вы можете также написать нам в чатменеджерах:')
                    ->set_width(100),

                Field::make( 'text', 'record_socials_whatsapp', 'Ссылка Whatsapp' )
                    ->set_default_value('https://www.whatsapp.com/')
                    ->set_width(30),

                Field::make( 'text', 'record_socials_tg', 'Ссылка Telegram' )
                    ->set_default_value('https://web.telegram.org/')
                    ->set_width(30),

                Field::make( 'text', 'record_socials_viber', 'Ссылка Viber' )
                    ->set_default_value('https://www.viber.com/')
                    ->set_width(30),


                Field::make('complex', 'record_btn', 'Галлерея')
                    ->set_max(2)
                    ->add_fields(array(
                        Field::make( 'text', 'btn_link', 'Ссылка кнопки' )
                            ->set_default_value('#modal-record')
                            ->set_width(30),

                        Field::make( 'text', 'btn_text', 'Текст кнопки' )
                            ->set_default_value('Заказать звонок')
                            ->set_width(30),

                    )),

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
            ->set_default_value('236040')
            ->set_width(50),

        Field::make('text', 'country', 'Страна')
            ->set_default_value('Российская Федерация')
            ->set_width(50),

        Field::make('text', 'city', 'Город')
            ->set_default_value('г. Калининград')
            ->set_width(50),

        Field::make('text', 'street', 'Улица')
            ->set_default_value('Советский проспект')
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

        Field::make('text', 'rec_link', 'Ссылка на форму')
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







