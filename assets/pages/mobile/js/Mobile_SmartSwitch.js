$(function(){
 	
    
	$("#SmartSwitch1").on("click",function(){

		$("#SmartSwitchModal").modal("show");

		var Device = "78SMLight";


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
        		var status = "ปิด";
        		var btn = "เปิด";
        		var color = "btn-success";
        		var dataid = 0;

        		if (object[0].Is_Open == 1) {
        			 status = "เปิด";
        			 btn = "ปิด";
        			 color = "btn-danger";
        			 dataid = 1;


        		}

        		var html = " <tr><td>ไฟทางเดินตึก 78</td><td> "+status+" </td>"+
                           "</tr>"+
                           "<tr><td colspan='3' > "+
                               "<button class='btn "+color+" btn-lg btn-block waves-effect SmartSwitchBTNClick' data-id='"+dataid+"' >"+btn+"</button> </td>"+
                           "</tr> ";

                $("#table_SmartSwitch_detail").html(html);
 

        	},
        	error : function(){


        	}
        });
 
		});

 		

 		$("#SmartSwitchModal").on("click",".SmartSwitchBTNClick",function(){

 			var dataid = $(this).attr("data-id");

			var Ch = "\/B078\/MainSwitch\/WayLight";

	        var data = new FormData();  
	        data.append('Status', "sss");  

	        console.log(dataid);
/*
	        $.ajax({
	        	url:"https://pack1.sakorncable.com/index.php/Devices/IOTDevice",
	        	type:"POST",
	        	data:data,
	        	contentType : false,
	        	cache : false,
	        	processData : false,
	        	success : function(data){


	        	},
	        	error : function(){


	        	}
	        });
*/




 		});

	








});