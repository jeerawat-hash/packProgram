$(function(){

    $("#SendSyncReceiveCost").on("click",function(){

        $("#DataSyncReceiveCostModal").modal("show");
        $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();
        $("#DataSyncReceiveCostModal").find("#SendData").show();
        $('#ReceiveCostfile').val('');
        

    });


    $("#DataSyncReceiveCostModal").find("#SendData").on("click",function(){
 

            var ProjectCode = $("#ProjectCode").val();

            ////// ไฟล์ 
            var Slip_file = $('#ReceiveCostfile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('ReceiveCost', Slip_file); 
            data.append('ProjectCode', ProjectCode); 

            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncReceiveCostModal").find("#SendData").hide();
        $("#DataSyncReceiveCostModal").find("#PreloadSendData").show();


		setTimeout(function(){ 

 
        $.ajax({
                url: "https://pack1.sakorncable.com/index.php/management/createDataReceiveFromXlsx",
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


                    $("#DataSyncReceiveCostModal").modal("hide");
                    $("#DataSyncReceiveCostModal").find("#SendData").show();
                    $("#DataSyncReceiveCostModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        swal("ผิดพลาด!", "กรุณาลองใหม่ภายหลัง!", "error");
                        //alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
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


    

		}, 2000);


 

    });

























});