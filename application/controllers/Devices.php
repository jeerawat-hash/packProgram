<?php 
/**
 * 
 */
class Devices extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
		$this->load->model("Devices_model");
 
 
	}

	public function index()
	{
			
 		echo json_encode($this->Devices_model->getLastData());	
	
	}
	
	public function temperature()
	{

		$this->load->view("direct/temperature");

	}

	public function testtemp()
	{

		$this->load->view("direct/test");

	}

	public function tempupload()
	{

		//print_r($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]);
		//print_r($_POST);


		if (isset($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["name"])) {
			

			$file = $_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
			move_uploaded_file($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
			$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
			$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],date("Y-m-d"),date("H:i:s"));
			
			echo "CaptureImage @ URL : ".$ImgUrl; 


		}else{
			//// for mac

			
			$file = $_FILES["/Users/jeerawat/Desktop/testffmpeg/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
			move_uploaded_file($_FILES["/Users/jeerawat/Desktop/testffmpeg/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
			$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
			$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],date("Y-m-d"),date("H:i:s"));

			echo "CaptureImage @ URL : ".$ImgUrl; 

			//print_r($_FILES);
			//print_r($_POST);
			//// for mac
		}
		
		
	
		//$file = $_FILES["/home/pi/Desktop/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
		//move_uploaded_file($_FILES["/home/pi/Desktop/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
		//$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
		//$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],$_POST["Date"],$_POST["Time"]);


	}



}

 ?>
