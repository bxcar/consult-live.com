<?php
/**
 * Template Name: crm
 */

get_header();
?>
    <div class="block-content">
        <div class="page-content crm">
            <div class="rasdel-title">
                <div class="container"><h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="wrap1">
                <div class="wrap1-left"></div>
                <div class="wrap1-center container">
                    <?php the_field('text_1'); ?>
                    <?php if (get_field('button_ 1_text')) { ?>
                        <div class="item item1 col-xs-12 col-sm-12 col-md-12 col-lg-12 free-consul">
                            <div class="box-border">
                                <button class="btn" data-target="#myModalAuto"
                                        data-title="<?php the_field('button_ 1_text'); ?>"
                                        data-toggle="modal" type="button"><?php the_field('button_ 1_text'); ?>
                                </button>
                            </div>
                        </div>
                    <?php } ?>

                    <?php the_field('text_2'); ?>
                    <?php if (get_field('button_ 2_text')) { ?>
                        <div class="item item1 col-xs-12 col-sm-12 col-md-12 col-lg-12 free-consul">
                            <div class="box-border">
                                <button class="btn" data-target="#myModalAuto"
                                        data-title="<?php the_field('button_ 2_text'); ?>"
                                        data-toggle="modal" type="button"><?php the_field('button_ 2_text'); ?>
                                </button>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="wrap1-right"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>