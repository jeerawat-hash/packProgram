<?php 

class Devices_model extends CI_Model
{	
  
    public function insertDataTemp($ImgUrl,$temp,$DateStamp,$TimeStamp)
    {

       $this->mssql = $this->load->database("mssql",true);


       $this->mssql->query("INSERT INTO [WebSakorn].[dbo].[TempProject]
           ([URLIMG]
           ,[Temp] 
           ,[DateStamp]
           ,[TimeStamp])
     VALUES
           ('".$ImgUrl."'
           ,'".$temp."'
           ,'".$DateStamp."'
           ,'".$TimeStamp."')");
     
 
 
    }







}

 ?>