<?php

//Template Name: Страница отзывов

get_header();
?>

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

<section class="main-block">
    <div class="container">
        <div class="main-block__title section-title">Отзывы о нас</div>
        <div class="main-block__inner">
            <div class="main-block__list list-reset">


                <div class="main-block__item">
                    <div class="main-block__card">
                        <div class="main-block__media main-block__photo">
                            <a href="./img/review1.png" class="main-block__link"><img src="./img/review1.png" alt=""></a>
                        </div>
                        <div class="main-block__subtitle">Екатерина Макарова</div>
                        <ul class="main-block__features">
                            <li class="main-block__features-item">Окончила курс В1 (испанский язык)</li>
                            <li class="main-block__features-item">Поступила в Univercitad de Valencia</li>
                        </ul>
                        <div class="reviews__body">
                            <p>Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически</p>
                        </div>
                    </div>
                </div>


                <div class="main-block__item">
                    <div class="main-block__card">
                        <div class="main-block__media">
                            <a href="https://www.youtube.com/embed/jid2A7ldc_8?autoplay=1" class="main-block__link main-block__video">
                                <img src="./img/review1.png" alt="">
                                <button class="play" aria-label="Посмотреть видео"></button>
                            </a>
                        </div>
                        <div class="main-block__subtitle">Екатерина Макарова</div>
                        <ul class="main-block__features">
                            <li class="main-block__features-item">Окончила курс В1 (испанский язык)</li>
                            <li class="main-block__features-item">Поступила в Univercitad de Valencia</li>
                        </ul>
                        <div class="reviews__body">
                            <p>Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически</p>
                        </div>
                    </div>
                </div>
                <div class="main-block__item">
                    <div class="main-block__card main-block__card--no-media">
                        <div class="main-block__subtitle">Екатерина Макарова</div>
                        <ul class="main-block__features">
                            <li class="main-block__features-item">Окончила курс В1 (испанский язык)</li>
                            <li class="main-block__features-item">Поступила в Univercitad de Valencia</li>
                        </ul>
                        <div class="reviews__body">
                            <p>Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически</p>
                        </div>
                    </div>
                </div>
                <div class="main-block__item">
                    <div class="main-block__card">
                        <div class="main-block__media main-block__photo">
                            <a href="./img/review1.png" class="main-block__link"><img src="./img/review1.png" alt=""></a>
                        </div>
                        <div class="main-block__subtitle">Екатерина Макарова</div>
                        <ul class="main-block__features">
                            <li class="main-block__features-item">Окончила курс В1 (испанский язык)</li>
                            <li class="main-block__features-item">Поступила в Univercitad de Valencia</li>
                        </ul>
                        <div class="reviews__body">
                            <p>Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <div class="wp-pagenavi">
                    <a href="http://example.com/" >←</a>
                    <a href="http://example.com/" class="page" title="1">1</a>
                    <a href="http://example.com/" class="page" title="2">2</a>
                    <span class="current">3</span>
                    <a href="http://example.com/?paged=4" class="page" title="4">4</a>
                    <a href="http://example.com/?paged=4" >→</a>
                </div>
                <span class="extend">...</span>
                <a href="http://example.com/?paged=4" class="last" title="Last &raquo;">100</a>
            </div>
        </div>
    </div>
</section>

<div class="record record__page-reviews">
    <div class="container">
        <div class="record__container">
            <div class="record__title">Оставьте свой отзыв о нашей работе</div>
            <div role="form" class="wpcf7" id="wpcf7-f78-o35" lang="ru-RU" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/#wpcf7-f78-o3" method="post" class="wpcf7-form form form__review" novalidate="novalidate">
                    <div class="form__cell-left">
                        <div class="input-wrapper">
                            <span class="input-name">Имя <strong>*</strong></span>
                            <span class="wpcf7-form-control-wrap text-291">
                    <input type="text" name="text-292" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                           aria-required="true" aria-invalid="false" />
                </span>
                        </div>
                        <div class='input-wrapper'>
                            <span class="input-name"> Номер телефона <strong>*</strong></span>
                            <span class="wpcf7-form-control-wrap tel-455">
                  <input type="tel" name="tel-456" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" /></span>
                        </div>
                        <div class="input-wrapper">
                            <input type="file" class="input-file">
                            <div class="dragndrop">
                <span class="icon">
                  <svg>
                      <use xlink:href="<?php _assets();?>/spritemap.svg#sprite-dnd"></use>
                  </svg>
                </span>
                                <span>Загрузить изображение</span>
                            </div>
                        </div>
                    </div>
                    <div class="form__cell-right">
                        <div class='input-wrapper input-wrapper--reviews'>
                            <span class="input-name input-name--textarea"> Текст отзыва</span>
                            <span class="wpcf7-form-control-wrap tel-455">
                <textarea name="message-323" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-textarea input-textarea--reviews" aria-required="true" aria-invalid="false"></textarea></span>
                        </div>
                        <div class="submit-wrapper submit-wrapper--reviews">
                            <p>
                                <input type="submit" value="Оставить заявку" class="wpcf7-form-control wpcf7-submit input-submit input-submit--review request-button btn btn-secondary"
                                       id="sale-submit" />
                            </p>
                            <div class="check-wrapper check-wrapper--review">
                  <span class="wpcf7-form-control-wrap acceptance-728">
                      <span class="wpcf7-form-control wpcf7-acceptance">
                          <span class="wpcf7-list-item">
                              <label>
                            </div>
                        </div>
                        <div class="hidden-wrapper">
                            <span class="wpcf7-form-control-wrap url-47"><input type="url" name="url-47" value="" class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-url input-hidden__url" id="input-hidden__url" aria-invalid="false" /></span>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>




<?php

get_footer();