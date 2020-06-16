<?php 

class Mobile_model extends CI_Model
{	


  public function CustomerAuth($CustomerID)
  {

     $this->mssql = $this->load->database("mssql",true);


     return $this->mssql->query(" select CustomerID,TitleName+' '+CustomerName+' '+NoHome as CustomerINFO from Theparak3.dbo.Customer where CustomerID = '".$CustomerID."' ")->result();


  }

  public function Authentication($Secrect)
  {
     $this->mssql = $this->load->database("mssql",true);
     
     $checkKey = $this->mssql->query(" SELECT * FROM [Sakorn_Manage].[dbo].[Staff] where authen = '".$Secrect."'  ")->num_rows();

     if ($checkKey != 0) {
        return 1;
     }else{
        return 0;
     }


  }

  public function SyncDataCustomerName($CUST,$TitleName,$CustomerName)
  {

     $this->mssql = $this->load->database("mssql",true);

     $checkCustomer = $this->mssql->query(" SELECT CustomerID,TitleName,CustomerName FROM [Theparak3].[dbo].[Customer] where CustomerID = ''  ")->num_rows();

     if ($checkCustomer != 0) {
       

        $this->mssql->query(" update [Theparak3].[dbo].[Customer] set TitleName = '".$TitleName."',CustomerName = '".$CustomerName."' where CustomerID = '".$CUST."'  ");


     }



  }


  public function insertDataCarInfo($CUST,$CARCODE,$COUNTRY,$CARTYPE,$CARBRAND,$CARCOLOR,$CONTACT)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Manage].[dbo].[CustomerCarInfo]
           ([CUST]
           ,[CARCODE]
           ,[COUNTRY]
           ,[CARTYPE]
           ,[CARBRAND]
           ,[CARCOLOR]
           ,[CONTACT])
     VALUES
           ('".$CUST."'
           ,'".$CARCODE."'
           ,'".$COUNTRY."'
           ,'".$CARTYPE."'
           ,'".$CARBRAND."'
           ,'".$CARCOLOR."'
           ,'".$CONTACT."') ");


  }

  public function clearDataCarInfo()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerCarInfo] ");
 
  }

 
  public function insertDataServicesCost($CUST,$DATE,$CODE,$AMOUNT)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query("INSERT INTO [Sakorn_Manage].[dbo].[CustomerAmount_LOG]
           ([CUST]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT])
     VALUES
           ('".$CUST."'
           ,'".$DATE."'
           ,'".$CODE."'
           ,'".$AMOUNT."') ");


  }

  public function clearDataServicesCost()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerAmount_LOG] ");
 
  }

    public function insertDataReceiveCost($CUST,$RECEIPT,$CODE,$AMOUNT)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Manage].[dbo].[CustomerPay_LOG]
           ([CUST]
           ,[RECEIPT]
           ,[PAYTYPE_ID]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT])
     VALUES
           ('".$CUST."'
           ,'".$RECEIPT."'
           ,'2'
           ,'".date("Y-m-d")."'
           ,'".$CODE."'
           ,'".$AMOUNT."') ");


  }

  public function clearDataReceiveCost()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerPay_LOG] ");
 
  }


  public function createDataFromXlsx($file)
  {

      $this->load->library("SimpleXLSX");
      $this->SimpleXLSX = new SimpleXLSX(); 

      if ( $xlsx = $this->SimpleXLSX->parse('./upload/temp/'.$file)) {
 
        $header_values = $rows = [];

        foreach ( $xlsx->rows() as $k => $r ) {
          if ( $k === 0 ) {
            $header_values = $r;
            continue;
          }
          $rows[] = array_combine( $header_values, $r );
        }


        return $rows;
      

      }











 

  }









 








}

 ?>