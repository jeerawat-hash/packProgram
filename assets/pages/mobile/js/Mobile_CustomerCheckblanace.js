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

        		console.log(data);

        	},
        	error : function(){


        	}
        });



        




	});


	$("#table_blanace").on("click",".InfoBlanaceBar",function(){

		var data = $(this).attr("data-id");
		//alert(data);
		$("#InfoBalanceModal").modal("show");



	});


	








});