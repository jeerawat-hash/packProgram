 
<?php 

 
  $a = mssql_connect('mssqlcon', 'sa', 'Sakorn123');


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
      FROM [Sakorn_Theparak3].[dbo].[CustomerPay_LOG] where CONVERT(Char(8),DATE,112)  = CONVERT(Char(8), DATEADD (day, 0,GetDate()),112)      ");


 ?>
 