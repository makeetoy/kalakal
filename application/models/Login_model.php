<?php

class Login_model extends CI_Model
{
  function customerlogin($username,$password){
    $this->db->where('custUsername',$username);
    $this->db->where('custPassword',$password);
    $query = $this->db->get('customer_tbl');
    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }
  function vendorlogin($username,$password){
    $this->db->where('vendUsername',$username);
    $this->db->where('vendPassword',$password);
    $query = $this->db->get('vendor_tbl');
    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }
  function manufacturerlogin($username,$password){
    $this->db->where('manuUsername',$username);
    $this->db->where('manuPassword',$password);
    $query = $this->db->get('manufacturer_tbl');
    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }
}
?>
