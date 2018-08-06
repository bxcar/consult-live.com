<?php
/**
 * Template Name: contacts
 */

get_header();
?>
    <div class="block-content">
        <div class="contacts-content">
            <div class="rasdel-title">
                <div class="container">
                    <div class="back"><a href="/"><span class="ico"><img src="<?= get_template_directory_uri(); ?>/i/ico-back.png"></span> <span
                                    class="text">Назад</span></a></div>
                    <h1 class="margin-0"><?php the_title(); ?></h1></div>
            </div>
            <div class="cont">
                <div class="container" id="divover">
                    <div class="row row1">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="h"><?php the_field('string_1_left'); ?></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="t"><?php the_field('string_1_right'); ?></div>
                        </div>
                    </div>
                    <div class="row row2 row-phone">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="h"><?php the_field('string_2_left'); ?></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="t comagic_phone"><?php the_field('string_2_right'); ?></div>
                        </div>
                    </div>
                    <div class="row row3 row-email">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="h"><?php the_field('string_3_left'); ?></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="t"><?php the_field('string_3_right'); ?></div>
                        </div>
                    </div>
                    <div class="row row4 row-time">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="h"><?php the_field('string_4_left'); ?></div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="t"><?php the_field('string_4_right'); ?></div>
                        </div>
                    </div>
                    <div class="row row5 row-feedback">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a class="btn" href="#footer">Обратная связь</a>
                        </div>
                    </div>
                </div>
                <div class="map" id="map"></div>
            </div>
        </div>


        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;key=AIzaSyCgd3__6nS5x485vxpnje4jT2vGHHibS4I"></script>
        <script type="text/javascript">
            //$(function(){

            function initialize() {

                // Create an array of styles.
                var styles = [
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 13
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#144b53"
                            },
                            {
                                "lightness": 14
                            },
                            {
                                "weight": 1.4
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "hue": "#ffd200"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#08304b"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#0c4152"
                            },
                            {
                                "lightness": 5
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#0b434f"
                            },
                            {
                                "lightness": 25
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#0b3d51"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#146474"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#021019"
                            }
                        ]
                    }
                ];


                // Create a new StyledMapType object, passing it the array of styles,
                // as well as the name to be displayed on the map type control.
                var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});


                var window_width = $(window).width();
                var zoom = 18;

                if (window_width < 767) {

                    //var zoom = 15;
                }

                //var myLatlng1 = new google.maps.LatLng(55.745006, 37.505508);
                var myLatlng1 = new google.maps.LatLng(<?php the_field('coords'); ?>);
                var mapOptions1 = {
                    zoom: zoom,
                    center: myLatlng1,
                    disableDefaultUI: true
                }
                var map1 = new google.maps.Map(document.getElementById('map'), mapOptions1);

                var image = new google.maps.MarkerImage(
                    '<?= get_template_directory_uri(); ?>/i/contacts-map-icon.png',
                    new google.maps.Size(65, 66),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(65, 66)
                );

                var marker1 = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php the_field('coords'); ?>),
                    map: map1,
                    title: '<?php the_field('string_1_right'); ?>',
                    icon: image,
                    draggable: false
                });

                //Associate the styled map with the MapTypeId and set it to display.
                map1.mapTypes.set('map_style', styledMap);
                map1.setMapTypeId('map_style');

                //map1.hideControls();
            }

            google.maps.event.addDomListener(window, 'load', initialize);


            //})();
        </script>
    </div>
    <div class="clearfix"></div>
    </div><!-- /.content -->
<?php get_footer(); ?>