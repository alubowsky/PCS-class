/*global $*/
(function (){
"use strict";
/* jshint -W104 */
/* jshint -W119 */

let pics = [];

$.get("pics.json", function (loadedPics) {
    display(loadedPics[0].url, loadedPics[0].title);
    loadedPics.forEach(element => {
        pics.push(element);
    });
});

let i = 0;

$("#next").click(function(){
    if(i < pics.length - 1){
        display(pics[++i].url, pics[i].title);
    }
});

$("#prev").click(function(){
    if(i>0){
        display(pics[--i].url, pics[i].title);
        console.log(i);
    }
});

function display (pic, caption){
    $("#theImage").attr("src", pic);
    $("#title").text(caption);
}


}());