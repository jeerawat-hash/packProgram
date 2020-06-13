$(function(){

    $("#SendSyncServicesCost").on("click",function(){

        $("#DataSyncReceiveCostModal").modal("show");
        $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();

    });


    $("#DataSyncReceiveCostModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#ReceiveCostfile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            //data.append('SlipImage', Slip_file); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncReceiveCostModal").find("#SendData").hide();
        $("#DataSyncReceiveCostModal").find("#PreloadSendData").show();


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

                    $("#DataSyncReceiveCostModal").modal("hide");

                    $("#DataSyncReceiveCostModal").find("#SendData").show();
                    $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();

                    }else{

                        alert("ผิดพลาด....");
                        $("#DataSyncReceiveCostModal").find("#SendData").show();
                        $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();

                    } 
 
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncReceiveCostModal").find("#SendData").show();
                        $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();

                }
                });
*/
  
    

		}, 2000);


 

    });

























});