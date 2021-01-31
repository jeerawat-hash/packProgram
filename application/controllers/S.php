<?php 
/**
 * 
 */
class S extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
 		#$this->load->model("Monitor_model");


	}

	public function index($cust = "")
	{
 		
	

		#ใบเสร็จค่าส่วนกลาง
		#https://pack1.sakorncable.com/index.php/s/p/101-001


	}
	public function p($cust = "")
	{


		if ($cust == "") {
			
			exit();
		}

		


		$this->load->view("page/recept/recept");


	}





}


 ?>