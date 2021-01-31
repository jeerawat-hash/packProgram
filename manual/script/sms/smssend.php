 
<?php 

 

  $a = mssql_connect('mssqlcon', 'sa', 'Sakorn123');


   $Customer = mssql_query("  SELECT  distinct [CUST],b.*
  FROM [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] a 
  join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID where b.ProjectCode = 'P5' and Telephone is not null  ");



   		while ( $result = mssql_fetch_array($Customer) ) {
   			
 

 

   		}

 




function sendsms($to=null, $message=null)
    {


      $url = "https://secure.thaibulksms.com/sms_api.php";

      $data_string = "username=0616619956&password=jeerawatTH2019&msisdn=".$to."&message=".$message."&sender=Sakorn_SMS&force=premium";

      $agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4)
      Gecko/20030624 Netscape/7.1 (ax)";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_USERAGENT, $agent);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
      $result = curl_exec ($ch);
      curl_close ($ch);
 


    }

 
  

 ?>
 