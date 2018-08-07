<?php
/**
 * Template Name: crm-dlya-shkoly-tancev
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
                        CRM система для школы танцев
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-25">
            <div class="wrap1-left"></div>
            <div class="wrap1-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Недавно открытые танцевальные школы не всегда испытывают потребности в автоматизации бизнеса. Однако, когда количество учеников растет, вести учет посещений, оплат и задолженностей с помощью таблиц становится проблематично. CRM для школы танцев &ndash; это оптимальное решение для руководителей, которые рассчитывают повысить доход и производительность администраторов. Автоматизация организационных моментов даст возможность корректно формировать группы, отмечать посещения, общаться с учениками и следить за прибылью.</p>

                            <h2>Что собой представляет CRM для школы танцев?</h2>

                            <p>СРМ &ndash; это облачный сервис, доступ к нему возможен с устройств на любой ОС, имеющих выход в интернет. После того как мы автоматизируем работу школы танцев, вы получите информационную базу с данными каждого клиента в отдельных карточках:</p>

                            <ul>
                                <li>имя, возраст, контактный телефон;</li>
                                <li>название курса и группы;</li>
                                <li>фамилия преподавателя;</li>
                                <li>история посещений;</li>
                                <li>наличие абонемента;</li>
                                <li>платежи и задолженности.</li>
                            </ul>

                            <p>Настраивайте систему с учетом своих потребностей, открыв вход в нее всем сотрудникам либо предоставляя доступ преподавателю только к той группе, которую он обучает.</p>

                            <h2>Основные функции CRM-системы для школы танцев</h2>

                            <p>СРМ продумана до мелочей &ndash; вы получаете пакет полезных опций, которыми будете пользоваться каждый день.</p>

                            <p><b>Создание курсов и групп.</b> В базу данных вносится информация не только об учениках и преподавателях, но и о занятиях. Укажите количество мест, дату начала курса, учителя и стоимость.</p>

                            <p><b>Ведение журнала посещений.</b> После автоматизации учета школы танцев отметить присутствующих и оплату за занятия можно парой кликов.</p>

                            <p><b>Анализ маркетинговых кампаний.</b> Программа фиксирует, через какие ресурсы люди находят ваши курсы. Проанализировав эти данные, можно без труда увеличить количество новых учеников, перераспределив рекламный бюджет.</p>

                            <p><b>Общение с клиентами.</b> Отсылайте ученикам сообщения непосредственно из СРМ. Также программа автоматически проинформирует о начале занятий, изменениях в графике и личных задолженностях.</p>

                            <p><b>Контроль над преподавателями.</b> Проанализировав загруженность персонала и текучку учеников, вы составите мнение о квалификации учителей и примете оптимальные решения.</p>

                            <h2>Преимущества внедрения CRM-систем</h2>

                            <p>В отличие от традиционных таблиц, CRM предоставляет массу возможностей для контроля работы коллектива и любых показателей бизнеса. Следите за денежными поступлениями, генерируйте отчеты, оценивайте эффективность рекламы и общий доход, экономя при этом время и силы. СРМ интегрируется с 1С: Бухгалтерией, IP-телефонией, сайтом, электронной почтой и социальными сетями. Это позволяет за секунды совершать операции, на выполнение которых раньше тратились часы.</p>

                            <p>Мы будем рады подробнее рассказать вам обо всех аспектах CRM, в том числе о стоимости внедрения для вашей организации. Звоните!</p>
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