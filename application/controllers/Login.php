<?php

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('OwnerModel');
    $this->load->model('TenantModel');
    $this->load->model('UserModel');
  }

  function index(){

    if ($this->session->userdata()){

    }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == TRUE) {
        $username = addslashes($this->input->post('username'));
        $password = hash('tiger192,3',$this->input->post('password'));

        $result = $this->UserModel->getUser($username,$password);

        if ($result) {
            if($result->user_type == "TENANT"){
              redirect('Tenant');
            }else if($result->user_type == 'OWNER'){
              redirect('Owner');
            }
        }else{
          $this->session->set_flashdata('error', 'Username or Password is incorrect');
        }

    }

    $this->master('home/login');
   
  }

  function master($page){
    $this->load->view('home/header');
    $this->load->view($page);
    $this->load->view('home/footer');

  }

}
