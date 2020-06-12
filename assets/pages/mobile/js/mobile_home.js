$(function(){
 
 

		$("#DataTelephoneModal").modal("show");
		$("#DataTelephoneModal").find("#PreloadGetData").hide();
	 

	/*NameAuthen
	StatusAuthen
	TelephoneAuthen*/


	$("#DataTelephoneModal").find("#GetData").on("click",function(){


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
 
		$("#DataTelephoneModal").find("#GetData").hide();
		$("#DataTelephoneModal").find("#PreloadGetData").show();

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
					$("#DataTelephoneModal").modal("hide");
					$("#DataTelephoneModal").find("#GetData").show();

				}else{
					alert("เบอร์โทรศัพท์ผิดพลาด..");
					$("#DataTelephoneModal").find("#GetData").show();
					$("#DataTelephoneModal").find("#PreloadGetData").hide();

					return false;
				}



			});







		}, 1000);
 
 

	});



});