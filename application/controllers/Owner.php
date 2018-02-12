<?php

class Owner extends CI_Controller{
  public $data;
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_type') != 'OWNER') {
      redirect('');
    }
    $this->data =  $this->session->userdata();
  }

  function index(){
    $this->master('owner/dashboard',$this->data);
  }

  public function profile()
  {
  	$this->master('owner/profile',$this->data);
  }

  public function tenant_list()
  {
  	$this->master('owner/tenants',$this->data);
  }

  public function property()
  {
  	$this->master('owner/property',$this->data);
  }

  public function inbox()
  {
  	$this->master('owner/inbox',$this->data);
  }

  public function maps()
  {
  	$this->master('owner/maps',$this->data);
  }

  public function notifications()
  {
  	$this->master('owner/notifications',$this->data);
  }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect('');
  }

  function master($page,$data=null){
  	$this->load->view('owner/header', $data);
    $this->load->view($page, $data);
    $this->load->view('owner/footer', $data);
  }

}
