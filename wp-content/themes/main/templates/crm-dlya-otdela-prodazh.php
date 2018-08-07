<?php
/**
 * Template Name: crm-dlya-otdela-prodazh
 */

get_header();
?>
    <div class="block-content">
        <div class="uslugi-content">
            <div class="rasdel-title">
                <div class="container">
                    <div class="back"><a href="/"><span class="ico">
          <img src="<?= get_template_directory_uri(); ?>/i/ico-back.png">
          </span> <span class="text">Назад</span></a></div>
                    <h1 class="margin-0">
                        CRM для отдела продаж
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-8">
            <div class="wrap1-left"></div>
            <div class="wrap1-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-5"><img alt="" class="img-responsive" src="<?= get_template_directory_uri(); ?>/images/crm-dlya-otdela-prodazh/crm-dlya-otdela-prodazh.png" /></div>

                        <div class="col-sm-7">
                            <ul>
                                <li>Автоматическое создание контакта и потенциальной сделки в воронке продаж по телефоному звонку, из корзины магазина, формы обратной связи и почты</li>
                                <li>История любых коммуникаций с клиентом и список его покупок/интересов</li>
                                <li>Автоматический анализ цепочки, приведшей клиента к покупке</li>
                                <li>Автоматический RFM-анализ клиентской базы</li>
                                <li>Рассылки клиентам (SMS, E-Mail)</li>
                                <li>Ведение клиента на протяжении всего существования компании (повторные продажи)</li>
                                <li>Гибкая маршрутизация заявок и звонков, с учетом времени и мобильности</li>
                                <li>Автоматический сбор заказов через соц. сети</li>
                                <li>Интеграция складских программ, 1С, служб доставки и многое другое</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="wrap1-center container">
                <div class="item item-view ">
                    <div class="view"></div>
                </div>

            </div>
            <div class="wrap1-center form-wrap">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-lg-10">
                        <div class="" id="serviceForm">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2">
                                <div class="h2 title">Помощь и 14 дней бесплатно</div>
                                <div class="form-services">
                                    <form method="post" enctype="multipart/form-data" action="/" id="form-services">
                                        <input type="hidden" name="titlemodal" value="Помощь и 14 дней бесплатно">
                                        <div class="form-group name">
                                            <label for="formservicename">Имя<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="formservicename">
                                        </div>
                                        <div class="form-group phone">
                                            <label for="formservicephone">Телефон<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone" id="formservicephone">
                                        </div>
                                        <div class="form-group email">
                                            <label for="formserviceemail">E-mail</label>
                                            <input type="text" class="form-control" name="email" id="formserviceemail" data-inputmask="'alias': 'email'">
                                        </div>
                                        <input type="hidden" name="sendto" value="<?= get_field('footer_email_for_request', 'options'); ?>">
                                        <p class="notice"><span class="text-danger">*</span> обязательное поле</p>
                                        <div class="form-group div-btn-enter">
                                            <input type="submit" class="btn btn-block btn-lg btn-warning btn-submit" id="form-serviceSubmit" value="Попробовать бесплатно">
                                        </div>
                                        <div class="form-group agreement">
                                            <label>
                                                <input required id="formserviceagreement" name="agreement" value="1" checked="checked" type="checkbox">
                                                Я прочитал и принимаю <a href="<?= get_permalink(291)?>" title="Условия политики конфиденциальности" target="_blank">Условия политики конфиденциальности</a></label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>      </div>
            </div>
            <div class="wrap1-right"></div>
            <div class="clearfix"></div>
        </div>
    </div>              </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>