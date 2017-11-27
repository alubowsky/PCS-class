/*global $ */
(function () {
    "use strict";

    

    $('#loadButton').click(function(){
        let file = $('#thingToLoad').val();
        $("#spinner").show();
        
        setTimeout(function () {
            $.get(file, function (loadedData) {
                $('body').append('<div>'+ loadedData + '</div>');
            }).fail(function (xhr, statusCode, statusText) {
                $('body').append('<div>'+ "error: " + statusText + '</div>');
            }); 
            $("#spinner").hide();
        }, 5000);
    });
}());