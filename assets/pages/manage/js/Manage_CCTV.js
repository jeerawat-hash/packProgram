$(function(){

    $(".cctv-close").on("click",function(){

        $("#CCTVplayer").html("");

    });

    $("#CCTV1").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งหน้าโครงการ");
        $("#CCTVModal").find("#midModalLabel").text("รายละเอียดกล้องวงจรปิดตำแหน่งหน้าโครงการ");


        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv23.m3u8",
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
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งมุมกล้องหลังหน้าโครงการ");
        $("#CCTVModal").find("#midModalLabel").text("รายละเอียดกล้องวงจรปิดตำแหน่งมุมกล้องหลังหน้าโครงการ");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv24.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });
 


});