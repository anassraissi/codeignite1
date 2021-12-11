
<?php

class Authentification extends CI_Model{
  public function auth(){
       if($this->session->has_userdata('Authentificated')){
           if($this->session->userdata('Authentificated')=='1'){
          echo "im authentificated";
              
           }
           else{
               $this->session->set_flashdata('status', 'login first');
               redirect(base_url('login'));
               
           }
           
       }
       

}
}
?>