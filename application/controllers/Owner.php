<?php

class Owner extends CI_Controller{

  function index(){
    $this->master('owner/home');
  }

  function master($page){
    $this->load->view($page);
  }
}
