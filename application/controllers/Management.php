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
	public function createDataServicesCostFromXlsx()
	{


		$result = $this->Mobile_model->createDataFromXlsx("ServiceCost.xlsx");

		//print_r($result);

		$this->Mobile_model->clearDataServicesCost();


		$ROOM = ""; 
		$CUST = ""; 
		$HOMENO = ""; 
		$NAME = ""; 
		$BILLNO = ""; 

		foreach ($result as $Value) {


			if (trim($Value["ROOM"]) != "") {
				$ROOM = $Value["ROOM"];
				$CUST = $Value["CUST"]; 
				$HOMENO = $Value["HOMENO"]; 
				$NAME = $Value["NAME"]; 
				$BILLNO = $Value["BILLNO"]; 
			} 

			//echo $ROOM."|".$CUST."|".$HOMENO."|".$NAME."|".$BILLNO."|".$Value["DATE"]."|".$Value["CODE"]."|".$Value["DETAIL"]."|".$Value["AMOUNT"]."<br>";

 
			$this->Mobile_model->insertDataServicesCost($CUST,$Value["DATE"],$Value["CODE"],$Value["AMOUNT"]);
 

		}

 

	}
	public function createDataReceiveFromXlsx()
	{

		$result = $this->Mobile_model->createDataFromXlsx("ReceiveCost.xlsx");

		$this->Mobile_model->clearDataReceiveCost();


		foreach ($result as $Value) {

			$this->Mobile_model->insertDataReceiveCost($Value["CUSTOMER"],$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"]);

			//print_r($Value);

		}

 

	}
	public function createDataCustomerNameFromXlsx()
	{

		$result = $this->Mobile_model->createDataFromXlsx("CustomerName.xlsx");

		foreach ($result as $Value) {

			//print_r($Value);

			$this->Mobile_model->SyncDataCustomerName($Value["PE_CODE"],$Value["PE_TITLE"],$Value["PE_NAME"]);


		}

 

	}
	public function createDataCarInfomationFromXlsx()
	{

		$result = $this->Mobile_model->createDataFromXlsx("CarInfomation.xlsx");


		$this->Mobile_model->clearDataCarInfo();


		foreach ($result as $Value) {

			//print_r($Value);

			$this->Mobile_model->insertDataCarInfo($Value["CA_CUST"],$Value["CA_CODE"],$Value["CA_COUNTRY"],$Value["CA_TYPE"],$Value["CA_BRAND"],$Value["CA_COLOR"],$Value["CA_REMARK"]);



		}

 

	}













}


 ?>