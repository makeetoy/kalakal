<?php

class Register_model extends CI_Model
{
    function registercustomer($data){
      $this->db->insert("customer_tbl", $data);
    }
    function registervendor($data){
      $this->db->insert("vendor_tbl", $data);
    }
    function registermanufacturer($data){
      $this->db->insert("manufacturer_tbl", $data);
    }
}
?>
