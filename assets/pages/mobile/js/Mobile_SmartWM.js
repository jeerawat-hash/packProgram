$(function(){
 	 	




 	 	
 	 		$("#SmartWM").on("click",function(){

 	 			$("#SmartWMModal").modal("show");
 	 			$("#PreloadSendData").hide();
 	 			$("#previewImgWM").attr("src", "https://ctt.trains.com/sitefiles/images/no-preview-available.png");
 	 			$('#WMQRCodeFile').val('');

 	 		});
 

			$("#SelectImageWM").on("click",function(){

				    $('#WMQRCodeFile').trigger('click');

			});







	$("#SmartWMModal").find("#SendData").on("click",function(){
	
		 

		$("#SmartWMModal").find("#PreloadSendData").show();
		$("#SmartWMModal").find("#SendData").hide(); 


		
		setTimeout(function(){ 
  		

			$("#SmartWMModal").find("#PreloadSendData").hide();
			$("#SmartWMModal").find("#SendData").show(); 


		}, 2000);
		

 


 	 });

 








});