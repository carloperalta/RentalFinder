<?php

class Tenant extends CI_Controller{

  function index(){
    $this->master('tenant/home');
  }

  function master($page){
    $this->load->view($page);
  }
}
