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
 

		if ($_FILES["Slipfile"]["type"] == "image/png") {
			

			move_uploaded_file($_FILES["Slipfile"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_POST["CustomerID"].".jpg");
 

			$Member = $this->Mobile_model->getDataBlanace($_POST["CustomerID"]);				

	        $UserMessage = $Member[0]->CustomerName." ทำการส่งภาพ";

	        //$hash = shell_exec("curl -X POST -H 'Authorization: Bearer TXeMDn7GHBb19THq8l2YoMRLmCplqJaxc94s8UaX1HH' -F 'message=[ ".$UserMessage." รหัส ".$_POST["CustomerID"]." ]' -F 'imageFile=@/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_POST["CustomerID"].".jpg' https://notify-api.line.me/api/notify ");

	        //if ($hash) {
	        		
	        //	shell_exec(" rm  /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_POST["CustomerID"].".jpg");

	        	
	        //} 

	        echo "1";

		}else{

			echo "2";

		}

 
			

	    
  


	}


	









}


 ?>