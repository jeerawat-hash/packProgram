$(function(){

    $("#CCTV1").on("click",function(){

        $("#CCTVModal").modal("show");
        ////////////

        var player = new Clappr.Player({source: "https://gcorigin.wisdomcloud.net/live/master/playlist.m3u8_1000.m3u8", parentId: "#CCTVplayer"});
 

        ////////////

    });
 


});