<?php
/**
 * Template Name: about
 */

get_header();
?>
<style>
    .about-content .wrap1-right {
        background: url(<?php the_field('block_1_img'); ?>) -756px top no-repeat;
    }
</style>
    <div class="block-content">
        <div class="about-content">
            <div class="rasdel-title">
                <div class="container">
                    <div class="back"><a href="/"><span class="ico"><img src="<?= get_template_directory_uri();?>/i/ico-back.png"></span> <span
                                    class="text">Назад</span></a></div>
                    <h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>


            <div class="big-photo visible-xs-block"><img src="<?= get_template_directory_uri();?>/i/about-big-photo.png"/></div>
            <div class="wrap1">
                <div class="wrap1-left"></div>
                <div class="wrap1-center container">
                    <div class="row1"><?php the_field('block_1_title'); ?></div>
                    <div class="row2"><?php the_field('block_1_text_1'); ?></div>
                    <div class="row3"><?php the_field('block_1_text_2'); ?></div>
                </div>
                <div class="wrap1-right"></div>
            </div>
            <div class="wrap2">
                <div class="wrap2-left">
                    <div class=""></div>
                </div>
                <div class="wrap2-center container">
                    <div class="image"><img src="<?php the_field('block_2_img'); ?>"></div>
                    <div class="row4"><?php the_field('block_2_text_1'); ?></div>
                    <div class="row5"><?php the_field('block_2_text_2', false, false); ?></div>
                    <div class="row6"><?php the_field('block_2_text_3', false, false); ?></div>
                </div>
                <div class="wrap2-right">
                    <div class=""></div>
                </div>
            </div>
            <div class="row7">
                <div class="container"><?php the_field('block_2_text_4'); ?></div>
            </div>

            <div class="subfooter-about">
                <div class="container"><?php the_field('block_3_text_1'); ?></div>
            </div>


        </div>
    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>