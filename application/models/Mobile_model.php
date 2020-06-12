<?php 

class Mobile_model extends CI_Model
{	


  public function getDataPPPOEStatusByTelephone($Telephone)
  {
 
      $this->load->library("RouterosAPI");
      $this->RouterAPI = new RouterosAPI(); 
      $this->mssql = $this->load->database("mssql",true);

      $checkInternet = $this->mssql->query("exec LineSakorn.dbo.InternetCheck '".$Telephone."' ")->result();

      $Result = array();

      foreach ($checkInternet as $Internet) {
        

        if ($Internet->SakornID != "") {
          
          $this->RouterAPI->connect('172.168.0.26', 'jeerawat', 'superuserd0');
          $ARRAY = $this->RouterAPI->comm("/ppp/active/print", array(
              "?name" => $Internet->PPOE,
              ));
          $this->RouterAPI->disconnect();

          $Result["PPPOE"][] = $Internet->PPOE;
           
          /////// Check
          if ($Internet->Suspend == 1) {
            
            $Result["Status"][] = "ถูกตัดสัญญาณ";
            $Result["StatusSub"][] = 0;

          }else{

              if (isset($ARRAY[0][".id"])) {
               
                $Result["Status"][] = "เชื่อมต่อแล้ว";
                $Result["StatusSub"][] = 1;

              }else{

                $Result["Status"][] = "ไม่พบการเชื่อมต่อ";
                $Result["StatusSub"][] = 0;

              }

          }
          /////// Check

        }
        if ($Internet->INetID != "") {

          $Result["PPPOE"][] = $Internet->PPOE;
 
          /////// Check
          if ($Internet->Suspend == 1) {
            
            $Result["Status"][] = "ถูกตัดสัญญาณ";
            $Result["StatusSub"][] = 0;

          }else{

              //////// รอการพัฒนา /////// 
              $Result["Status"][] = "NaN";
              $Result["StatusSub"][] = 0;
              //////// รอการพัฒนา ///////

          }
          /////// Check
  
        }







      }




      


      return $Result;

  }
 
	public function CheckCustomerByTelephone($Telephone)
	{

			$this->load->library("session");
			$this->mssql = $this->load->database("mssql",true);
 
			$check = $this->mssql->query(" exec LineSakorn.dbo.member_check '".$Telephone."' ");


			if ( $check->num_rows() != 0 ) {

				$data = $check->result();
				$name = "";

				for ($i=0; $i <= count($data[0]->CustomerName); $i++) { 
					$name .= $data[0]->CustomerName.",";
				}

				$userdata = array("CustomerName" => substr($name, 0,strlen($name) - 1) ,"Telephone" => $Telephone,"StatusAuthen" => "true");
  
				return $userdata;

			}else{

				return array("StatusAuthen" => "false");

			}




	}

	
	public function getDataCustomerCableRent($Telephone)
	{


		$this->mssql = $this->load->database("mssql",true);
 

            $arrayNumber = array('CableNumber' => $this->mssql->query("exec LineSakorn.dbo.CableCheck '".$Telephone."' ")->num_rows() ,
             'NetNumber' => $this->mssql->query("exec LineSakorn.dbo.InternetCheck '".$Telephone."' ")->num_rows() );

              
		return $arrayNumber;

	}
      public function getDataCustomerServicesAllCable($Telephone)
      {

            $this->mssql = $this->load->database("mssql",true);
            $this->mssqlcas = $this->load->database("mssqlcas",true);

            $CableR = $this->mssql->query("exec LineSakorn.dbo.CableCheck '".$Telephone."' ")->result();

            $CableArray = array();
            foreach ($CableR as $Cable) {
                   
            $CardStatus =  $this->mssqlcas->query("   SELECT * FROM [CAS].[dbo].[Card2Platform] where CardNO = '".trim($Cable->CardID)."' and CUCount = 1 ")->num_rows();

            $CardOperator = "ถูกตัดสัญญาณ";

            if ($CardStatus != 0) {
                  
                  $CardOperator = "ปกติ";
                  
            }
            if ($Cable->StopDate != "") {
                  
                  $CardOperator = "ยกเลิก";
                  $CardStatus = 0;
              
            }


            $CableArray["DB"][] = $Cable->DB;
            $CableArray["CustomerID"][] = $Cable->CustomerID;
            $CableArray["Telephone"][] = $Cable->Telephone;
            $CableArray["CardNO"][] = $Cable->CardID;
            $CableArray["CardStatus"][] = $CardStatus;
            $CableArray["CardStatusSub"][] = $CardOperator;
 

            }

            return $CableArray;
 





      }

      public function getDataCustomerServicesAllNET($Telephone)
      {

            $this->mssql = $this->load->database("mssql",true);

            $NetR = $this->mssql->query("exec LineSakorn.dbo.InternetCheck '".$Telephone."' ")->result();

            $NetArray = array();
           
            foreach ($NetR as $Net) {
                  









                  
            }


            return $NetArray;
 





      }
      public function reSyncServicesCable($Telephone,$CardNO)
      {

            $this->mssql = $this->load->database("mssql",true);

            

            $check = $this->mssql->query(" select * from [LineSakorn].[dbo].[NoEntitlement] where [SyncDate] = '".date("Y-m-d")."' and CardNO = '".$CardNO."' ")->num_rows();

            if ($check != 1) {
                  

                  $this->mssql->query(" INSERT INTO [LineSakorn].[dbo].[NoEntitlement]
                       ([CardNO]
                       ,[Telephone]
                       ,[IsSuccess]
                       ,[SyncDate])
                 VALUES
                       ('".$CardNO."'
                       ,'".$Telephone."'
                       ,'0'
                       ,'".date("Y-m-d")."') ");


            }

            
            
            return 1;


      }




}

 ?>