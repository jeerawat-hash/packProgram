<?php 

class Mobile_model extends CI_Model
{	


  public function getDataCustomerByCar($CarCode,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

      return $this->mssql->query("SELECT b.CustomerName,'ตึก '+SUBSTRING(b.Room,2,2) + ' ' +'ห้อง '+SUBSTRING(b.Room,5,2) as AddressLocal,a.CARCODE,a.CARBRAND,a.CARCOLOR,a.CARTYPE,a.COUNTRY,a.CONTACT 
  FROM [Sakorn_Theparak3].[dbo].[CustomerCarInfo] a 
  join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID 
  where a.CARCODE like '".$CarCode."%' and b.ProjectCode = '".$ProjectCode."' ")->result();


  }

  public function CustomerAuth($CustomerID,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);


     return $this->mssql->query(" select CustomerID,TitleName+' '+CustomerName+' '+NoHome as CustomerINFO from Sakorn_Theparak3.dbo.Customer where CustomerID = '".$CustomerID."'  ")->result();


  }
  public function getDataBlanace($CUST,$ProjectCode)
  {

        $this->mssql = $this->load->database("mssql",true);
/*
        return $this->mssql->query(" 
 select CustomerID,CustomerName,ISNULL( convert(varchar(20) ,sum(a.AMOUNT)) ,'0') as AmountTotal from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] a
 right outer join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID
   where b.CustomerID = '".$CUST."'  and a.ProjectCode = '".$ProjectCode."'
   group by CustomerID,CustomerName ")->result();
*/
         return $this->mssql->query(" select CustomerID,CustomerName,(select ISNULL( convert(varchar(20) ,sum(AMOUNT)) ,'0') as AmountTotal from Sakorn_Theparak3.dbo.Customer a
   join Sakorn_Theparak3.dbo.CustomerAmount_LOG b on a.CustomerID = b.CUST
    where a.CustomerID = '".$CUST."' and b.ProjectCode = '".$ProjectCode."'  ) as AmountTotal 
  from Sakorn_Theparak3.dbo.Customer a  where a.CustomerID = '".$CUST."'  ")->result();


  }

  public function getDataBlanaceDetail($CUST,$ProjectCode)
  {

        $this->mssql = $this->load->database("mssql",true);

        return $this->mssql->query("select CustomerID,CustomerName,a.AMOUNT as AmountTotal,c.Description,a.DATE from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] a
 right outer join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID  
 join [Sakorn_Theparak3].[dbo].[CustomerAmount_CodeType] c on a.CODE = c.CODE
 where b.CustomerID = '".$CUST."' and a.ProjectCode = '".$ProjectCode."' order by DATE asc ")->result();


  }

 

  public function Authentication($Secrect)
  {
     $this->mssql = $this->load->database("mssql",true);
     
     $checkKey = 1;

     if ($Secrect == "Sakorn@") {
       $checkKey = 0;
     }

     if ($checkKey == 0) {
        return 1;
     }else{
        return 0;
     }


  }

  public function SyncDataCustomerName($CUST,$TitleName,$CustomerName)
  {

     $this->mssql = $this->load->database("mssql",true);

     $checkCustomer = $this->mssql->query(" SELECT CustomerID,TitleName,CustomerName FROM [Sakorn_Theparak3].[dbo].[Customer] where CustomerID = '".$CUST."'  ")->num_rows();

     if ($checkCustomer != 0) {
       

        $this->mssql->query(" update [Sakorn_Theparak3].[dbo].[Customer] set TitleName = '".$TitleName."',CustomerName = '".$CustomerName."' where CustomerID = '".$CUST."'  ");


     }



  }


  public function insertDataCarInfo($CUST,$CARCODE,$COUNTRY,$CARTYPE,$CARBRAND,$CARCOLOR,$CONTACT,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerCarInfo]
           ([CUST]
           ,[CARCODE]
           ,[COUNTRY]
           ,[CARTYPE]
           ,[CARBRAND]
           ,[CARCOLOR]
           ,[CONTACT]
           ,[ProjectCode])
     VALUES
           ('".$CUST."'
           ,'".$CARCODE."'
           ,'".$COUNTRY."'
           ,'".$CARTYPE."'
           ,'".$CARBRAND."'
           ,'".$CARCOLOR."'
           ,'".$CONTACT."'
           ,'".$ProjectCode."') ");


  }

  public function clearDataCarInfo($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[CustomerCarInfo] where  ProjectCode = '".$ProjectCode."' ");
 
  }

 
  public function insertDataServicesCost($CUST,$DATE,$CODE,$AMOUNT,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query("INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG]
           ([CUST]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT]
           ,[ProjectCode])
     VALUES
           ('".$CUST."'
           ,'".$DATE."'
           ,'".$CODE."'
           ,'".$AMOUNT."'
           ,'".$ProjectCode."') ");


  }

  public function clearDataServicesCost($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] where  ProjectCode = '".$ProjectCode."' ");
 
  }

    public function insertDataReceiveCost($CUST,$RECEIPT,$CODE,$AMOUNT,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerPay_LOG]
           ([CUST]
           ,[RECEIPT]
           ,[PAYTYPE_ID]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT]
           ,[ProjectCode])
     VALUES
           ('".$CUST."'
           ,'".$RECEIPT."'
           ,'2'
           ,'".date("Y-m-d")."'
           ,'".$CODE."'
           ,'".$AMOUNT."'
           ,'".$ProjectCode."') ");


  }

  public function clearDataReceiveCost($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] where  ProjectCode = '".$ProjectCode."' ");
 
  }

  public function ReportCustomerTotal($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select sum(list) as AMOUNT from (
    select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Theparak3.dbo.CustomerAmount_LOG a
    right outer join Sakorn_Theparak3.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE  where a.ProjectCode = '".$ProjectCode."'  group by b.Description
    )a ")->result();
 
  }
  public function ReportCustomerTotalDetail($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Theparak3.dbo.CustomerAmount_LOG a
right outer join Sakorn_Theparak3.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE where a.ProjectCode = '".$ProjectCode."' group by b.Description ")->result();
 
  }
  public function ReportCustomerReceive($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Theparak3.dbo.CustomerPay_LOG a
right outer join Sakorn_Theparak3.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE where a.ProjectCode = '".$ProjectCode."' group by b.Description ")->result();
 
  }

  public function ReportCustomerReceiveDetail($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query("  select Description,Count(RECEIPT) as Receipt,Sum(RECEIPTList) as List,sum(Amount) as Amount from (
 select RECEIPT,b.Description,count(RECEIPT) as RECEIPTList,sum(a.Amount) as Amount from Sakorn_Theparak3.dbo.CustomerPay_LOG a 
 join Sakorn_Theparak3.dbo.CustomerPay_Type b on a.PAYTYPE_ID = b.ID where a.ProjectCode = '".$ProjectCode."' group by RECEIPT,b.Description
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