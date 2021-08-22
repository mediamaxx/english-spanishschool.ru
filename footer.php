    <?php

        get_template_part('template-parts/footer/template');

    ?>


    <div class="hide" id="toTop">
        <svg>
            <use xlink:href="./spritemap.svg#sprite-top"></use>
        </svg>
    </div>


    <?php

        wp_footer();

    ?>



    <div class="modal" id="modal-record">
        <div class="modal__container">
            <div class="modal__title">Оставьте заявку</div>
            <div class="modal__subtitle">И&nbsp;наш менеджер свяжется с&nbsp;Вами для уточнения информации</div>
            <div role="form" class="wpcf7" id="wpcf7-f78-o3" lang="ru-RU" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/#wpcf7-f78-o3" method="post" class="wpcf7-form form" novalidate="novalidate">
                    <div class="input-wrapper">
                        <span class="input-name">Имя <strong>*</strong></span>
                        <span class="wpcf7-form-control-wrap text-291">
                <input type="text" name="text-291" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                       aria-required="true" aria-invalid="false" />
            </span>
                    </div>
                    <div class='input-wrapper'>
                        <span class="input-name"> Номер телефона <strong>*</strong></span>
                        <span class="wpcf7-form-control-wrap tel-455">
            <input type="tel" name="tel-455" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-text" aria-required="true" aria-invalid="false" /></span>
                    </div>
                    <div class="check-wrapper">
          <span class="wpcf7-form-control-wrap acceptance-728">
              <span class="wpcf7-form-control wpcf7-acceptance">
                  <span class="wpcf7-list-item">
                      <label>
<!--                        <input type="checkbox" name="acceptance-728" value="1" aria-invalid="false" class="input-check" />-->
                        <span class="wpcf7-list-item-label">
                              <span class="input-check__text">Записываясь, вы подтверждаете что ознакомлены с политикой конфиденциальности и согласны на обработку персональных данных</span>
                        </span>
                      </label>
                  </span>
              </span>
          </span>
                    </div>
                    <div class="hidden-wrapper">
                        <span class="wpcf7-form-control-wrap url-47"><input type="url" name="url-47" value="" class="wpcf7-form-control wpcf7-text wpcf7-url wpcf7-validates-as-url input-hidden__url" id="input-hidden__url" aria-invalid="false" /></span>
                    </div>
                    <div class="submit-wrapper">
                        <p>
                            <input type="submit" value="Оставить заявку" class="wpcf7-form-control wpcf7-submit input-submit request-button btn btn-primary"
                                   id="sale-submit" />
                        </p>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="modal-question">
        <div class="modal__container">
            <div class="modal__title">Оставьте свой вопрос</div>
            <div class="modal__subtitle">И&nbsp;наш менеджер свяжется с&nbsp;Вами для уточнения информации</div>
            <div role="form" class="wpcf7" id="wpcf7-f78-o31" lang="ru-RU" dir="ltr">
                <div class="screen-reader-response"></div>
                <form action="/#wpcf7-f78-o3" method="post" class="wpcf7-form form" novalidate="novalidate">
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
                    <div class='input-wrapper'>
                        <span class="input-name input-name--textarea"> Вопрос <strong>*</strong></span>
                        <span class="wpcf7-form-control-wrap tel-455">
            <textarea name="message-323" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required input-textarea" aria-required="true" aria-invalid="false"></textarea></span>
                    </div>
                    <div class="check-wrapper">
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
                    <div class="submit-wrapper">
                        <p>
                            <input type="submit" value="Оставить заявку" class="wpcf7-form-control wpcf7-submit input-submit request-button btn btn-primary"
                                   id="sale-submit" />
                        </p>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-thanks">
        <div class="modal__container">

            <div class="icon">
                <svg>
                    <use xlink:href="./spritemap.svg#sprite-check"></use>
                </svg>
            </div>
            <div class="modal__title">Спасибо</div>
            <div class="modal__subtitle">Ваша заявка принята!
                В ближайшее время с Вами свяжется наш специалист</div>
        </div>
    </div>



</body>
</html>