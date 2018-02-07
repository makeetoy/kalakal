<?php
class Login_model extends CI_Model
{
  function customerlogin($username,$password){
    $this->db->where('custUsername',$username);
    $this->db->where('custPassword',$password);
    $query = $this->db->get('administrator_tbl');
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
}
?>
