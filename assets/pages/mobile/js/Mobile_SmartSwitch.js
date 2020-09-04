$(function(){
 	
    
	$("#SmartSwitch1").on("click",function(){

		$("#SmartSwitchModal").modal("show");

		var Device = $("#78SMLight").val();


        var data = new FormData();          
        data.append('DeviceName', Device); 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/Mobile_app/getDeviceStatus",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){

        		var object = JSON.parse(data);


        		console.log(object);
                //$("#table_SmartSwitch_detail").html(html);
 


        	},
        	error : function(){


        	}
        });
 
		});

 

	








});