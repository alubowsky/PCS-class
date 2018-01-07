/*global google, $*/
/* jshint -W104, -W119 */
(function () {
    "use strict";

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          
        map.setCenter(pos);
          let markerLocation = pos;
          let marker = new google.maps.Marker({
                  position: markerLocation,
                  map: map,
              });
          markers.push(marker);
        map.setZoom(13);
        });
      } else {
        // Browser doesn't support Geolocation
        console.log('error');
    }

    let search = $('#search'),
        markers = [],
        numResultsInput = $('#numResults'),
        theList = $('#picDiv ul'),
        rectangle = null,
        infoWindow = new google.maps.InfoWindow({
            maxWidth: 250
        }),
        location = {lat: -34.397, lng: 150.644},
        clearmap = function(){
            if(rectangle !== null){
                rectangle.setMap(null);
            }
            if(markers){
                markers.forEach(function(marker) {
                    marker.setMap(null);
                });
            }
            theList.empty();
        },
        getInfo = function(data){
            var bounds = new google.maps.LatLngBounds();
            data.geonames.forEach(function (location) {
                let markerLocation = {lat: location.lat, lng: location.lng};
                let marker = new google.maps.Marker({
                        position: markerLocation,
                        map: map,
                        title: location.title,
                    });
                markers.push(marker);

                bounds.extend(location);

                marker.addListener('click', function () {
                    infoWindow.setContent(location.summary + '<br><a target="_blank" href="http://' + location.wikipediaUrl + '">Wikipedia</a>');
                    infoWindow.open(map, marker);
                });

                $('<li><img src="' + (location.thumbnailImg || 'default.png') + '"/>'+ location.title + '</li>')
                    .appendTo(theList)
                    .click(function () {
                        map.panTo(location);
                        map.setZoom(15);
                    });
            });
            map.fitBounds(bounds);
        },
        map = new google.maps.Map(
            document.getElementById('map'),
            {
                center: location,
                zoom: 2
            }
        ),
        drawingManager = new google.maps.drawing.DrawingManager({
            drawingControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT,
                drawingModes: ['marker', 'rectangle']
            },
            rectangleOptions: {
                editable: true,
              }
        });
        drawingManager.setMap(map);

        google.maps.event.addListener(drawingManager, 'rectanglecomplete', function(drawing) {
            clearmap();
            rectangle = drawing;
            $.getJSON("http://api.geonames.org/wikipediaBoundingBox?",
                {
                    north : drawing.getBounds().f.b,
                    south : drawing.getBounds().f.f,
                    east : drawing.getBounds().b.f,
                    west : drawing.getBounds().b.b,
                    type: 'json',
                    username: 'alubowsky'
                },
                function(data){
                    getInfo(data);
                }
            );

        });

        $('#go').click(function () {
            clearmap();
            $.getJSON("http://api.geonames.org/wikipediaSearch?callback=?",
                {
                    q: search.val(),
                    maxRows: numResultsInput.val(),
                    username: 'alubowsky',
                    type: 'json'
                },
                function(data){
                    getInfo(data);
                });
            });
}());