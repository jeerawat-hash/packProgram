$(function(){
 	
 	
	$("#DataSendIssueModal").find("#PreloadSendData").hide();

 	$("#SendIssue").on("click",function(){

					
 		var Telephone = $("#TelephoneAuthen").val();

 		$("#DataSendIssueModal").modal("show");

        $("#DataSendIssueModal").find("#TelephoneIssue").val(Telephone);
        $("#DataSendIssueModal").find("#Comment").val("");
        $("#DataSendIssueModal").find("#imagefileTemp_issue").val("");
        $("#DataSendIssueModal").find("#imagefile_issue").val("");
        
        $("#DataSendIssueModal").find("#SendData").show();
        $("#DataSendIssueModal").find("#PreloadSendData").hide();


 	});

 	$("#DataSendIssueModal").find("#SendData").on("click",function(){
 

 	var Telephone = $("#TelephoneAuthen").val();
        var Comment = $("#DataSendIssueModal").find("#Comment").val();
        var Image = $("#DataSendIssueModal").find("#imagefileTemp_issue").val();
        
 

        if (Comment == "") {
        	alert("กรุณาระบุปัญหา");
        	return false;
        }
        if (Image == "") {
        	alert("กรุณาเลือกภาพ");
        	return false;
        }

        ////// NoEntitlement 

        var NoEntitlement =  $("#DataSendIssueModal").find("#NoEntitlement:checked").val();
        var IsResync = 0;
        if (NoEntitlement == "on") {
    
        	IsResync = 1;

        }
        ////// NoEntitlement

        console.log(Telephone);
        console.log(IsResync);
        console.log(Comment);
        //console.log(Image);

        ////// ไฟล์ 
        var Issue_file = $('#imagefile_issue').prop('files')[0]; 
        ////// ไฟล์
        var data = new FormData();      
        ////// เพิ่มข้อมูลเข้า          
        data.append('IssueImage', Issue_file); 
        data.append('Telephone', Telephone );
        data.append('IsResync', IsResync );
        data.append('Comment', Comment );
        ////// เพิ่มข้อมูลเข้า array    




        $("#DataSendIssueModal").find("#SendData").hide();
        $("#DataSendIssueModal").find("#PreloadSendData").show();

		setTimeout(function(){ 
        

 
        $.ajax({
                url: "https://pro.sakorncable.com/index.php/liff_problem/SendProblem",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){


                    console.log(data);

                    if (data == "1") {

                                alert("แจ้งงานบริการสำเร็จ");

                                $("#DataSendIssueModal").modal("hide");
                                $("#DataSendIssueModal").find("#SendData").show();
                                $("#DataSendIssueModal").find("#PreloadSendData").hide();

                        }else{
                                alert("ผิดพลาด");
                                
                                $("#DataSendIssueModal").find("#SendData").show();
                                $("#DataSendIssueModal").find("#PreloadSendData").hide();

                        }
 
                    
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSendIssueModal").find("#SendData").show();
                        $("#DataSendIssueModal").find("#PreloadSendData").hide();

                }
                });




 


        /*
        $.post("https://pro.sakorncable.com/index.php/liff_problem/updateProblemNew"
        	,{
        		Telephone : Telephone,
        		IsResync : IsResync,
        		Comment : Comment,
        		Image : Image
        	},
        	function(data,status,response){

        		console.log(data);

        		if (data == "1") {

        			alert("แจ้งงานบริการสำเร็จ");

 					$("#DataSendIssueModal").modal("hide");
        			$("#DataSendIssueModal").find("#SendData").show();
        			$("#DataSendIssueModal").find("#PreloadSendData").hide();

        		}else{
        			alert("ผิดพลาด");
        			
        			$("#DataSendIssueModal").find("#SendData").show();
        			$("#DataSendIssueModal").find("#PreloadSendData").hide();

        		}


        	});
        */


		}, 1000);









 


 	});







});