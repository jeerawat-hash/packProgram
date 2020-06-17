$(function(){
 	 

 	 $("#CustomerGetDataCar").on("click",function(){

 	 	$("#CustomerGetDataCarModal").find("#PreloadSendData").hide();
		$("#CustomerGetDataCarModal").find("#SendData").show(); 

 	 	$("#CustomerGetDataCarModal").modal("show");

 	 });


 	 $("#CustomerGetDataCarModal").find("#SendData").on("click",function(){
	
		

		var Cardata = $("#CustomerGetDataCarModal").find("#CarCode").val();

		if (Cardata == "") {
			alert("กรุณาระบุหมายเลขทะเบียนรถที่ต้องการทราบข้อมูล");
			return false;
		}



		var data = new FormData();

		data.append("CarCode",Cardata);

		$("#CustomerGetDataCarModal").find("#PreloadSendData").show();
		$("#CustomerGetDataCarModal").find("#SendData").hide(); 

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
					$("#GetDataCarDetailModal").find("#CustomerName").text("test");
					$("#GetDataCarDetailModal").find("#ContactInfo").text("test");
					$("#GetDataCarDetailModal").find("#CarInfo").text("test");


				}else{


					alert("ไม่พบข้อมูลหมายเลขทะเบียนรถ "+Cardata);

				}

				$("#CustomerGetDataCarModal").find("#PreloadSendData").hide();
				$("#CustomerGetDataCarModal").find("#SendData").show(); 
			},
			error : function(){

			}
		});

		}, 2000);










 	 });









});