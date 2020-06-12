$(function(){
 	
 	

 	$("#ReSyncNet").on("click",function(){

		
 		var Telephone = $("#TelephoneAuthen").val();
 		
 		$("#DataReSyncInternetModal").find("#TelephoneResync").val(Telephone);

 		$("#DataReSyncInternetModal").modal("show");


            var tablehtml = "";  

 			//////// test
			$.post("https://pro.sakorncable.com/index.php/Mobile_app/getDataPPPOEStatusByTelephone",
				{Telephone : Telephone}
				,function(data,status){
 
					var object = JSON.parse(data); 
                    console.log(object);
					console.log(object.PPPOE[0]);
 

                    for (var i = object.PPPOE.length - 1; i >= 0; i--) {

                        var status = "";

                        if (object.StatusSub[i] == 0) {
                            status = "<font color='red'>"+object.Status[i]+"</font>";
                        }else{
                            status = "<font color='green'>"+object.Status[i]+"</font>";
                        }
                        

                        tablehtml += "<tr>"+
                               "<td>"+object.PPPOE[i]+"</td>"+
                               "<td>"+status+"</td>"+
                                "</tr>";

                    }

	                  
 
 

	                tablehtml += "<tr>"+
	                          "<td colspan='3' > <font color='red'>**หมายเหตุ**<br>หากโปรไฟร์ไฟล์อินเตอร์เน็ตของท่านอยู่ในสถานะ ไม่พบการเชื่อมต่อหรือถูกตัดสัญญาณ กรุณาติดต่อ 063 292 9995 หรือ แจ้งงานบริการเพื่อประสานช่างเข้าดำเนินการแก้ไข ขออภัยในความไม่สะดวก</font> </td>"+
	                          "</tr>";

                 	$("#DataReSyncInternetModal").find("#table_resyncnet_detail").html(tablehtml);

 


				});

			//////// test

 	});



 



});