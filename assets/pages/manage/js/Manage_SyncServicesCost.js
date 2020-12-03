$(function(){

    $("#SendSyncServicesCost").on("click",function(){

        $("#DataSyncServicesCostModal").modal("show");
        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();
        $("#DataSyncServicesCostModal").find("#SendData").show();
        $('#ServicesCostfile').val('');


    });


    $("#DataSyncServicesCostModal").find("#SendData").on("click",function(){
    
            var ProjectCode = $("#ProjectCode").val();

            ////// ไฟล์ 
            var Slip_file = $('#ServicesCostfile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('ServicesCost', Slip_file); 
            data.append('ProjectCode', ProjectCode); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
  
        $("#DataSyncServicesCostModal").find("#SendData").hide();
        $("#DataSyncServicesCostModal").find("#PreloadSendData").show();


		setTimeout(function(){ 


            $.ajax({
                url: "https://pack1.sakorncable.com/index.php/management/createDataServicesCostFromXlsx",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    //console.log(data);
                    
                    if (data == 1) {

                    //alert("บันทึกข้อมูลสำเร็จ....");
                    swal("สำเร็จ!", "บันทึกข้อมูลสำเร็จ!", "success");


                    $("#DataSyncServicesCostModal").modal("hide");

                    $("#DataSyncServicesCostModal").find("#SendData").show();
                    $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        //alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
                        swal("ผิดพลาด!", "กรุณาลองใหม่ภายหลัง!", "error");

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

  
    

		}, 2000);


 

    });

























});