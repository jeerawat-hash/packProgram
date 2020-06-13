$(function(){
 
 

		$("#DataSecrectkeyModal").modal("show");
		$("#DataSecrectkeyModal").find("#PreloadGetData").hide();
	  


	$("#DataSecrectkeyModal").find("#GetData").on("click",function(){


		var telephone = $("#SecrectKEY").val();

		if (telephone == "") {

			alert("กรุณากรอกรหัสความปลอดภัยให้ถูกต้อง");
			return false;

		}
		if (telephone == "0") {

			alert("กรุณากรอกรหัสความปลอดภัยให้ถูกต้อง");
			return false;

		}
		if (telephone.trim() == "") {

			alert("กรุณากรอกรหัสความปลอดภัยให้ถูกต้อง");
			return false;

		}
 
		$("#DataSecrectkeyModal").find("#GetData").hide();
		$("#DataSecrectkeyModal").find("#PreloadGetData").show();

		setTimeout(function(){


			$.post("https://pack1.sakorncable.com/index.php/management/authen",{SecrectKEY : telephone}
			,function(data,status){


				//var object =  JSON.parse(data);

				console.log(data);

				/*
				if (object.StatusAuthen == "true") {
  
					$("#NameAuthen").text(object.CustomerName);
					$("#StatusAuthen").text("Authentication Success");
					$("#TelephoneAuthen").val(object.Telephone);
					$("#DataSecrectkeyModal").modal("hide");
					$("#DataSecrectkeyModal").find("#GetData").show();


				}else{
					alert("เบอร์โทรศัพท์ผิดพลาด..");
					$("#DataSecrectkeyModal").find("#GetData").show();
					$("#DataSecrectkeyModal").find("#PreloadGetData").hide();

					return false;
				}
				*/



			});







		}, 1000);
 
 

	});



});