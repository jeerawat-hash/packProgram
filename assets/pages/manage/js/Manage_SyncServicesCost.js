$(function(){

    $("#SendSyncServicesCost").on("click",function(){

        $("#DataSyncServicesCostModal").modal("show");
        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

    });


    $("#DataSyncServicesCostModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#ServicesCostfile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            //data.append('SlipImage', Slip_file); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncServicesCostModal").find("#SendData").hide();
        $("#DataSyncServicesCostModal").find("#PreloadSendData").show();


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

                    $("#DataSyncServicesCostModal").modal("hide");

                    $("#DataSyncServicesCostModal").find("#SendData").show();
                    $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                    }else{

                        alert("ผิดพลาด....");
                        $("#DataSyncServicesCostModal").find("#SendData").show();
                        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                    } 
 
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncServicesCostModal").find("#SendData").show();
                        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                }
                });
*/
  
    

		}, 2000);


 

    });

























});