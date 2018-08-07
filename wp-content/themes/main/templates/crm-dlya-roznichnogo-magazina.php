<?php
/**
 * Template Name: crm-dlya-roznichnogo-magazina
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
                        CRM система для розничного магазина
                    </h1></div>
            </div>
        </div>
        <div class="wrap1 service-page service-24">
            <div class="wrap1-left"></div>
            <div class="wrap1-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Продажа товаров в розницу &ndash; традиционный бизнес, приносящий серьезный доход при условии грамотной организации. Комплексные решения по автоматизации помогают повысить рентабельность торговой точки, сократив издержки. AT предлагает установить CRM-систему для розничного магазина с учетом специфики реализуемого товара (строительные материалы, шубы, канцтовары, техника и проч.), рассчитанную на результативное выполнение коммерческих задач с минимальными затратами.</p>

                            <h2>Что собой представляет CRM для розничного магазина?</h2>

                            <p>СРМ &ndash; это система для управления взаимоотношениями с клиентами торговой точки. Она позволяет вести карточки по каждому клиенту для анализа его предпочтений и последующей рассылки персональных предложений, запускать маркетинговые акции и анализировать спрос на конкретные наименования. Используя универсальные комплексы для &laquo;классической&raquo; розницы или CRM, созданную под ваши пожелания, вы сможете без труда прогнозировать прибыль и повышать лояльность целевой аудитории за счет грамотного сегментирования.</p>

                            <h2>Основные функции CRM-системы для розничного магазина</h2>

                            <p>Связанная с обслуживанием обширной клиентуры коммерческая деятельность требует продуманного подхода к анализу рынка и формированию маркетинговой политики. Внедрение CRM-системы позволяет анализировать уровень покупательской активности и эффективности РК, собирать и систематизировать сведения о клиенте. Также вы сможете:</p>

                            <ul>
                                <li>оценивать востребованность представленной продукции;</li>
                                <li>планировать рекламные акции и делать автоматические рассылки через SMS или e-mail;</li>
                                <li>формировать программу лояльности и управлять ею;</li>
                                <li>оптимизировать расходы на обслуживание;</li>
                                <li>формировать отчеты всех видов и степеней детализации;</li>
                                <li>прогнозировать продажи на основе собранной статистики;</li>
                                <li>упростить постановку задач руководством и контроль исполнения.</li>
                            </ul>

                            <h2>Преимущества внедрения CRM-систем</h2>

                            <p>Цель торговли &ndash; рост доходов за счет увеличения количества покупателей и повышения LTV. Для достижения цели путем автоматизации управления не требуется серьезных вложений. Разовые инвестиции в пределах стоимости внедрения CRM-системы легко окупаются за счет роста прибыли. Розничный магазин с СРМ отличают:</p>

                            <ul>
                                <li>успешный маркетинг;</li>
                                <li>востребованный ассортимент;</li>
                                <li>оперативный документооборот;</li>
                                <li>увеличение среднего чека и рост вторичных продаж;</li>
                                <li>улучшение взаимодействия меду подразделениями за счет интеграции.</li>
                            </ul>

                            <p>Профессионально спроектированная и настроенная CRM-система для магазина &ndash; действенный инструмент для повышения покупательской активности, лояльности целевой аудитории, облегчения работы руководителей и оперативного получения данных. Постоянно анализируя потребительский спрос, действия персонала и эффект от маркетинговых ходов, несложно добиться оптимизации затрат, рационального формирования ассортимента и усовершенствования сервиса. Воспользуйтесь проверенным решением, звоните и заказывайте наши услуги по внедрению и настройке!</p>
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