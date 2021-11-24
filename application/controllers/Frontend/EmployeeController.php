<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeController extends CI_Controller 
{
    public function index(){
        // $this->load->view('Frontend/employee');
        $this->load->model('EmployeeModel');
        $data['Employee']=$this->EmployeeModel->get_data();
        $this->load->view('Frontend/employee',$data);
        $this->load->view('template/header');
        $this->load->view('template/footer');

    }
    public function create(){
         $this->load->view('Frontend/create');
         $this->load->view('template/header');
         $this->load->view('template/footer');
    }
     public function store(){ 
        // $this->load->helper(array('form', 'url'));

        // $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('Lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        if($this->form_validation->run()==false){
          
           $this->create();           
        }   
            else{
                $data=[
                    'firstname'=>$this->input->post('firstname'),
                    'Lastname' =>$this->input->post('Lastname'),
                    'Phonenumber'=>$this->input->post('phonenumber'),
                    'Email' => $this->input->post('Email')
                ];          
                $this->load->model('EmployeeModel');
                $this->EmployeeModel->insert($data);
                $this->index();
             }
            // 
          } 
          public function edit($id){
             $this->load->model('EmployeeModel');
             $data['employee']=$this->EmployeeModel->EmployeeEdit($id);
             $this->load->view('Frontend/edit',$data);
             $this->load->view('template/header');
             $this->load->view('template/footer');

          }
          public function update($id){
            $this->form_validation->set_rules('firstname', 'firstname', 'required');
            $this->form_validation->set_rules('Lastname', 'Lastname', 'required');
            $this->form_validation->set_rules('phonenumber', 'phonenumber', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required');
            if($this->form_validation->run()):
            $data =[
                    'firstname'=>$this->input->post('firstname'),
                    'Lastname' =>$this->input->post('Lastname'),
                    'Phonenumber'=>$this->input->post('phonenumber'),
                    'Email' => $this->input->post('Email')
            ];
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->EmployeeUpdate($data,$id);
             redirect(base_url('Employee'));
        
        else:
                  $this->edit($id);
        endif;

         }
         public function delete($id){
               $this->load->model('EmployeeModel');
               $this->EmployeeModel->EmployeeDelete($id);
               redirect(base_url('Employee'));
              
         }
      

        
           
                

        
     }

  
