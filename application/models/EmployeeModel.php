<?php
class EmployeeModel extends CI_Model{

    public function insert($data){
         return $this->db->insert('employee',$data);
         
    }
    public function get_data(){
        $query=$this->db->get('employee');
        return $query->result();
    }
    public function EmployeeEdit($id){
        
         $query = $this->db->get_where('employee', ['id'=> $id]);
         return $query->row();

    }

    public function EmployeeUpdate($data,$id){
    $query=$this->db->update('employee', $data, ['id'=>$id]);
    return $query;
    }
     public function EmployeeDelete($id){
         $query=$this->db->delete('employee',['id' => $id]); 
         return $query;
     }
}
?>