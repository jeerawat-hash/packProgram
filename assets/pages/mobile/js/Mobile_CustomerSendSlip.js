$(function(){
 	
    
	$("#CustomerSendSlip").on("click",function(){


		$("#CustomerSendSlipModal").find("#PreloadSendData").hide();
		$("#CustomerSendSlipModal").find("#SendData").show();
		$("#CustomerSendSlipModal").find("#Slipfile").val("");
		
		var CustomerID = $("#CustomerIDAuthen").val();
 
		var data = new FormData();          
        data.append('CustomerID', CustomerID); 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/mobile_app/getDataBlanace",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){



        		var object = JSON.parse(data);
        		console.log(object);
        		$(".CustomerNameLabel").text(object[0].CustomerName);
 

        	},
        	error : function(){


        	}
        });


		$("#CustomerSendSlipModal").modal("show");
  

	});

	$("#CustomerSendSlipModal").find("#SendData").on("click",function(){

	
		var CustomerID = $("#CustomerIDAuthen").val();

		var data = new FormData();          
        var Slip_file = $('#Slipfile').prop('files')[0]; 
        data.append('CustomerID', CustomerID);  
        data.append('Slipfile', Slip_file);  

       	$("#CustomerSendSlipModal").find("#SendData").hide();
		$("#CustomerSendSlipModal").find("#PreloadSendData").show();

		setTimeout(function(){ 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/mobile_app/SendDataSlipToNotify",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){


        		console.log(data);
 

        	},
        	error : function(){

        		alert("ผิดพลาด กรุณาลองใหม่ในภายหลัง");
        		$("#CustomerSendSlipModal").find("#SendData").show();
				$("#CustomerSendSlipModal").find("#PreloadSendData").hide();


        	}
        });

		}, 2000);



 

	});








});