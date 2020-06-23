<?php 

class Mobile_model extends CI_Model
{	


  public function getDataCustomerByCar($CarCode)
  {

     $this->mssql = $this->load->database("mssql",true);

      return $this->mssql->query("SELECT b.CustomerName,'ตึก '+SUBSTRING(b.Room,2,2) + ' ' +'ห้อง '+SUBSTRING(b.Room,5,2) as AddressLocal,a.CARCODE,a.CARBRAND,a.CARCOLOR,a.CARTYPE,a.COUNTRY,a.CONTACT 
  FROM [Sakorn_Manage].[dbo].[CustomerCarInfo] a 
  join Theparak3.dbo.Customer b on a.CUST = b.CustomerID
  where a.CARCODE like '".$CarCode."%' ")->result();


  }

  public function CustomerAuth($CustomerID)
  {

     $this->mssql = $this->load->database("mssql",true);


     return $this->mssql->query(" select CustomerID,TitleName+' '+CustomerName+' '+NoHome as CustomerINFO from Theparak3.dbo.Customer where CustomerID = '".$CustomerID."' ")->result();


  }
  public function getDataBlanace($CUST)
  {

        $this->mssql = $this->load->database("mssql",true);

        return $this->mssql->query(" 
 select CustomerID,CustomerName,ISNULL( convert(varchar(20) ,sum(a.AMOUNT)) ,'0') as AmountTotal from [Sakorn_Manage].[dbo].[CustomerAmount_LOG] a
 right outer join Theparak3.dbo.Customer b on a.CUST = b.CustomerID
   where b.CustomerID = '".$CUST."' 
   group by CustomerID,CustomerName ")->result();


  }

  public function getDataBlanaceDetail($CUST)
  {

        $this->mssql = $this->load->database("mssql",true);

        return $this->mssql->query("select CustomerID,CustomerName,a.AMOUNT as AmountTotal,c.Description,a.DATE from [Sakorn_Manage].[dbo].[CustomerAmount_LOG] a
 right outer join Theparak3.dbo.Customer b on a.CUST = b.CustomerID  
 join [Sakorn_Manage].[dbo].[CustomerAmount_CodeType] c on a.CODE = c.CODE
 where b.CustomerID = '".$CUST."' order by DATE asc ")->result();


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

     $checkCustomer = $this->mssql->query(" SELECT CustomerID,TitleName,CustomerName FROM [Theparak3].[dbo].[Customer] where CustomerID = '".$CUST."'  ")->num_rows();

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

  public function ReportCustomerTotal()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select sum(list) as AMOUNT from (
    select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerAmount_LOG a
    right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description
    )a ")->result();
 
  }
  public function ReportCustomerTotalDetail()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerAmount_LOG a
right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description ")->result();
 
  }
  public function ReportCustomerReceive()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerPay_LOG a
right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description ")->result();
 
  }

  public function ReportCustomerReceiveDetail()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query("  select Description,Count(RECEIPT) as Receipt,Sum(RECEIPTList) as List,sum(Amount) as Amount from (
 select RECEIPT,b.Description,count(RECEIPT) as RECEIPTList,sum(a.Amount) as Amount from Sakorn_Manage.dbo.CustomerPay_LOG a 
 join Sakorn_Manage.dbo.CustomerPay_Type b on a.PAYTYPE_ID = b.ID group by RECEIPT,b.Description
 )a group by Description ")->result();
 
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