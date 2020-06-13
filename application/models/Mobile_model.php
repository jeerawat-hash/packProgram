<?php 

class Mobile_model extends CI_Model
{	


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