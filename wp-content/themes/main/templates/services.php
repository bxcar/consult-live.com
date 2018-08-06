<?php
/**
 * Template Name: services
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
                    <h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="items"><pre style="display:none">100</pre>
                <div class="container">
                    <div class="row">
                        <?php
                        if (get_field('services')) {
                            foreach (get_field('services') as $item) { ?>
                                <div class="item col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <?php if($item['blue_overlay']) { ?>
                                    <div class="box" style="background-blend-mode: overlay; background: url(<?= $item['img']; ?>) left top repeat #1d2fb9;">
                                    <?php } else { ?>
                                        <div class="box" style="background: url(<?= $item['img']; ?>) left top repeat #1d2fb9;">
                                    <?php } ?>
                                        <div class="text"><?= $item['title']; ?></div>
                                        <div class="more"><a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"><?= $item['link']['title']; ?></a></div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="wrap1 experts">
                <div class="wrap1-left">
                    <div class=""></div>
                </div>
                <div class="wrap1-center container">
                    <div class="row">
                        <div class="item item1 col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="box">
                                <div class="head">Мы эксперты</div>
                                <div class="cont">
                                    <div class="row">                 <ul class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                            <li>АВТОМАТИЗАЦИИ ПРОДАЖ</li>
                                            <li>АВТОМАТИЗАЦИИ СОПРОВОЖДЕНИЯ/СЕРВИСА</li>
                                        </ul>
                                        <ul class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                            <li>АВТОМАТИЗАЦИИ МАРКЕТИНГА</li>
                                            <li>АВТОМАТИЗАЦИИ ПОДДЕРЖКИ ПРОДАЖ</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item2 col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
                    </div>
                </div>
                <div class="wrap1-right">
                    <div class=""></div>
                </div>
            </div>
            <div class="wrap2">
                <div class="wrap2-left"></div>
                <div class="wrap2-center container">
                    <div class="head">
                        <div class="hidden-xs">Мы подбираем инструменты <span>на самом деле</span><br>
                            нужные нашим клиентам</div>
                        <div class="visible-xs-block">Мы подбираем инструменты<br />
                            <span>на самом деле</span><br>
                            нужные нашим клиентам</div>
                    </div>
                    <div class="cont">
                        <ul class="row">
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Лучшие CRM системы</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Email рассылки</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Онлайн чаты</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Сквозная бизнес-аналитика</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Сегментация клиентов</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Обратный звонок</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Call tracking</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Документооборот</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Работа с соц.сетями</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Электронные Скрипты продаж</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Ведение проектов</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Онлайн бронирование</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">SMS рассылки</li>
                        </ul>
                    </div>
                </div>
                <div class="wrap2-right"></div>
            </div>
            <div class="wrap3">
                <div class="wrap3-left"></div>
                <div class="wrap3-center container">
                    <div class="head">Идеальная телефония существенная составляющая идеальной автоматизации, доверьте этот вопрос нам:</div>
                    <div class="cont">
                        <ul>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Облачная АТС с настройкой под бизнес-логику Заказчика</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Междугородняя и Международная связь</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Организация call-центра</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Телефонные номера</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Cлужебная мобильная связь</li>
                            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">Телекоммуникационная аппаратура</li>
                        </ul>
                    </div>
                </div>
                <div class="wrap3-right"></div>
            </div>
            <div class="wrap2">
                <div class="wrap2-left"></div>
                <div class="wrap2-center container">
                    <div class="cont">
                        <p>В представлении неподготовленных людей CRM-системы находят применение только в интернет-магазинах, но на практике они могут использоваться и в иных направлениях бизнеса. Отраслевые CRM системы горизонтального характера помогают в решении вопросов, направленных на развитие бизнеса, связанных с аналитикой и контролем работы сотрудников. Если говорить о сфере применения отраслевых CRM-решений, то это любая отрасль бизнеса, в которой обязательно присутствует непосредственное общение менеджера с клиентом.</p>
                        <p>Каталог отраслевых направлений для CRM-систем amoCRM и Битрикс24 постоянно расширяется, так как целесообразность продукта проверена на практике разнообразными предприятиями торговли и предоставления услуг. Мы поможем подобрать удобный вариант конфигурации для предприятия любого уровня, в том числе:</p>
                        <ul>
                            <li>агентствам недвижимости;</li>
                            <li>медицинским учреждениям;</li>
                            <li>автосервисам и ремонтным предприятиям;</li>
                            <li>банкам и финансовым компаниям;</li>
                            <li>интернет-магазинам (выгодно показывает себя в магазинах с широким ассортиментом);</li>
                            <li>транспортно-логистическим компаниям.</li>
                        </ul>
                        <p>Причем в каждом конкретном случае мы подбираем CRM, разрабатываем разнообразные дополнения и надстройки, помогающие вести успешный бизнес.</p>
                    </div>
                </div>
                <div class="wrap2-right"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>