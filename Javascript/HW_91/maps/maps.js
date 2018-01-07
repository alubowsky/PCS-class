/*global google */
/*global $*/
/* jshint -W104 */
/* jshint -W119 */
(function () {
    "use strict";
    let search = $('#search'),
        searchInfo,
        markers = [],
        location = { lat: -34.397, lng: 150.644 },
        clearMarkers = function(){
            for(let i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
        },
        map = new google.maps.Map(
            document.getElementById('map'),
            {
                center: location,
                zoom: 2
            }
        );


    $('#go').click(function(){
        if(markers){
           clearMarkers();
        }
        $('#picDiv').empty();
        $.getJSON("http://api.geonames.org/wikipediaSearch?&maxRows=10&username=alubowsky&callback=?",
        { type: "json", q: search.val() }, function (data) {
           searchInfo = data.geonames.map(function(location){
            return {
                lng: location.lng,
                lat: location.lat,
                img: location.thumbnailImg
                };
            });
            searchInfo.forEach(element => {
                let markerLocation = {lat: element.lat, lng: element.lng};
                markers.push(new google.maps.Marker({
                    position: markerLocation,
                    map: map
               }));
               $('<figure><img src= "' + element.img + '"/>').appendTo($('#picDiv'));
            });
        });
        
    });
    

    
}());