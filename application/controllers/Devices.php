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



	}



}

 ?>