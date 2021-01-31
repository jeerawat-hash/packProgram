 
<?php 

 

  $a = mssql_connect('mssqlcon', 'sa', 'Sakorn123');


   $Customer = mssql_query("  SELECT  distinct [CUST],b.*
  FROM [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] a 
  join Sakorn_Theparak3.dbo.Customer b on a.CUST = b.CustomerID where b.ProjectCode = 'P5' and Telephone is not null  ");



   		while ( $result = mssql_fetch_array($Customer) ) {
   			

   			mssql_query(" INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerSms]
           ([Telephone]
           ,[CustomerID]
           ,[StampDate] )
     VALUES
           ('".$result["Telephone"]."'
           ,'".$result["CUST"]."'
           ,'".date("Y-m-d")."') ");



   		}


      mssql_query("  INSERT INTO [Sakorn_Theparak3].[dbo].[CustomerReceive_LOG]
           ([CUST]
           ,[RECEIPT]
           ,[PAYTYPE_ID]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT]
           ,[ProjectCode]
           ,[InfoCode])
           SELECT  [CUST]
          ,[RECEIPT]
          ,[PAYTYPE_ID]
          ,[DATE]
          ,[CODE]
          ,[AMOUNT]
          ,[ProjectCode]
          ,[InfoCode]
      FROM [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] where ProjectCode = 'P5'  ");





 
  

 ?>
 