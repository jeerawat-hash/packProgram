$(function(){
 	 

 	 $("#CustomerGetDataCar").on("click",function(){

 	 	$("#CustomerGetDataCarModal").find("#PreloadSendData").hide();
		$("#CustomerGetDataCarModal").find("#SendData").show(); 

 	 	$("#CustomerGetDataCarModal").modal("show");

 	 });


 	 $("#CustomerGetDataCarModal").find("#SendData").on("click",function(){
	
		$("#CustomerGetDataCarModal").find("#PreloadSendData").show();
		$("#CustomerGetDataCarModal").find("#SendData").hide(); 

		var Cardata = $("#CustomerGetDataCarModal").find("#CarCode").val();

		if (Cardata == "") {
			alert("กรุณาระบุหมายเลขทะเบียนรถที่ต้องการทราบข้อมูล");
			return false;
		}

		var data = new FormData();

		data.append("CarCode",Cardata);

		setTimeout(function(){ 

		$.ajax({
			url : "https://pack1.sakorncable.com/index.php/mobile_app/getDataCustomerByCar",
			data : data,
			contentType : "POST",
			cache : false,
			processData : false,
			success : function(data){

				console.log(data);
				$("#CustomerGetDataCarModal").find("#PreloadSendData").hide();
				$("#CustomerGetDataCarModal").find("#SendData").show(); 
			},
			error : function(){

			}
		});

		}, 2000);










 	 });









});