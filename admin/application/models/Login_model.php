<?php
class Login_model extends CI_Model{
   public function checkAdmin($data)

   { 
	  return $this->db->get_where('admin',$data)->result_array();
	 
	   
   }
}