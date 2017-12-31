/*global google */
(function () {
    "use strict";
    var location = { lat: -34.397, lng: 150.644 },
        map = new google.maps.Map(
            document.getElementById('map'),
            {
                center: location,
                zoom: 8
            }
        );

    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}());