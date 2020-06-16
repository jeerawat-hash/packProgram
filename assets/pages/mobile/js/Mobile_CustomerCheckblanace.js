$(function(){
 	
    
	$("#CustomerCheckBlanace").on("click",function(){

		$("#CustomerCheckBlanaceModal").modal("show");

	});


	$("#table_blanace").on("click",".InfoBlanaceBar",function(){

		var data = $(this).attr("data-id");
		//alert(data);
		$("#InfoBalanceModal").modal("show");


	});


	








});