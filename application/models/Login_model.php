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
  function updatecustomer($username,$password,$id){
    $this->db->set("custLogin",$id);
    $this->db->where('custUsername',$username);
    $this->db->where('custPassword',$password);
    $this->db->update("customer_tbl");
  }

  function customerdata($id){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("*");
		$this->db->from("customer_tbl");
    $this->db->where("custUsername",$id);
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
  function updatevendor($username,$password,$id){
    $this->db->set("vendLogin",$id);
    $this->db->where('vendUsername',$username);
    $this->db->where('vendPassword',$password);
    $this->db->update("vendor_tbl");
  }
  function vendordata($id){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("*");
		$this->db->from("vendor_tbl");
    $this->db->where("vendUsername",$id);
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
  function updatemanufacturer($username,$password,$id){
    $this->db->set("manuLogin",$id);
    $this->db->where('manuUsername',$username);
    $this->db->where('manuPassword',$password);
    $this->db->update("manufacturer_tbl");
  }
  function manufacturerdata($id){
    //$query = $this->db->query("SELECT custName FROM customer_tbl WHERE custUsername='$username' AND custPassword='$password');
    $this->db->select("*");
		$this->db->from("manufacturer_tbl");
    $this->db->where("manuUsername",$id);
		$query=$this->db->get();
    return $query;
  }

}
?>
