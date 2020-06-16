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
		json_encode( $this->Mobile_model->CustomerAuth($_POST["CustomerID"]) );



	}

	









}


 ?>