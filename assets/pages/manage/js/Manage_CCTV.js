$(function(){

    $(".cctv-close").on("click",function(){

        $("#CCTVplayer").html("");

    });

    $("#CCTV1").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        ////////////
     
    var player = new Clappr.Player({
        source: "rtsp://admin:@192.168.1.25",
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
        source: "https://edge2-bkk.3bb.co.th:9443/CartoonClub_Livestream/cartoonclub_480P.stream/chunklist_w66866808.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });
 


});