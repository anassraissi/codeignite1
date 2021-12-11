<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegisterController extends CI_Controller {
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->helper(array('form', 'url'));

    //     $this->load->library('form_validation');
    //     //Do your magic here
    // }
    // public function __construct()
    // {
    //    parent::__construct();
    //    $this->load->library('form_validation');
    // }
    
       
    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('Auth/register');
        
    }
    public function register(){
      

      $this->form_validation->set_rules('first_name', 'first_name', 'required');
      $this->form_validation->set_rules('last_name', 'last_name', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('email', 'email', 'required');
      if($this->form_validation->run()):
      $data =[
              'first_name'=>$this->input->post('first_name'),
              'last_name' =>$this->input->post('last_name'),
              'password'=>$this->input->post('password'),
              'email' => $this->input->post('email')
      ];
      $this->load->model('UserModel');
      $this->UserModel->Registeruser($data);
      $this->session->set_flashdata('status', 'you registred successfully');
       
      
               else :
          $this->session->set_flashdata('status', 'you registred failled');
          $this->index();

        endif;
        
       

              } 
      }
    

