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
	public function SendDataSlipToNotify()
	{
 

		if ($_FILES["Slipfile"]["type"] == "image/png") {
				
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