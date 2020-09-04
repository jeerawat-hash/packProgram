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


		
		setTimeout(function(){ 

		$.ajax({
			url : "https://pack1.sakorncable.com/index.php/mobile_app/callSecurity",
			type : "POST",
			data : data,
			contentType : false,
			cache : false,
			processData : false,
			success : function(data){

				$("#SmartSecurityModal").find("#PreloadSendData").hide();
				$("#SmartSecurityModal").find("#SendData").show(); 
			
			},
			error : function(){

			}
		});

		}, 2000);
		









 	 });


 		
 







});