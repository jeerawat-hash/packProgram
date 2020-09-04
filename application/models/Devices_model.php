<?php 

class Devices_model extends CI_Model
{	
    


    public function SWByMQTT($status)
    {

      $this->load->library("PhpMQTTServer");

    $server_mq  = "192.168.200.111"; #Server ip address
    $port_mq  = 1883;
    $username_mq = "sakorn";  #username ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
    $password_mq = "sakorn";  #password ที่ได้สร้างไว้ตอนตั้งค่า MQTT Broker
    $client_id_mq = "Client-".rand();

    $this->mqtt = new PhpMQTTServer($server_mq, $port_mq, $client_id_mq);
    $this->mqtt->connect(true, NULL, $username_mq, $password_mq);

      $msg = $this->mqtt->publish("/B078/MainSwitch/WayLight", $status, 0);

      $this->mqtt->close();


      return $msg;

    }


    public function getLastData()
    {
       
       $this->mssql = $this->load->database("mssql",true);

       return $this->mssql->query(" SELECT top 1 [ID] ,[URLIMG] ,[Temp],[Telephone] ,[DateStamp] ,[TimeStamp],(SELECT  COUNT( [Temp] )  FROM [WebSakorn].[dbo].[TempProject]) as Total,(SELECT SUBSTRING( convert(varchar(max),avg( [Temp] )) ,1,4) FROM [WebSakorn].[dbo].[TempProject]) as TempMean FROM [WebSakorn].[dbo].[TempProject] where Telephone is null order by ID desc ")->result();
      

    }

    public function getDataByID($ID)
    {
       
       $this->mssql = $this->load->database("mssql",true);

       return $this->mssql->query(" SELECT top 100 [ID] ,[URLIMG] ,[Temp],[Telephone] ,[DateStamp] ,[TimeStamp],(SELECT  COUNT( [Temp] )  FROM [WebSakorn].[dbo].[TempProject]) as Total,(SELECT SUBSTRING( convert(varchar(max),avg( [Temp] )) ,1,4) FROM [WebSakorn].[dbo].[TempProject]) as TempMean FROM [WebSakorn].[dbo].[TempProject] where  id = '".$ID."' order by ID desc ")->result();
      
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