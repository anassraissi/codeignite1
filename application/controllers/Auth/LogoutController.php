<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LogoutController extends CI_Controller{
      
      public function __construct()
      {
          parent::__construct();
          $this->load->model('Authentification');
    
      }
      public function logout(){
          $this->session->unset_userdata('Authentificated');
          $this->session->unset_userdata('auth_user');
           $this->session->set_flashdata('status', 'you logged out');
           redirect(base_url('login'));

          

          

      }
      
}