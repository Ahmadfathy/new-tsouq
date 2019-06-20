//    google map start
(function ($) {
  "use strict";

  google.maps.event.addDomListener(window, 'load', init);

  var map;

  function init() {
    var mapOptions = {
      center: new google.maps.LatLng(29.9804697, 31.1595836),
      zoom: 10,
      zoomControl: false,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.DEFAULT,
      },
      panControl: false,
      disableDoubleClickZoom: false,
      mapTypeControl: false,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
      },
      scaleControl: true,
      scrollwheel: false,
      streetViewControl: false,
      draggable: true,
      overviewMapControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      //                styles: [ 
      //                    { featureType: "administrative", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -100 }, { lightness: 20 } ] },
      //                    { featureType: "road", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -100 }, { lightness: 40 } ] },
      //                    { featureType: "water", elementType: "all", stylers: [ { visibility: "on" }, { saturation: -10 }, { lightness: 30 } ] },
      //                    { featureType: "landscape.man_made", elementType: "all", stylers: [ { visibility: "simplified" }, { saturation: -60 }, { lightness: 10 } ] },
      //                    { featureType: "landscape.natural", elementType: "all", stylers: [ { visibility: "simplified" }, { saturation: -60 }, { lightness: 60 } ] },
      //                    { featureType: "poi", elementType: "all", stylers: [ { visibility: "off" }, { saturation: -100 }, { lightness: 60 } ] }, 
      //                    { featureType: "transit", elementType: "all", stylers: [ { visibility: "off" }, { saturation: -100 }, { lightness: 60 } ] }
      //                ]

    }

    var mapElement = document.getElementById('mapBox');
    var map = new google.maps.Map(mapElement, mapOptions);

    var locations = [
      ['', 29.9804697, 31.1595836]
    ];
    for (var i = 0; i < locations.length; i++) {
      var marker = new google.maps.Marker({
        icon: 'layout/images/map-marker.png',
        //                    animation: google.maps.Animation.BOUNCE,
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
      });
    }

    // var contentString =
    //   '<div id="content">' +
    //     '<div class="mapInfoWindowRowInner">' +
    //       '<h5>FurnitureHose</h5>' +
    //       '<p>404/2 Design Street <br> Australia</p>' +
    //     '</div>' +
    //   '</div>';

    var contentString =
      '<div id="content">' +
        '<div class="mapInfoWindowRowInner">' +
      '<div class="row">' +
      '<div class="col-3">' +
      '<div class="rounded-img mb-2">' +
      '<img src="layout/images/doc.jpg" alt="">' +
      '</div>' +
      '</div>' +
      '<div class="col-9 p-l-r-5">' +
      '<div class="profile-details">' +
      '<div class="row">' +
      '<div class="col-12">' +
      '<h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>' +
      '<p>Lorem ipsum dolor sit amet elit.</p>' +
      '<div class="rating">' +
      '<div class="rateYo"></div>' +
      '</div>' +
      '</div>' +
      '<div class="col-12"> ' +
      '<p class="text-primary profile-location">' +
      '<i class="fas fa-map-marker-alt"></i>' +
      'Abbas El Aqqad, Nasr City, cairo' +
      '</p>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</div>' +
      '</div>' +
        '</div>' +
      '</div>';

    /*
          '<div class="row">' +
            '<div class="col-4">' +
              '<div class="rounded-img mb-2">' +
                '<img src="<?php echo $img; ?>doc.jpg" alt="">' +
              '</div>' +
            '</div>' +
            '<div class="col-8">' +
              '<div class="profile-details">' +
                '<div class="row">' +
                  '<div class="col-12">' +
                    '<h5><a href="#">Dr. Ahmad Fathy Ayad</a></h5>' +
                    '<p>Lorem ipsum dolor sit amet elit.</p>' +
                    '<div class="rating">' +
                      '<div class="rateYo"></div>' +
                    '</div>' +
                  '</div>' +
                  '<div class="col-12"> ' +
                    '<p class="text-primary profile-location">' +
                      '<i class="fas fa-map-marker-alt"></i>' +
                      'Abbas El Aqqad, Nasr City, cairo' +
                    '</p>' +
                  '</div>' +
                '</div>' +
              '</div>' +
            '</div>' +
          '</div>' +
                */
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });


    //            google.maps.event.addListener(marker, 'click', function() {
    //                infowindow.open(map,marker);
    //            });

    infowindow.open(map, marker);
  }
})(jQuery);
//    google map end