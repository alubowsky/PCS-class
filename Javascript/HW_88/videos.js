/*global $*/
(function(){
    "use strict";

    //getting the data from json and displaying videos on page
    $.get("videos.json", function (loadedContacts) {
        loadedContacts.forEach(displayVideos);
        loadedContacts.forEach(playVideo);
    });

    //fuction to display videos
    function displayVideos (videoData){
        $("<div class='video'>" + "<video preload='none'  id = '"+ videoData.title.replace(/\s+/g,'').trim() + "' poster='" +  videoData.image + 
        "'><source src=" + videoData.url + " /></video> <p>" + 
        videoData.title + "</p></div>")
        .appendTo($("#videoDiv"));
    }

    //function to add click handlers to play video
    function playVideo (videoData){
        /*$("#" + videoData.title.replace(/\s+/g,'').trim()).click(function(){
            $("#" + videoData.title.replace(/\s+/g,'').trim())[0].play();
        });*/
        let video = $("#" + videoData.title.replace(/\s+/g,'').trim());
        video.click(function(){
            if(video[0].paused === false){
                video[0].pause();
            }
            else{
                video[0].play();
            }
        });
        
    }

}());

