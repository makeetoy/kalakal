<?php
class IsLogin_model extends CI_Model
{
  function ifcustlogin(){
    $this->db->select("custLogin");
    $this->db->from("customer_tbl");
    $query = $this->db->get();
    return $query;
  }
  function ifvendlogin(){
    $this->db->select("vendLogin");
    $this->db->from("vendor_tbl");
    $query = $this->db->get();
    return $query;
  }
  function ifmanulogin(){
    $this->db->select("manuLogin");
    $this->db->from("manufacturer_tbl");
    $query = $this->db->get();
    return $query;
  }
}
?>
