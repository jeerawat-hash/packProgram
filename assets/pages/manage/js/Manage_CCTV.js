$(function(){

    $(".cctv-close").on("click",function(){

        $("#CCTVplayer").html("");

    });

    $("#CCTV1").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv19.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV2").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv18.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });
 


});