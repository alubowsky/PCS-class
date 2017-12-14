/*global $*/
(function(){
    "use strict";

    //getting the data from json and displaying videos on page
    $.get("getVideos.php", function (loadedVideosData) {
        var loadedVideos = JSON.parse(loadedVideosData);
        loadedVideos.forEach(displayVideos);
        $('#theVideo').attr('src', "videos/" + loadedVideos[0].url);
        $('#theVideo').attr('poster', "images/" + loadedVideos[0].image);
        loadedVideos.forEach(playVideo);
    });

    //fuction to display videos
    function displayVideos (videoData){
        $("<div class='video' id = '" + videoData.title.replace(/\s+/g,'').trim() + "'>" + "<img src='images/" +  videoData.image + "'alt='pic of video'> " + "<p>" +
        videoData.title + "</p></div>")
        .appendTo($("#videoDiv"));
    }

    //function to add click handlers to play video
    function playVideo (videoData){
        let video = $("#" + videoData.title.replace(/\s+/g,'').trim());
        video.click(function(){
            $('#theVideo').attr('src', "videos/" + videoData.url)[0].play();
        });
        
    }
}());

