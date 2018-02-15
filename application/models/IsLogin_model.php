<?php
class IsLogin_model extends CI_Model
{
  function iflogin(){
    $this->db->select("custLogin");
    $this->db->from("customer_tbl");
    $query = $this->db->get();
    return $query;
  }
}
?>
