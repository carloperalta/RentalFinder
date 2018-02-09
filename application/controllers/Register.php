<?php
  /**
   *
   */
  class Register extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      
      $this->load->model('UserModel');
      $this->load->model('TenantModel');
      $this->load->model('OwnerModel');

    }

    function index(){
      $this->master('/signup/signup');
    }

    function master($page){
      $this->load->view('home/header');
      $this->load->view($page);
      $this->load->view('home/footer');

    }

    function tenant(){

      if (isset($_POST['register'])) {
          $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
          $this->form_validation->set_rules('middlename', 'Middlename', 'required|trim');
          $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim');
          $this->form_validation->set_rules('contact', 'Contact Number', 'trim|required|min_length[11]|max_length[11]');

          $this->form_validation->set_message('is_unique','%s is already taken');
          $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|max_length[15]|is_unique[user.username]');
          $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[15]');
          $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|min_length[6]|max_length[15]|matches[password]');
         

          if ($this->form_validation->run() == TRUE) {

              $data = array(
                'Tenant_FN' => $this->input->post('firstname'),
                'Tenant_MI' => $this->input->post('middlename'),
                'Tenant_LN' => $this->input->post('lastname'),
                'Tenant_Gender' => $this->input->post('gender'),
                'Tenant_EMAIL'=> $this->input->post('email'),
                'Tenant_CN' => $this->input->post('contact'),
                'Tenant_BirthDate' => $this->input->post('birthdate')
              );

              $result = $this->TenantModel->insertTenant($data);

              $user = array(
                'user_id' => $result,
                'username' => $this->input->post('username'),
                'password' => hash('tiger192,3',$this->input->post('password')),
                'user_type'=> "TENANT"
              );

              $isRegistered = $this->UserModel->insertUser($user);

              $this->master('signup/afterSignup');
              return;
          }
      }



      $this->master('/signup/tenant');
    }

    function owner(){
      if (isset($_POST['register'])) {
          $this->form_validation->set_rules('firstname', 'Firstname', 'required|trim');
          $this->form_validation->set_rules('middlename', 'Middlename', 'required|trim');
          $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
          $this->form_validation->set_rules('email', 'Email', 'required|trim');
          $this->form_validation->set_rules('contact', 'Contact Number', 'trim|required|min_length[11]|max_length[11]');

          $this->form_validation->set_message('is_unique','%s is already taken');
          $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|max_length[15]|is_unique[user.username]');
          $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[15]');
          $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|min_length[6]|max_length[15]|matches[password]');
         

          if ($this->form_validation->run() == TRUE) {
              $data = array(
                'Owner_FN' => $this->input->post('firstname'),
                'Owner_MI' => $this->input->post('middlename'),
                'Owner_LN' => $this->input->post('lastname'),
                'Owner_Gender' => $this->input->post('gender'),
                'Owner_EMAIL'=> $this->input->post('email'),
                'Owner_CN' => $this->input->post('contact'),
                'Owner_BirthDate' => $this->input->post('birthdate')
              );

              $result = $this->OwnerModel->insertOwner($data);

              $user = array(
                'user_id' => $result,
                'username' => $this->input->post('username'),
                'password' => hash('tiger192,3',$this->input->post('password')),
                'user_type'=> "OWNER"
              );

              $isRegistered = $this->UserModel->insertUser($user);

              $this->master('signup/afterSignup');
              return;
          }
      }
      $this->master('/signup/owner');
    }



  }
