<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package main
 */

get_header();
?>
<div class="slider-main2">
    <div class="row1">
        <div class="text1">
            <div class="container">
                <div class="r1">Технологии автоматизации</div>
                <div class="r2">для бизнеса</div>
            </div>
        </div>
        <div class="text2">
            <div class="container">
                <div class="line"></div>
                Быстрое внедрение отраслевых решений под ключ!
            </div>
        </div>
    </div>
    <div class="box-info">
        <div class="title">Пакет "Базовая автоматизация"</div>
        <div class="desc">CRM, телефония, сайт, почта, календарь</div>
        <div class="price-row">
            <div class="price">35 000 <i class="fa fa-rub" aria-hidden="true"></i></div>
            <a href="#" class="btn  " data-toggle="modal" data-target="#myModalAuto"
               data-title='Пакет "Базовая автоматизация"'>Получить консультацию</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="sliders-main mini" style="height: 390px;background-color: #fefefe;">
    <div class="container" style="padding-top: 70px;">
        <div class="box-info"
             style="color:#000;padding-bottom: 50px;padding-top: 0px;padding-left: 0;padding-right: 0;">
            <div class="text"
                 style="font-size: 36px;line-height: 44px;color: #000000;margin-top: 20px;font-family: 'ProximaNova';text-transform: uppercase;font-weight: bold;padding-bottom: 30px">
                <?php the_field('block_1_title'); ?>
            </div>
            <div class="desc_left" style="float:left;width:50%;font-size: 18px;"><?php the_field('block_1_left_desc'); ?>
            </div>
            <div class="desc"
                 style="float:right;width:50%;color: #000;padding-left: 30px;font-size: 22px;padding-top:0"><?php the_field('block_1_right_desc'); ?>
            </div>
            <div class="price-row" style="padding-left: 30px;float: right;width: 50%;">
                <div class="price"><?php the_field('block_1_price'); ?> <i class="fa fa-rub" aria-hidden="true"></i></div>
                <a href="#" class="btn  " data-toggle="modal" style="font-size: 22px;margin-top:-7px;"
                   data-target="#myModalAuto" data-title='Пакет "Базовая автоматизация"'><?php the_field('block_1_button_text'); ?></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="how_we_are_working-main">
    <div class="">
        <div class="container">
            <div class="row2"><h1><?php the_field('block_2_title_1'); ?></h1></div>
            <div class="row1"><?php the_field('block_2_subtitle_1'); ?></div>
            <div class="row2"><?php the_field('block_2_title_2'); ?></div>
            <div class="row3"><?php the_field('block_2_subtitle_2'); ?></div>
        </div>
        <div class="wrap1">
            <div class="wrap1-left"></div>
            <div class="wrap1-center container">
                <div class="list-box">
                    <?php
                    $i = 1;
                    if(get_field('block_2_blocks')) {
                        foreach (get_field('block_2_blocks') as $item) { ?>
                            <div class="box box<?= $i ?>" style="background: url(<?= $item['img']; ?>) left top repeat #304c70;">
                                <div class="number">0<?= $i ?> <span class="title"><?= $item['title']; ?></span></div>
                                <div class="line"></div>
                                <div class="text"><?= $item['desc']; ?></div>
                            </div>
                        <?php $i++; }
                    }?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="wrap1-right"></div>
        </div>
    </div>
</div>


<div class="features-main">
    <div class="container">
        <div class="head"><?php the_field('block_3_title'); ?></div>
        <div class="row">
            <?php
            $i = 1;
            if(get_field('block_3_blocks')) {
                foreach (get_field('block_3_blocks') as $item) { ?>
                    <div class="box box<?= $i ?>">
                        <div class="ico"><img
                                    src="<?= $item['img']; ?>"
                                    alt="<?= $item['title']; ?>"></div>
                        <div class="title"><?= $item['title']; ?></div>
                        <div class="text"><?= $item['desc']; ?></div>
                    </div>
                    <?php $i++; }
            }?>
        </div>
    </div>
</div>


<div class="time_cost_of-main" style="background: url(<?php the_field('block_4_img'); ?>) center top no-repeat;">
    <div class="container">
        <div class="row">
            <?php
            $i = 1;
            if(get_field('block_4_blocks')) {
                foreach (get_field('block_4_blocks') as $item) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box box<?= $i ?>">
                        <div class="row1"><?= $item['title_1']; ?></div>
                        <div class="row2"><?= $item['title_2']; ?></div>
                        <div class="row3"><?= $item['desc']; ?>
                        </div>
                    </div>
                    <?php $i++; }
            }?>
        </div>
    </div>
</div>


<div class="results-main">
    <div class="container">
        <div class="row1"><?php the_field('block_5_title_1'); ?></div>
        <div class="row2"><?php the_field('block_5_title_2'); ?>
        </div>
        <div class="cont">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <ul>
                        <?php
                        $i = 1;
                        if(get_field('block_5_blocks_1')) {
                            foreach (get_field('block_5_blocks_1') as $item) { ?>
                                <li>
                                    <div class="bullet"></div>
                                    <div class="media">
                                        <div class="media-left">0<?= $i ?></div>
                                        <div class="media-body"><?= $item['text']; ?></div>
                                    </div>
                                </li>
                                <?php $i++; }
                        }?>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <ul>
                        <?php
                        $i = 4;
                        if(get_field('block_5_blocks_2')) {
                            foreach (get_field('block_5_blocks_2') as $item) { ?>
                                <li>
                                    <div class="bullet"></div>
                                    <div class="media">
                                        <div class="media-left">0<?= $i ?></div>
                                        <div class="media-body"><?= $item['text']; ?></div>
                                    </div>
                                </li>
                                <?php $i++; }
                        }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sliders-main-v3"
     style="height: 460px; background:url(<?php the_field('block_6_img_background'); ?>) center top no-repeat;">
    <div class="container">
        <div class="blackbox" style="float:none; background:none; width: 100%; text-align: center; ">
            <div class="videobox" style="margin-left: auto; margin-right: auto; float:none;"><a class="iframe"
                                                                                                href="https://www.youtube.com/embed/gX02uNbS8OM?autoplay=1&amp;rel=0"><img
                            src="<?php the_field('block_6_img'); ?>"
                            alt="Смотреть видео"></a></div>
        </div>
    </div>
</div>

<div class="slider-main2">
    <div class="video">
        <a href="<?php the_field('block_6_video_link'); ?>" class="iframe"><img
                    src="<?= get_template_directory_uri(); ?>/i/video-main-img.png"
                    alt="Посмотрите, как работает АТ"/></a>
    </div>
</div>
<div class="clearfix"></div>
</div><!-- /.content -->
<?php get_footer(); ?>