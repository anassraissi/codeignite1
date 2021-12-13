<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
         if($this->session->has_userdata('Authentificated')){
             
            $this->session->set_flashdata('status','you already logged in');
            redirect(base_url('userpage'));

             
         }
    }
    

     public function index(){
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('Auth/login');

     }
     public function login(){
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    
        if($this->form_validation->run()){
            $data=[
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),

            ];
            $this->load->model('UserModel');
            $result=$this->UserModel->login($data);
            if($result!=false){
                $auth_userdetails=[
                      'first_name'=>$result->first_name,
                      'last_name' => $result->last_name,
                       'email' => $result->email
                ];
               
                  
                $this->session->set_userdata('Authentificated',$result->as_role);
                $this->session->set_userdata('auth_user',$auth_userdetails);              
               $this->session->set_flashdata('status', 'you logged in');
                redirect(base_url('userpage'));
                
            }

             
         }
         else{
            $this->session->set_flashdata('status', 'Invalid Email or Password');
            redirect(base_url('login'));
            

         }  
        
        
     }
}