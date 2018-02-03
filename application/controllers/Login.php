<?php

class Login extends CI_Controller{

  function index(){
    $this->master('home/login');
  }

  function master($page){
    $this->load->view('home/header');
    $this->load->view($page);
    $this->load->view('home/footer');
  }

  function validate(){
    $username = addslashes($this->input->post('username'));
    $password = addslashes($this->input->post('password'));

    $array = array('username' => $username, 'password' => $password);
    $this->db->where($array);
    $query = $this->db->get('user');
    $row = $query->row();

    if (isset($row))
    {
      $userType = $row->user_type;
      if($userType == "TENANT"){
        redirect('Tenant');
      }else if($userType == "OWNER"){
        redirect('Owner');
      }
    }else{
      echo "Invalid Username or Password!";
    }

  }
}
