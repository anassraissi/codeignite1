<?php
class EmployeeModel extends CI_Model{

    public function insert($data){
         return $this->db->insert('Employee',$data);
         
    }
}
?>