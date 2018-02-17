<?php
class Login_model extends CI_Model
{
  function customerlogin($username,$password){;
    $query = $this->db->get(" `customer_tbl` WHERE custUsername='$username' OR custEmail='$username' AND custPassword='$password'");
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function customerdata($id){
		$query=$this->db->get(" `customer_tbl` WHERE custUsername='$id' OR custEmail='$id'");
    return $query;
  }

  function vendorlogin($username,$password){;
    $query = $this->db->get(" `vendor_tbl` WHERE vendUsername='$username' OR vendEmail='$username' AND vendPassword='$password'");
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function vendordata($id){
		$query=$this->db->get(" `vendor_tbl` WHERE vendUsername='$id' OR vendEmail='$id'");
    return $query;
  }

  function manufacturerlogin($username,$password){;
    $query = $this->db->get(" `manufacturer_tbl` WHERE manuUsername='$username' OR manuEmail='$username' AND manuPassword='$password'");
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  function manufacturerdata($id){
		$query=$this->db->get(" `manufacturer_tbl` WHERE manuUsername='$id' OR manuEmail='$id'");
    return $query;
  }

  function checkemail($email){
    $this->db->select('custEmail');
    $this->db->from('customer_tbl');
    $this->db->where('custEmail',$email);
    $query1 = $this->db->get();
      $this->db->select('vendEmail');
      $this->db->from('vendor_tbl');
    $this->db->where('vendEmail',$email);
    $query2 = $this->db->get();
      $this->db->select('manuEmail');
      $this->db->from('manufacturer_tbl');
    $this->db->where('manuEmail',$email);
    $query3 = $this->db->get();
    if($query1->num_rows() > 0){
       return true;
    }
    else if($query2->num_rows() >0){
      return true;
    }
    else if($query3->num_rows() >0){
      return true;
    }
    else{
      return false;
    }

  }

}
?>
