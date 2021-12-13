<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Authentification');
         $this->Authentification->CheckIsAdmin();
    }
    
    public function AccessDeneid(){
        $this->load->view('template/header');
        $this->load->view('errors/403');
        $this->load->view('template/footer'); 
    }
    public function index(){
        echo "hi anass you've understoud how work Controller";
    }

    public function demo(){
        //  $data['title']="anass is a creatif person"; 
        // or we can use
         $this->load->model('DemoModel');
         $title=$this->DemoModel->exp();
         $data['title']=$title;
         $data['body']="and is so open to intresting thing";
         $this->load->view('DemoPage',$data);
    }
    public function userpage(){
        $this->load->model('Authentification');
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('userpage');
    }
    public function adminpage(){
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('adminpage');
    }
}
