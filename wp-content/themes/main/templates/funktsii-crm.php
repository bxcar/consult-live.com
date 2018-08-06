<?php
/**
 * Template Name: funktsii-crm
 */

get_header();
?>
    <div class="block-content">
        <div class="features-content">
            <div class="rasdel-title"><div class="container"><div class="back"><a href="/"><span class="ico"><img src="<?= get_template_directory_uri(); ?>/i/ico-back.png"></span> <span class="text">Назад</span></a></div><h1 class="margin-0"><?php the_title(); ?></h1></div></div>
            <div class="wrap1">
                <div class="wrap1-left"></div>
                <div class="wrap1-center container">
                    <div class="items">
                        <div class="row">
                            <?php
                            if(get_field('functions_crm')) {
                                foreach (get_field('functions_crm') as $item) { ?>
                                    <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="box box1" style="background: url(<?= $item['img']; ?>) left top repeat #1d2fb9;">
                                            <div class="number"><?= $item['title']; ?></div>
                                            <div class="text"><?= $item['desc']; ?></div>
                                        </div>
                                    </div>
                                <?php }
                            }?>
                        </div>
                    </div>
                </div>
                <div class="wrap1-right"><div></div></div>
            </div>


            <div class="wrap2">
                <div class="wrap2-left"></div>
                <div class="wrap2-center container">
                    <div class="head">
                        Мы создаем нашим клиентам единую технологичную<br />среду, которая автоматически:
                    </div>
                    <div class="cont">

                        <div class="vert"></div>

                        <div class="box box-left box1">
                            <div class="line"></div><div class="circle"></div>
                            <div class="number">
                                01
                                <div class="ico"><img src="<?= get_template_directory_uri(); ?>/i/features-ico-ribbon.png"></div>
                            </div>
                            <div class="text">Принимает и обрабатывает заявки клиентов, собирая данные с ваших </div>
                            <div class="punkts">
                                <div class="">
                                    <span class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Сайтов</span>
                                    <span class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Почты</span>
                                    <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Мессенджеров</span>
                                    <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Аккаунтах в соц. сетях</span>
                                    <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6">С телефонов (даже мобильных)</span>
                                </div>
                            </div>
                        </div>

                        <div class="box box-right box2">
                            <div class="line"></div><div class="circle"></div>
                            <div class="number">
                                02
                                <div class="ico"><img src="<?= get_template_directory_uri(); ?>/i/features-ico-bullhorn.png"></div>
                            </div>
                            <div class="text">Подсказывает менеджерам как построить беседу с помощью всплывающих скриптов продаж</div>
                        </div>

                        <div class="box box-left box3">
                            <div class="line"></div><div class="circle"></div>
                            <div class="number">
                                03
                                <div class="ico"><img src="<?= get_template_directory_uri(); ?>/i/features-ico-new_post.png"></div>
                            </div>
                            <div class="text">Ставит задачи соответствующим подразделениям, будь то складской работник или замерщик</div>
                        </div>

                        <div class="box box-right box4">
                            <div class="line"></div><div class="circle"></div>
                            <div class="number">
                                04
                                <div class="ico"><img src="<?= get_template_directory_uri(); ?>/i/features-ico-bell.png"></div>
                            </div>
                            <div class="text">Оповещает клиентов и сотрудников о прохождении ключевых стадий при помощи:</div>
                            <div class="punkts">
                                <div class="">
                                    <span class="col-xs-12 col-sm-4 col-md-4 col-lg-4">E-mail</span>
                                    <span class="col-xs-12 col-sm-3 col-md-3 col-lg-3">SMS</span>
                                    <span class="col-xs-12 col-sm-12 col-md-12 col-lg-12">push-уведомлений мессенджеров</span>
                                </div>
                            </div>
                        </div>

                        <div class="box box-left box5">
                            <div class="line"></div><div class="circle"></div>
                            <div class="number">
                                05
                                <div class="ico"><img src="<?= get_template_directory_uri(); ?>/i/features-ico-document.png"></div>
                            </div>
                            <div class="text">Генерирует необходимые документы и при необходимости запускает процесс их согласования</div>
                        </div>

                    </div>
                </div>
                <div class="wrap2-right"></div>
            </div>


            <div class="wrap3">
                <div class="container">
                    <div class="head">При помощи специальных<br />дополнительных настроек Вы сможете:</div>
                    <div class="head-sub"></div>
                    <div class="cont">
                        <div class="row">
                            <div class="items">
                                <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="box">
                                        <div class="ico"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                        <div class="text">Оповестить клиентов о новом товаре с помощью красочных именных E-mail рассылок</div>
                                    </div>
                                </div>
                                <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="box">
                                        <div class="ico"><i class="fa fa-gift" aria-hidden="true"></i></div>
                                        <div class="text">Поздравлять клиентов с Днем Рождения, опубликовав его на их страничке в социальной сети</div>
                                    </div>
                                </div>
                                <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="box">
                                        <div class="ico"><i class="fa fa-folder-o" aria-hidden="true"></i></div>
                                        <div class="text">В 2 клика мыши формировать счета, договора и другие документы, благодаря настроенному электронному документообороту</div>
                                    </div>
                                </div>
                                <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="box">
                                        <div class="ico"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="text">В 2 клика мыши позвонить клиенту</div>
                                    </div>
                                </div>
                                <div class="item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="box">
                                        <div class="ico"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                                        <div class="text">В 2 нажатия пальцем на экран телефона или планшета увидеть всю динамику продаж, включая прогноз будущих сделок</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>