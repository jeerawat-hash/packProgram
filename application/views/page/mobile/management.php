
<!----- Overflow Modal ------->
<style >
  
.modal {
  overflow-y:auto;
}

  
</style>
<!----- Overflow Modal ------->
  

 


    <section class="content">
        <div class="container-fluid">


            <div class="block-header">
                <h2>สถานะของสมาชิก</h2>
            </div>



            <!-- Notiftcation -->
            <div class="row clearfix">
                 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-green">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">ใช้งานเคเบิล</div>
                            <div class="number" id="CableNumber"></div> 
                        </div>
                    </div>
                </div> 

 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-indigo">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">ใช้งานเน็ต</div>
                            <div class="number" id="NetNumber"></div> 

                        </div>
                    </div>

                </div> 



            </div>
            <!-- Notiftcation -->


            <div class="block-header">
                <h2>เลือกบริการ</h2>
            </div>



            <!-- Menu -->
            <div class="row clearfix">
                 
                <div id="CheckBlanace" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-blue">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">ตรวจสอบยอดค้าง</div>
                        </div>
                    </div>

                </div> 
 
                <div id="SendSlip" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-green">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">ส่งใบเสร็จ</div>
                        </div>
                    </div>

                </div> 
 
                <div id="SendIssue" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">access_alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">แจ้งงานบริการ</div>
                        </div>
                    </div>

                </div> 

    
                <div id="ReSyncCable" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">

                            <div class="text">ย้ำสัญญาณเคเบิล</div>
                            <div class="text">ขึ้น No Entitlement</div> 

                        </div>
                    </div>

                </div> 

                <div id="ReSyncNet" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-indigo">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">ตรวจสอบสถานะเน็ต</div>
                        </div>
                    </div>

                </div> 
 
            <!-- Menu -->
 

 

        </div>
    </section>









 
        <!-- DataCheckBlanaceModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataCheckBlanaceModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">เช็คค่าบริการต้องชำระ</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" readonly id="TelephoneBlanace" class="form-control" placeholder="Telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            
 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <table id="table_blanace" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                   
                                                  <th>การ์ด</th>
                                                  <th>ยอดค้าง</th>
                                               
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_blanace_detail" class="scrollit">   
                                                
                         
                         
                                                

                                              </tbody>
                                      </table> 

 

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <table id="table_bank" class="table table-striped table-bordered table-hover">
                                          <thead>
                                            <tr>
                                               
                                              <th>ธนาคาร</th>
                                              <th>เลขบัญชี</th>
                                           
                                            
                                            </tr>

                                          </thead>

                                          <tbody id="table_bank_detail" class="scrollit">   
                                            
                                            <tr>
                                              <td>กสิกร</td>
                                              <td>0311471279</td>
                                            </tr>
                                            <tr>
                                              <td>ไทยพาณิชย์</td>
                                              <td>3203024966</td>
                                            </tr>
                                            <tr>
                                              <td>กรุงไทย</td>
                                              <td>9863005282</td>
                                            </tr>
                                            <tr>
                                              <td>กรุงเทพ</td>
                                              <td>0097744197</td>
                                            </tr>
                                            <tr>
                                              <td>กรุงศรี</td>
                                              <td>5181677639</td>
                                            </tr>
                                            <tr>
                                              <td>ทหารไทย</td>
                                              <td>2722116296</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2" > <font color="red">**หมายเหตุ**<br>การชำระผ่านการโอนธนาคารจำเป็นต้องส่งข้อมูลการชำระค่าบริการผ่านเมนู ส่งใบเสร็จ และพนักงานจะยิงรับชำระในเวลาปฏิบัติงานคือ 10:00 - 18:00น. โดยเมื่อส่งใบเสร็จเข้ามาในระบบแล้วจะมีการเปิดสัญญาณให้สมาชิกชั่วคราวและสามารถรับชมช่องรายการได้ปกติภายใน 15 นาที</font> </td>
                                           
                                            </tr>

                                             

                                          </tbody>
                                  </table>
                                        
                                    </div>
                                </div>
                        </div>
                         
 




                        </div>
                        <div class="modal-footer">
                            
                            <!--<button type="button" class="btn btn-lg btn-success waves-effect">ส่งภาพ</button> -->
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">              
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">ปิด</span></button>
                  <img src="" class="imagepreview" style="width: 100%;" >
                </div>
              </div>
            </div>
          </div>
          <!-- DataCheckBlanaceModal -->



        <!-- DataSendSlipModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataSendSlipModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">ส่งใบเสร็จยืนยันการชำระ</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" readonly id="TelephoneSlip" class="form-control" placeholder="Telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            
 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         

                                        <table id="table_member" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                   
                                                  <th>เลือก</th>
                                                  <th>การ์ด</th>
                                               
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_member_detail" class="scrollit">   
                                                
                         



                                              </tbody>
                                        </table>
 

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         

                                    <div id="ContainerPreOpenCard" > 
                                     <br> 
                                     <input type="checkbox" class="filled-in chk-col-black" name="IsPreOpen" id="IsPreOpen" value="true" />
                                     <label for="IsPreOpen">ต้องการเปิดสัญญาณ ชั่วคราว</label>
                                    </div>

                                    <br>
                                    
                                    <div id="StatusPreOpenCard" >
                                       <label><font color="RED">ขออภัยท่านใช้สิทธิการต่อสัญญาณชั่วคราวในเดือนนี้แล้ว</font></label> 
                                    </div>
                                    
                                    <br>

                                    <div id="StatusOpen"  >
                                       <label><font color="Green">ขณะนี้อยู่ในช่วงเวลาให้บริการ</font></label> 
                                    </div>


                                      <div id="fileupload" style="position:relative;">
                                        <a class='btn btn-primary' href='javascript:;'>
                                        เลือกภาพ..
                                        <input type="file" id="imagefile" name="imagefile" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                                        </a><span class='label label-info' id="upload-file-info"></span>
                                        <input type="imagefileTemp" hidden readonly id="imagefileTemp" name="imagefileTemp">
                                    </div>


                                        
                                    </div>
                                </div>
                        </div> 






                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งภาพ</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div> 
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>


        <!-- DataSendIssueModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataSendIssueModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">แจ้งปัญหาการใช้งาน</h4>
                        </div>
                        <div class="modal-body">


 

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" readonly id="TelephoneIssue" class="form-control" placeholder="Telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            
 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" id="Comment" class="form-control no-resize" placeholder="ระบุปัญหาที่ท่านพบ....."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <input type="checkbox" id="NoEntitlement" class="filled-in chk-col-black "  />
                                        <label for="NoEntitlement">ขึ้น No Entitlement</label>


                                        <div id="fileupload" style="position:relative;">
                                        <a class='btn btn-primary' href='javascript:;'>
                                        เลือกภาพ..
                                        <input type="file" id="imagefile_issue" name="imagefile_issue" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                                        </a><span class='label label-info' id="upload-file-info"></span>
                                        <input type="text" hidden readonly id="imagefileTemp_issue" name="imagefileTemp_issue">
                                        </div>

                                    </div>
                                </div>
                        </div> 

 

                        </div>
                        <div class="modal-footer">
                            <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งข้อมูล</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div> 
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- DataReSyncCableModal -->
            <div class="modal fade"  data-backdrop="static" data-keyboard="false" id="DataReSyncCableModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">ย้ำสัญญาณเคเบิล</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" readonly id="TelephoneResync" class="form-control" placeholder="Telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            
 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         

                                        <table id="table_resynccable" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                   
                                                  <th>เลือก</th>
                                                  <th>การ์ด</th>
                                                  <th>สถานะ</th>
                                               
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_resynccable_detail" class="scrollit">   
                                                
                         



                                              </tbody>
                                        </table>
 

                                    </div>
                                </div> 
                        </div> 




                        </div>
                        <div class="modal-footer">
                            <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งข้อมูลย้ำสัญญาณ</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div> 
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- DataReSyncInternetModal -->
            <div class="modal fade"  data-backdrop="static" data-keyboard="false" id="DataReSyncInternetModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">ตรวจสอบสถานะเน็ต</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" readonly id="TelephoneResync" class="form-control" placeholder="Telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            
 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         

                                        <table id="table_resyncnet" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                   
                                                  <th>Username</th>
                                                  <th>สถานะ</th> 
                                               
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_resyncnet_detail" class="scrollit">   
                                                
                         



                                              </tbody>
                                        </table>
 

                                    </div>
                                </div> 
                        </div> 




                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>



 
 

 

            <!-- Default Size -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataTelephoneModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">ระบุเบอร์โทรที่ลงทะเบียนไว้กับบริษัท</h4>
                        </div>
                        <div class="modal-body">


                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="" class="form-control" id="TelephoneID" name="TelephoneID" required>
                                        <label class="form-label">เบอร์โทร(ตัวอย่าง 0800000000)</label>
                                    </div>
                            </div>
 
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="GetData" class="btn btn-lg btn-danger waves-effect">ตรวจสอบ</button>

                            <div class="preloader" id="PreloadGetData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


     
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home.js"></script>
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home_checkblanace.js"></script>
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home_resync.js"></script>
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home_resyncnet.js"></script>
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home_sendIssue.js"></script>
        <script src="https://pro.sakorncable.com/assets/new/pages/mobile/js/mobile_home_sendslip.js"></script>
        




























        <script type="text/javascript">



        function encodeImageFileAsURL(element,temp) {  

            var uploadFile = document.getElementById(element).files[0];

            var fileReader = new FileReader();
            fileReader.onload = function (event) {
              var image = new Image();
              
              image.onload=function(){ 
                  var canvas=document.createElement("canvas");
                  var context=canvas.getContext("2d");
                  canvas.width=image.width/4;
                  canvas.height=image.height/4;
                  context.drawImage(image,
                      0,
                      0,
                      image.width,
                      image.height,
                      0,
                      0,
                      canvas.width,
                      canvas.height
                  );
                  
                 //console.log(canvas.toDataURL());
                 $("#"+temp).val(canvas.toDataURL()); 

              }
              image.src=event.target.result;
            };

            fileReader.readAsDataURL(uploadFile);


        }
        ////// เข้ารหัสภาพเพื่อเก็บใน array ///////








    $(function(){


    ////// inital image url a 
    $("#DataSendSlipModal").find("#imagefile").on("change",function(){

    /// เรียกใช้งานการแปลงไฟล์เป็น binary
        encodeImageFileAsURL( "imagefile" , "imagefileTemp" ); 
    /// เรียกใช้งานการแปลงไฟล์เป็น binary
 

    });

    $("#DataSendIssueModal").find("#imagefile_issue").on("change",function(){

    /// เรียกใช้งานการแปลงไฟล์เป็น binary
        encodeImageFileAsURL( "imagefile_issue" , "imagefileTemp_issue" ); 
    /// เรียกใช้งานการแปลงไฟล์เป็น binary

    });

 

/*
    $("#DataSendSlipModal").find("#imagefile").change(function(){
            var file_data = $('#imagefile').prop('files')[0];   
            var form_data = new FormData();                  
            form_data.append('file', file_data);
            form_data.append('test', "aaaa" );

            $.ajax({
                url: "https://pro.sakorncable.com/index.php/Mobile_app/fileupload",
                type: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){
                    console.log(data);
                }
                });
            });
*/
/*
            ////// ไฟล์
            var file_data1 = $('#imagefile1').prop('files')[0];
            var file_data2 = $('#imagefile2').prop('files')[0];
            var file_data3 = $('#imagefile3').prop('files')[0];
            ////// ไฟล์
            var form_data = new FormData();      
            ////// เพิ่มข้อมูลเข้า array เดิมใช้ { Username : 'aaaa',Password : 'bbbbb' }            
            form_data.append('imagefile1', file_data1);
            form_data.append('imagefile2', file_data2);
            form_data.append('imagefile3', file_data3);
            form_data.append('Username', "aaaa" );
            form_data.append('Password', "bbbb" );
            ////// เพิ่มข้อมูลเข้า array เดิมใช้ { Username : 'aaaa',Password : 'bbbbb' }            

            $.ajax({
                url: "https://pro.sakorncable.com/index.php/Mobile_app/fileupload",
                type: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){
                    console.log(data);
                }
                });
*/




 
    
    $("#DataSendSlipModal").find("#PreloadSendData").hide();

    $("#SendSlip").on("click",function(){


        $("#DataSendSlipModal").find("#imagefile").val("");
        $("#DataSendSlipModal").find("#imagefileTemp").val("");
                    
        var Telephone = $("#TelephoneAuthen").val();



        $("#DataSendSlipModal").modal("show");

        //$("#ContainerPreOpenCard").hide();
            $("#DataSendSlipModal").find("#ContainerPreOpenCard").hide();
            $("#DataSendSlipModal").find("#StatusPreOpenCard").hide();
            $("#DataSendSlipModal").find("#StatusOpen").hide();
            $("#DataSendSlipModal").find("#SendData").show();
            $("#DataSendSlipModal").find("#fileupload").show();

              var tablehtml = "";  


            $.post("https://pro.sakorncable.com/index.php/liff_sendslip/getMemberNew",
              {Telephone: Telephone },function(data,status,response){

                var object = JSON.parse(data);

                console.log(object);
    
                $("#TelephoneSlip").val(object.telephone);

                //////// seq 
 

                var telephone_post = object.telephone;
                $.post("https://pro.sakorncable.com/index.php/liff_sendslip/getDataPreOpenCard"
                ,
                {
                  Telephone : telephone_post
                }
                ,function(data,status,response){

                  
                  var object = JSON.parse(data);

                  console.log(object);

                  var myDateTime = new Date(object.Time);

                  var minutes = myDateTime.getMinutes();
                  var hours = myDateTime.getHours();


                  //console.log(hours);

                  if (object.Cycle == "0") {
   

              <?php 

                    if (date("H:i:s") > "18:50:00" or date("H:i:s") < "08:30:00") {
              ?>

                     $("#DataSendSlipModal").find("#ContainerPreOpenCard").show();

   
              <?php
                    }else{


                          if (date("H:i:s") > "10:00:00") {
                    ?>


                          $("#DataSendSlipModal").find("#StatusOpen").show();


                  <?php
                          }
          
                    }

                     ?>
                     
                      //$("#ContainerPreOpenCard").attr("visibility", "hidden");
                    //$("#ContainerPreOpenCard").attr("hidden", "false");
    
                        //console.log($("#ContainerPreOpenCard").is(":hidden"));

                  }else{


                    $("#DataSendSlipModal").find("#StatusPreOpenCard").show();
 

                  }
 

                });
                //////// seq
 

                for (var i = 0; i < object.data.length; i++) {

                    var checkbox = "";

                if (object.data[i].Suspend != 1) {

                    checkbox += "<input type='checkbox' id='md_checkbox_"+i+"'  class='filled-in chk-col-black PayCodeValue' value='"+object.data[i].PayCode+'|'+object.data[i].DB+"'><label for='md_checkbox_"+i+"'></label>";
                }else{
                    
                    
                    checkbox += "<input type='checkbox' id='md_checkbox_"+i+"'  class='filled-in chk-col-black PayCodeValue' value='"+object.data[i].PayCode+'|'+object.data[i].DB+"'><label for='md_checkbox_"+i+"'></label>";
                    
                    //checkbox += "<font color='red'>ยกเลิกแล้ว</font>";

                }



                  tablehtml += " <tr>"+
                           "<td>"+checkbox+"</td>"+
                           "<td>"+object.data[i].CustomerName+"<br>"+object.data[i].PayCode+"<br></td>"+
                            "</tr>";


                }


                tablehtml += "<tr>"+
                          "<td colspan='2' > <font color='red'>**หมายเหตุ**<br>การชำระผ่านการโอนธนาคารจำเป็นต้องส่งข้อมูลการชำระค่าบริการผ่านเมนู ส่งใบเสร็จ และพนักงานจะยิงรับชำระในเวลาปฏิบัติงานคือ 10:00 - 19:00น. หลังจากเวลาดังกล่าวท่านสามารถเลือกปุ่ม '<font color='green'>ต้องการเปิดสัญญาณชั่วคราว</font>' ด้านล่างเมื่อส่งใบเสร็จเข้ามาในระบบแล้วจะมีการเปิดสัญญาณให้สมาชิกชั่วคราวโดยหากเป็นเน็ตจะต้องถอดปลั๊กเร้าเตอร์ใหม่1ครั้งหลังดำเนินการ 5นาทีและสามารถกลับมาใช้งานได้ปกติภายใน 15 นาที(<font color='green'>การต่อสัญญาณชั่วคราว นอกช่วงเวลาให้บริการนั้นจะสามารถดำเนินการได้เพียง 1 ครั้งต่อเดือนโดยระบบจะตัดสัญญาณเพื่อตรวจสอบข้อมูล 1 ชม ของวันถัดมาในเวลา 14:00น.-15:00 น.จากนั้นจะสามารถรับชมภาพได้ปกติ</font>)</font> </td>"+
                          "</tr>";



                 $("#DataSendSlipModal").find("#table_member_detail").html(tablehtml);

                 if (tablehtml == "") {
                    $("#DataSendSlipModal").find("#SendData").hide();
                    $("#DataSendSlipModal").find("#fileupload").hide();
                 }
             
              });
 
    });






















        
 

});




        </script>

