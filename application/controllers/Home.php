<?php

class Home extends CI_Controller{

  function index(){
    $this->master('home/index');
  }

  function master($page){
    $this->load->view('home/header');
    $this->load->view($page);
    $this->load->view('home/footer');

  }

  function second(){
    echo "this is the second";
  }


}
