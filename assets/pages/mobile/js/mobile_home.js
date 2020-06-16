$(function(){
 	
 		$("#DataAuthenModal").modal("show");
		$("#DataAuthenModal").find("#PreloadGetData").hide();
    


	$("#DataAuthenModal").find("#GetData").on("click",function(){


		var Customer = $("#CustomerID").val();

		if (Customer == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (Customer == "0") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (Customer.trim() == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
 
		$("#DataAuthenModal").find("#GetData").hide();
		$("#DataAuthenModal").find("#PreloadGetData").show();

		setTimeout(function(){


			$.post("https://pack1.sakorncable.com/index.php/mobile_app/login",{CustomerID : Customer}
			,function(data,status){


				//var object =  JSON.parse(data);

				console.log(data);
				//console.log(object);

				/*
				if (data == 1) {
  
					$("#NameAuthen").text("System");
					$("#StatusAuthen").text("Authentication Success");
					$("#CustomerIDAuthen").val("NULL");
					$("#DataAuthenModal").modal("hide");
					$("#DataAuthenModal").find("#GetData").show();

				}else{
					alert("รหัสผิดพลาด..");
					$("#DataAuthenModal").find("#GetData").show();
					$("#DataAuthenModal").find("#PreloadGetData").hide();

					return false;
				}
				*/
				



			});







		}, 1000);

 
 

	});





});