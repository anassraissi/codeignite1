<?php
class UserModel extends CI_Model{
     public function Registeruser($data){
         return $this->db->insert('register',$data);
    }
}

?>