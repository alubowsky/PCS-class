/* global $*/
//(function(){
//    "use strict";
    const $ = require('jQuery'),
    color = $("#colorPicker");
    color.change(() => {
            $('body').css('background-color', color.val());
        }
    );
//}());