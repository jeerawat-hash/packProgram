$(function(){

 	/*
	document.addEventListener('contextmenu', event => event.preventDefault());

	setInterval(function(){
	  var startTime = performance.now(), check, diff;
	  for (check = 0; check < 1000; check++){
	    console.log(check);
	    console.clear();
	  }
	  diff = performance.now() - startTime;
	  if (diff > 200){

	    //alert("Debugger detected!");
	    //window.location="https://pack1.sakorncable.com/index.php/mobile_app";
	    debugger;

	  }
	}, 500);
 	*/


 	
 		$("#DataAuthenModal").modal("show");
		$("#DataAuthenModal").find("#PreloadGetData").hide();
    


	$("#DataAuthenModal").find("#GetData").on("click",function(){


		var Customer = $("#CustomerID").val();

		if (Customer == "") {

			//alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
            swal("ผิดพลาด!", "กรุณากรอกหมายเลขห้องให้ถูกต้อง", "error");

			return false;

		}
		if (Customer == "0") {

			//alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
            swal("ผิดพลาด!", "กรุณากรอกหมายเลขห้องให้ถูกต้อง", "error");

			return false;

		}
		if (Customer.trim() == "") {

			//alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
            swal("ผิดพลาด!", "กรุณากรอกหมายเลขห้องให้ถูกต้อง", "error");

			return false;

		}
 
		$("#DataAuthenModal").find("#GetData").hide();
		$("#DataAuthenModal").find("#PreloadGetData").show();

		setTimeout(function(){


			$.post("https://pack1.sakorncable.com/index.php/mobile_app/login",{CustomerID : Customer}
			,function(data,status){


				var object =  JSON.parse(data);

				//console.log(data);
				console.log(object);

				
				if (object.length == 1) {
  
					$("#NameAuthen").text(object[0].CustomerINFO);
					$("#StatusAuthen").text("Authentication Success");
					$("#CustomerIDAuthen").val(object[0].CustomerID);
					$("#DataAuthenModal").modal("hide");
					$("#DataAuthenModal").find("#GetData").show();



					$("#ProjectCode").val(object[0].ProjectCode);
					



					/////// แสดงผลเมนู ////////
					if (object[0].ProjectCode == "P1") {
 
						//// menu hidden ///

							$(".P5").hide();
  							
  							$("#BankName").text("นิติบุคคลอาคารชุดบ้านเอื้ออาทรเทพารักษ์ 3/1");
							$("#BankCode").val("1922445182");
							$("#BankTYPE").text("ธนาคารทหารไทย(TMB)");


  							if (window.location.href != "https://pack1.sakorncable.com/index.php/mobile_app/p1") {
  								top.location.href = 'https://pack1.sakorncable.com/index.php/mobile_app/p1';
  							}

						//// menu hidden ///


					}else
					if (object[0].ProjectCode == "P2") {
 
						//// menu hidden ///

							$(".P5").hide();
  							
  							$("#BankName").text("นิติบุคคลอาคารชุด บ้านเอื้ออาทรเทพารักษ์ 3/2");
							$("#BankCode").val("1995478318");
							$("#BankTYPE").text("ธนาคารกรุงเทพ");


  							if (window.location.href != "https://pack1.sakorncable.com/index.php/mobile_app/p2") {
  								top.location.href = 'https://pack1.sakorncable.com/index.php/mobile_app/p2';
  							}

						//// menu hidden ///


					}else
					if (object[0].ProjectCode == "P5") {
  
						//// menu hidden ///

							$(".P5").show();
							
							$("#BankName").text("นิติบุคคลอาคารชุดเคหะชุมชนและบริการชุมชนเทพารักษ์ 3/1");
							$("#BankCode").val("3994048883");
							$("#BankTYPE").text("ธนาคารไทยพาณิชย์ (SCB)");

							if (window.location.href != "https://pack1.sakorncable.com/index.php/mobile_app/p5") {
  								top.location.href = 'https://pack1.sakorncable.com/index.php/mobile_app/p5';
  							}
							
						//// menu hidden ///

						//// POP up Call Telephone ////


 						$.post("https://pack1.sakorncable.com/index.php/mobile_app/checkTelephone",
 							{
 								CustomerID : object[0].CustomerID
 							},function(data){


 								////// call modal
 								//console.log(data);
 								var objtel = JSON.parse(data);
 								//console.log(objtel);
 								if(objtel[0].Telephone == null){
 									$("#CustomerGetDataTelephoneModal").modal("show");
 								}
 								



 						});
 

						//// POP up Call Telephone ////
						

					}




				}else{
					//alert("ข้อมูลผิดพลาด..");
            		swal("ผิดพลาด!", "ข้อมูลผิดพลาด....", "error");
					$("#DataAuthenModal").find("#GetData").show();
					$("#DataAuthenModal").find("#PreloadGetData").hide();

					return false;
				}
				
				



			});

 



		}, 1000);
 

	});


	$("#CustomerGetPolicyA").on("click",function(){


		$("#CustomerGetPolicyAModal").modal("show");


	});

	$("#CustomerGetPolicyB").on("click",function(){


		$("#CustomerGetPolicyBModal").modal("show");


	});







});