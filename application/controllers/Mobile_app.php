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

			$header['page_name'] = 'เลือกรายการ';
			$header['page_focus'] = 'home';
			 

			$this->load->view("page/template_mobile/header",$header);
			$this->load->view("page/mobile/mobile_home");
			$this->load->view("page/template_mobile/footer");
			
	}
	public function createDataFromXlsx()
	{


		$result = $this->Mobile_model->createDataFromXlsx();

		print_r($result);



	}




}


 ?>