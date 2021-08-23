<?php

$arResult = [
    'service_background_image' => $args['service_background_image'],
    'title' => $args['title'],
    'subtitle' => $args['subtitle'],
    'min_price' => $args['min_price'],
    'callback_title' => $args['callback_title'],
    'callback_subtitle' => $args['callback_subtitle'],
    'service_front_image' => $args['service_front_image'],
    'service_front_image_mobile' => $args['service_front_image_mobile'],


];

$image = [
    'full_background' => wp_get_attachment_image_url($item['service_background_image'], 'full'),
    'full' => wp_get_attachment_image_url($item['service_front_image'], 'full'),
    'full_mobile' => wp_get_attachment_image_url($item['service_front_image_mobile'], 'full'),
];

?>
<?php if ($arResult['title']||$arResult['service_background_image']||$arResult['min_price']||$arResult['callback_title']||$arResult['subtitle']||$arResult['callback_subtitle']||$arResult['service_front_image']||$arResult['service_front_image_mobile']):?>
    <section class="hero-services" style="background-image: url(<?= $image['full_background'] ?>);">
        <div class="container">
            <?php if ($arResult['title']||$arResult['subtitle']||$arResult['min_price']):?>
                <div class="hero-services__content">
                    <div class="hero-services__title"><?= $arResult['title'] ?></div>
                    <div class="hero-services__text"><?= $arResult['subtitle'] ?></div>
                    <div class="hero-services__price">от <?= $arResult['min_price'] ?> руб.</div>
                </div>
            <?php endif;?>
            <?php if ($arResult['callback_title']||$arResult['callback_subtitle']):?>
                <div class="hero-services__callback">
                    <?php if ($arResult['callback_title']):?>
                        <div class="hero-services__callback-title"><?= $arResult['callback_title'] ?></div>
                    <?php endif;?>
                    <div class="hero-services__mobile-container">
                        <?php if ($arResult['callback_subtitle']):?>
                            <div class="hero-services__callback-subtitle"><?= $arResult['callback_subtitle'] ?></div>
                        <?php endif;?>

                        <div role="form" class="wpcf7" id="wpcf7-f78-o33" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f78-o3" method="post" class="wpcf7-form form form__services-hero" novalidate="novalidate">
                                <div class='input-wrapper input-wrapper--services-hero'>
                                    <span class="input-name"> Номер телефона <strong>*</strong></span>
                                    <span class="wpcf7-form-control-wrap tel-455">
                  <input type="tel" name="tel-458" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" /></span>
                                    <div class="submit-wrapper">
                                        <p>
                                            <input type="submit" value="Записаться" class="wpcf7-form-control wpcf7-submit input-submit input-submit--services-hero request-button btn btn-primary"
                                                   id="sale-submit3" />
                                        </p>
                                    </div>
                                </div>
                                <div class="check-wrapper check-wrapper--services-hero">
                <span class="wpcf7-form-control-wrap acceptance-728">
                    <span class="wpcf7-form-control wpcf7-acceptance">
                        <span class="wpcf7-list-item">
                            <label>
      <!--                        <input type="checkbox" name="acceptance-728" value="1" aria-invalid="false" class="input-check" />-->
                              <span class="wpcf7-list-item-label">
                                    <span class="input-check__text">Записываясь, вы подтверждаете что ознакомлены с <a href="">политикой конфиденциальности</a> и согласны на обработку персональных данных</span>
                              </span>
                            </label>
                        </span>
                    </span>
                </span>
                                </div>
                                <div class="hidden-wrapper">
                                    <span class="wpcf7-form-control-wrap url-47"><input type="url" name="url-47" value="" class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-url input-hidden__url" id="input-hidden__url" aria-invalid="false" /></span>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
        <?php if ($image['full']||$image['full_mobile']):?>
            <div class="hero-services__front-image">
                <?php if ($image['full']):?>
                    <img class="hero-services__front-image--md" src="<?= $image['full'] ?>" alt="Языковая школа в Калининграде">
                <?php endif;?>
                <?php if ($image['full_mobile']):?>
                    <img class="hero-services__front-image--xs" src="<?= $image['full_mobile'] ?>" alt="Языковая школа в Калининграде">
                <?php endif;?>
            </div>
        <?php endif;?>
    </section>
<?php endif;?>