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
 		
			
	}

	public function temperature()
	{

		$this->load->view("direct/temperature");

	}

	public function tempupload()
	{

		//print_r($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]);
		//print_r($_POST);

		
		$file = $_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
		move_uploaded_file($_FILES["C:\\Users\\Computer\\Desktop\\testcam\\output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
		$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
		$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],$_POST["Date"],$_POST["Time"]);
		
		echo "CaptureImage @ URL : ".$ImgUrl; 
	
		//$file = $_FILES["/home/pi/Desktop/output_jpg"]["name"]."-".$_POST["Date"]."-".$_POST["Time"];
		//move_uploaded_file($_FILES["/home/pi/Desktop/output_jpg"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");
		//$ImgUrl = "http://pack1.sakorncable.com/upload/tempimg/".$file.".jpg";
		//$this->Devices_model->insertDataTemp($ImgUrl,$_POST["Temp"],$_POST["Date"],$_POST["Time"]);


	}



}

 ?>
