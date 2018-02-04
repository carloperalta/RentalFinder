<?php

class Home extends CI_Controller{

  function index(){
    $this->master('home/index');

  }

  function master($page,$dataArray = null){
    $this->load->view('home/header');
    $this->load->view($page,$dataArray);
    $this->load->view('home/footer');
  }

  function afterLogin(){
    $data = [
      'username' => $this->session->userdata('username')
    ];
    $this->master('home/after_login',$data);
  }
}
