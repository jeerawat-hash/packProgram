 
<?php 

 

  $a = mssql_connect('mssqlcon', 'sa', 'Sakorn123');


   $Customer = mssql_query("   SELECT top 5 [ID]
      ,[Telephone]
      ,[CustomerID]
      ,[StampDate]
      ,[Is_Send]
  FROM [Sakorn_Theparak3].[dbo].[CustomerSms] where [Is_Send] = '0' order by ID ASC
  ");
 
   		while ( $result = mssql_fetch_array($Customer) ) {
     			
   
        echo  sendsms($result["Telephone"], "ใบเสร็จค่าส่วนกลางhttps://pack1.sakorncable.com/index.php/s/p/".$result["CustomerID"]);


        mssql_query("   update [Sakorn_Theparak3].[dbo].[CustomerSms] set [Is_Send] = 1 where ID = '".$result["ID"]."'  ");

        sleep(1);

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
 