function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}


$(function(){
 
 	$("#CheckBlanace").on("click",function(){

					
 		var Telephone = $("#TelephoneAuthen").val(); 

 		$("#DataCheckBlanaceModal").modal("show");


 			var tablehtml = "";  
 
            $.post("https://pro.sakorncable.com/index.php/liff_blanace/getBalancenew",
              {Telephone: Telephone },function(data,status,response){

                var object = JSON.parse(data);

                console.log(object);
 
 				         $("#TelephoneBlanace").val(object.telephone);
 
                $("#telephone").attr("value",object.telephone);


                for (var i = 0; i < object.data.length; i++) {


                    var statusPaycode = "";

                    if (object.data[i].suspend == 1) {
                      statusPaycode = "<font color='red'>ถูกตัดสัญญาณ</font>";
                    }else{
                      statusPaycode = "<font color='green'>รอบบิลปกติ</font>";
                    }
 
                    var money = object.data[i].debt;

                    var cut =  money.length - 5;  
                    
                    var moneya = money.substring( 0 , cut);
                    
                    var suff = money.substring( cut , money.length);


                  tablehtml += " <tr>"+ 
                           "<td>"+object.data[i].CustomerName+"<br>"+object.data[i].PayCode+"<br> "+statusPaycode+"   <button class='btn btn-success btn-lg btn-block waves-effect viewBar' data-image='https://barcode.tec-it.com/barcode.ashx?data="+object.data[i].PayCode+"&code=Code128&dpi=96&dataseparator=' >แสดงCodeชำระเซเว่น</button>  </td>"+
                           "<td>"+ formatNumber(moneya) + suff +" บาท</td>"+
                            "</tr>";
                            

                }

                tablehtml += "<tr>"+
                          "<td colspan='2' > <font color='green'>**หมายเหตุ**<br>การชำระผ่านเค้าเตอร์เซอร์วิส หรือ เซเว่นจะเป็นการทำรายการผ่านระบบอัตโนมัติเมื่อทำการชำระค่าบริการแล้วระบบจะดำเนินการเปิดสัญญาณให้ท่าน ภายใน 15 นาที ตลอด 24 ชม. </font> </td>"+
                          "</tr>";

                 $("#table_blanace_detail").html(tablehtml);
                  
             
            });

 

 	});




 	$("#table_blanace").on("click",".viewBar",function(event){
     	event.preventDefault();
     	var image = $(this).attr("data-image");
              

     	$('.imagepreview').attr('src', image);

     	$("#imagemodal").modal("show");


   	});



});