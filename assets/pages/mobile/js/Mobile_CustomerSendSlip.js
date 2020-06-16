$(function(){
 	
    
	$("#CustomerSendSlip").on("click",function(){


		$("#CustomerSendSlipModal").find("#PreloadSendData").hide();
		$("#CustomerSendSlipModal").find("#SendData").show();
		$("#CustomerSendSlipModal").find("#Slipfile").val("");
		$("#CustomerSendSlipModal").modal("show");
  

	});

	$("#CustomerSendSlipModal").find("#SendData").on("click",function(){

		$("#CustomerSendSlipModal").find("#SendData").hide();
		$("#CustomerSendSlipModal").find("#PreloadSendData").show();








	});








});