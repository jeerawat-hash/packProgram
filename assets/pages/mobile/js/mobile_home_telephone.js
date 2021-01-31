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
			alert("error");
			return false;
		}


		//////////// post 

		$.post("https://pack1.sakorncable.com/index.php/mobile_app/updateTelephone",
 			{
 				CustomerID : Customer,
 				Telephone : tele
 			},function(data){
 	
 				console.log(data);

 		});


		//////////// post 

		 

	});








});