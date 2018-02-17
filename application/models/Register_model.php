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
    function custcheckname($name){
      $this->db->select('custName');
      $this->db->from('customer_tbl');
      $this->db->where('custName',$name);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
    function custcheckusername($username){
      $this->db->select('custUsername');
      $this->db->from('customer_tbl');
      $this->db->where('custUsername',$username);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
    function custcheckemail($email){
      $this->db->select('custEmail');
      $this->db->from('customer_tbl');
      $this->db->where('custemail',$email);
      $query = $this->db->get();
      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;
      }
    }
}
?>
