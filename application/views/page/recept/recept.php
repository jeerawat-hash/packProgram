<!DOCTYPE html>
<html lang="en">
<head>
  <title>ใบเสร็จรับเงินแบบย่อ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>ใบเสร็จรับเงินแบบย่อ</h1>
  <p>นิติบุคคลอาคารชุดเคหะชุมชนและบริการชุมชนเทพารักษ์ 3/1 PACK 1</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h3>รหัสสมาชิก : <?php echo $CustomerRecept[0]->CUST; ?></h3>
      <p>ชื่อ <?php echo $CustomerRecept[0]->Name; ?><br>ฝ่ายบริหารจัดการ : บริษัท สาครเคเบิล จำกัด</p> 
    </div>
    <div class="col-sm-9">
      <h3>รายการ</h3>
        <table class="table" id="ReceptTable">
          <thead>
            <tr> 
              <th scope="col">หมายเลขใบเสร็จ</th>
              <th scope="col">วันที่ส่งข้อมูล</th>
              <th scope="col">ยอด</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

<?php 
 
  foreach ($CustomerRecept as $Recept) {
  ?>

            <tr> 
              <td><?php echo $Recept->RECEIPT; ?></td>
              <td><?php echo $Recept->DATE; ?></td>
              <td><?php echo number_format($Recept->AMOUNT,2); ?> บาท</td>
              <td> <button type="button" class="btn btn-primary ReceptDetail" data-recept="<?php echo $Recept->RECEIPT; ?>" data-customer="<?php echo $Recept->CUST; ?>">รายละเอียด</button> </td>
            </tr>


<?php
  }

 ?>

            
            
          </tbody>
        </table>
 
  
<!-- Modal -->
<div class="modal fade" id="ReceptDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ReceptDetailLable">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="container">
          
          <table class="table" >
          <thead>
            <tr> 
              <th scope="col">หมายเลขใบเสร็จ</th>
              <th scope="col">รายการ</th>
              <th scope="col">ยอด</th> 
            </tr>
          </thead>
          <tbody id="TableDetail">
            
            


 
          </tbody>
        </table>

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button> 
      </div>
    </div>
  </div>
</div>











    </div>
  </div>
</div>




  <script type="text/javascript">
      
    $(function(){


      $("#ReceptTable").on("click",".ReceptDetail",function(){

        var Customer = $(this).attr("data-customer");
        var ReceptID = $(this).attr("data-recept");
        

        $("#ReceptDetailModal").modal("show");
        $("#ReceptDetailModal").find("#ReceptDetailLable").text("รายละเอียด "+ReceptID);
        $.post("https://pack1.sakorncable.com/index.php/s/detail"
          ,{
            CustomerID : Customer,
            ReceptID : ReceptID
          },function(data){

            var obj = JSON.parse(data);

            console.log(obj);
            var html = "";
            for (var i = 0; i < obj.length; i++) {

              html += "<tr>" +
                      "<td>"+obj[i].RECEIPT+"</td>"+
                      "<td>"+obj[i].InfoCode+"</td>"+
                      "<td>"+obj[i].AMOUNT+"บาท</td>"+
                      "</tr>";

            }
            $("#TableDetail").html(html);


        });



      });





    });

  </script>




</body>
</html>
