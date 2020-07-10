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

	public function tempupload()
	{

		print_r($_FILES);
		print_r($_POST);


		//move_uploaded_file($_FILES["Slipfile"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/tempimg/".$file.".jpg");




	}



}

 ?>