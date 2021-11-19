<?php
class StudentModel extends CI_Model{
     public function student_data(){
         $std_age=$this->student_age();
         return $stud_name="Anass Raissi".$std_age;


     }
     private function student_age(){
        return $stud_age="  27 years old";
    }
    public function condition($id){
        if($id==1){
            echo 'your id is'.$id;
        }
        elseif($id==2){
              echo 'Your id is'.$id;
        }

    }

}

?>