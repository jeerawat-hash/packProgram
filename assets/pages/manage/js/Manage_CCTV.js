$(function(){

    $("#CCTV1").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        ////////////
     
    var player = new Clappr.Player({
        source: "https://gcorigin.wisdomcloud.net/live/master/playlist.m3u8_1000.m3u8",
        preload: "none",
        width: "100%",
        parentId: "#CCTVplayer"
    });



        ////////////

    });
 


});