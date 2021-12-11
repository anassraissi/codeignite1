<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserController extends CI_Controller {
    public function userpage(){
        $this->load->model('Authentification');
        $this->Authentification->auth();
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('userpage');
    }

}