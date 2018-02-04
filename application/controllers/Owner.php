<?php

class Owner extends CI_Controller{

  function index(){
    $this->master('home/owner');
  }

  function master($page){
    $this->load->view('home/header');
    $this->load->view($page);
    $this->load->view('home/footer');
  }
}
