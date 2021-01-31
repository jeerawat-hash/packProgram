<!DOCTYPE html>
<html lang="en">
<head>
  <title>ใบเสร็จรับเงิน นิติบุคคลสาครเคเบิล</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>ใบเสร็จรับเงินดิจิตอล</h1>
  <p>นิติบุคคล Pack1 เอื้ออาทรเทพารัก 3/1</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h3>ข้อมูล</h3>
      <p>ชื่อ <?php echo $CustomerRecept[0]->Name; ?></p> 
    </div>
    <div class="col-sm-9">
      <h3>รายการ</h3>
        <table class="table">
          <thead>
            <tr> 
              <th scope="col">หมายเลขใบเสร็จ</th>
              <th scope="col">จ่ายวันที่</th>
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






<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>











    </div>
  </div>
</div>

</body>
</html>
