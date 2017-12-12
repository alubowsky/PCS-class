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
        let video = $("#" + videoData.title.replace(/\s+/g,'').trim());
        video.click(function(){  
            if(video[0].paused === false){
                video[0].pause();
                video.removeClass('playing');
            }
            else{
                if($(".playing")[0]){
                    $(".playing")[0].pause();
                    $(".playing").removeClass('playing');
                }
                video.addClass('playing');
                video[0].play();
            }
        });
        
    }
}());

