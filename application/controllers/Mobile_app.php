<?php 
/**
 * 
 */
class Mobile_app extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
		$this->load->model("Mobile_model");
		$this->load->model("Devices_model");
 
 
	}

	public function index()
	{		

			$header['page_name'] = 'ลูกบ้านอาคารชุด Pack1';
			$header['page_focus'] = 'home';
			$header["back"] = "https://pack1.sakorncable.com/index.php/mobile_app/p5";

			$FAQ["Project"] = "ยืนยันตัวตนด้วยหมายเลขห้องบ้านเอื้ออาทรPack1";
			$FAQ["FAQ"] = "หมายเลขตึก-หมายเลขห้อง";
			$FAQ["Policy"] = "นิติเคหะชมชนเทพารักษ์ 3 Pack 1";
			

			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home",$FAQ);
			$this->load->view("page/template_mobile/footer");
			
	}
	public function p1()
	{

			$header['page_name'] = 'บ้านเอื้ออาทรเทพารักษ์ 3/1';
			$header['page_focus'] = 'home';
			$header["back"] = "https://pack1.sakorncable.com/index.php/mobile_app/p1";

			$FAQ["Project"] = "ยืนยันตัวตนด้วยหมายเลขบ้านเลขที่บ้านเอื้ออาทรเทพารักษ์ 3/1";
			$FAQ["FAQ"] = "บ้านเลขที่-หมายเลขห้อง";
			$FAQ["Policy"] = "บ้านเอื้ออาทรเทพารักษ์ 3/1"; 


			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home",$FAQ);
			$this->load->view("page/template_mobile/footer");

	}
	public function p2()
	{

			$header['page_name'] = 'บ้านเอื้ออาทรเทพารักษ์ 3/2';
			$header['page_focus'] = 'home';
			$header["back"] = "https://pack1.sakorncable.com/index.php/mobile_app/p2";

			$FAQ["Project"] = "ยืนยันตัวตนด้วยหมายเลขบ้านเลขที่บ้านเอื้ออาทรเทพารักษ์ 3/2";
			$FAQ["FAQ"] = "บ้านเลขที่-หมายเลขห้อง";
			$FAQ["Policy"] = "บ้านเอื้ออาทรเทพารักษ์ 3/2"; 


			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home",$FAQ);
			$this->load->view("page/template_mobile/footer");

	}
	public function p5()
	{
 	
 			$header['page_name'] = 'ลูกบ้านอาคารชุด Pack1';
			$header['page_focus'] = 'home';
			$header["back"] = "https://pack1.sakorncable.com/index.php/mobile_app/p5";

			$FAQ["Project"] = "ยืนยันตัวตนด้วยหมายเลขห้องบ้านเอื้ออาทรPack1";
			$FAQ["FAQ"] = "หมายเลขตึก-หมายเลขห้อง";
			$FAQ["Policy"] = "นิติเคหะชมชนเทพารักษ์ 3 Pack 1";
			

			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home",$FAQ);
			$this->load->view("page/template_mobile/footer");


	}
	public function callSecurity()
	{


			$Customer = $this->Mobile_model->CustomerAuth($_POST["CustomerID"],"P5");

			 #notify("อาคาร ".$_POST["CustomerID"]." ".$Customer[0]->CustomerINFO." ".$_POST["SecurityComment"],"oQozIXdKU8O8OEzQ6O20IEveDGqW6JwShsZKLSPgCyS");
			 notify("อาคาร ".$_POST["CustomerID"]." ".$Customer[0]->CustomerINFO." ติดต่อกลับ ".$_POST["SecurityComment"],"kyqritfOYo4moIIHG8c5QJjpM0a3H8HrJLN9BqAxLR0");

	}
	public function getDeviceStatus()
	{
			
		echo json_encode($this->Devices_model->getDataStatusLight($_POST["DeviceName"]));

	}
	public function login()
	{


		//print_r($_POST["CustomerID"]);
		echo json_encode( $this->Mobile_model->CustomerAuth($_POST["CustomerID"]) );
		// ทดสอบ ไลน์ส่วนตัว
		/*
			 shell_exec("  
	  	 	 curl -X POST -H 'Authorization: Bearer HOjJFkhy2vFmmgtUO79umXo0kULZtK1xDtxev92DC1v' -F 'message=".$_POST["CustomerID"]." เข้าใช้งานระบบ' https://notify-api.line.me/api/notify
			
			");
			*/
        // ทดสอบ ไลน์ส่วนตัว


	}
	public function getDataBlanace()
	{

		//print_r($_POST);
		echo json_encode( $this->Mobile_model->getDataBlanace($_POST["CustomerID"],$_POST["ProjectCode"]) );


	}
	public function getDataBlanaceDetail()
	{

		echo json_encode( $this->Mobile_model->getDataBlanaceDetail($_POST["CustomerID"],$_POST["ProjectCode"]) );
		//print_r($_POST);
		
	}
	public function getDataCustomerByCar()
	{
 
		echo json_encode($this->Mobile_model->getDataCustomerByCar($_POST["CarCode"],"P5"));
		
	}
	public function getDataPreviewChannel()
	{


		$ch_number = rand(0,10);

		$ChannelURL = "";
		$ChannelDesc = "";

		if (date("H:i:s") > "21:00" and date("H:i:s") < "24:00") {
			

			$ChannelURL = "https://app.sakorncable.com/live/sakornNews-.m3u8";
			$ChannelDesc = "ช่องข่าวสาคร เขตสมุทรปราการ เวลา 21:00น. และ เขตฉะเชิงเทรา 22:00น. สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

		//https://app.sakorncable.com/live/sakorndoc-.m3u8

		}else{

			switch ($ch_number) {
			case 0:
					
				$ChannelURL = "https://app.sakorncable.com/live/sunhd-.m3u8";
				$ChannelDesc = "ช่องSUN HD สามารถรับชมได้ที่กล่องสาครTV ช่อง 708 หรือ Nex By สาคร ช่อง 228 ติดต่อ 0632929995 และ 0632929996";

				break;
			case 1:
					
				$ChannelURL = "https://app.sakorncable.com/live/rmoviehd-.m3u8";
				$ChannelDesc = "ช่องRMovie HD สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 2:
					
				$ChannelURL = "https://app.sakorncable.com/live/truefilm2-.m3u8";
				$ChannelDesc = "ช่องTrueFilm2 สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 3:
					
				$ChannelURL = "https://app.sakorncable.com/live/trueseries-.m3u8";
				$ChannelDesc = "ช่องTrueSeries สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 4:
					
				$ChannelURL = "https://app.sakorncable.com/live/sky-.m3u8";
				$ChannelDesc = "ช่องSKY1 สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 5:
					
				$ChannelURL = "https://app.sakorncable.com/live/busmusic-.m3u8";
				$ChannelDesc = "ช่องBUSMusic สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 6:
					
				$ChannelURL = "https://app.sakorncable.com/live/sakorndoc-.m3u8";
				$ChannelDesc = "ช่องSakornDocumentary สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 7:
				 
				$ChannelURL = "https://app.sakorncable.com/live/sky1-.m3u8";
				$ChannelDesc = "ช่องSky สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 8:
					
				$ChannelURL = "https://app.sakorncable.com/live/trueww-.m3u8";
				$ChannelDesc = "ช่องTrue World Wile สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 9:
					 
				$ChannelURL = "https://app.sakorncable.com/live/truesport6-.m3u8";
				$ChannelDesc = "ช่องTrue SPORT 6 สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			
			default:

				$ChannelURL = "https://app.sakorncable.com/live/sakornNews-.m3u8";
				$ChannelDesc = "ช่องข่าวสาคร เขตสมุทรปราการ เวลา 21:00น. และ เขตฉะเชิงเทรา 22:00น. สามารถรับชมได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";
				
				break;
			}

		}


		$return = array("ChannelURL" => base64_encode($ChannelURL),"ChannelDesc" => $ChannelDesc);

		echo json_encode($return);


	}
	public function SendDataSlipToNotify()
	{
 

		if ($_FILES["Slipfile"]["type"] == "image/png" or $_FILES["Slipfile"]["type"] == "image/jpeg" or $_FILES["Slipfile"]["type"] == "image/jpg") {
				
			$file = $_POST["CustomerID"].uniqid();

			move_uploaded_file($_FILES["Slipfile"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$file.".jpg");
 

			$Member = $this->Mobile_model->getDataBlanace($_POST["CustomerID"],$_POST["ProjectCode"]);				

	        $UserMessage = $Member[0]->CustomerName." ทำการส่งภาพ";


	        $access_token = '';

			if ($_POST["ProjectCode"] == "P1") {
	        	 
	        	$access_token = 'vXKbuguxeBZSGcTfpG6Miiebehvxmz2yBWNYCIV2oQk';

	        }else
	        if ($_POST["ProjectCode"] == "P2") {
	        	 
	        	$access_token = 'ezT0XgGQsCtERqfTc8gCfCc9P37RDYs5L8vRnHb8kG0';

	        }else
	        if ($_POST["ProjectCode"] == "P5") {
	        	
	        	$access_token = 'TXeMDn7GHBb19THq8l2YoMRLmCplqJaxc94s8UaX1HH';
	        	
	        }
 
	        send_notify_message(" [ ".$UserMessage." เลขที่ ".$_POST["CustomerID"]." ]","https://pack1.sakorncable.com/upload/temp/".$file.".jpg",$access_token);

	       	 
	        echo "1";

	        //shell_exec(" rm  /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$file.".jpg");

		}else{

			echo "2";

		}

 
			

	    
  


	}


	









}


	function send_notify_message($message,$image_url,$token){
 		
 		$line_api = 'https://notify-api.line.me/api/notify';
    	$access_token = $token;//eWEGn8hijvdIqDQCdBRUffGcMUQ3UIp7yuyQjde1g3f  JOID9jUQBwuPZ17kE9BXLbnBnlsw73WKvtL16gLp8HS

	    $image_thumbnail_url = $image_url;  // max size 240x240px JPEG
	    $image_fullsize_url = $image_url; //max size 1024x1024px JPEG
	    $imageFile = $image_url;
	    $sticker_package_id = '';  // Package ID sticker
	    $sticker_id = '';    // ID sticker
  
		$message_data = array(
	  'imageThumbnail' => $image_thumbnail_url,
	  'imageFullsize' => $image_fullsize_url,
	  'message' => $message,
	  'imageFile' => $imageFile,
	  'stickerPackageId' => $sticker_package_id,
	  'stickerId' => $sticker_id
	    );

	   $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer '.$access_token );

	   $ch = curl_init();
	   curl_setopt($ch, CURLOPT_URL, $line_api);
	   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	   curl_setopt($ch, CURLOPT_POSTFIELDS, $message_data);
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	   $result = curl_exec($ch);
	   // Check Error
	   if(curl_error($ch))
	   {
	      $return_array = array( 'status' => '000: send fail', 'message' => curl_error($ch) );
	   }
	   else
	   {
	      $return_array = json_decode($result, true);
	   }
	   curl_close($ch);
		return $return_array;

	}

	  function notify($message,$token){

           $lineapi = $token; 
          $mms =  trim($message); 
       //   date_default_timezone_set("Asia/Bangkok");
          $con = curl_init();
          curl_setopt( $con, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
          // SSL USE 
          curl_setopt( $con, CURLOPT_SSL_VERIFYHOST, 0); 
          curl_setopt( $con, CURLOPT_SSL_VERIFYPEER, 0); 
          //POST 
          curl_setopt( $con, CURLOPT_POST, 1); 
          curl_setopt( $con, CURLOPT_POSTFIELDS, "message=$mms"); 
          curl_setopt( $con, CURLOPT_FOLLOWLOCATION, 1); 
          $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
            curl_setopt($con, CURLOPT_HTTPHEADER, $headers); 
          curl_setopt( $con, CURLOPT_RETURNTRANSFER, 1); 
          $result = curl_exec( $con ); 

  }


 ?>