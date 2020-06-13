<?php 
/**
 * 
 */
class Management extends CI_Controller
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
			 

			$this->load->view("page/template_mobile/header_admin",$header);
			$this->load->view("page/mobile/management");
			$this->load->view("page/template_mobile/footer");
			
	}
	public function createDataFromXlsx()
	{


		$result = $this->Mobile_model->createDataFromXlsx("ServiceCost.xlsx");

		//print_r($result);

		$ROOM = ""; 

		foreach ($result as $Value) {


			if (trim($Value["ROOM"]) != "") {
				$ROOM = $Value["ROOM"];
			} 










			echo $ROOM."|".$Value["CUST"]."|".$Value["HOMENO"]."|".$Value["NAME"]."|".$Value["BILLNO"]."|".$Value["DATE"]."|".$Value["CODE"]."|".$Value["DETAIL"]."|".$Value["AMOUNT"]."<br>";


			
		}











	}




}


 ?>