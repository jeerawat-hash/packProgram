$(function(){
 
 

		$("#DataSecrectkeyModal").modal("show");
		$("#DataSecrectkeyModal").find("#PreloadGetData").hide();
	 

	/*NameAuthen
	StatusAuthen
	TelephoneAuthen*/


	$("#DataSecrectkeyModal").find("#GetData").on("click",function(){


		var telephone = $("#TelephoneID").val();

		if (telephone == "") {

			alert("กรุณากรอกเบอร์ให้ถูกต้อง");
			return false;

		}
		if (telephone == "0") {

			alert("กรุณากรอกเบอร์ให้ถูกต้อง");
			return false;

		}
		if (telephone.trim() == "") {

			alert("กรุณากรอกเบอร์ให้ถูกต้อง");
			return false;

		}
 
		$("#DataSecrectkeyModal").find("#GetData").hide();
		$("#DataSecrectkeyModal").find("#PreloadGetData").show();

		setTimeout(function(){


			$.post("https://pro.sakorncable.com/index.php/mobile_app/login",{Telephone : telephone}
			,function(data,status){

				var object =  JSON.parse(data);

				console.log(object);

				if (object.StatusAuthen == "true") {


				$.post("https://pro.sakorncable.com/index.php/Mobile_app/getDataCustomerCableRent",
					{Telephone : telephone}
					,function(dataa,status){
 
						var object2 = JSON.parse(dataa); 
						//console.log(object2);
						$("#CableNumber").text(object2.CableNumber+" จุด");
						$("#NetNumber").text(object2.NetNumber+" จุด");

					});

 





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



			});







		}, 1000);
 
 

	});



});