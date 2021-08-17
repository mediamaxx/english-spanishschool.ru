<?php

$arResult = [
    'form_title' => $args['form_title'],
    'form_subtitle' => $args['form_subtitle'],
    'form_item' => $args['form_item'],
];

?>

<section class="record record--main">
    <div class="container">
        <div class="record__container record__container--main">
            <div class="record__cell record__cell--left">
                <div class="record__title record__title--main section-title"><?= $arResult['form_title']?></div>
                <div class="record__subtitle record__subtitle--main"><?= $arResult['form_subtitle']?></div>
                <ul class="record__descr list-reset">
                    <?php foreach ($arResult['form_item'] as $item):
                        $image = [
                            'full' => wp_get_attachment_image_url($item['form_icon'], 'full'),
                        ];
                        ?>

                        <li class="record__descr-item">
                            <span class="icon" style="background-image: url(<?= $image['full']?>);"></span>
                            <span><?= $item['form_text']?></span>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>


            <div class="record__cell record__cell--right">
                <div role="form" class="wpcf7" id="wpcf7-f78-o31" lang="ru-RU" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/#wpcf7-f78-o3" method="post" class="wpcf7-form form form__main" novalidate="novalidate">
                        <div class="form__title form__title--services">Ваши данные</div>
                        <div class="input-wrapper input-wrapper--main">
                            <span class="input-name">Имя <strong>*</strong></span>
                            <span class="wpcf7-form-control-wrap text-291">
                    <input type="text" name="text-292" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                           aria-required="true" aria-invalid="false" />
                  </span>
                        </div>
                        <div class='input-wrapper input-wrapper--main'>
                            <span class="input-name"> Номер телефона <strong>*</strong></span>
                            <span class="wpcf7-form-control-wrap tel-455">
                    <input type="tel" name="tel-456" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" /></span>
                        </div>
                        <div class="hidden-wrapper">
                            <span class="wpcf7-form-control-wrap url-47"><input type="url" name="url-47" value="" class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-url input-hidden__url" id="input-hidden__url" aria-invalid="false" /></span>
                        </div>
                        <div class="form__btn-wrapper submit-wrapper">
                            <p>
                                <input type="submit" value="Записаться" class="wpcf7-form-control wpcf7-submit input-submit request-button input-submit--main btn btn-secondary"
                                       id="sale-submit" />
                            </p>
                            <div class="check-wrapper check-wrapper--services">
                  <span class="wpcf7-form-control-wrap acceptance-728">
                      <span class="wpcf7-form-control wpcf7-acceptance">
                          <span class="wpcf7-list-item">
                              <label>
        <!--                        <input type="checkbox" name="acceptance-728" value="1" aria-invalid="false" class="input-check" />-->
                                <span class="wpcf7-list-item-label">
                                      <span class="input-check__text">Записываясь, вы подтверждаете что ознакомлены с <a href="#">политикой конфиденциальности</a> и согласны на обработку персональных данных</span>
                                </span>
                              </label>
                          </span>
                      </span>
                  </span>
                            </div>
                        </div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
