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
      if ($this->session->userdata('user_type') == 'OWNER') {
          redirect('Owner');
      }elseif ($this->session->userdata('user_type') == 'TENANT') {
        # code...
      }
    }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == TRUE) {
        $username = addslashes($this->input->post('username'));
        $password = hash('tiger192,3',$this->input->post('password'));

        $result = $this->UserModel->getUser($username,$password);

        if ($result) {

              $user = array(
                'user_id' => $result->user_id,
                'username'=> $result->username,
                'password'=> $result->password,
                'user_type' => $result->user_type
              );

              $this->session->set_userdata($user);

            if($user['user_type'] == "TENANT"){
              
              $tenant = $this->TenantModel->getTenant($user['user_id']);
              $array = array(
                'Tenant_ID' => $tenant->Tenant_ID,
                'Tenant_FN' => $tenant->Tenant_FN,
                'Tenant_MI' => $tenant->Tenant_MI,
                'Tenant_LN' => $tenant->Tenant_LN,
                'Tenant_EMAIL' => $tenant->Tenant_EMAIL,
                'Tenant_CN' => $tenant->Tenant_CN,
                'Tenant_BirthDate' => $tenant->Tenant_BirthDate
              );
              
              $this->session->set_userdata( $array );
              redirect('Tenant',$array);

            }else if($user['user_type'] == 'OWNER'){
              $owner = $this->OwnerModel->getOwner($user['user_id']);
              $array = array(
                'Owner_ID' => $owner->Owner_ID,
                'FULLNAME' => $owner->Owner_FN ." ". substr($owner->Owner_MI, 0,1).". ".$owner->Owner_LN,
                'Owner_FN' => $owner->Owner_FN,
                'Owner_MI' => $owner->Owner_MI,
                'Owner_LN' => $owner->Owner_LN,
                'Owner_EMAIL' => $owner->Owner_EMAIL,
                'Owner_CN' => $owner->Owner_CN,
                'Owner_BirthDate' => $owner->Owner_BirthDate
              );
              $this->session->set_userdata($array);
              redirect('Owner',$array);
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
