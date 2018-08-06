<?php
/**
 * Template Name: price
 */

get_header();
?>
    <div class="block-content">
        <div class="price-content">
            <div class="rasdel-title">
                <div class="container">
                    <div class="back"><a href="/"><span class="ico"><img
                                        src="<?= get_template_directory_uri(); ?>/i/ico-back.png"></span> <span
                                    class="text">Назад</span></a></div>
                    <h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="container">
                <div class="items">
                    <div class="row">

                        <?php
                        if (get_field('block_1_blocks')) {
                            foreach (get_field('block_1_blocks') as $item) { ?>
                                <div class="item hit-item col-xs-12 col-md-6 col-lg-6">
                                    <div class="box box-big clearfix">
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['title'] ?>">
                                            <span class="status"><?= $item['text_above_title'] ?></span>
                                            <span class="text">
                              <span class="title"><?= $item['title'] ?></span>
                              <span class="desc"><?= $item['subtitle'] ?></span>
                          </span>
                                        </a>
                                        <div class="demo cleafix">
                                            <button class="btn" type="button" data-toggle="modal"
                                                    data-target="#myModalAuto"
                                                    data-title="<?= $item['button_text'] ?>. <?= $item['title'] ?>">
                                                <?= $item['button_text'] ?>
                                            </button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['title'] ?>">
                          <span class="foot clearfix">
                              <span class="price"><?= $item['price'] ?>
                                  <span class="price-descr"><?= $item['price_2'] ?></span>
                              </span>
                              <span class="ico"><span class="td"><i class="fa <?= $item['img'] ?>"
                                                                    aria-hidden="true"></i></span></span>
                          </span>
                                        </a>
                                    </div>
                                </div>
                            <?php }
                        } ?>


                        <div class="clearfix"></div>

                        <div class="item new-item col-xs-12 col-md-6 col-lg-6">
                            <a href="#" class="box box-big clearfix" data-toggle="modal" data-target="#myModalAuto"
                               data-title="<?= get_field('block_2_blocks')[0]['title'] ?>">
                                <span class="status"><?= get_field('block_2_blocks')[0]['text_above_title'] ?></span>
                                <span class="text">
                            <span class="title"><?= get_field('block_2_blocks')[0]['title'] ?></span>
                            <span class="desc"><?= get_field('block_2_blocks')[0]['desc'] ?></span>
                                <span class="foot clearfix">
                            <span class="price"></span>
                            <span class="ico"><span class="td"><img src="<?= get_field('block_2_blocks')[0]['img'] ?>"
                                                                    alt="<?= get_field('block_2_blocks')[0]['title'] ?>"></span></span>
                        </span>
                            </a>
                        </div>

                        <div class="item new-item col-xs-12 col-md-6 col-lg-6">
                            <a href="#" class="box box-big clearfix" data-toggle="modal" data-target="#myModalAuto"
                               data-title="<?= get_field('block_2_blocks')[1]['title'] ?>">
                                <span class="status"><?= get_field('block_2_blocks')[1]['text_above_title'] ?></span>
                                <span class="text">
                            <span class="title"><?= get_field('block_2_blocks')[1]['title'] ?></span>
                            <span class="desc"><?= get_field('block_2_blocks')[1]['desc'] ?></span>
                                <span class="foot clearfix">
                            <span class="price"></span>
                            <span class="ico"><span class="td"><img src="<?= get_field('block_2_blocks')[1]['img'] ?>"
                                                                    alt="<?= get_field('block_2_blocks')[1]['title'] ?>"></span></span>
                        </span>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <?php
                        if (get_field('block_3_blocks')) {
                            foreach (get_field('block_3_blocks') as $item) { ?>
                                <div class="item simple-item col-xs-10 col-sm-6 col-md-4 col-lg-3 col-xs-offset-1 col-sm-offset-0  col-md-offset-0 col-lg-offset-0">
                                    <div class="box">
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['desc'] ?>">
                          <span class="text">
                              <span class="title"><?= $item['desc'] ?></span>
                          </span>
                                        </a>
                                        <div class="demo cleafix">
                                            <button class="btn" type="button" data-toggle="modal"
                                                    data-target="#myModalAuto"
                                                    data-title="<?= $item['button_text'] ?>. <?= $item['desc'] ?>">
                                                <?= $item['button_text'] ?>
                                            </button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['desc'] ?>">
                          <span class="foot clearfix">
                              <span class="price"><?= $item['price'] ?>
                                  <span class="price-descr"><?= $item['price_2'] ?></span>
                              </span>
                              <?php if ( $item['img']) { ?>
                                  <span class="ico"><span class="td"><i class="fa <?= $item['img'] ?>"
                                                                        aria-hidden="true"></i></span></span>
                              <?php } else { ?>
                                  <span class="ico">
                                      <span class="td"><img src="<?= $item['img_not_font'] ?>" class="white"><img
                                                  src="<?= $item['img_not_font_hover'] ?>" class="hover"></span>
                                  </span>
                              <?php } ?>

                          </span>
                                        </a>
                                    </div>
                                </div>
                            <?php }
                        } ?>

                        <div class="item item1 col-xs-12 col-sm-12 col-md-12 col-lg-12 free-consul">
                            <div class="box-border">
                                <button class="btn" type="button" data-toggle="modal" data-target="#myModalAuto"
                                        data-title="<?php the_field('block_3_button_text'); ?>"><?php the_field('block_3_button_text'); ?>
                                </button>
                            </div>
                        </div>

                        <?php
                        if (get_field('block_4_blocks')) {
                            foreach (get_field('block_4_blocks') as $item) { ?>
                                <div class="item simple-item col-xs-10 col-sm-6 col-md-4 col-lg-3 col-xs-offset-1 col-sm-offset-0  col-md-offset-0 col-lg-offset-0">
                                    <div class="box">
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['desc'] ?>">
                          <span class="text">
                              <span class="title"><?= $item['desc'] ?></span>
                          </span>
                                        </a>
                                        <div class="demo cleafix">
                                            <button class="btn" type="button" data-toggle="modal"
                                                    data-target="#myModalAuto"
                                                    data-title="<?= $item['button_text'] ?>. <?= $item['desc'] ?>">
                                                <?= $item['button_text'] ?>
                                            </button>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#myModalAuto"
                                           data-title="<?= $item['desc'] ?>">
                          <span class="foot clearfix">
                              <span class="price"><?= $item['price'] ?>
                                  <span class="price-descr"><?= $item['price_2'] ?></span>
                              </span>
                              <?php if ( $item['img']) { ?>
                                  <span class="ico"><span class="td"><i class="fa <?= $item['img'] ?>"
                                                                        aria-hidden="true"></i></span></span>
                              <?php } else { ?>
                                  <span class="ico">
                                      <span class="td"><img src="<?= $item['img_not_font'] ?>" class="white"><img
                                                  src="<?= $item['img_not_font_hover'] ?>" class="hover"></span>
                                  </span>
                              <?php } ?>

                          </span>
                                        </a>
                                    </div>
                                </div>
                            <?php }
                        } ?>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php the_field('desc'); ?>
                        </div>
                        <div class="item item1 col-xs-12 col-sm-12 col-md-12 col-lg-12 free-consul">
                            <div class="box-border">
                                <button class="btn" type="button" data-toggle="modal" data-target="#myModalAuto"
                                        data-title="<?php the_field('block_4_button_text'); ?>"><?php the_field('block_4_button_text'); ?>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix" ></div>
    </div><!-- /.content -->
<?php get_footer(); ?>