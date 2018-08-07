<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package main
 */

?>
<footer id="footer">

    <script type="text/javascript">
        var ff34 =
            '<div class="form-call">' +
            '    <div class="container">' +
            '        <div class="text"><?php the_field("footer_form_title", "option"); ?></div>' +
            '        <div class="row">' +
            '            <form method="POST" action="/" id="form-call-footer">' +
            '                <input type="hidden" name="template" value="db_contacts/send-feedback">' +
            '                <input type="hidden" name="sendto" value="<?= get_field("footer_email_for_request", "options"); ?>">' +
            '                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">' +
            '                    <div class="form-group name">' +
            '                        <input type="text" name="name" class="form-control" placeholder="Ваше имя" id="form-call-name">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">' +
            '                    <div class="form-group phone">' +
            '                        <input type="text" name="phone" class="form-control" placeholder="Телефон" id="form-call-phone">' +
            '                    </div>' +
            '                </div>' +
            '                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">' +
            '                    <div class="form-group email">' +
            '                        <input type="email" name="email" class="form-control" placeholder="E-mail" id="form-call-email" >' +
            '                    </div>' +
            '                </div>' +
            '                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">' +
            '                    <div class="form-group agreement">' +
            '                        <input id="footer-form-submit" type="submit" class="btn" value="Получить консультацию">' +
            '                    </div>' +
            '                </div>' +
            '                <div style="display: none;" class="col-xs-12 col-sm-8 col-md-6 col-lg-5 col-lg-offset-7 col-md-offset-6 col-sm-offset-4">' +
            '                    <div class="form-group agreement">' +
            '                        <label><input id="form-call-agreement" name="agreement" value="1" checked="checked" type="checkbox"> Я прочитал и принимаю <a href="/politika/" title="Условия политики конфиденциальности" target="_blank"><b>Условия политики конфиденциальности</b></a></label>' +
            '                    </div>' +
            '                </div>' +
            '            </form>' +
            '        </div>' +
            '    </div>' +
            '</div>';
        document.write(ff34);
    </script>
    <div class="socio">
        <div class="container-width-big">
            <div class="socio-left">
                <div class="copyright"><?php the_field("footer_copyright", "option"); ?>
                </div>
                <div class="social-links">
          <span class="icons">                         <span class="item vk"> <span class="fa-stack fa-lg"><a
                              href=<?php the_field("footer_vk_link", "option"); ?>" target="_blank" rel="nofollow"> <i
                              class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-vk fa-stack-1x fa-inverse"></i> </a></span> </span>
                        <span class="item facebook"> <span class="fa-stack fa-lg"><a
                                        href="<?php the_field("footer_fb_link", "option"); ?>" target="_blank" rel="nofollow"> <i
                                            class="fa fa-circle fa-stack-2x"></i> <i
                                            class="fa fa-facebook fa-stack-1x fa-inverse"></i> </a></span> </span>
                      </span>
                </div>
            </div>
            <div class="socio-center">

                <div class="menu-bottom">
                    <?php
                    echo str_replace(array('', ''), array('', ''), wp_nav_menu(array(
                            'echo' => false,
                            'theme_location' => 'menu-footer',
                            'items_wrap' => '<ul>%3$s</ul>',
                            'container' => 'false'
                        ))
                    );
                    ?>
                </div>
            </div>
            <div class="socio-right">
                <div class="adress">
          <span>
<?php the_field("footer_address", "option"); ?></span>
                </div>
                <div class="email">
                    <span><a href="mailto:<?php the_field("footer_email", "option"); ?>"><?php the_field("footer_email", "option"); ?></a></span>
                </div>
                <div class="comagic_phone1">
                    <span class="text comagic_phone"><a href="tel:<?php the_field("footer_phone_without_sapces", "option"); ?>"><?php the_field("footer_phone", "option"); ?></a></span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="counters">
    </div>
</footer>
</div><!-- .wrapper -->

<link href="<?= get_template_directory_uri(); ?>/css/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/css/jasny-bootstrap.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="<?= get_template_directory_uri(); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]>
<script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?= get_template_directory_uri(); ?>/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?= get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<script src="<?= get_template_directory_uri(); ?>/js/ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= get_template_directory_uri(); ?>/js/jquery.min.html"><\/script>')</script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery-migrate-git.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?= get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>

<script src="<?= get_template_directory_uri(); ?>/js/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<link rel="stylesheet" type="text/css"
      href="<?= get_template_directory_uri(); ?>/js/jquery.fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
<script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/js/jquery.fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/js/jquery.fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<!--<script type="text/javascript">
    var __cs = __cs || [];
    __cs.push(["setCsAccount", "etQBkgYGGaCgELDn6A4MfSwgdhUWgzny"]);
    __cs.push(["setCsHost", "//server.comagic.ru/comagic"]);
</script>
<script type="text/javascript" async src="<? /*= get_template_directory_uri(); */ ?>/js/app.comagic.ru/static/cs.min.js"></script>-->
<?php wp_footer(); ?>
<?php  include_once "js/static-form-ajax.php" ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123265896-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123265896-1');
</script>
<script>
    jQuery('#navbar > ul > .menu-item-has-children > a').append('<span class="btn dropdown-toggle" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span>');
    jQuery('#navbar > ul > .menu-item-has-children > a').on('click', ".dropdown-toggle", function(e) {
        e.preventDefault();
        jQuery(this).parent().parent().toggleClass('open');
    });
</script>
<style>
    .navbar-nav>li>a {
        position: relative;
        z-index: 1;
    }

    .navbar-nav>li>a .btn {
        position: relative;
        z-index: 2;
    }
</style>
</body>

<!-- Mirrored from at4b.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Aug 2018 06:36:52 GMT -->
</html>