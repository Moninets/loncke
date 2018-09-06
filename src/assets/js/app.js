import $ from 'jquery';
import whatInput from 'what-input';
// import 'fullpage.js'

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';
//import './lib/jquery.overlaps.js';

$(document).foundation();

// global var
// var map = null;

// global var
var map = null;

$(document).ready(function(){

    $('.acf-map').each(function(){

        // create map
        map = new_map( $(this) );

    });

});

$(window).on('load', function () {

    $('.lo-video__button').on('click', function () {
        $(this)
            .closest('.lo-video__wrapper')
            .find('.lo-video')[0]
            .play();

        $(this)
            .parent()
            .remove()
    });

    $(window).on('scroll', function() {
        if (is_colliding($('#hamburger'), $('#section-1'))) {
            console.log('overlaps')
        }
    });

    $('#fullpage').fullpage({
        anchors: ['firstPage','secondPage', 'thirdPage', 'fourthPage', 'fifthPage'],
        navigation: true,
        autoScrolling: false,
        fitToSection: false,
        normalScrollElements: '#section1',
        licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
        onLeave: function(origin, destination, direction){
            // var leavingSection = this
            // var windowHeight = $(window).height();
            // console.log(origin);

            //after leaving section 2
            if((origin.index) % 2 == 0){
                $('#hamburger').addClass('gold');
                $('#fp-nav').addClass('black-nav');
            } else {
                $('#hamburger').removeClass('gold');
                $('#fp-nav').removeClass('black-nav');
            }
        }
    });

    $('.lo-hamburger').click(function () {
        $(this).toggleClass('lo-hamburger__active');
    });

    $('.js-off-canvas-overlay').on('click', function () {
        $('.lo-hamburger').removeClass('lo-hamburger__active');
    });

    $(function() {
        $('a[href*=#lo-history]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
    });
});

/*
 *  new_map
 *
 *  This function will render a Google Map onto the selected jQuery element
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$el (jQuery element)
 *  @return	n/a
 */

function new_map( $el ) {

    // var
    var $markers = $el.find('.marker');


    // vars
    var args = {
        zoom		: 14,
        center		: new google.maps.LatLng(0, 0),
        mapTypeId	: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        disableDefaultUI: true,
        styles: [
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            }
        ],
    };


    // create map
    var map = new google.maps.Map( $el[0], args);


    // add a markers reference
    map.markers = [];


    // add markers
    $markers.each(function(){

        add_marker( $(this), map );

    });


    // center map
    center_map( map );


    // return
    return map;

}

/*
 *  add_marker
 *
 *  This function will add a marker to the selected Google Map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$marker (jQuery element)
 *  @param	map (Google Map object)
 *  @return	n/a
 */

function add_marker( $marker, map ) {

    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
        position	: latlng,
        map			: map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content		: $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

        });
    }

}

/*
 *  center_map
 *
 *  This function will center the map, showing all markers attached to this map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	map (Google Map object)
 *  @return	n/a
 */

function center_map( map ) {

    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

    });

    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }

}

$('[data-fancybox="gallery"]').fancybox({

});

/**
 * Detects if two elements are colliding
 *
 * Credit goes to BC on Stack Overflow, cleaned up a little bit
 *
 * @link http://stackoverflow.com/questions/5419134/how-to-detect-if-two-divs-touch-with-jquery
 * @param $div1
 * @param $div2
 * @returns {boolean}
 */
var is_colliding = function( $div1, $div2 ) {
    // Div 1 data
    var d1_offset             = $div1.offset();
    var d1_height             = $div1.outerHeight( true );
    var d1_width              = $div1.outerWidth( true );
    var d1_distance_from_top  = d1_offset.top + d1_height;
    var d1_distance_from_left = d1_offset.left + d1_width;

    // Div 2 data
    var d2_offset             = $div2.offset();
    var d2_height             = $div2.outerHeight( true );
    var d2_width              = $div2.outerWidth( true );
    var d2_distance_from_top  = d2_offset.top + d2_height;
    var d2_distance_from_left = d2_offset.left + d2_width;

    var not_colliding = ( d1_distance_from_top < d2_offset.top || d1_offset.top > d2_distance_from_top || d1_distance_from_left < d2_offset.left || d1_offset.left > d2_distance_from_left );

    // Return whether it IS colliding
    return ! not_colliding;
};

