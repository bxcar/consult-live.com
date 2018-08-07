<?php
/**
 * Template Name: crm-dlya-lendinga
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
                        CRM-система для лендинга (Landing Page)
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-22">
            <div class="wrap1-left"></div>
            <div class="wrap1-center container">
                <div class="item item-view ">
                    <div class="view"><p>CRM для Landing Page обеспечит оперативную работу с заявками и контактами, поможет спрогнозировать допродажи и увеличить средний чек. Интеграция возможна с неограниченным количеством сайтов.</p>

                        <h2>Трудности лендинга при отсутствии CRM</h2>

                        <p>Долгая реакция на заявки, потеря контактов, звонки одному клиенту от разных менеджеров &ndash; это частые проблемы, с которыми вынуждены сталкиваться владельцы промостраниц. Расходуя большие суммы на привлечение трафика на продающую страницу, приходится мириться с потерей горячих лидов из-за невнимательности сейлза или несоблюдения скрипта продаж. Теряются как потенциальные клиенты, так и постоянные покупатели.</p>

                        <h2>Что собой представляет CRM для Landing Page?</h2>

                        <p>Это система для автоматизированного сбора и регистрации заявок, отслеживания стадии переговорного процесса, помощи менеджерам и анализа отдачи от рекламной кампании. CRM для лендинга можно пользоваться с ноутбука или смартфона без установки программы и обучения персонала. Информация обо всех взаимодействиях с клиентом (по телефону, почте, в мессенджерах) отражается в карточке покупателя в СРМ.</p>

                        <h2>Преимущества внедрения CRM для Landing Page</h2>

                        <p><strong>Фиксация всех действий. </strong>CRM-система для лендинга отражает все взаимодействия менеджера и покупателя: можно послушать звонки, почитать переписку, посмотреть стадию сделки. Если сотрудник не придет на работу, вы не потеряете клиента &ndash; изучите его карточку и продолжите с прерванного момента.</p>

                        <p><strong>Автоматический контроль. </strong>Заявки, падающие в систему, регистрируются и распределяются между менеджерами, не теряясь. Можно отследить все сделки, зависшие на том или ином этапе, увидеть слабые стороны конкретного сотрудника, спрогнозировать сумму дохода на будущий месяц и не только. Система сама подскажет сейлзу, когда позвонить покупателю, выставить счет или напомнить о брошенной корзине.</p>

                        <p><strong>Увеличение чека. </strong>При работе с Landing Page без CRM-системы не обойтись компаниям, нанимающим новых сотрудников. Простроенный в программе алгоритм действий и всплывающие подсказки обеспечат закрытие сделки даже новичку. А опытные сейлзы сэкономят себе время, создав автоматические напоминания об индивидуальных предложениях, возвращении клиента из отпуска, дне рождении или другом событии.</p>

                        <p><strong>Статистика продаж в реальном режиме времени. </strong>Изучайте воронку продаж,<strong> </strong>анализируйте, сколько сделок находится на заключительном или промежуточном этапе, прогнозируйте доходы. Подключив несколько промостраниц, сравнивайте количество и качество поступающих заявок, срок принятия решения и результативность допродаж.</p>

                        <p>Узнать больше об особенностях и стоимости внедрения CRM-системы для продающей страницы вы можете, связавшись с нами по номеру 8-800-700-42-14. Сотрудники Automation Technologies готовы доработать СРМ под ваши пожелания. Автоматизация бизнеса и контроль воронки продаж увеличивают прибыль и сокращают издержки.</p>
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