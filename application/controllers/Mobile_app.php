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
	public function login()
	{

		$Telephone = "";
 		if (isset($_POST["Telephone"])) {
 			$Telephone = $_POST["Telephone"];
 		}

		echo  json_encode( $this->Mobile_model->CheckCustomerByTelephone($Telephone) );


	}
	public function logout()
	{
 
			redirect("Mobile_app");
			 

	}

	public function getDataCustomerCableRent()
	{


		echo json_encode($this->Mobile_model->getDataCustomerCableRent($_POST["Telephone"]));


	}
	public function getDataCustomerServicesAllCable()
	{ 
		
		echo json_encode($this->Mobile_model->getDataCustomerServicesAllCable($_POST["Telephone"]));


	}
	public function updateResyncCard()
	{

 
		foreach ($_POST["CardNO"] as $Card) {
			$this->Mobile_model->reSyncServicesCable($_POST["Telephone"],$Card);
		}

		echo 1;


	}
	public function getDataPPPOEStatusByTelephone()
	{

		echo json_encode($this->Mobile_model->getDataPPPOEStatusByTelephone($_POST["Telephone"]));
		

	}



}


 ?>