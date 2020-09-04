$(function(){
 	
    
	$("#Security").on("click",function(){

		$("#SmartSecurityModal").modal("show");
    	$("#SmartSecurityModal").find("#PreloadSendData").hide();
		$("#SmartSecurityModal").find("#SendData").show();   
 	
	});


	$("#SmartSecurityModal").find("#SendData").on("click",function(){
	
		

		var SecurityComment = $("#SmartSecurityModal").find("#SecurityComment").val();
		var CustomerID = $("#CustomerIDAuthen").val();

		if (SecurityComment == "") {
			alert("กรุณาระบุเหตุที่ต้องการแจ้ง");
			return false;
		}



		var data = new FormData();

		data.append("CustomerID",CustomerID);
		data.append("SecurityComment",SecurityComment);

		$("#SmartSecurityModal").find("#PreloadSendData").show();
		$("#SmartSecurityModal").find("#SendData").hide(); 


		/*
		setTimeout(function(){ 

		$.ajax({
			url : "https://pack1.sakorncable.com/index.php/mobile_app/getDataCustomerByCar",
			type : "POST",
			data : data,
			contentType : false,
			cache : false,
			processData : false,
			success : function(data){

				//console.log(data);
				var object = JSON.parse(data);

				console.log(object);

				if (object.length != 0) {


					$("#GetDataCarDetailModal").modal("show");
					$("#GetDataCarDetailModal").find("#CustomerName").text(object[0].CustomerName);
					$("#GetDataCarDetailModal").find("#ContactInfo").text(object[0].AddressLocal+" "+object[0].CONTACT);
					$("#GetDataCarDetailModal").find("#CarInfo").text(object[0].CARCODE+" "+object[0].COUNTRY+" ค่าย "+object[0].CARBRAND+" สี "+object[0].CARCOLOR+" ชนิด "+object[0].CARTYPE);


				}else{


					alert("ไม่พบข้อมูลหมายเลขทะเบียนรถ "+SecurityComment);

				}

				$("#SmartSecurityModal").find("#PreloadSendData").hide();
				$("#SmartSecurityModal").find("#SendData").show(); 
			},
			error : function(){

			}
		});

		}, 2000);
		*/









 	 });


 		
 







});