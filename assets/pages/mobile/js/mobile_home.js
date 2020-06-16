$(function(){
 	
 		$("#DataAuthenModal").modal("show");
		$("#DataAuthenModal").find("#PreloadGetData").hide();
    


	$("#DataAuthenModal").find("#GetData").on("click",function(){


		var telephone = $("#SecrectKEY").val();

		if (telephone == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (telephone == "0") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (telephone.trim() == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
 
		$("#DataAuthenModal").find("#GetData").hide();
		$("#DataAuthenModal").find("#PreloadGetData").show();

		setTimeout(function(){

/*
			$.post("https://pack1.sakorncable.com/index.php/management/authen",{SecrectKEY : telephone}
			,function(data,status){


				//var object =  JSON.parse(data);

				console.log(data);

				
				if (data == 1) {
  
					$("#NameAuthen").text("System");
					$("#StatusAuthen").text("Authentication Success");
					$("#TelephoneAuthen").val("NULL");
					$("#DataAuthenModal").modal("hide");
					$("#DataAuthenModal").find("#GetData").show();

				}else{
					alert("รหัสผิดพลาด..");
					$("#DataAuthenModal").find("#GetData").show();
					$("#DataAuthenModal").find("#PreloadGetData").hide();

					return false;
				}
				



			});







		}, 1000);
		*/
 
 

	});





});