<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeController extends CI_Controller 
{
    public function index(){
        $this->load->view('Frontend/employee');
        $this->load->view('template/header');
        $this->load->view('template/footer');

    }
    public function create(){
         $this->load->view('Frontend/create');
         $this->load->view('template/header');
         $this->load->view('template/footer');
    }

  
}
