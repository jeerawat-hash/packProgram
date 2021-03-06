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

	public function authen()
	{		
 	 
 		echo json_encode( $this->Mobile_model->Authentication($_POST["SecrectKEY"]) );
 
			 
	}
	public function createDataServicesCostFromXlsx()
	{

 
		//print_r($_POST);
		//print_r($_FILES);
	
		$ProjectCode = $_POST["ProjectCode"];

		if ($_FILES["ServicesCost"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["ServicesCost"]["name"]);
			
			move_uploaded_file($_FILES["ServicesCost"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["ServicesCost"]["name"]);



			$result = $this->Mobile_model->createDataFromXlsx($_FILES["ServicesCost"]["name"]);

			//print_r($result);

			$this->Mobile_model->clearDataServicesCost($ProjectCode);


			$ROOM = ""; 
			$CUST = ""; 
			$HOMENO = ""; 
			$NAME = ""; 
			$BILLNO = ""; 

			foreach ($result as $Value) {


				if (trim($Value["CUST"]) != "") {
					$ROOM = $Value["ROOM"];
					//$CUST = $Value["CUST"]; 
					$CUST = str_replace("/","-",$Value["CUST"]); 
					$HOMENO = $Value["HOMENO"]; 
					$NAME = $Value["NAME"]; 
					$BILLNO = $Value["BILLNO"]; 
				} 

				//echo $ROOM."|".$CUST."|".$HOMENO."|".$NAME."|".$BILLNO."|".$Value["DATE"]."|".$Value["CODE"]."|".$Value["DETAIL"]."|".$Value["AMOUNT"]."<br>";

	 
				$this->Mobile_model->insertDataServicesCost($CUST,$Value["DATE"],$Value["CODE"],$Value["AMOUNT"],$ProjectCode,$Value["DETAIL"]);
	 

			}

			$ReportTotal = $this->Mobile_model->ReportCustomerTotal($ProjectCode);
			$ReportTotalDetail = $this->Mobile_model->ReportCustomerTotalDetail($ProjectCode);



			$token = ""; 

			switch ($ProjectCode) {
				case 'P1':
					$token = "CAHHGEfDzvn9ZU5snHzKmnz5uYWaCdRNCPsGh4H3ajq"; 
					break;

				case 'P2':
					$token = "4pbrI377vtaFnNzxpXFSE9k54jJLHXX1xJH8C1dOLAe"; 
					break;

				case 'P5':
					$token = "BTicIrWmZYHGXeLVDSVg27NuC1Xv4Q4l2TlBcRzG4vI"; 
					break;
				 
			}




			$message1 = "\nสรุปยอดคงค้างในระบบ\n".number_format($ReportTotal[0]->AMOUNT,2)." บาท\n"."รายละเอียด";

			notify($message1,$token);

			$message2 = "\nรายละเอียดคงค้างในระบบ";

			foreach ($ReportTotalDetail as $Detail) {
				
				$message2 .= "\n".$Detail->Description." ".number_format($Detail->List,2)." บาท";

			}
			notify($message2,$token);


			echo "1";

		}else{

			echo "2";

		}
 			 

	}
	public function createDataReceiveFromXlsx()
	{


		//print_r($_FILES["ReceiveCost"]);

		$ProjectCode = $_POST["ProjectCode"];

		if ($_FILES["ReceiveCost"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["ReceiveCost"]["name"]);
			
			move_uploaded_file($_FILES["ReceiveCost"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["ReceiveCost"]["name"]);

 			$result = $this->Mobile_model->createDataFromXlsx($_FILES["ReceiveCost"]["name"]);

			$this->Mobile_model->clearDataReceiveCost($ProjectCode);

			foreach ($result as $Value) {

				$Customer = str_replace("/","-", $Value["CUSTOMER"] );


				if ( trim( $Value["PAY"] ) == "เงินสด" ) {
					

					$this->Mobile_model->insertDataReceiveCost($Customer,$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"],$ProjectCode,$Value["DESCRIPT"],"1");


				}else
				if ( trim( $Value["PAY"] ) == "โอน" ) {
					

					$this->Mobile_model->insertDataReceiveCost($Customer,$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"],$ProjectCode,$Value["DESCRIPT"],"2");



				} else
				if ( trim( $Value["PAY"] ) == "เช็ค" ) {
					

					$this->Mobile_model->insertDataReceiveCost($Customer,$Value["RECEIPT"],$Value["CODE"],$Value["AMOUNT"],$ProjectCode,$Value["DESCRIPT"],"3");



				} 



				

				//print_r($Value);

			}

			echo "1";
 



			$token = ""; 

			switch ($ProjectCode) {
				case 'P1':
					$token = "CAHHGEfDzvn9ZU5snHzKmnz5uYWaCdRNCPsGh4H3ajq"; 
					break;

				case 'P2':
					$token = "KBQgwylqj616milgaFRU3787aNQEHS7AnYBzntxpu29"; 
					break;

				case 'P5':
					$token = "vSDecnkXPqwRMSeLPVhHBxSTYkc36SyYwZBwMzgpeKv"; 
					break;
				 
			}
 

			$ReportReceiveTotal = $this->Mobile_model->ReportCustomerReceive($ProjectCode);
			$ReportReceiveTotalDetail = $this->Mobile_model->ReportCustomerReceiveDetail($ProjectCode);

			$message1 = "\nสรุปยอดรับเข้าระบบ";

			foreach ($ReportReceiveTotalDetail as $Detail) {
				
				$message1 .= "\n".$Detail->Description." ".$Detail->Receipt." ใบเสร็จ ".number_format($Detail->Amount,2)." บาท";
				#$message1 .= "\n".$Detail->Description." ".$Detail->Receipt." ใบเสร็จ ".$Detail->List." รายการ ".number_format($Detail->Amount,2)." บาท";

			}

			notify($message1,$token);

			$message2 = "\nรายละเอียดยอดรับเข้าระบบ";

			foreach ($ReportReceiveTotal as $DetailALL) {
				
				$message2 .= "\n".$DetailALL->Description." ".number_format($DetailALL->List,2)." บาท";
				
			}
			notify($message2,$token);
 



		}else{

			echo "2";

		}



		
		
		

 

	}
	public function createDataCustomerNameFromXlsx()
	{


		//print_r($_FILES);
		//print_r($_POST);
		
		
		$ProjectCode = $_POST["ProjectCode"];

		if ($_FILES["CustomerName"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["CustomerName"]["name"]);
			
			move_uploaded_file($_FILES["CustomerName"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["CustomerName"]["name"]);
 

			$result = $this->Mobile_model->createDataFromXlsx($_FILES["CustomerName"]["name"]);

			$this->Mobile_model->ClearDataCustomerName($ProjectCode);

			foreach ($result as $Value) {
 
				$PE_CODE = str_replace("/","-", $Value["PE_CODE"] );

				$this->Mobile_model->SyncDataCustomerName($PE_CODE,$Value["PE_TITLE"],$Value["PE_NAME"],$ProjectCode);

			}

			echo "1";

		}else{

			echo "2";

		}
 	
 

	}
	public function createDataCarInfomationFromXlsx()
	{


		//print_r($_FILES["CarInfofile"]);


		if ($_FILES["CarInfofile"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

			shell_exec("rm /home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["CarInfofile"]["name"]);
			
			move_uploaded_file($_FILES["CarInfofile"]["tmp_name"], "/home/admin/web/pack1.sakorncable.com/public_html/upload/temp/".$_FILES["CarInfofile"]["name"]);

 			 
			$result = $this->Mobile_model->createDataFromXlsx($_FILES["CarInfofile"]["name"]);


			$this->Mobile_model->clearDataCarInfo("P5");


			foreach ($result as $Value) {

				//print_r($Value);	

				$CA_CUST = str_replace("/","-", $Value["CA_CUST"] );
				$CA_CODE = str_replace("/","-", $Value["CA_CODE"] );

				$this->Mobile_model->insertDataCarInfo($CA_CUST,$CA_CODE,$Value["CA_COUNTRY"],$Value["CA_TYPE"],$Value["CA_BRAND"],$Value["CA_COLOR"],$Value["CA_REMARK"],"P5");


			}

			echo "1";


		}else{

			echo "2";

		}

 
	}

 













}


function notify($message,$token){

			    $lineapi = $token; 
				$mms =  trim($message); 
				date_default_timezone_set("Asia/Bangkok");
				$con = curl_init();
				curl_setopt( $con, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
				// SSL USE 
				curl_setopt( $con, CURLOPT_SSL_VERIFYHOST, 0); 
				curl_setopt( $con, CURLOPT_SSL_VERIFYPEER, 0); 
				//POST 
				curl_setopt( $con, CURLOPT_POST, 1); 
				curl_setopt( $con, CURLOPT_POSTFIELDS, "message=$mms"); 
				$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
			    curl_setopt($con, CURLOPT_HTTPHEADER, $headers); 
				curl_setopt( $con, CURLOPT_RETURNTRANSFER, 1); 
				$result = curl_exec( $con ); 

}


 ?>