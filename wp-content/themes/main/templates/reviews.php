<?php
/**
 * Template Name: reviews
 */

get_header();
?>
    <div class="block-content">
        <div class="reviews-content">
            <div class="rasdel-title"><div class="container"><div class="back"><a href="/"><span class="ico"><img src="<?= get_template_directory_uri(); ?>/i/ico-back.png"></span> <span class="text">Назад</span></a></div><h1 class="margin-0"><?php the_title(); ?></h1></div></div>
            <div class="wrap1">
                <div class="wrap1-left"></div>
                <div class="wrap1-center container">
                    <div class="items">

                        <?php
                        if(get_field('reviews')) {
                            foreach (get_field('reviews') as $item) { ?>
                                <div class="item">
                                    <div class="box">
                                        <div class="logo">
                                            <div class="td">
                                                <?php if( $item['link']) { ?>
                                                    <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>">
                                                        <img src="<?= $item['img']; ?>">
                                                    </a>
                                                <?php } else { ?>
                                                    <a>
                                                        <img src="<?= $item['img']; ?>">
                                                    </a>
                                                <?php } ?>

                                            </div>
                                        </div>
                                        <div class="title"><?= $item['title']; ?></div>
                                        <div class="text"><?= $item['desc']; ?></div>
                                        <div class="name"><?= $item['name']; ?></div>
                                        <div class="position"><?= $item['position']; ?></div>
                                    </div>
                                </div>
                            <?php }
                        }?>

                    </div>
                </div>
                <div class="wrap1-right"></div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>