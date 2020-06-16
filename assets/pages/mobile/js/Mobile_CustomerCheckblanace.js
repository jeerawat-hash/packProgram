$(function(){
 	
    
	$("#CustomerCheckBlanace").on("click",function(){

		$("#CustomerCheckBlanaceModal").modal("show");

		var CustomerID = $("#CustomerIDAuthen").val();


            
        var data = new FormData();          
        data.append('CustomerID', CustomerID); 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/mobile_app/getDataBlanace",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){



        		var object = JSON.parse(data);
        		console.log(object);

        		$(".CustomerNameLabel").text(object[0].CustomerName);


        		var html = "<tr><td>"+object[0].CustomerID+"</td><td>"+object[0].AmountTotal+" บาท</td></tr>"+
        						"<tr>"+
        						"<td colspan='3' > <button class='btn btn-success btn-lg btn-block waves-effect InfoBlanaceBar' data-id='"+object[0].CustomerID+"' >แสดงรายละเอียด</button> </td>"+
                                "</tr>";


                $("#table_blanace_detail").html(html);
 


        	},
        	error : function(){


        	}
        });








	});


	$("#table_blanace").on("click",".InfoBlanaceBar",function(){

		var dataid = $(this).attr("data-id");
		//alert(data);

		var data = FormData();
		data.append("CustomerID",dataid);

		$.ajax({
			url : "https://pack1.sakorncable.com/index.php/mobile_app/getDataBlanaceDetail",
			type : "POST",
			data : data,
			contentType : false,
			cache : false,
			processData : false,
			success : function(data){


				console.log(data);
			

			},
			error : function(){

			}
		});


		$("#InfoBalanceModal").modal("show");



	});


	








});