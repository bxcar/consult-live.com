<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main
 */

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from at4b.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 06:36:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Автоматизация бизнеса, автоматизация отдела продаж, Москва">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= get_template_directory_uri(); ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= get_template_directory_uri(); ?>/images/favicon-16x16.png">
    <!--    <link rel="manifest" href="site.html">-->
    <link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- /favicon -->

    <!-- Bootstrap core CSS -->
    <link href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

<!-- Modal frame -->
<div class="modal fade myModalPopap" id="myModalAuto" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <div class="tablinks">
                    <a id="tabCall" data-tab="scb_yes" class="tab-call " style="">
                        <span class="media"><span class="media-left">&nbsp;</span><span class="media-body">Заказать звонок</span></span>
                    </a>
                    <a id="tabMessage" data-tab="scb_mail" class="tab-message tab-message-active">
                        <span class="media"><span class="media-left">&nbsp;</span><span class="media-body">Отправить сообщение</span></span>
                    </a>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Автоматизировать продажи</h4>
            </div>
            <div class="modal-body" style="  ">
                <div class="" id="divCall" style="display:none;">
                    <div class="" id="formcall">
                        <form style="padding: 0;" method="post" id="formcall-form" enctype="multipart/form-data" action="/">
                            <div id="scb_action_desc">
                                <div class="scb_radio">
                                    <input id="scb_call_now" type="radio" name="gender" value="scb_call_now" checked=""
                                           style="">
                                    <label for="scb_call_now" style="">Перезвонить прямо сейчас </label>
                                    <input id="scb_call_time" type="radio" name="gender" value="scb_call_time">
                                    <label for="scb_call_time">Перезвонить в указанное время:</label>
                                </div>
                            </div>
                            <input type="hidden" name="sendto" value="<?= get_field('footer_email_for_request', 'options'); ?>">

                            <div id="scb_udobnoe_block" style="display: none; ">
                                <select class="form-control" id="phoneselectday" name="phoneselectday"
                                        style="width: 176px;">
                                    <option value="сегодня">Сегодня, <?= date('d.m.Y'); ?></option>
                                    <?php
                                    $datetime = new DateTime('tomorrow');
                                    ?>
                                    <option value="завтра">Завтра, <?php echo $datetime->format('d.m.Y') ?></option>
                                </select>
                                <span>в</span>
                                <select class="form-control" id="phoneselecttime" name="phoneselecttime"
                                        style="width: 70px;">
                                    <option value="09:00" class="show">09:00</option>
                                    <option value="09:15" class="show">09:15</option>
                                    <option value="09:30" class="show">09:30</option>
                                    <option value="09:45" class="show">09:45</option>
                                    <option value="10:00" class="show">10:00</option>
                                    <option value="10:15" class="show">10:15</option>
                                    <option value="10:30" class="show">10:30</option>
                                    <option value="10:45" class="show">10:45</option>
                                    <option value="11:00" class="show">11:00</option>
                                    <option value="11:15" class="show">11:15</option>
                                    <option value="11:30" class="show">11:30</option>
                                    <option value="11:45" class="show">11:45</option>
                                    <option value="12:00" class="show">12:00</option>
                                    <option value="12:15" class="show">12:15</option>
                                    <option value="12:30" class="show">12:30</option>
                                    <option value="12:45" class="show">12:45</option>
                                    <option value="13:00" class="show">13:00</option>
                                    <option value="13:15" class="show">13:15</option>
                                    <option value="13:30" class="show">13:30</option>
                                    <option value="13:45" class="show">13:45</option>
                                    <option value="14:00" class="show">14:00</option>
                                    <option value="14:15" class="show">14:15</option>
                                    <option value="14:30" class="show">14:30</option>
                                    <option value="14:45" class="show">14:45</option>
                                    <option value="15:00" class="show">15:00</option>
                                    <option value="15:15" class="show">15:15</option>
                                    <option value="15:30" class="show">15:30</option>
                                    <option value="15:45" class="show">15:45</option>
                                    <option value="16:00" class="show">16:00</option>
                                    <option value="16:15" class="show">16:15</option>
                                    <option value="16:30" class="show">16:30</option>
                                    <option value="16:45" class="show">16:45</option>
                                    <option value="17:00" class="show">17:00</option>
                                    <option value="17:15" class="show">17:15</option>
                                    <option value="17:30" class="show">17:30</option>
                                </select>
                            </div>

                            <div class="form-group phone">
                                <input required type="text" class="form-control " name="phone-single" id="scb_phone_input"
                                       placeholder="Ваш телефон">
                            </div>


                            <!--<div class="form-group agreement">
                                <label><input id="scb_agreement" name="agreement" value="1" checked="checked"
                                              type="checkbox"> Я прочитал и принимаю <a href="politika/index.html"
                                                                                        title="Условия политики конфиденциальности"
                                                                                        target="_blank"><b>Условия
                                            политики
                                            конфиденциальности</b></a></label>
                            </div>-->

                            <div class="div-btn-enter">
                                <input type="submit" class="btn btn-primary btn-submit" id="buttoncallme-1" value="Позвоните мне">
                            </div>
                        </form>
                    </div>


                    <!--
                    <div class="" id="formcallres">
                        <div>Спасибо, нам важно Ваше мнение!</div>
                        <div>Наши операторы обязательно перезвонят Вам!</div>
                    </div>
                    -->


                    <script>

                    </script>


                </div>

                <div class="" id="divMessage">
                    <div class="form-amocrm">
                        <form method="post" action="/" id="form-amocrm" enctype="multipart/form-data">
                            <input type="hidden" name="sendto" value="<?= get_field('footer_email_for_request', 'options'); ?>">
                            <input type="hidden" name="titlemodal" value="АВТОМАТИЗИРОВАТЬ ПРОДАЖИ">
                            <div class="form-group name">
                                <label for="formamocrmname">Имя<span class="text-danger">*</span>:</label>
                                <input required type="text" class="form-control" name="name" id="formamocrmname">
                            </div>
                            <div class="form-group phone">
                                <label for="formamocrmphone">Телефон<span class="text-danger">*</span>:</label>
                                <input required type="text" class="form-control" name="phone" id="formamocrmphone">
                            </div>
                            <div class="form-group email">
                                <label for="formamocrmemail">E-mail:</label>
                                <input type="text" class="form-control" name="email" id="formamocrmemail"
                                       data-inputmask="'alias': 'email'">
                            </div>
                            <!--<p class="texttogglefullform">Вы можете заполнить <a role="button" data-toggle="collapse"
                                                                                 href="#collapseExample"
                                                                                 aria-expanded="false"
                                                                                 aria-controls="collapseExample">расширенную
                                    форму обратной связи</a> и мы в кратчайшие сроки предоставим Вам индивидуальное
                                предложение и включим в него подарок от нашей компании.</p>-->
                            <div class="collapse" id="collapseExample">
                                <div class="form-group">
                                    <label for="formamocrmemail">Название компании:</label>
                                    <input type="text" class="form-control" name="company">
                                </div>
                                <div class="form-group">
                                    <label for="sfera">Сфера деятельности:</label>
                                    <select class="form-control" id="sfera" name="sfera">
                                        <option value="0">не выбрано</option>
                                        <option value="100">E-Commerce (розница/опт)</option>
                                        <option value="200">Недвижимость и строительство</option>
                                        <option value="300">Спорт/Красота (фитнес, йога, парикмахерская и т.п.)</option>
                                        <option value="400">Образование</option>
                                        <option value="500">Консалтинг/HR</option>
                                        <option value="600">Маркетинг/Реклама/PR/Event</option>
                                        <option value="700">Производство</option>
                                        <option value="800">Автобизнес</option>
                                        <option value="900">Медицина</option>
                                        <option value="1000">ИТ</option>
                                        <option value="1100">Другое (указать в примечании)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="formamocrmemail">Примечание:</label>
                                    <textarea class="form-control" rows="3" name="sferanote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ordercount">Примерное количество заказов (потенциальных продаж) в
                                        месяц?:</label>
                                    <select class="form-control" id="ordercount" name="ordercount">
                                        <option value="0">не выбрано</option>
                                        <option value="1">от 1 до 10</option>
                                        <option value="11">от 11 до 30</option>
                                        <option value="31">от 31 до 50</option>
                                        <option value="51">от 51 до 100</option>
                                        <option value="101">более 100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="clientscount">Примерное количество действующих клиентов (объем
                                        клиентской базы)?:</label>
                                    <select class="form-control" id="clientscount" name="clientscount">
                                        <option value="0">не выбрано</option>
                                        <option value="1">от 1 до 100</option>
                                        <option value="101">от 101 до 250</option>
                                        <option value="251">от 251 до 500</option>
                                        <option value="501">от 501 до 1000</option>
                                        <option value="1001">более 1000</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="programm">В какую программу на данный момент заносится информация о
                                        клиентах и потенциальных продажах? :</label>
                                    <select class="form-control" id="programm" name="programm">
                                        <option value="0">не выбрано</option>
                                        <option value="1">В Excel/Google Docs (+ 1С)</option>
                                        <option value="2">CRM(+1С) (указать в примечании название CRM, если своя
                                            «самописная», то так и указать)
                                        </option>
                                        <option value="3">Только 1С</option>
                                        <option value="4">Ни в какой</option>
                                        <option value="5">Другое (указать в примечании)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="formamocrmemail">Примечание:</label>
                                    <textarea class="form-control" rows="3" name="programmnote"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Основные цели автоматизации продаж? (примеры целей: Видеть всю историю
                                        общения менеджера с клиентами; Разграничить права доступа к клиентской базе;
                                        Видеть конверсию из заявок в продажи; Автоматически генерировать счета, договора
                                        и КП из CRM):</label>
                                    <textarea class="form-control" rows="3" name="target1"
                                              placeholder="Цель №1"></textarea>
                                    <textarea class="form-control" rows="3" name="target2"
                                              placeholder="Цель №2"></textarea>
                                    <textarea class="form-control" rows="3" name="target3"
                                              placeholder="Цель №3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formamocrmemail">Ваша роль в процессе автоматизации (или должность в
                                        компании):</label>
                                    <textarea class="form-control" rows="3" name="roleautomation"
                                              placeholder=""></textarea>
                                </div>
                            </div>
                            <!--<div class="form-group agreement">
                                <label><input id="formamocrmphoneagreement" name="agreement" value="1" checked="checked"
                                              type="checkbox"> Я прочитал и принимаю <a href="politika/index.html"
                                                                                        title="Условия политики конфиденциальности"
                                                                                        target="_blank"><b>Условия
                                            политики конфиденциальности</b></a></label>
                            </div>-->
                            <p class="notice"><span class="text-danger">*</span> обязательное поле</p>
                            <div class="div-btn-enter">
                                <input type="submit" class="btn btn-primary btn-submit" id="form-amocrmSubmit-1" value="Отправить">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- /Modal frame -->

<!-- Modal Search -->
<div class="modal fade myModalPopap" id="myModalSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form id="formSearch" method="GET" action="https://at4b.ru/search.html">

                    <div class="message">Введите слово для поиска</div>
                    <div class="input">
                        <input type="text" name="s">
                    </div>
                    <div class="submit">
                        <button type="submit"><img
                                    src="<?= get_template_directory_uri(); ?>/i/formSearchButtonSubmit.png"
                                    alt="Поиск"/></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Modal Search -->
<div class="wrapper">
    <div class="content">
        <!--content-->
        <header id="header">
            <div class="container-width-big">
                <div class="container-width-big-left">
                    <div class="navbar-header"><a class="navbar-brand" href="/">
                            <img src="<?php the_field('header_logo', 'option'); ?>"
                                 alt="AT – технологии автоматизации для бизнеса"/>
                        </a></div>
                </div>
                <div class="container-width-big-right">
                    <div class="header-right">
                        <button class="btn btn-search-quick" type="button" data-toggle="modal"
                                data-target="#myModalSearch"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <div class="cabinet-quick">
                            <button class="btn btn-auto" type="button" id="btn-auto-2" data-toggle="modal"
                                    data-target="#myModalAuto" data-title="Подобрать CRM">Подобрать CRM
                            </button>
                            <div class="comagic_phone" style="font-size: 22px;">8 (800) 700-42-14</div>
                        </div>
                    </div>
                </div>
                <div class="container-width-big-center container">
                    <div class="contacts">
                        <div class="comagic_phone1">
          <span class="text comagic_phone"><i class="fa fa-phone" aria-hidden="true"></i>
 <a href="tel:<?php the_field('header_phone_without_spaces', 'option'); ?>"><?php the_field('header_phone', 'option'); ?></a></span>
                        </div>
                        <div class="adress">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i>
              <?php the_field('header_address', 'option'); ?></span>
                        </div>
                        <div class="email">
                            <span><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                        href="mailto:<?php the_field('header_email', 'option'); ?>"><?php the_field('header_email', 'option'); ?></a></span>
                        </div>
                        <div class="time">
                            <span><i class="fa fa-clock-o"
                                     aria-hidden="true"></i> <?php the_field('header_shedule', 'option'); ?></span>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                                aria-expanded="false" aria-controls="navbar">
                            <!--
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                    -->
                            <img src="<?= get_template_directory_uri(); ?>/i/ico-menu.png" alt="Меню"/>
                        </button>
                        <button class="auth" type="button" data-toggle="modal" data-target="#myModalAuto"
                                data-title="Автоматизировать продажи"><i class="fa fa-envelope-open-o"
                                                                         aria-hidden="true"></i></button>
                        <a class="navbar-brand" href="/">
                            <img src="<?php the_field('header_logo', 'option'); ?>" class="hidden-xs"
                                 alt="AT – технологии автоматизации для бизнеса"/>
                            <img src="<?php the_field('header_logo_mob', 'option'); ?>" class="visible-xs-block"
                                 alt="AT – технологии автоматизации для бизнеса"/>
                        </a></div>
                    <div id="menu" class="navbar-collapse collapse">
                        <div class="nav navbar-nav navbar-right menu-top-right">
                            <div class="header-right">
                                <button class="btn btn-search-quick" type="button" data-toggle="modal"
                                        data-target="#myModalSearch"><i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                                <span class="cabinet-quick hidden-xs">
            <button class="btn btn-auto" type="button" id="btn-auto" data-toggle="modal" data-target="#myModalAuto"
                    data-title="<?php the_field('header_button_text', 'option'); ?>"><?php the_field('header_button_text', 'option'); ?></button>
                         </span></div>
                        </div>
                        <div class="search-quick-mobile">
                            <form method="get" action="https://at4b.ru/search">
                                <div class="input-group">
                                    <input type="text" name="s" class="form-control" placeholder="Найти">
                                    <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </span></div>
                                <!-- /input-group -->
                            </form>
                        </div>

                        <div id="navbar" class="navbar-collapse ">
                            <?php
                            echo str_replace(array('sub-menu', 'menu-item-has-children'), array('dropdown-menu', 'menu-item-has-children dropdown-1293'), wp_nav_menu(array(
                                    'echo' => false,
                                    'theme_location' => 'menu-1',
                                    'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
                                    'container' => 'false'
                                ))
                            );
                            ?>
                            <!--<ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="about/index.html">
                                        О компании
                                    </a>
                                </li>
                                <li class=" dropdown-1293">
                                    <a href="crm/index.html">
                                        CRM
                                        <span class="btn dropdown-toggle" data-target=".dropdown-1293"
                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
          </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="amocrm/index.html">AmoCRM</a>
                                        </li>
                                        <li class="">
                                            <a href="vnedrenie-i-nastroyka-bitrix24/index.html">Битрикс24</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" dropdown-1271">
                                    <a href="services/index.html">
                                        Отраслевые CRM
                                        <span class="btn dropdown-toggle" data-target=".dropdown-1271"
                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
          </span>
                                    </a>
                                    <ul class="dropdown-menu" style="right: auto;">
                                        <li>
                                            <div class="row" style="width: 600px;">
                                                <div class="col-md-6">
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="services/crm-dlya-agentstva-nedvizhimosti/index.html">CRM
                                                                для недвижимости</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-avtoservisa/index.html">CRM для
                                                                автосервиса</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-internet-magazina/index.html">CRM
                                                                для интернет-магазина</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-malogo-biznesa/index.html">CRM
                                                                для малого бизнеса</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-optovoj-torgovli/index.html">CRM
                                                                для оптовой торговли</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-otdela-prodazh/index.html">CRM
                                                                для отдела продаж</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-salona-krasoty/index.html">CRM
                                                                для салона красоты</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-reklamnogo-agentstva/index.html">CRM
                                                                для рекламного агентства</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-stomatologii/index.html">CRM для
                                                                стоматологии</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-proizvodstva/index.html">CRM для
                                                                производства</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-klinik/index.html">CRM для
                                                                клиник</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-kofejni/index.html">CRM для
                                                                кофейни</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="dropdown-menu">
                                                        <li class="">
                                                            <a href="services/crm-dlya-lendinga/index.html">CRM для
                                                                лендинга</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-logistiki/index.html">CRM для
                                                                транспортных компаний</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-fitnesa/index.html">CRM для
                                                                фитнес клуба</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-roznichnogo-magazina/index.html">CRM
                                                                для розничного магазина</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-shkoly-tancev/index.html">CRM для
                                                                школы танцев</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-sklada/index.html">CRM для
                                                                склада</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-call-tsentra/index.html">CRM для
                                                                call-центра</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-stroitelnykh-kompanij/index.html">CRM
                                                                для строительных компаний</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-torgovly/index.html">CRM для
                                                                торговли</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-turagentstva/index.html">CRM для
                                                                турагентства</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-yazykovoj-shkoly/index.html">CRM
                                                                для языковых школ</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="services/crm-dlya-yuridicheskoy-kompanii/index.html">CRM
                                                                для юридической компании</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" dropdown-1273">
                                    <a href="funktsii-crm/index.html">
                                        Функции CRM
                                        <span class="btn dropdown-toggle" data-target=".dropdown-1273"
                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
          </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="">
                                            <a href="avtomatizaciya-v-crm/index.html">Автоматизация бизнеса с CRM</a>
                                        </li>
                                        <li class="">
                                            <a href="integratsiya-crm/index.html">Базовые интеграции CRM</a>
                                        </li>
                                        <li class="">
                                            <a href="integratsiya-telefonii-s-crm/index.html">Интеграция CRM с
                                                телефонией</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="price/index.html">
                                        Цены
                                    </a>
                                </li>
                                <li class="">
                                    <a href="reviews/index.html">
                                        Отзывы
                                    </a>
                                </li>
                                <li class="">
                                    <a href="parthers/index.html">
                                        Партнеры
                                    </a>
                                </li>
                                <li class="">
                                    <a href="contacts/index.html">
                                        Контакты
                                    </a>
                                </li>
                            </ul>-->
                        </div><!--/.nav-collapse --> </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </header>
