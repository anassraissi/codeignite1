<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PageController extends CI_Controller 
{
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
}
