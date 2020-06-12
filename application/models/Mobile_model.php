<?php 

class Mobile_model extends CI_Model
{	

  public function createDataFromXlsx()
  {

      $this->load->library("SimpleXLSX");
      $this->SimpleXLSX = new SimpleXLSX(); 

      if ( $xlsx = $this->SimpleXLSX->parse('./upload/temp/ServiceCost.xlsx')) {
 
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