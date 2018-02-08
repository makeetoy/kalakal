<?php
class Login_model extends CI_Model
{
  function customerlogin($username,$password){
    $this->db->where('custUsername',$username);
    $this->db->where('custPassword',$password);
    $query = $this->db->get('customer_tbl');
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
  function customername($username,$password){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("custName");
		$this->db->from("customer_tbl");
    $this->db->where("custUsername",$username);
    $this->db->where("custPassword",$password);
		$query=$this->db->get();
    return $query;
  }

  function vendorlogin($username,$password){
    $this->db->where('vendUsername',$username);
    $this->db->where('vendPassword',$password);
    $query = $this->db->get('vendor_tbl');
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
  function vendorname($username,$password){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("vendName");
		$this->db->from("vendor_tbl");
    $this->db->where("vendUsername",$username);
    $this->db->where("vendPassword",$password);
		$query=$this->db->get();
    return $query;
  }
  function manufacturerlogin($username,$password){
    $this->db->where('manuUsername',$username);
    $this->db->where('manuPassword',$password);
    $query = $this->db->get('manufacturer_tbl');
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
  function manufacturername($username,$password){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("manuName");
		$this->db->from("manufacturer_tbl");
    $this->db->where("manuUsername",$username);
    $this->db->where("manuPassword",$password);
		$query=$this->db->get();
    return $query;
  }
}
?>
