<?php 

class Mobile_model extends CI_Model
{	
  



  public function getDataCustomerTelephone($CustomerID,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select Telephone from Sakorn_Theparak3.dbo.Customer where  CustomerID = '".$CustomerID."' and ProjectCode = '".$ProjectCode."' ")->result();

  }

  public function getDataCustomerByCar($CarCode,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

      return $this->mssql->query("SELECT b.CustomerName,'ตึก '+SUBSTRING(b.Room,2,2) + ' ' +'ห้อง '+SUBSTRING(b.Room,5,2) as AddressLocal,a.CARCODE,a.CARBRAND,a.CARCOLOR,a.CARTYPE,a.COUNTRY,a.CONTACT 
  FROM [Sakorn_Theparak3].[dbo].[CustomerCarInfo] a 
  join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID 
  where a.CARCODE like '".$CarCode."%' and b.ProjectCode = '".$ProjectCode."' ")->result();


  }

  public function CustomerAuth($CustomerID)
  {

     $this->mssql = $this->load->database("mssql",true);


     return $this->mssql->query(" select CustomerID,TitleName+' '+CustomerName+' '+NoHome as CustomerINFO,ProjectCode from Sakorn_Theparak3.dbo.Customer where CustomerID = '".$CustomerID."'  ")->result();


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
        /*
        return $this->mssql->query("select CustomerID,CustomerName,a.AMOUNT as AmountTotal,c.Description,a.DATE from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] a
 right outer join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID  
 join [Sakorn_Theparak3].[dbo].[CustomerAmount_CodeType] c on a.CODE = c.CODE
 where b.CustomerID = '".$CUST."' and a.ProjectCode = '".$ProjectCode."' order by DATE asc ")->result();
  */
    return $this->mssql->query("  select CustomerID,CustomerName,a.AMOUNT as AmountTotal, a.infocode as Description,a.DATE from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] a
 right outer join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID   
 where b.CustomerID = '".$CUST."' and a.ProjectCode = '".$ProjectCode."' order by DATE asc  ")->result();


  }

 

  public function AuthenticationBAK($Secrect)
  {
     $this->mssql = $this->load->database("mssql",true);
     
     $checkKey = 0;

     if ($Secrect == "Sakorn@") {
       $checkKey = 1;
     }else
     if ($Secrect == "Sakorn@P2") {
       $checkKey = 2;
     }else
     if ($Secrect == "Sakorn@P1") {
       $checkKey = 3;
     }
 

    return $checkKey;
     


  }

  public function Authentication($Secrect)
  {
     $this->mssql = $this->load->database("mssql",true);
     
     $checkKey = 1;

     $project = "";

     if ($Secrect == "Sakorn@") {
       $checkKey = 0;
       $project = "P5";
     }else
     if ($Secrect == "Sakorn@2") {
       $checkKey = 0;
       $project = "P2";
     }else
     if ($Secrect == "Sakorn@1") {
       $checkKey = 0;
       $project = "P1";
     }

     $is_success = 0;
     if ($checkKey == 0) {
        $is_success = 1;
     }else{
        $is_success = 0;
     }

      $status = array("Status" => $is_success , "ProjectCode" => $project );

      return $status;

  }
  public function ClearDataCustomerName($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);
      $checkCustomer = $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[Customer] where ProjectCode = '".$ProjectCode."' ");


  }
  public function SyncDataCustomerName($CUST,$TitleName,$CustomerName,$ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);
 
      $this->mssql->query(" 

          INSERT INTO [Sakorn_Theparak3].[dbo].[Customer]
           ([CustomerID]
           ,[TitleName]
           ,[CustomerName]
           ,[NoHome]
           ,[Room]
           ,[ProjectCode])
     VALUES
           ('".$CUST."'
           ,'".$TitleName."'
           ,'".$CustomerName."'
           ,'".$CUST."'
           ,'".$CUST."'
           ,'".$ProjectCode."') "); 
 

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

 
  public function insertDataServicesCost($CUST,$DATE,$CODE,$AMOUNT,$ProjectCode,$DETAIL)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query("INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG]
           ([CUST]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT]
           ,[ProjectCode]
           ,[InfoCode])
     VALUES
           ('".$CUST."'
           ,'".$DATE."'
           ,'".$CODE."'
           ,'".$AMOUNT."'
           ,'".$ProjectCode."'
           ,'".$DETAIL."') ");


  }

  public function clearDataServicesCost($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[CustomerAmount_LOG] where  ProjectCode = '".$ProjectCode."' ");
 
  }

    public function insertDataReceiveCost($CUST,$RECEIPT,$CODE,$AMOUNT,$ProjectCode,$DETAIL,$PAYTYPE)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerPay_LOG]
           ([CUST]
           ,[RECEIPT]
           ,[PAYTYPE_ID]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT]
           ,[ProjectCode]
           ,[InfoCode])
     VALUES
           ('".$CUST."'
           ,'".$RECEIPT."'
           ,'".$PAYTYPE."'
           ,'".date("Y-m-d")."'
           ,'".$CODE."'
           ,'".$AMOUNT."'
           ,'".$ProjectCode."'
           ,'".$DETAIL."') ");


  }

  public function clearDataReceiveCost($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] where  ProjectCode = '".$ProjectCode."' ");
 
  }

  public function ReportCustomerTotal($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query("  select sum(list) as AMOUNT from (
 select isnull(sum(a.AMOUNT),0) as List,a.InfoCode as Description from Sakorn_Theparak3.dbo.CustomerAmount_LOG a where a.ProjectCode = '".$ProjectCode."'
 group by a.Code,a.InfoCode  
  )a  ")->result();
 
  }
  public function ReportCustomerTotalDetail($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" 
  select isnull(sum(a.AMOUNT),0) as List,a.InfoCode as Description from Sakorn_Theparak3.dbo.CustomerAmount_LOG a where a.ProjectCode = '".$ProjectCode."'
 group by a.Code,a.InfoCode order by List Desc")->result();
 
  }
  public function ReportCustomerReceive($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" 
 select isnull(sum(a.AMOUNT),0) as List,(case when a.InfoCode = '' then 'อื่นๆ' else a.InfoCode end) as  Description 
 from Sakorn_Theparak3.dbo.CustomerPay_LOG a 
  where a.ProjectCode = '".$ProjectCode."' 
  group by a.Code,a.InfoCode  ")->result();
 
  }

  public function ReportCustomerReceiveDetail($ProjectCode)
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query("  select Description,Count(RECEIPT) as Receipt,Sum(RECEIPTList) as List,sum(Amount) as Amount from (

 select RECEIPT,b.Description,count(RECEIPT) as RECEIPTList,sum(a.Amount) as Amount from Sakorn_Theparak3.dbo.CustomerPay_LOG a 
 join Sakorn_Theparak3.dbo.CustomerPay_Type b on a.PAYTYPE_ID = b.ID where a.ProjectCode = '".$ProjectCode."' group by RECEIPT,b.Description
 
 
 )a group by Description

 union
 
 select 'ยอดรวม' as Description,sum(Receipt) as Receipt,Sum(List) as List,sum(Amount) as Amount from (
  
  select Description,Count(RECEIPT) as Receipt,Sum(RECEIPTList) as List,sum(Amount) as Amount from (
 select RECEIPT,b.Description,count(RECEIPT) as RECEIPTList,sum(a.Amount) as Amount from Sakorn_Theparak3.dbo.CustomerPay_LOG a 
 join Sakorn_Theparak3.dbo.CustomerPay_Type b on a.PAYTYPE_ID = b.ID where a.ProjectCode = '".$ProjectCode."' group by RECEIPT,b.Description
  
 )a group by Description

 )ab order by Amount asc
 
 ")->result();
 
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