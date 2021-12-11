<?php
class UserModel extends CI_Model{


     public function Registeruser($data){
         return $this->db->insert('register',$data);
        
         
    }
    public function login($data){
         $this->db->select("*");
         $this->db->where('email',$data['email']);
         $this->db->where('password',$data['password']);
         $this->db->from('register');
         $this->db->limit(1);
         $query=$this->db->get();
         if($query->num_rows()==1){
             return $query->row();
         }
         else return false;

    }
}

?>