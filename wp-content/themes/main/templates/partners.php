<?php
/**
 * Template Name: partners
 */

get_header();
?>
    <div class="block-content">
        <div class="parthers-content">
            <div class="rasdel-title">
                <div class="container"><h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="cont">
                <div class="items">

                    <?php
                    if(get_field('partners')) {
                        foreach (get_field('partners') as $item) { ?>
                            <div class="item">
                                <div class="logo">
                                    <div class="td">
                                        <img src="<?= $item['img']; ?>">
                                    </div>
                                </div>
                                <div class="url"><!--noindex--><a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>" rel="nofollow"><?= $item['link']['title']; ?></a>
                                    <!--/noindex--></div>
                            </div>
                            <?php }
                    }?>


                    <div class="item item-last hidden-xs">
                        <div class="box">
                            <div class="td">
                                <img src="<?= get_template_directory_uri(); ?>/i/parthers-arrow-up.png">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>