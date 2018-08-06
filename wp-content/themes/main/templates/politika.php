<?php
/**
 * Template Name: politika
 */

get_header();
?>
    <div class="block-content">
        <div class="page-content politika">
            <div class="rasdel-title">
                <div class="container"><h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="wrap1">
                <div class="wrap1-left"></div>
                <div class="wrap1-center container">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
                <div class="wrap1-right"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>