/*global $*/
(function (){
"use strict";
/* jshint -W104 */
/* jshint -W119 */

let pics = [];

$.get("pics.json", function (loadedPics) {
    display(loadedPics[0].url);
    loadedPics.forEach(element => {
        pics.push(element);
    });
});

let i = 0;

$("#next").click(function(){
    if(i < pics.length - 1){
        display(pics[++i].url);
    }
});

$("#prev").click(function(){
    if(i>0){
        display(pics[--i].url);
    }
});

function display (pic){
    $("#theImage").attr("src", pic);
}


}());