<?php
/**
 * Template Name: crm-dlya-fitnesa
 */

get_header();
?>
    <div class="block-content">
        <div class="uslugi-content">
            <div class="rasdel-title">
                <div class="container">
                    <div class="back"><a href="../index.html"><span class="ico">
          <img src="<?= get_template_directory_uri(); ?>/i/ico-back.png">
          </span> <span class="text">Назад</span></a></div>
                    <h1 class="margin-0">
                        CRM для фитнес клуба
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-19">
            <div class="wrap1-left"></div>
            <div class="wrap1-center container">
                <div class="item item-view ">
                    <div class="view"><p>Количество соотечественников, которые принимают решение относительно занятий спортом, растет каждый день, как и количество спортивных или фитнес- клубов. Для систематизации работы таких заведений рекомендуется позаботиться об установке в них современных CRM.</p>

                        <h2>Сложности для фитнес- клуба при отсутствии CRM</h2>

                        <p>Как показывает практика, в фитнес-клубах присутствует серьезная проблема с организацией, так как количество клиентов большое, тренеров не так много, а администратору приходится вести учет в блокноте или просто в файле Excel. При этом возможны накладки с персональными и групповыми тренировками, а это приводит к тому, что клиент разворачивается и уходит. Существенным момент &ndash; информирование посетителей об акциях и скидках. Администрация самостоятельно звонит или отправляет сообщения, а это непрактично.</p>

                        <h2>Что собой представляет CRM для фитнес-клуба?</h2>

                        <p>CRM система для фитнес-клуба &ndash; это специальный программный продукт, оптимизирующий работу персонала и налаживающий взаимодействие с клиентами. Уникальность &nbsp;работы такой системы &ndash; это перспективы реализовать маркетинговые задумки на практике. Например, подарить человеку талон на одно бесплатное занятие, после которого предложить абонемент и напоминать о тренировке при помощи смс-рассылки или напоминания на e-mail. Если говорить простыми словами, то CRM представляет собой полноценный планировщик заданий с возможностью аналитики и контроля работы сотрудников. При помощи такого ПО уточняется количество часов или тренировок, проведенных тренерами.</p>

                        <h2>Преимущества внедрения CRM для фитнес-клуба</h2>

                        <p>Применение CRM в фитнес-клубах упрощает работу таких организаций, обеспечив при этом постоянный контроль. Среди достоинств такого подхода выделяются:</p>

                        <ul>
                            <li>онлайн календарь для записи клиентов на групповые тренировки или индивидуальные занятия;</li>
                            <li>постоянная работа с клиентами, напоминая об акционных предложениях и тренировках;</li>
                            <li>контроль работы сотрудников и выполнение ими обязанностей согласно штатному расписанию, проверка выполнения поставленных планов и т.д.;</li>
                            <li>аналитика работы отдельных тренеров и всего фитнес-клуба в целом &ndash; это позволит принять меры относительно изменения графика выхода сотрудников.</li>
                        </ul>
                    </div>
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
                                        </div >
                                    </form >
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