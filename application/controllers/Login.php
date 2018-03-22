<?php

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_type') != null) {
      redirect('');
    }
    $this->load->model('UserModel');
    $this->load->model('user');
    $this->load->library('facebook');
  }

  public function master($page,$data = null)
  {
    $this->load->view('Home/header', $data);
    $this->load->view($page, $data);
    $this->load->view('Home/footer', $data);
  }

  function index(){
      $this->form_validation->set_rules('email','email','required');
      $this->form_validation->set_rules('password','password','required');
     
     if ($this->form_validation->run() == TRUE) {
        $email = addslashes($this->input->post('email'));
        $password = hash('tiger192,3',$this->input->post('password'));
        $result = $this->UserModel->getUser($email,$password);
        if($result){
              $user = array(
                'id' => $result->id,
                'email'=> $result->email,
                'password' => $result->password,
                'user_type' => $result->user_type,
                'gender' => $result->gender,
                'address'=>$result->address,
                'about' => $result->about,
                'contact'=>$result->contact,
                'FULLNAME' => $result->name
              );
            $this->session->set_userdata($user);
            if($user['user_type'] == "ADMIN"){
              redirect('Admin');
            }else if($user['user_type'] == "USER"){
              redirect('');
            }
     }else{
          $this->session->set_flashdata('error','<div class="alert alert-danger">Email or Password is Incorrect.</div>');
      }
    }
      $this->master('Home/login');


}
}
