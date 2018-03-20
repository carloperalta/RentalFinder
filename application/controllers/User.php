<?php

class User
 extends CI_Controller{
  private $data;
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_type') != 'USER') {
      redirect('');
    }
    $this->load->model('UnitTypeModel','PropertyType');
    $this->load->model('UserModel','Normies');
    $this->data =  $this->session->userdata();
  }

  function index(){
    $this->master('User/dashboard',$this->data);
  }

  public function editprofile()
  {
    if (isset($this->data->logoutUrl)) {
      $usersInfo = $this->Facebooklords->getUserById($this->data->id);
    }else{
      $usersInfo = $this->data;
    }
    $this->master('User/settings',$usersInfo);
  }

  public function profile()
  {
  	$this->master('User/profile',$this->data);
  }

  public function tenant_list()
  {
  	$this->master('User/tenants',$this->data);
  }

  public function property()
  {
    $data['types'] = $this->PropertyType->getAllUnitType();
    $this->session->set_userdata($data);
  	$this->master('User/property',$this->data);
  }

  public function inbox()
  {
  	$this->master('User/inbox',$this->data);
  }

  public function maps()
  {
  	$this->master('User/maps',$this->data);
  }

  public function notifications()
  {
  	$this->master('User/notifications',$this->data);
  }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect('');
  }

public function master($page,$data = null)
  {
    $this->load->view('User/header', $data);
    $this->load->view($page, $data);
    $this->load->view('User/footer', $data);
  }

}
