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
 
 
	}

	public function index()
	{		

			$header['page_name'] = 'ลูกบ้านอาคารชุดPack1';
			$header['page_focus'] = 'home';
			 

			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home");
			$this->load->view("page/template_mobile/footer");
			
	}
	public function login()
	{


		//print_r($_POST["CustomerID"]);
		echo json_encode( $this->Mobile_model->CustomerAuth($_POST["CustomerID"]) );
		// ทดสอบ ไลน์ส่วนตัว
			 shell_exec("  
	  	 	 curl -X POST -H 'Authorization: Bearer HOjJFkhy2vFmmgtUO79umXo0kULZtK1xDtxev92DC1v' -F 'message=".$_POST["CustomerID"]." เข้าใช้งานระบบ' https://notify-api.line.me/api/notify
			
			");
        // ทดสอบ ไลน์ส่วนตัว


	}
	public function getDataBlanace()
	{

		//print_r($_POST);
		echo json_encode( $this->Mobile_model->getDataBlanace($_POST["CustomerID"]) );


	}
	public function getDataBlanaceDetail()
	{

		echo json_encode( $this->Mobile_model->getDataBlanaceDetail($_POST["CustomerID"]) );
		//print_r($_POST);
		
	}
	public function getDataCustomerByCar()
	{
 
		echo json_encode($this->Mobile_model->getDataCustomerByCar($_POST["CarCode"]));
		
	}
	public function getDataPreviewChannel()
	{


		$ch_number = rand(0,10);

		$ChannelURL = "";
		$ChannelDesc = "";

		if (date("H:i:s") > "21:00" and date("H:i:s") < "24:00") {
			

			$ChannelURL = "rtmp://103.75.201.3:1935/trans/snew";
			$ChannelDesc = "ช่องข่าวสาคร เขตสมุทรปราการ เวลา 21:00น. และ เขตฉะเชิงเทรา 22:00น. สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";



		}else{

			switch ($ch_number) {
			case 0:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/sshd228";
				$ChannelDesc = "ช่องSUN HD สามารถรับชบได้ที่กล่องสาครTV ช่อง 708 หรือ Nex By สาคร ช่อง 228 ติดต่อ 0632929995 และ 0632929996";

				break;
			case 1:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/srmovs";
				$ChannelDesc = "ช่องRMovie HD สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 2:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/stf2";
				$ChannelDesc = "ช่องTrueFilm2 สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 3:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/stss";
				$ChannelDesc = "ช่องTrueSeries สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 4:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/ssky1";
				$ChannelDesc = "ช่องSKY1 สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 5:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/sbm";
				$ChannelDesc = "ช่องBUSMusic สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 6:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/sdoc";
				$ChannelDesc = "ช่องSakornDocumentary สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 7:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/ssky11";
				$ChannelDesc = "ช่องSky สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 8:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/stew";
				$ChannelDesc = "ช่องTrue World Wile สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			case 9:
					
				$ChannelURL = "rtmp://103.75.201.3:1935/trans/sts6";
				$ChannelDesc = "ช่องTrue SPORT 6 สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";

				break;
			
			default:

				$ChannelURL = "rtmp://103.75.201.3:1935/trans/snew";
				$ChannelDesc = "ช่องข่าวสาคร เขตสมุทรปราการ เวลา 21:00น. และ เขตฉะเชิงเทรา 22:00น. สามารถรับชบได้ที่กล่องสาครTV หรือ Nex By สาคร ติดต่อ 0632929995 และ 0632929996";
				
				break;
			}

		}


		$return = array("ChannelURL" => ,"ChannelDesc" => "");

		echo json_encode($return);


	}
	public function SendDataSlipToNotify()
	{
 

		if ($_FILES["Slipfile"]["type"] == "image/png" or $_FILES["Slipfile"]["type"] == "image/jpeg" or $_FILES["Slipfile"]["type"] == "image/jpg") {
				
			$file = $_POST["CustomerID"].uniqid();

			move_uploaded_file($_FILES["Slipfile"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$file.".jpg");
 

			$Member = $this->Mobile_model->getDataBlanace($_POST["CustomerID"]);				

	        $UserMessage = $Member[0]->CustomerName." ทำการส่งภาพ";

	        send_notify_message(" [ ".$UserMessage." รหัส ".$_POST["CustomerID"]." ]","https://pack1.sakorncable.com/upload/temp/".$file.".jpg");

	       	 
	        echo "1";

	        //shell_exec(" rm  /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$file.".jpg");

		}else{

			echo "2";

		}

 
			

	    
  


	}


	









}


	function send_notify_message($message,$image_url){
 		
 		$line_api = 'https://notify-api.line.me/api/notify';
    	$access_token = 'TXeMDn7GHBb19THq8l2YoMRLmCplqJaxc94s8UaX1HH';//eWEGn8hijvdIqDQCdBRUffGcMUQ3UIp7yuyQjde1g3f  JOID9jUQBwuPZ17kE9BXLbnBnlsw73WKvtL16gLp8HS

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


 ?>