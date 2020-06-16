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
	public function SendDataSlipToNotify()
	{

		print_r($_POST);
		print_r($_FILES);

	}


	









}


 ?>