<?php 

class Devices_model extends CI_Model
{	
    

    public function getLastData()
    {
       
       $this->mssql = $this->load->database("mssql",true);

       $this->mssql->query(" SELECT top 1 [ID] ,[URLIMG] ,[Temp],[Telephone] ,[DateStamp] ,[TimeStamp] FROM [WebSakorn].[dbo].[TempProject] where Telephone is null order by ID desc ");
      


    }

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