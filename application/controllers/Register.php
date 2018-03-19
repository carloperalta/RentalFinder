<?php
  /**
   *
   */
  class Register extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      if ( $this->session->userdata('user_type') != null) {
        redirect('');
      }

      $this->load->model('UserModel');

    }

    public function master($page,$data = null)
    {
      $this->load->view('Home/header', $data);
      $this->load->view($page, $data);
      $this->load->view('Home/footer', $data);
    }
    function index(){
      if (isset($_POST['register'])) {
          $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]');
          $this->form_validation->set_rules('password', 'password', 'required|trim');
          $this->form_validation->set_rules('gender', 'gender', 'required|trim');
          $this->form_validation->set_rules('name', 'name', 'trim|required');
          $this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'trim|required|matches[password]');

          $email = $this->input->post('email');
          $this->session->set_flashdata('error','<div class="alert alert-danger">'.$email.' was already taken</div>');
          if ($this->input->post('password') != $this->input->post('confirmpassword')) {
          $this->session->set_flashdata('error','<div class="alert alert-danger">Password not match</div>');
            # code...
          }
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
    $this->master('/Home/signup');
  }
}
