<?php

class Tenant extends CI_Controller{

  function index(){
    $this->master('home/tenant');
  }

  function master($page){
    $this->load->view('home/header');
    $this->load->view($page);
    $this->load->view('home/footer');
  }
}
