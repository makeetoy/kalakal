<?php
class Administrator_model extends CI_Model
{
  function adminLogin($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $query = $this->db->get('administrator_tbl');
    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
}
?>
