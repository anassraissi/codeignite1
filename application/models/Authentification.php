
<?php

class Authentification extends CI_Model{
  public function auth(){
       if($this->session->has_userdata('Authentificated')){
           if($this->session->userdata('Authentificated')=='1'){
            
           }
           else{
               $this->session->set_flashdata('status', 'login first');
               redirect(base_url('login'));
               
           }
           
       }
}
public function CheckIsAdmin(){ 
    
            if($this->session->has_userdata('Authentificated'))
            {
                    if($this->session->userdata('Authentificated')=='1'){
                        $this->session->set_flashdata('status', 'Access Denied ! you are not an admin');
                        redirect(base_url('userpage'));
                        
                       

                    }
                   
            }
            else{
                $this->session->set_flashdata('status', 'login First');
                redirect(base_url('login'));
            }
}
}
?>