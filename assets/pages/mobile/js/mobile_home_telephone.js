$(function(){
 


	$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();

	$("#CustomerGetDataTelephoneModal").find("#SendData").on("click",function(){


		var tele = $("#CustomerGetDataTelephoneModal").find("#Telephone").val();


		alert(tele);

		$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").show();
		$("#CustomerGetDataTelephoneModal").find("#SendData").hide();

		if (tele == "") {

			$("#CustomerGetDataTelephoneModal").find("#PreloadSendData").hide();
			$("#CustomerGetDataTelephoneModal").find("#SendData").show();
			alert("error");
			return false;
		}


		//////////// post 





		//////////// post 

		 

	});








});