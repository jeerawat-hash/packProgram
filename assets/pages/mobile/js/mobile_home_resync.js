$(function(){
 	
 	
	$("#DataReSyncCableModal").find("#PreloadSendData").hide();

 	$("#ReSyncCable").on("click",function(){

		
 		var Telephone = $("#TelephoneAuthen").val();
 		
 		$("#DataReSyncCableModal").find("#TelephoneResync").val(Telephone);

 		$("#DataReSyncCableModal").modal("show");


            var tablehtml = "";  

 			//////// test
			$.post("https://pro.sakorncable.com/index.php/Mobile_app/getDataCustomerServicesAllCable",
				{Telephone : Telephone}
				,function(data,status){
 
					var object = JSON.parse(data); 
					console.log(object);
					console.log(object.CardStatus);

					for (var i = 0; i < object.CardNO.length; i++) {

                    var checkbox = "";

	                if (object.CardStatus[i] == 1) {

	                    checkbox += "<input type='checkbox' id='is_checkbox_"+i+"'  class='filled-in chk-col-black CardNO' value='"+object.CardNO[i]+"'><label for='is_checkbox_"+i+"'></label>";
	                
	                }else{

	                    checkbox += "<font color='red'>ถูกตัดสัญญาณ</font>";

	                }



	                  tablehtml += " <tr>"+
	                           "<td>"+checkbox+"</td>"+
	                           "<td>"+object.CardNO[i]+"</td>"+
	                           "<td>"+object.CardStatusSub[i]+"</td>"+
	                            "</tr>";


	                }


	                tablehtml += "<tr>"+
	                          "<td colspan='3' > <font color='red'>**หมายเหตุ**<br>ระบบจะใช้เวลาดำเนินการย้ำสัญญาณ 5 - 10 นาที และ หากการ์ดถูกตัดสัญญาณจะไม่สามารถขอย้ำสัญญาณจากระบบได้กรุณาติดต่อ บริษัทในเวลาทำการ</font> </td>"+
	                          "</tr>";

                 	$("#DataReSyncCableModal").find("#table_resynccable_detail").html(tablehtml);

 


				});

			//////// test

 	});




    $("#DataReSyncCableModal").find("#SendData").on("click",function(){

 		
        var Telephone = $("#DataReSyncCableModal").find("#TelephoneResync").val();

    	var data = new FormData();     
        ////// เพิ่มข้อมูลเข้า          
        data.append('Telephone', Telephone); 
        ////// เพิ่มข้อมูลเข้า array     
		var i = 0 ;
        var paycode = new Array();
        $(".CardNO:checked").each(function(){

			var value = $(this).attr("value");
			paycode[i] = value;
            ////// เพิ่มข้อมูลเข้า array   
            data.append('CardNO[]', value );
	        ////// เพิ่มข้อมูลเข้า array                     
			i++;
		});

 
        if ( paycode.length == 0 ) {
            alert("กรุณาเลือก การ์ด !!!");
            return false;
        }


        $("#DataReSyncCableModal").find("#SendData").hide();
        $("#DataReSyncCableModal").find("#PreloadSendData").show();

		setTimeout(function(){ 


			$.ajax({
                url: "https://pro.sakorncable.com/index.php/Mobile_app/updateResyncCard",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    //console.log(data);
					
                    if (data == 1) {
                    
                    alert("ส่งคำสั่งย้ำสัญญาณสำเร็จกรุณารอ 5 - 10 นาทีระบบกำลังดำเนินการย้ำสัญญาณ....");

                    $("#DataReSyncCableModal").modal("hide");

                    $("#DataReSyncCableModal").find("#SendData").show();
                    $("#DataReSyncCableModal").find("#PreloadSendData").hide();

                    }else{

                        alert("ผิดพลาด....");
                        $("#DataReSyncCableModal").find("#SendData").show();
                        $("#DataReSyncCableModal").find("#PreloadSendData").hide();

                    } 
 					
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataReSyncCableModal").find("#SendData").show();
                        $("#DataReSyncCableModal").find("#PreloadSendData").hide();

                }
                });

 


		}, 2000);






    });











});