<?php
/**
 * Template Name: crm-dlya-kofejni
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
                        CRM для кофейни
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-21">
            <div class="wrap1-left"></div>
            <div class="wrap1-center container">
                <div class="item item-view ">
                    <div class="view"><p>Вы владелец небольшой кофейни или сети заведений? Хотите увеличить количество клиентов, но не хватает времени на общение с текущими и потенциальными посетителями? Задумайтесь о внедрении CRM для кофейни &ndash; система отслеживает затраты и прибыль, качество работы персонала, помогает повышать лояльность.</p>

                        <h2>Трудности кофейни при отсутствии CRM</h2>

                        <p>При отсутствии четкой системы отслеживания KBI бизнеса сложно задумываться об увеличении доходов и росте компании. Владельцы кофеен зачастую вынуждены мириться с недополучением прибыли из-за нехватки времени на рассылку клиентам поздравлений с праздниками или информирование о выгодных предложениях. Отслеживать скорость реакции на звонки, вопросы в социальных сетях или на сайте не просто сложно, на написание самих ответов невозможно найти время, если компания состоит из 2-5 человек. К тому же, без внедренной CRM для кофеен трудно понять, какой источник приводит больше посетителей и в какую рекламную кампанию стоит вложиться.</p>

                        <h2>Что собой представляет CRM для кофеен?</h2>

                        <p>Система управления взаимоотношениями с клиентами &ndash; это платформа для сбора, хранения, анализа и контроля всей информации о бизнесе. Программу не нужно устанавливать на компьютер &ndash; пользуйтесь СРМ с любого устройства, имеющего выход в интернет. Настраивайте сбор и анализ показателей, которые вас интересуют, простраивайте путь взаимодействия с посетителями и автоматизируйте часть этапов. При этом вам не нужны программисты &ndash; все работает просто и интуитивно понятно.</p>

                        <h2>Преимущества внедрения CRM для кофейни</h2>

                        <p>Мы готовы вам предложить оптимальную CRM-систему для кофейни, учитывающую все потребности бизнеса: от контроля популярности меню и расчета прибыли до построения взаимодействия с клиентами и анализа работы каждого сотрудника.</p>

                        <p><strong>Избавление от рутины и экономия времени. </strong>Система позволяет настроить автоматические смс-рассылки, напоминания об оплате счетов по поставкам, запуске маркетинговой акции. Вы будете экономить время на заполнении бумаг, внесении клиентов в список и выполнении других задач.</p>

                        <p><strong>Отслеживание показателей бизнеса. </strong>В СРМ собирается вся информация, поэтому можно в два клика спрогнозировать доходы в текущем месяце, сравнить затраты на конкретный сорт кофе и прибыль от продажи напитка из него. Вы поймете:</p>

                        <ul>
                            <li>какая реклама приводит посетителей,</li>
                            <li>на что расходуются средства,</li>
                            <li>какой процент доходов тратится на зарплаты,</li>
                            <li>динамику покупательского спроса на позиции меню и др.</li>
                        </ul>

                        <p><strong>Повышение лояльности посетителей. </strong>Поздравляйте клиентов с днем рождения, приглашайте давно не заглядывавших к вам, дарите подарки постоянным посетителям &ndash; и все это путем автоматических рассылок и напоминаний без вашего непосредственного участия.</p>

                        <p>Узнайте о возможностях СРМ и стоимости внедрения CRM-системы у менеджеров по телефону. Мы предлагаем только действенные решения с учетом специфики вашего бизнеса.</p>
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