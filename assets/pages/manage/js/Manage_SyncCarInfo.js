$(function(){

    $("#SendSyncCarInfo").on("click",function(){

        $("#DataSyncCarInfoModal").modal("show");
        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();
        $("#DataSyncCarInfoModal").find("#SendData").show();
        

    });


    $("#DataSyncCarInfoModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#CarInfofile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            //data.append('SlipImage', Slip_file); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncCarInfoModal").find("#SendData").hide();
        $("#DataSyncCarInfoModal").find("#PreloadSendData").show();


		setTimeout(function(){ 

/*
            $.ajax({
                url: "https://pro.sakorncable.com/index.php/liff_sendslip/UploadSlip",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    console.log(data);

                    if (data != 0) {

                    alert("ส่งใบเสร็จสำเร็จ....");

                    $("#DataSyncCarInfoModal").modal("hide");

                    $("#DataSyncCarInfoModal").find("#SendData").show();
                    $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                    }else{

                        alert("ผิดพลาด....");
                        $("#DataSyncCarInfoModal").find("#SendData").show();
                        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                    } 
 
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncCarInfoModal").find("#SendData").show();
                        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                }
                });
*/
  
    

		}, 2000);


 

    });

























});