<?php
/**
 * Template Name: crm-dlya-call-tsentra
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
                        CRM система для call-центра
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-18">
            <div class="wrap1-left"></div>
            <div class="wrap1-center container">
                <div class="item item-view ">
                    <div class="view"><p>В серьезных компаниях присутствует собственный колл-центр, работа которого характеризуется массой особенностей и тонкостей. Если принять решение о внедрении CRM для call-центра, то можно существенно упростить и улучшить работу этого подразделения.</p>

                        <h2>Объективные сложности для колл-центра при отсутствии CRM</h2>

                        <p>Применение CRM обеспечивает ведение полноценного учета взаимодействия между операторами и клиентами. Если не использовать CRM системы для колл-центра, то становится проблематично отследить статистику звонков, так как непонятно, выполнялся ли звонок, какие вопросы и предложения были сказаны оператором и т.д. Независимо от типа звонка (холодного, теплого, входящего, исходящего) важно отслеживать каждый из них, так как работа с клиентом проводится постоянно, превращая потенциального покупателя в постоянного. Немалой проблемой для колл-центров видится передача клиента от одного оператора другому, так как далеко не всегда находятся записи относительно &laquo;степени готовности&raquo; клиента к сотрудничеству. Установка программы CRM для колл-центров решает ряд трудностей, которые возникают в процессе работы.</p>

                        <h2>Что собой представляет CRM для колл-центра?</h2>

                        <p>CRM-система для call-центра &ndash; это специально разработанное программное обеспечение, позволяющее автоматизировать общение клиента с оператором. При помощи такой программы можно фиксировать информацию о клиенте, записывать разговор, делать пометки об особенностях работы с ним. Присутствие подобного функционала повышает качество общения между клиентом и оператором, а это приводит к увеличению лояльности клиента и росту продаж.</p>

                        <h2>Преимущества внедрения CRM для call центра</h2>

                        <p>Если рассматривать достоинства CRM-управления для call-центра, то их достаточно много:</p>

                        <ul>
                            <li>управление работой операторов в реальном времени, при этом допустимо внесение корректировок в запланированные звонки;</li>
                            <li>данные о клиенте и разговоры с ним хранятся на протяжении длительного времени;</li>
                            <li>наличие единой базы данных о клиентах, исключая повторы и дублирование;</li>
                            <li>Звонки и e-mail-рассылка могут быть запрограммированы в автоматическом режиме;</li>
                            <li>Работу сотрудников и эффективность каждого из них легко проконтролировать &ndash; достаточно только создать соответствующий отчет по необходимому срезу.</li>
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