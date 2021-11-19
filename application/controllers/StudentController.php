<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentController extends CI_Controller 
{
    public function index(){

        //  $this->load->model('StudentModel');
        //  $student=$this->StudentModel->student_data();
        //  echo $student;

         // or 
        //  $this->load->model('StudentModel');
        //  $student=new StudentModel;
        //  $student=$student->student_data();
        //  echo "".$student;
         // or 
         $this->load->model('StudentModel','stud');
         $student=new StudentModel;
         $student=$this->stud->student_data();
        //  $student_age=$this->stud->student_class(); // dont work because of it's private methode
         echo $student;


    }
    public function show($id){
        $this->load->model('StudentModel','stud');
        $student=new StudentModel;
        $this->stud->condition($id);
    }
}