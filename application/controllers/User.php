<?php

class User extends CI_Controller{
  private $data;
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_type') != 'USER') {
      redirect('');
    }
    $this->data =  $this->session->userdata();
  }

  function index(){
    $this->load->view('User/dashboard',$this->data);
  }

  public function editprofile()
  {
    $this->load->view('User/settings',$this->data);
  }

  public function profile()
  {
  	$this->load->view('User/profile',$this->data);
  }

  public function tenant_list()
  {
  	$this->load->view('User/tenants',$this->data);
  }

  public function property()
  {
  	$this->load->view('User/property',$this->data);
  }

  public function inbox()
  {
  	$this->load->view('User/inbox',$this->data);
  }

  public function maps()
  {
  	$this->load->view('User/maps',$this->data);
  }

  public function notifications()
  {
  	$this->load->view('User/notifications',$this->data);
  }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect('');
  }
}
