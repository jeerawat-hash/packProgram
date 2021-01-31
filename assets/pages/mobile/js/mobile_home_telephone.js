$(function(){
 


	$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();

	$("#CustomerGetDataTelephoneModal").find("#SendData").on("click",function(){


		var tele = $("#CustomerGetDataTelephoneModal").find("#Telephone").val();
		var Customer = $("#CustomerID").val();


		//alert(tele);

		$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").show();
		$("#CustomerGetDataTelephoneModal").find("#SendData").hide();

		if (tele == "") {

			$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();
			$("#CustomerGetDataTelephoneModal").find("#SendData").show();
			swal("ผิดพลาด!", "กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง", "error");
			return false;
		}


		//////////// post 

		$.post("https://pack1.sakorncable.com/index.php/mobile_app/updateTelephone",
 			{
 				CustomerID : Customer,
 				Telephone : tele
 			},function(data){
 				
 				if (data == "1") {

 					$("#CustomerGetDataTelephoneModal").modal("hide");
            		swal("สำเร็จ!", "บันทึกข้อมูลเบอร์โทรศัพท์สำเร็จ", "success");
            		$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();
					$("#CustomerGetDataTelephoneModal").find("#SendData").show();

 				}else{
            		swal("ผิดพลาด!", "กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง", "error");

            		$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();
					$("#CustomerGetDataTelephoneModal").find("#SendData").show();
            		return false;

 				}

 		});


		//////////// post 

		 

	});








});