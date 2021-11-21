<?php
class EmployeeModel extends CI_Model{

    public function insert($data){
         return $this->db->insert('employee',$data);
         
    }
    public function get_data(){
        $query=$this->db->get('employee');
        return $query->result();
    }
}
?>