<?php 
/**
 * 
 */
class Sp extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
 		#$this->load->model("Monitor_model");


	}

	public function index($cust = "")
	{
 		
		if ($cust == "") {
			
			exit();
		}


		$this->load->view("page/recept/recept");

 

		#ใบเสร็จค่าส่วนกลาง
		#https://pack1.sakorncable.com/index.php/sp/101-001


	}  





}


 ?>