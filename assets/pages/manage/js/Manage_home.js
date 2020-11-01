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

				
				var object =  JSON.parse(data);
				console.log(object);
				
				if (object.Status == 1) {  

					/////// แสดงผลเมนู ////////
					if (object.ProjectCode == "P2") {

						$("#NameAuthen").text("บ้านเอื้ออาทรเทพารักษ์ 3/2");
						$("#SystemName").text("บ้านเอื้ออาทรเทพารักษ์ 3/2");
						//// menu hidden ///

						//// menu hidden ///


					}else
					if (object.ProjectCode == "P5") {

						$("#NameAuthen").text("Pack 1");
						$("#SystemName").text("นิติบุคคล Pack1 สาครเคเบิล");

						//// menu hidden ///


						//// menu hidden ///

					}

					/////// แสดงผลเมนู ////////
 
					
					$("#ProjectCode").var(object.ProjectCode);
					$("#StatusAuthen").text("Authentication Success");
					$("#TelephoneAuthen").val("NULL");
					$("#DataSecrectkeyModal").modal("hide");
					$("#DataSecrectkeyModal").find("#GetData").show();


				}else{
					alert("รหัสผิดพลาด..");
					$("#DataSecrectkeyModal").find("#GetData").show();
					$("#DataSecrectkeyModal").find("#PreloadGetData").hide();

					return false;

				}
			



			});







		}, 1000);
 
 

	});



});