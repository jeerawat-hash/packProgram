$(function(){



    $("#DataSendSlipModal").find("#SendData").on("click",function(){

        var Telephone = $("#TelephoneAuthen").val();
        var Image = $("#imagefileTemp").val();


            ////// ไฟล์ 
            var Slip_file = $('#imagefile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('SlipImage', Slip_file); 
            data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           



        var paycode = new Array();
		var i = 0 ;
		$(".PayCodeValue:checked").each(function(){

			var value = $(this).attr("value");

			paycode[i] = value;
            ////// เพิ่มข้อมูลเข้า array   
            data.append('PayCode[]', value );
	        ////// เพิ่มข้อมูลเข้า array                     
			i++;

		});
 


		console.log(paycode);

        if ( paycode.length == 0 ) {
            alert("กรุณาเลือก การ์ด !!!");
            return false;
        }
        if ( Image == "" ) {
            alert("กรุณาเลือก ภาพ !!!");
            return false;
        }



        ////// เปิดสัญญาณชั่วคราว

        var IsPreOpen =  $("#IsPreOpen:checked").val();

        console.log(IsPreOpen);

        if (IsPreOpen == "true") {
   
        $.post("https://pro.sakorncable.com/index.php/liff_sendslip/insertDataPreOpenCard",{ telephone : Telephone },function(data){

        console.log(data);

        });

        }
        ////// เปิดสัญญาณชั่วคราว

        $("#DataSendSlipModal").find("#SendData").hide();
        $("#DataSendSlipModal").find("#PreloadSendData").show();

		setTimeout(function(){ 


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

                    $("#DataSendSlipModal").modal("hide");

                    $("#DataSendSlipModal").find("#SendData").show();
                    $("#DataSendSlipModal").find("#PreloadSendData").hide();

                    }else{

                        alert("ผิดพลาด....");
                        $("#DataSendSlipModal").find("#SendData").show();
                        $("#DataSendSlipModal").find("#PreloadSendData").hide();

                    } 
 
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSendSlipModal").find("#SendData").show();
                        $("#DataSendSlipModal").find("#PreloadSendData").hide();

                }
                });

  
    

		}, 2000);

















    });

























});