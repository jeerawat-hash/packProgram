<?php 
/**
 * 
 */
class S extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct(); 
		$this->load->model("Mobile_model");



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

		$data["CustomerRecept"] = $this->Mobile_model->getDataReceptLog($cust,"P5");

		$this->load->view("page/recept/recept",$data);


	}
	public function detail()
	{


		echo json_encode($this->Mobile_model->getDataReceptDetailLog($_POST["ReceptID"],$_POST["CustomerID"],"P5"));


	}





}


 ?>