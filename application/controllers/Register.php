<?php
  /**
   *
   */
  class Register extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      
      $this->load->model('UserModel');

    }
    function index(){
      if (isset($_POST['register'])) {
          $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]');
          $this->form_validation->set_rules('password', 'password', 'required|trim');
          $this->form_validation->set_rules('gender', 'gender', 'required|trim');
          $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[15]');
          $this->form_validation->set_rules('name', 'name', 'trim|required');

          $email = $this->input->post('email');
          $this->session->set_flashdata('error','<div class="alert alert-danger">'.$email.' was already taken</div>');
          if ($this->form_validation->run() == TRUE) {
              $user = array(
                'email' => $email,
                'password' => hash('tiger192,3',$this->input->post('password')),
                'user_type'=> "USER",
                'name'=> $this->input->post('name'),
                'gender'=> $this->input->post('gender')
              );
              $isRegistered = $this->UserModel->insertUser($user);
              
              $this->session->set_flashdata('error','<div class="alert alert-info">Successfully Registered! You may now login</div>');
              redirect('Login');
          }
      }
    $this->load->view('/signup/signup');
  }
}
